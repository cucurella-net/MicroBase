<?php
# (c) 2017, Carles Bataller Cucurella  <cucurella@gmail.com>
# http://www.cucurella.net/soft/microbase/
# Released under the license GPL 2.0


function connect($db_name, $db_user, $db_passwd) {
	global $server;

	$link = mysqli_connect($server,$db_user,$db_passwd,$db_name);

	if (! $link) {
		print "<p>ERROR connecting database ${db_name} !</p>\n";
		die("mysqli_connect_error: " . mysqli_connect_error());
	}

	mysqli_query($link,"SET NAMES 'utf8'");
	return $link;
}

?>
