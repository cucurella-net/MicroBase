<?php
# (c) 2017, Carles Bataller Cucurella  <cucurella@gmail.com>
# http://www.cucurella.net/soft/microbase/
# Released under the license GPL 2.0

require("config.inc.php");
require("cap.php");

print "<h3>MicroBase</h3>\n";
print "<h1>${project_name}</h1>\n";



if (! file_exists("INSTALL.txt")) {
	print "<p>&nbsp;</p>\n";
	print "<p><b>ATTENTION: project <span style='color: green;'>${project_name}</span> is not installed !</b></p>\n";
	print "<p><a href='install.php'><b>install now</b></a></p>\n";
	print "</body>\n</html>\n";
	exit;
}



if (is_dir("table0")) {
	print "<p><a href='table0/' style='font-size: 18px;'>table0</a></p>\n";
}
if (is_dir("table1")) {
	print "<p><a href='table1/' style='font-size: 18px;'>table1</a></p>\n";
}
if (is_dir("table2")) {
	print "<p><a href='table2/' style='font-size: 18px;'>table2</a></p>\n";
}


print "<p>&nbsp;</p>\n";
print "<p style='text-align: right;'><a href='protect.php'>protect</a></p>\n";
print "<p>&nbsp;</p>\n";

?>

</body>
</html>
