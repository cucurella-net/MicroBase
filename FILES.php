<?php
# Copyright © 2017-2022, Carles Bataller Cucurella  <cucurella@gmail.com>
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
	print "Use: php DATABASE.php \"projectname\"\n\n";
	exit;
}


// SCHEME file
$arxiu = "${project}/SCHEME.xml";
if (! file_exists("$arxiu")) {
	print "ERROR: File '$arxiu' NOT FOUND !\n";
	print "Please run: php GO.php \"$project\"\n\n";
	exit;
}





// simpleXML
//$xml = simpleXML_load_file($arxiu,"SimpleXMLElement",LIBXML_NOCDATA);
$xml = simpleXML_load_file($arxiu); 


// database values
$db_name = $xml[0]['name'];
$db_user = $xml[0]['user'];
$db_passwd = $xml[0]['passwd'];
$collate = $xml[0]['collate'];




// make config

// file
$config = "${project}/config.inc.php";

require("make_config.inc.php");
make_config($db_name, $db_user, $db_passwd, $config, $project);








// estil.css
copy("files/estil.css", "$project/estil.css");


// connect
copy("files/connect.inc.php", "$project/connect.inc.php");


// index
copy("files/index.php", "$project/index.php");


// cap
copy("files/cap.php", "$project/cap.php");


// protect.php
copy("files/protect.php", "$project/protect.php");





// table0
include("FILES_table0.inc.php");


// table1
include("FILES_table1.inc.php");


// table2
include("FILES_table2.inc.php");





// get URL
function get_URL() {
	$URL = getcwd();
	$URL = str_replace("/public_html", "", $URL);
	$usuari = get_current_user();
	$URL = str_replace("/$usuari", "/~$usuari", $URL);
	$URL = str_replace("/usr/home", "", $URL);
	$URL = str_replace("/home", "", $URL);
	$URL = str_replace("C:\\xampp\\htdocs\\", "/", $URL);
	$URL = "http://localhost" . $URL;
	return $URL;
}

$URL = get_URL();

print "OK.\n\nNow, go to...\n";
print "${URL}/${project}/\n";
print "with a browser !\n\n";

?>
