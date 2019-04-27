<?php
# Copyright © 2017, Carles Bataller Cucurella  <cucurella@gmail.com>
# http://www.cucurella.net/soft/microbase/
# Released under the license GPL 2.0


function make_config($db_name, $db_user, $db_passwd, $config, $project) {

	# write config.inc.php
	$fp = fopen($config, "w");
	if ($fp) {
		fwrite($fp, "<?php\n\n");

		fwrite($fp, "### database\n");
		fwrite($fp, "\$db_name = \"${db_name}\";\n\n");

		fwrite($fp, "### user database\n");
		fwrite($fp, "\$db_user = \"${db_user}\";\n\n");

		fwrite($fp, "### password user database\n");
		fwrite($fp, "\$db_passwd = \"${db_passwd}\";\n\n");

		fwrite($fp, "### project name\n");
		fwrite($fp, "\$project_name = \"${project}\";\n\n");

		fclose($fp);
	}
}

?>
