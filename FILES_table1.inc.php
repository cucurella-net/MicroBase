<?php
# Copyright © 2017, Carles Bataller Cucurella  <cucurella@gmail.com>
# http://www.cucurella.net/soft/microbase/
# Released under the license GPL 2.0



// ini vars
$table1_item0_name = false;
$table1_item1_name = false;
$table1_item2_name = false;
$table1_item3_name = false;
$table1_item4_name = false;
$table1_item5_name = false;
$table1_item6_name = false;
$table1_item7_name = false;
$table1_item8_name = false;
$table1_item9_name = false;
$table1_item10_name = false;
$table1_item11_name = false;
$table1_item12_name = false;
$table1_item13_name = false;
$table1_item14_name = false;
$table1_item15_name = false;






// table[1]
if (isset($xml->table[1]['name'])) {

	$table1_name = $xml->table[1]['name'];

	if ($table1_name == "") {
		print "ERROR: name of table1 is a empty field!\n\n";
		exit;
	}


	// directori table1
	if (! is_dir("$project/table1")) {
		mkdir("$project/table1", 0755);
	}




	// config: add table1 to config
	$fp = fopen("$config", "a");
	if ($fp) {
		fwrite($fp, "### table1\n");
		fwrite($fp, "\$table1 = \"${table1_name}\";\n\n");
		fclose($fp);
	}



	// cap.php
	copy("files/table_generic/cap.php", "$project/table1/cap.php");


	


	if (isset($xml->table[1]->item[0])) {
		$table1_item0_name = $xml->table[1]->item[0]['name'];
		$table1_item0_type = $xml->table[1]->item[0]['type'];
		$table1_item0_value = $xml->table[1]->item[0]['value'];
	}
	if (isset($xml->table[1]->item[1])) {
		$table1_item1_name = $xml->table[1]->item[1]['name'];
		$table1_item1_type = $xml->table[1]->item[1]['type'];
		$table1_item1_value = $xml->table[1]->item[1]['value'];
	}
	if (isset($xml->table[1]->item[2])) {
		$table1_item2_name = $xml->table[1]->item[2]['name'];
		$table1_item2_type = $xml->table[1]->item[2]['type'];
		$table1_item2_value = $xml->table[1]->item[2]['value'];
	}
	if (isset($xml->table[1]->item[3])) {
		$table1_item3_name = $xml->table[1]->item[3]['name'];
		$table1_item3_type = $xml->table[1]->item[3]['type'];
		$table1_item3_value = $xml->table[1]->item[3]['value'];
	}
	if (isset($xml->table[1]->item[4])) {
		$table1_item4_name = $xml->table[1]->item[4]['name'];
		$table1_item4_type = $xml->table[1]->item[4]['type'];
		$table1_item4_value = $xml->table[1]->item[4]['value'];
	}
	if (isset($xml->table[1]->item[5])) {
		$table1_item5_name = $xml->table[1]->item[5]['name'];
		$table1_item5_type = $xml->table[1]->item[5]['type'];
		$table1_item5_value = $xml->table[1]->item[5]['value'];
	}
	if (isset($xml->table[1]->item[6])) {
		$table1_item6_name = $xml->table[1]->item[6]['name'];
		$table1_item6_type = $xml->table[1]->item[6]['type'];
		$table1_item6_value = $xml->table[1]->item[6]['value'];
	}
	if (isset($xml->table[1]->item[7])) {
		$table1_item7_name = $xml->table[1]->item[7]['name'];
		$table1_item7_type = $xml->table[1]->item[7]['type'];
		$table1_item7_value = $xml->table[1]->item[7]['value'];
	}
	if (isset($xml->table[1]->item[8])) {
		$table1_item8_name = $xml->table[1]->item[8]['name'];
		$table1_item8_type = $xml->table[1]->item[8]['type'];
		$table1_item8_value = $xml->table[1]->item[8]['value'];
	}
	if (isset($xml->table[1]->item[9])) {
		$table1_item9_name = $xml->table[1]->item[9]['name'];
		$table1_item9_type = $xml->table[1]->item[9]['type'];
		$table1_item9_value = $xml->table[1]->item[9]['value'];
	}
	if (isset($xml->table[1]->item[10])) {
		$table1_item10_name = $xml->table[1]->item[10]['name'];
		$table1_item10_type = $xml->table[1]->item[10]['type'];
		$table1_item10_value = $xml->table[1]->item[10]['value'];
	}
	if (isset($xml->table[1]->item[11])) {
		$table1_item11_name = $xml->table[1]->item[11]['name'];
		$table1_item11_type = $xml->table[1]->item[11]['type'];
		$table1_item11_value = $xml->table[1]->item[11]['value'];
	}
	if (isset($xml->table[1]->item[12])) {
		$table1_item12_name = $xml->table[1]->item[12]['name'];
		$table1_item12_type = $xml->table[1]->item[12]['type'];
		$table1_item12_value = $xml->table[1]->item[12]['value'];
	}
	if (isset($xml->table[1]->item[13])) {
		$table1_item13_name = $xml->table[1]->item[13]['name'];
		$table1_item13_type = $xml->table[1]->item[13]['type'];
		$table1_item13_value = $xml->table[1]->item[13]['value'];
	}
	if (isset($xml->table[1]->item[14])) {
		$table1_item14_name = $xml->table[1]->item[14]['name'];
		$table1_item14_type = $xml->table[1]->item[14]['type'];
		$table1_item14_value = $xml->table[1]->item[14]['value'];
	}
	if (isset($xml->table[1]->item[15])) {
		$table1_item15_name = $xml->table[1]->item[15]['name'];
		$table1_item15_type = $xml->table[1]->item[15]['type'];
		$table1_item15_value = $xml->table[1]->item[15]['value'];
	}




	// #########################
	//          new.php
	// #########################
	
	$arxiu = "$project/table1/new.php";
	copy("files/table_generic/new.php.1", "$arxiu");

	// item0
	if ($table1_item0_name) {
		$name = $table1_item0_name;
		$type = $table1_item0_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\" required></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item1
	if ($table1_item1_name) {
		$name = $table1_item1_name;
		$type = $table1_item1_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item2
	if ($table1_item2_name) {
		$name = $table1_item2_name;
		$type = $table1_item2_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item3
	if ($table1_item3_name) {
		$name = $table1_item3_name;
		$type = $table1_item3_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item4
	if ($table1_item4_name) {
		$name = $table1_item4_name;
		$type = $table1_item4_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item5
	if ($table1_item5_name) {
		$name = $table1_item5_name;
		$type = $table1_item5_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item6
	if ($table1_item6_name) {
		$name = $table1_item6_name;
		$type = $table1_item6_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item7
	if ($table1_item7_name) {
		$name = $table1_item7_name;
		$type = $table1_item7_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item8
	if ($table1_item8_name) {
		$name = $table1_item8_name;
		$type = $table1_item8_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item9
	if ($table1_item9_name) {
		$name = $table1_item9_name;
		$type = $table1_item9_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item10
	if ($table1_item10_name) {
		$name = $table1_item10_name;
		$type = $table1_item10_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item11
	if ($table1_item11_name) {
		$name = $table1_item11_name;
		$type = $table1_item11_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item12
	if ($table1_item12_name) {
		$name = $table1_item12_name;
		$type = $table1_item12_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item13
	if ($table1_item13_name) {
		$name = $table1_item13_name;
		$type = $table1_item13_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item14
	if ($table1_item14_name) {
		$name = $table1_item14_name;
		$type = $table1_item14_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}

	// item15
	if ($table1_item15_name) {
		$name = $table1_item15_name;
		$type = $table1_item15_type;
		
		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "  <tr>\n");
			fwrite($fp, "    <td class=\"right\">${name}:</td>\n");
			fwrite($fp, "    <td class=\"left\"><input type=\"text\" name=\"${name}\" size=\"40\" maxlength=\"${len}\" class=\"form\"></td>\n");
			fwrite($fp, "  </tr>\n");
			fclose($fp);
		}
	}


	// peu new.php
	$arxiu = "$project/table1/new.php";
	$content = file_get_contents("files/table_generic/new.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END new.php
	// #########################









	// #########################
	//          new2.php
	// #########################
	
	$arxiu = "$project/table1/new2.php";
	copy("files/table_generic/new2.php.1", "$arxiu");

	// item0 vars
	if ($table1_item0_name) {
		$name = $table1_item0_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item1 vars
	if ($table1_item1_name) {
		$name = $table1_item1_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item2 vars
	if ($table1_item2_name) {
		$name = $table1_item2_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item3 vars
	if ($table1_item3_name) {
		$name = $table1_item3_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item4 vars
	if ($table1_item4_name) {
		$name = $table1_item4_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item5 vars
	if ($table1_item5_name) {
		$name = $table1_item5_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item6 vars
	if ($table1_item6_name) {
		$name = $table1_item6_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item7 vars
	if ($table1_item7_name) {
		$name = $table1_item7_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item8 vars
	if ($table1_item8_name) {
		$name = $table1_item8_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item9 vars
	if ($table1_item9_name) {
		$name = $table1_item9_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item10 vars
	if ($table1_item10_name) {
		$name = $table1_item10_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item11 vars
	if ($table1_item11_name) {
		$name = $table1_item11_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item12 vars
	if ($table1_item12_name) {
		$name = $table1_item12_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item13 vars
	if ($table1_item13_name) {
		$name = $table1_item13_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item14 vars
	if ($table1_item14_name) {
		$name = $table1_item14_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item15 vars
	if ($table1_item15_name) {
		$name = $table1_item15_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}





	
	// 1a linea sql
	$fp = fopen("$arxiu", "a");
	if ($fp) {
		fwrite($fp, "\n\n\n");
		fwrite($fp, "\$consulta = \"INSERT INTO \$table1 SET\n");
		fclose($fp);
	}
	// item0 sql
	if ($table1_item0_name) {
		$name = $table1_item0_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item1 sql
	if ($table1_item1_name) {
		$name = $table1_item1_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item2 sql
	if ($table1_item2_name) {
		$name = $table1_item2_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item3 sql
	if ($table1_item3_name) {
		$name = $table1_item3_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item4 sql
	if ($table1_item4_name) {
		$name = $table1_item4_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item5 sql
	if ($table1_item5_name) {
		$name = $table1_item5_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item6 sql
	if ($table1_item6_name) {
		$name = $table1_item6_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item7 sql
	if ($table1_item7_name) {
		$name = $table1_item7_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item8 sql
	if ($table1_item8_name) {
		$name = $table1_item8_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item9 sql
	if ($table1_item9_name) {
		$name = $table1_item9_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item10 sql
	if ($table1_item10_name) {
		$name = $table1_item10_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item11 sql
	if ($table1_item11_name) {
		$name = $table1_item11_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item12 sql
	if ($table1_item12_name) {
		$name = $table1_item12_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item13 sql
	if ($table1_item13_name) {
		$name = $table1_item13_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item14 sql
	if ($table1_item14_name) {
		$name = $table1_item14_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item15 sql
	if ($table1_item15_name) {
		$name = $table1_item15_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}

	// final sql
	$fp = fopen("$arxiu", "a");
	if ($fp) {
		fwrite($fp, "\";\n");
		fclose($fp);
	}


	// peu new2.php
	$arxiu = "$project/table1/new2.php";
	$content = file_get_contents("files/table_generic/new2.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END new2.php
	// #########################








	// #########################
	//          edit.php
	// #########################
	
	$arxiu = "$project/table1/edit.php";
	copy("files/table_generic/edit.php.1", "$arxiu");

	$frase = "\$ID1 = \$_GET['ID1'];\n\n\n";

	$frase .= "### consulta\n";
	$frase .= "\$consulta = \"SELECT * FROM \$table1 WHERE ID1 = \$ID1\";\n";
	$frase .= "\$resultado = mysqli_query(\$link,\$consulta);\n\n";
	$frase .= "while (\$fila = mysqli_fetch_array(\$resultado)) {;\n";

	file_put_contents("$arxiu", $frase, FILE_APPEND);



	// item0 vars
	if ($table1_item0_name) {
		$name = $table1_item0_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item1 vars
	if ($table1_item1_name) {
		$name = $table1_item1_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item2 vars
	if ($table1_item2_name) {
		$name = $table1_item2_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item3 vars
	if ($table1_item3_name) {
		$name = $table1_item3_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item4 vars
	if ($table1_item4_name) {
		$name = $table1_item4_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item5 vars
	if ($table1_item5_name) {
		$name = $table1_item5_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item6 vars
	if ($table1_item6_name) {
		$name = $table1_item6_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item7 vars
	if ($table1_item7_name) {
		$name = $table1_item7_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item8 vars
	if ($table1_item8_name) {
		$name = $table1_item8_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item9 vars
	if ($table1_item9_name) {
		$name = $table1_item9_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item10 vars
	if ($table1_item10_name) {
		$name = $table1_item10_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item11 vars
	if ($table1_item11_name) {
		$name = $table1_item11_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item12 vars
	if ($table1_item12_name) {
		$name = $table1_item12_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item13 vars
	if ($table1_item13_name) {
		$name = $table1_item13_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item14 vars
	if ($table1_item14_name) {
		$name = $table1_item14_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item15 vars
	if ($table1_item15_name) {
		$name = $table1_item15_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// acabar bucle
	$fp = fopen("$arxiu", "a");
	if ($fp) {
		fwrite($fp, "}\n");
		fclose($fp);
	}


	
	$frase = "print \"<form name='edit' method='post' action='edit2.php'>\\n\";\n";
	$frase .= "print \"	<input type='hidden' name='ID1' value='\$ID1'>\\n\";\n\n";
	$frase .= "print \"	<table id='edit'>\\n\";\n";

	file_put_contents("$arxiu", $frase, FILE_APPEND);


	// ########################
	// formulari

	// item0
	if ($table1_item0_name) {
		$name = $table1_item0_name;
		$type = $table1_item0_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form' required></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item1
	if ($table1_item1_name) {
		$name = $table1_item1_name;
		$type = $table1_item1_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item2
	if ($table1_item2_name) {
		$name = $table1_item2_name;
		$type = $table1_item2_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item3
	if ($table1_item3_name) {
		$name = $table1_item3_name;
		$type = $table1_item3_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item4
	if ($table1_item4_name) {
		$name = $table1_item4_name;
		$type = $table1_item4_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item5
	if ($table1_item5_name) {
		$name = $table1_item5_name;
		$type = $table1_item5_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item6
	if ($table1_item6_name) {
		$name = $table1_item6_name;
		$type = $table1_item6_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item7
	if ($table1_item7_name) {
		$name = $table1_item7_name;
		$type = $table1_item7_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item8
	if ($table1_item8_name) {
		$name = $table1_item8_name;
		$type = $table1_item8_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item9
	if ($table1_item9_name) {
		$name = $table1_item9_name;
		$type = $table1_item9_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item10
	if ($table1_item10_name) {
		$name = $table1_item10_name;
		$type = $table1_item10_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item11
	if ($table1_item11_name) {
		$name = $table1_item11_name;
		$type = $table1_item11_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item12
	if ($table1_item12_name) {
		$name = $table1_item12_name;
		$type = $table1_item12_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item13
	if ($table1_item13_name) {
		$name = $table1_item13_name;
		$type = $table1_item13_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item14
	if ($table1_item14_name) {
		$name = $table1_item14_name;
		$type = $table1_item14_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}

	// item15
	if ($table1_item15_name) {
		$name = $table1_item15_name;
		$type = $table1_item15_type;

		preg_match('/[^(]+[)$]/', $type, $match);
		$len = str_replace(")", "", $match[0]);

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "print \"  <tr>\\n\";\n");
			fwrite($fp, "print \"    <td class='right'>${name}:</td>\\n\";\n");
			fwrite($fp, "print \"    <td class='left'><input type='text' name='${name}' value=\\\"\$${name}\\\" size='40' maxlength='${len}' class='form'></td>\\n\";\n");
			fwrite($fp, "print \"  </tr>\\n\";\n");
			fclose($fp);
		}
	}


	// peu edit.php
	$arxiu = "$project/table1/edit.php";
	$content = file_get_contents("files/table_generic/edit.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END edit.php
	// #########################









	// #########################
	//          edit2.php
	// #########################
	
	$arxiu = "$project/table1/edit2.php";
	copy("files/table_generic/edit2.php.1", "$arxiu");


	$frase = "if(isset(\$_POST['ID1'])) {\n";
	$frase .= " 	\$ID1 = \$_POST['ID1'];\n";
	$frase .= "} else {\n";
	$frase .= " 	print \"<p>ERROR: missing data.</p>\";\n";
	$frase .= " 	print \"</body></html>\";\n";
	$frase .= " 	exit;\n";
	$frase .= "}\n\n\n";

	$frase .= "// vars form\n";

	file_put_contents("$arxiu", $frase, FILE_APPEND);



	// item0 vars
	if ($table1_item0_name) {
		$name = $table1_item0_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item1 vars
	if ($table1_item1_name) {
		$name = $table1_item1_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item2 vars
	if ($table1_item2_name) {
		$name = $table1_item2_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item3 vars
	if ($table1_item3_name) {
		$name = $table1_item3_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item4 vars
	if ($table1_item4_name) {
		$name = $table1_item4_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item5 vars
	if ($table1_item5_name) {
		$name = $table1_item5_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item6 vars
	if ($table1_item6_name) {
		$name = $table1_item6_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item7 vars
	if ($table1_item7_name) {
		$name = $table1_item7_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item8 vars
	if ($table1_item8_name) {
		$name = $table1_item8_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item9 vars
	if ($table1_item9_name) {
		$name = $table1_item9_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item10 vars
	if ($table1_item10_name) {
		$name = $table1_item10_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item11 vars
	if ($table1_item11_name) {
		$name = $table1_item11_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item12 vars
	if ($table1_item12_name) {
		$name = $table1_item12_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item13 vars
	if ($table1_item13_name) {
		$name = $table1_item13_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item14 vars
	if ($table1_item14_name) {
		$name = $table1_item14_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item15 vars
	if ($table1_item15_name) {
		$name = $table1_item15_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}




	$frase = "// conectar\n";
	$frase .= "require(\"../connect.inc.php\");\n";
	$frase .= "\$link = connect(\$db_name, \$db_user, \$db_passwd);\n\n";
	$frase .= "\$consulta = \"UPDATE \$table1 SET\n";

	file_put_contents("$arxiu", $frase, FILE_APPEND);





	// item0 sql
	if ($table1_item0_name) {
		$name = $table1_item0_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item1 sql
	if ($table1_item1_name) {
		$name = $table1_item1_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item2 sql
	if ($table1_item2_name) {
		$name = $table1_item2_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item3 sql
	if ($table1_item3_name) {
		$name = $table1_item3_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item4 sql
	if ($table1_item4_name) {
		$name = $table1_item4_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item5 sql
	if ($table1_item5_name) {
		$name = $table1_item5_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item6 sql
	if ($table1_item6_name) {
		$name = $table1_item6_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item7 sql
	if ($table1_item7_name) {
		$name = $table1_item7_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item8 sql
	if ($table1_item8_name) {
		$name = $table1_item8_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item9 sql
	if ($table1_item9_name) {
		$name = $table1_item9_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item10 sql
	if ($table1_item10_name) {
		$name = $table1_item10_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item11 sql
	if ($table1_item11_name) {
		$name = $table1_item11_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item12 sql
	if ($table1_item12_name) {
		$name = $table1_item12_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item13 sql
	if ($table1_item13_name) {
		$name = $table1_item13_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item14 sql
	if ($table1_item14_name) {
		$name = $table1_item14_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item15 sql
	if ($table1_item15_name) {
		$name = $table1_item15_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}

	// final bucle
	$fp = fopen("$arxiu", "a");
	if ($fp) {
		fwrite($fp, " WHERE ID1 = \$ID1;\";\n");
		fclose($fp);
	}
	


	// peu edit2.php
	$arxiu = "$project/table1/edit2.php";
	$content = file_get_contents("files/table_generic/edit2.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END edit2.php
	// #########################






	// #########################
	//          delete.php
	// #########################

	// cap
	$arxiu = "$project/table1/delete.php";
	copy("files/table_generic/delete.php.1", "$arxiu");


	$frase = "if(isset(\$_GET['ID1'])) {\n";
	$frase .= " 	\$ID1 = \$_GET['ID1'];\n";
	$frase .= "} else {\n";
	$frase .= " 	print \"<p>ERROR: missing data.</p>\";\n";
	$frase .= " 	print \"</body></html>\";\n";
	$frase .= " 	exit;\n";
	$frase .= "}\n\n\n";

	$frase .= "\$consulta = \"DELETE FROM \$table1 WHERE ID1 = \$ID1;\";\n";
	file_put_contents("$arxiu", $frase, FILE_APPEND);



	// peu delete.php
	$arxiu = "$project/table1/delete.php";
	$content = file_get_contents("files/table_generic/delete.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END delete.php
	// #########################






	// #########################
	//          index.php
	// #########################

	// cap
	$arxiu = "$project/table1/index.php";
	copy("files/table_generic/index.php.1", "$arxiu");


	$frase = "\$table = \$table1;\n";
	file_put_contents("$arxiu", $frase, FILE_APPEND);


	// peu index.php
	$arxiu = "$project/table1/index.php";
	$content = file_get_contents("files/table1/index.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END index.php
	// #########################






	// ############################
	//    table1 in install.php
	// ############################

	$arxiu = "$project/install.php";



	// item0
	if ($table1_item0_name) {
		$name = $table1_item0_name;
		$type = $table1_item0_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\n\n\n");
			fwrite($fp, "	// table $table1_name \n");
			fwrite($fp, "	unset(\$sql);\n\n");
			//fwrite($fp, "	\$sql = \"CREATE TABLE $table1_name (\";\n");
			fwrite($fp, "	\$sql = \"CREATE TABLE \$table1 (\";\n");
			fwrite($fp, "	\$sql .= \" ID1 int(12) NOT NULL AUTO_INCREMENT,\";\n");

			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}

	// item1
	if ($table1_item1_name) {
		$name = $table1_item1_name;
		$type = $table1_item1_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	
	// item2
	if ($table1_item2_name) {
		$name = $table1_item2_name;
		$type = $table1_item2_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item3
	if ($table1_item3_name) {
		$name = $table1_item3_name;
		$type = $table1_item3_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item4
	if ($table1_item4_name) {
		$name = $table1_item4_name;
		$type = $table1_item4_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item5
	if ($table1_item5_name) {
		$name = $table1_item5_name;
		$type = $table1_item5_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item6
	if ($table1_item6_name) {
		$name = $table1_item6_name;
		$type = $table1_item6_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item7
	if ($table1_item7_name) {
		$name = $table1_item7_name;
		$type = $table1_item7_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item8
	if ($table1_item8_name) {
		$name = $table1_item8_name;
		$type = $table1_item8_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item9
	if ($table1_item9_name) {
		$name = $table1_item9_name;
		$type = $table1_item9_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item10
	if ($table1_item10_name) {
		$name = $table1_item10_name;
		$type = $table1_item10_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item11
	if ($table1_item11_name) {
		$name = $table1_item11_name;
		$type = $table1_item11_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item12
	if ($table1_item12_name) {
		$name = $table1_item12_name;
		$type = $table1_item12_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item13
	if ($table1_item13_name) {
		$name = $table1_item13_name;
		$type = $table1_item13_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item14
	if ($table1_item14_name) {
		$name = $table1_item14_name;
		$type = $table1_item14_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}

	// item15
	if ($table1_item15_name) {
		$name = $table1_item15_name;
		$type = $table1_item15_type;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}




	$fp = fopen("$arxiu", "a");
	if ($fp) {
		fwrite($fp, "	\$sql .= \" PRIMARY KEY (ID1)\";\n");
		fwrite($fp, "	\$sql .= \");\";\n\n");
		
		
		fwrite($fp, "	if(mysqli_query(\$link, \$sql)) {\n");
		fwrite($fp, "		print \"<p>Make table \$table1 <b>[ OK ]</b></p>\";\n");
		fwrite($fp, "	} else {\n");
		fwrite($fp, "		print \"<p>Make table \$table1 <b>[ ERROR ]</b></p>\";\n");
		fwrite($fp, "		die(mysqli_error(\$link));\n");
		fwrite($fp, "	}\n");


		fclose($fp);
	}


	// END table1 in install.php 
	// #########################

}


?>
