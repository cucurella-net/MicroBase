<?php
# (c) 2017, Carles Bataller Cucurella  <cucurella@gmail.com>
# http://www.cucurella.net/soft/microbase/
# Released under the license GPL 2.0


include("config.inc.php");
include("cap.php");


print "<h2>Protect web access to <span style='color: green;'>${project_name}</span> with username and password.</h2>\n";
print "<p>&nbsp;</p>\n";



function protect_detect($arxiu) {
	$LINEAS = file("$arxiu");

	foreach ($LINEAS as $linea) {
		$linea = rtrim($linea);
		
		if (preg_match("/AuthType Digest/i", $linea)) {
			$enc_type = "digest";
		}
		if (preg_match("/AuthType Basic/i", $linea)) {
			$enc_type = "basic";
		}
		if (preg_match("/AuthName /i", $linea)) {
			$frase = $linea;
		}
	}

	$patron = "/AuthName /i";
	$sustit = "";
	$frase = preg_replace($patron, $sustit, $frase);
	
	$frase = str_replace("\"", "", $frase);
	$frase = trim($frase);


	if ($enc_type == "basic") {
		return "1;${frase}";
	}		
	if ($enc_type == "digest") {
		return "2;${frase}";
	}
}





// dades formulari
if (isset($_POST['usuari']))  {
	$usuari_ = $_POST['usuari'];
} else {
	$usuari_ = "";
}




// formulari enviat?
if ($usuari_) {

	// dades formulari
	$missatge_ = $_POST['missatge'];
	$passwd_ = $_POST['passwd'];


	// protect type
	if (isset($_POST['protect_type'])) {
		$protect_type = $_POST['protect_type'];
	} else {
		print "<p>ERROR: You have to select a type of protection !</p>";
		die("</body></html>");
	}

	// missatge
	if (! $missatge_) {
		print "<p>ERROR: You have to enter a message !</p>";
		die("</body></html>");
	}
	
	// passwd
	if (! $passwd_) {
		print "<p>ERROR: You have to enter a password !</p>";
		die("</body></html>");
	}


	# possible break return
	$missatge = rtrim($missatge_);
	$usuari = rtrim($usuari_);
	$passwd = rtrim($passwd_);




	### htaccess
	$actual_dir = getcwd();

	$fp = fopen(".htaccess", "w");
	if ($fp) {
		if ($protect_type == "basic") {
			// AuthType Basic
			fwrite($fp, "AuthType Basic\n");
			fwrite($fp, "AuthUserFile \"${actual_dir}/.htpasswd\"\n");
			fwrite($fp, "AuthName \"${missatge}\"\n");
			fwrite($fp, "require valid-user\n");
			fwrite($fp, "Satisfy all\n");
		}

		if ($protect_type == "digest") {
			// AuthType Digest
			fwrite($fp, "AuthType Digest\n");
			fwrite($fp, "AuthDigestProvider file\n");
			fwrite($fp, "AuthUserFile \"${actual_dir}/.htpasswd\"\n");
			fwrite($fp, "AuthName \"${missatge}\"\n");
			fwrite($fp, "Require valid-user\n");
			fwrite($fp, "Satisfy all\n");
		}

		fclose($fp);
	} else {
		print "<h1>Error open .htaccess for write</h1>\n";
	}




	### htpasswd
	if ($protect_type == "basic") {
		// AuthType Basic
		$aleat1 = rand(1000000,9999999);
		$aleat2 = rand(1000000,9999999);
		$aleat = $aleat1 . $aleat2;

		$passwd_encr = crypt($passwd, $aleat);
	}
	if ($protect_type == "digest") {
		// AuthType Digest
		$hash = md5("$usuari:$missatge:$passwd");
		$output = "$usuari:$missatge:$hash";
	}



	### write file
	$fp = fopen(".htpasswd", "w");
	if ($fp) {
		if ($protect_type == "basic") {
			// AuthType Basic
			fwrite($fp, "${usuari}:${passwd_encr}\n");
		}
		if ($protect_type == "digest") {
			// AuthType Digest
			fwrite($fp, "${output}\n");
		}

		fclose($fp);
		print "<p><b>OK !</b></p>\n";
		
		print "<p>&nbsp;</p>\n";
		print "<p><a href='index.php'>click here</a></p>\n";
	} else {
		print "<h1>Error open .htpasswd for write</h1>\n";
	}

	print "<p>&nbsp;</p>\n";
	print "</body>\n</html>\n";
	exit;
}


















// ###########################################

// mod_auth_digest is enabled?

//DEBUG
/*
$DADES = apache_get_modules();
print "<pre>\n";
print_r($DADES);
print "<pre>\n";
*/

if (function_exists('apache_get_modules')) {
	if (in_array('mod_auth_digest', apache_get_modules())) {
		$mod_auth_digest_enabled = true;
		print "<p>mod_auth_digest: [enabled]</p>\n";
	} else {
		$mod_auth_digest_enabled = false;
		print "<p>mod_auth_digest: <a href='javascript:info1()'>[disabled]</a></p>\n";
	}
} else {
	$mod_auth_digest_enabled = true;
	print "<p>mod_auth_digest: <a href='javascript:info2()'>[?]</a></p>\n";
}




// protect detect
if (file_exists(".htaccess")) {
	$return = protect_detect(".htaccess");

	$PARTS_RETURN = explode(";", $return);
	$protect_type = $PARTS_RETURN[0];
	$protect_frase = $PARTS_RETURN[1];
} else {
	$protect_type = 0;
}




if ((file_exists(".htaccess")) && (file_exists(".htpasswd"))) {
	print "<p>STATUS: <span style='color: green'><b>[protected]</b></span> &nbsp;";
	if ($protect_type == 1) { print "[basic]"; }
	if ($protect_type == 2) { print "[digest]"; }
	print "</p>\n";
} else {
	print "<p>STATUS: <span style='color: red'><b title='Danger !!'>[unprotected]</b></span></p>\n";
}


print "<p>&nbsp;</p>\n";

?>

<script type="text/javascript">
	function info1() {
		alert("Apache module mod_auth_digest is disabled\nFor enable, run in server as root:\na2enmod auth_digest\nservice apache2 restart");
	}
	function info2() {
		alert("It is unknown if apache module mod_auth_digest is enabled or disabled !");
	}
</script>





<form name="protect" method="post" action="protect.php">

<table style="width: 650px;">
<tr>
	<td style="text-align: right;">Welcome message:</td>
<?php
if (($protect_type == 1) || ($protect_type == 2)) {
	print "<td style='text-align: left;'><input type='text' name='missatge' value=\"${protect_frase}\" size='36' maxlength='35' pattern=\"[A-Za-z0-9 _-]{10,35}\" title=\"Welcome message between 10 and 35 characters with no strange character\" required></td>\n";
} else {
	print "<td style='text-align: left;'><input type='text' name='missatge' value=\"Welcome to ${project_name}\" size='36' maxlength='35' pattern=\"[A-Za-z0-9 _-]{10,35}\" title=\"Welcome message between 10 and 35 characters with no strange character\" required></td>\n";
}

?>
</tr>
<tr>
	<td style="text-align: right;">user:</td>
	<td style="text-align: left;"><input type="text" name="usuari" size="15" maxlength="14" pattern="[A-Za-z0-9]{4,14}" autocomplete="off" title="user between 4 and 14 characters with no strange character" required></td>
</tr>
<tr>
	<td style="text-align: right;">password:</td>
	<td style="text-align: left;"><input type="password" name="passwd" size="15" maxlength="14" pattern="[A-Za-z0-9]{6,14}" autocomplete="off" title="password between 6 and 14 characters with no strange character" required></td>
</tr>
<tr>
	<td style="text-align: right;">protect type:</td>
	<td style="text-align: left;">
		<input type="radio" name="protect_type" value="basic"<?php if ($protect_type == 1) { print " checked"; } ?>> <span style="vertical-align: 3px;">basic</span><br>
<?php
// protect type digest
if ($mod_auth_digest_enabled) {
	print "		<input type='radio' name='protect_type' value='digest'";
	if ($protect_type == 2) { print " checked"; }
	print "> <span style='vertical-align: 3px;'>digest (default)</span>";
} else {
	print "		<input type='radio' name='protect_type' value='digest'";
	if ($protect_type == 2) { print " checked"; }
	print " disabled> <span style='vertical-align: 3px;'>digest (default)</span>";
}

?>
	</td>
</tr>
<tr>
	<td style="text-align: right;"><br><input type="reset" value="Clear"></td>
	<td style="text-align: left;"><br><input type="submit" value="Accept"></td>
</tr>
</table>

</form>

<p>&nbsp;</p>
<p><a href="index.php">cancel</a></p>
<p>&nbsp;</p>

</body>
</html>
