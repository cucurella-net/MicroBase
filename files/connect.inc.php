<?php
# (c) 2022, Carles Bataller Cucurella  <cucurella@gmail.com>
# http://www.cucurella.net/soft/microbase/
# Released under the license GPL 2.0

function connect($db_name, $db_user, $db_passwd) {
	global $server;

	function conectar($server, $db_user, $db_passwd, $db_name) {
		$link = mysqli_connect($server, $db_user, $db_passwd, $db_name);
		if ($link) {
			return $link;
		} else {
			throw new Exception();
		}
	}

	try {
		$link = conectar($server, $db_user, $db_passwd, $db_name);
	} catch (Exception $e) {
		print "<p><b>ERROR:</b> Failed to connect to database <b>${db_name}</b> on MySQL server <b>${server}</b> !</p>\n";
		print "<p style='margin-left: 30px;'>MySQL server <i>is running?</i></p>\n";
		print "<p style='margin-left: 30px;'>In <b>config.php</b> file, the password of user <b>${db_user}</b> for database <b>${db_name}</b> <i>is correct?</i></p>\n";
		die("</body>\n</html>");
	}

	mysqli_query($link,"SET NAMES 'utf8'");
	return $link;
}

?>
