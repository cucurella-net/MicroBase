<?php
# Copyright © 2017, Carles Bataller Cucurella  <cucurella@gmail.com>
# http://www.cucurella.net/soft/microbase/
# Released under the license GPL 2.0


// welcome
print "\n";
print "==============================\n";
print "     Welcome to MicroBase\n";
print "==============================\n\n";



// project
if (isset($argv[1])) {
	$project = $argv[1];
} else {
	print " Copyright © 2017 Carles Bataller Cucurella <cucurella@gmail.com>\n";
	print " http://www.cucurella.net/soft/microbase/\n";
	print " Released under the license GPL 2.0\n\n\n";

	print "Use: php GO.php \"projectname\"\n";
	print "Exemple: php GO.php \"My Project\"\n\n";
	exit;
}


// dir
if (! is_dir($project)) {
	mkdir($project, 0755);
}






if (file_exists("$project/SCHEME.xml")) {
	if ((file_exists("$project/config.inc.php")) && (file_exists("$project/connect.inc.php"))) {
		echo "Project '$project' already exists !\n";
		echo "Please, delete or rename directory '${project}', or use another project name.\n\n";
	} else {
		echo "Please, run:  php FILES.php \"$project\"\n\n";
	}	
	exit;
} else {
	$fp = fopen("$project/SCHEME.xml", "w");
	if ($fp) {
		fwrite($fp, "\n");
		fwrite($fp, "<database name=\"\" user=\"\" passwd=\"\" collate=\"utf8_spanish_ci\">\n");
		fwrite($fp, "\n");
		
		fwrite($fp, "	<table name=\"\">\n");
		fwrite($fp, "		<!-- <item name=\"ID0\" type=\"int(12)\" value=\"NOT NULL AUTO_INCREMENT\"></item> NOT NECESSARY !! -->\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "	</table>\n");
		fwrite($fp, "\n");

		fwrite($fp, "	<table name=\"\">\n");
		fwrite($fp, "		<!-- <item name=\"ID1\" type=\"int(12)\" value=\"NOT NULL AUTO_INCREMENT\"></item> NOT NECESSARY !! -->\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "	</table>\n");
		fwrite($fp, "\n");

		fwrite($fp, "	<table name=\"\">\n");
		fwrite($fp, "		<!-- <item name=\"ID2\" type=\"int(12)\" value=\"NOT NULL AUTO_INCREMENT\"></item> NOT NECESSARY !! -->\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "		<item name=\"\" type=\"varchar(100)\" value=\"NULL\"></item>\n");
		fwrite($fp, "	</table>\n");
		fwrite($fp, "\n");

		fwrite($fp, "</database>\n");

		fclose($fp);

		if (file_exists("$project/SCHEME.xml")) {
			print "OK, '$project/SCHEME.xml' created correctly\n\n";

			print "Now...\n";
			print "  1- edit  '$project/SCHEME.xml'  and configure yours database and tables\n";
			print "  2- exec:  php FILES.php \"$project\"  to create php files\n";
			print "  3- go to:  '${project}/install.php'  with a browser for install project\n\n";
		} else {
			print "ERROR creating '$project/SCHEME.xml' file !\n\n";
			exit;
		}
	} else {
		print "ERROR opening '$project/SCHEME.xml' for write\n\n";
	}
}

?>
