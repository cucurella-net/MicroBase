<?php
# Copyright © 2017, Carles Bataller Cucurella  <cucurella@gmail.com>
# http://www.cucurella.net/soft/microbase/
# Released under the license GPL 2.0



// ini vars
$table0_item0_name = false;
$table0_item1_name = false;
$table0_item2_name = false;
$table0_item3_name = false;
$table0_item4_name = false;
$table0_item5_name = false;
$table0_item6_name = false;
$table0_item7_name = false;
$table0_item8_name = false;
$table0_item9_name = false;
$table0_item10_name = false;
$table0_item11_name = false;
$table0_item12_name = false;
$table0_item13_name = false;
$table0_item14_name = false;
$table0_item15_name = false;






// table[0]
if (isset($xml->table[0]['name'])) {

	$table0_name = $xml->table[0]['name'];
	
	if ($table0_name == "") {
		print "ERROR: name of table0 is a empty field!\n\n";
		exit;
	}
	
	

	// directori table0
	if (! is_dir("$project/table0")) {
		mkdir("$project/table0", 0755);
	}




	// config: add table0 to config
	$fp = fopen("$config", "a");
	if ($fp) {
		fwrite($fp, "### table0\n");
		fwrite($fp, "\$table0 = \"${table0_name}\";\n\n");
		fclose($fp);
	}



	// cap.php
	copy("files/table_generic/cap.php", "$project/table0/cap.php");


	


	if (isset($xml->table[0]->item[0])) {
		$table0_item0_name = $xml->table[0]->item[0]['name'];
		$table0_item0_type = $xml->table[0]->item[0]['type'];
		$table0_item0_value = $xml->table[0]->item[0]['value'];
	}
	if (isset($xml->table[0]->item[1])) {
		$table0_item1_name = $xml->table[0]->item[1]['name'];
		$table0_item1_type = $xml->table[0]->item[1]['type'];
		$table0_item1_value = $xml->table[0]->item[1]['value'];
	}
	if (isset($xml->table[0]->item[2])) {
		$table0_item2_name = $xml->table[0]->item[2]['name'];
		$table0_item2_type = $xml->table[0]->item[2]['type'];
		$table0_item2_value = $xml->table[0]->item[2]['value'];
	}
	if (isset($xml->table[0]->item[3])) {
		$table0_item3_name = $xml->table[0]->item[3]['name'];
		$table0_item3_type = $xml->table[0]->item[3]['type'];
		$table0_item3_value = $xml->table[0]->item[3]['value'];
	}
	if (isset($xml->table[0]->item[4])) {
		$table0_item4_name = $xml->table[0]->item[4]['name'];
		$table0_item4_type = $xml->table[0]->item[4]['type'];
		$table0_item4_value = $xml->table[0]->item[4]['value'];
	}
	if (isset($xml->table[0]->item[5])) {
		$table0_item5_name = $xml->table[0]->item[5]['name'];
		$table0_item5_type = $xml->table[0]->item[5]['type'];
		$table0_item5_value = $xml->table[0]->item[5]['value'];
	}
	if (isset($xml->table[0]->item[6])) {
		$table0_item6_name = $xml->table[0]->item[6]['name'];
		$table0_item6_type = $xml->table[0]->item[6]['type'];
		$table0_item6_value = $xml->table[0]->item[6]['value'];
	}
	if (isset($xml->table[0]->item[7])) {
		$table0_item7_name = $xml->table[0]->item[7]['name'];
		$table0_item7_type = $xml->table[0]->item[7]['type'];
		$table0_item7_value = $xml->table[0]->item[7]['value'];
	}
	if (isset($xml->table[0]->item[8])) {
		$table0_item8_name = $xml->table[0]->item[8]['name'];
		$table0_item8_type = $xml->table[0]->item[8]['type'];
		$table0_item8_value = $xml->table[0]->item[8]['value'];
	}
	if (isset($xml->table[0]->item[9])) {
		$table0_item9_name = $xml->table[0]->item[9]['name'];
		$table0_item9_type = $xml->table[0]->item[9]['type'];
		$table0_item9_value = $xml->table[0]->item[9]['value'];
	}
	if (isset($xml->table[0]->item[10])) {
		$table0_item10_name = $xml->table[0]->item[10]['name'];
		$table0_item10_type = $xml->table[0]->item[10]['type'];
		$table0_item10_value = $xml->table[0]->item[10]['value'];
	}
	if (isset($xml->table[0]->item[11])) {
		$table0_item11_name = $xml->table[0]->item[11]['name'];
		$table0_item11_type = $xml->table[0]->item[11]['type'];
		$table0_item11_value = $xml->table[0]->item[11]['value'];
	}
	if (isset($xml->table[0]->item[12])) {
		$table0_item12_name = $xml->table[0]->item[12]['name'];
		$table0_item12_type = $xml->table[0]->item[12]['type'];
		$table0_item12_value = $xml->table[0]->item[12]['value'];
	}
	if (isset($xml->table[0]->item[13])) {
		$table0_item13_name = $xml->table[0]->item[13]['name'];
		$table0_item13_type = $xml->table[0]->item[13]['type'];
		$table0_item13_value = $xml->table[0]->item[13]['value'];
	}
	if (isset($xml->table[0]->item[14])) {
		$table0_item14_name = $xml->table[0]->item[14]['name'];
		$table0_item14_type = $xml->table[0]->item[14]['type'];
		$table0_item14_value = $xml->table[0]->item[14]['value'];
	}
	if (isset($xml->table[0]->item[15])) {
		$table0_item15_name = $xml->table[0]->item[15]['name'];
		$table0_item15_type = $xml->table[0]->item[15]['type'];
		$table0_item15_value = $xml->table[0]->item[15]['value'];
	}




	// #########################
	//          new.php
	// #########################
	
	$arxiu = "$project/table0/new.php";
	copy("files/table_generic/new.php.1", "$arxiu");

	// item0
	if ($table0_item0_name) {
		$name = $table0_item0_name;
		$type = $table0_item0_type;
		
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
	if ($table0_item1_name) {
		$name = $table0_item1_name;
		$type = $table0_item1_type;
		
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
	if ($table0_item2_name) {
		$name = $table0_item2_name;
		$type = $table0_item2_type;
		
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
	if ($table0_item3_name) {
		$name = $table0_item3_name;
		$type = $table0_item3_type;
		
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
	if ($table0_item4_name) {
		$name = $table0_item4_name;
		$type = $table0_item4_type;
		
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
	if ($table0_item5_name) {
		$name = $table0_item5_name;
		$type = $table0_item5_type;
		
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
	if ($table0_item6_name) {
		$name = $table0_item6_name;
		$type = $table0_item6_type;
		
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
	if ($table0_item7_name) {
		$name = $table0_item7_name;
		$type = $table0_item7_type;
		
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
	if ($table0_item8_name) {
		$name = $table0_item8_name;
		$type = $table0_item8_type;
		
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
	if ($table0_item9_name) {
		$name = $table0_item9_name;
		$type = $table0_item9_type;
		
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
	if ($table0_item10_name) {
		$name = $table0_item10_name;
		$type = $table0_item10_type;
		
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
	if ($table0_item11_name) {
		$name = $table0_item11_name;
		$type = $table0_item11_type;
		
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
	if ($table0_item12_name) {
		$name = $table0_item12_name;
		$type = $table0_item12_type;
		
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
	if ($table0_item13_name) {
		$name = $table0_item13_name;
		$type = $table0_item13_type;
		
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
	if ($table0_item14_name) {
		$name = $table0_item14_name;
		$type = $table0_item14_type;
		
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
	if ($table0_item15_name) {
		$name = $table0_item15_name;
		$type = $table0_item15_type;
		
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
	$arxiu = "$project/table0/new.php";
	$content = file_get_contents("files/table_generic/new.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END new.php
	// #########################









	// #########################
	//          new2.php
	// #########################
	
	$arxiu = "$project/table0/new2.php";
	copy("files/table_generic/new2.php.1", "$arxiu");

	// item0 vars
	if ($table0_item0_name) {
		$name = $table0_item0_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item1 vars
	if ($table0_item1_name) {
		$name = $table0_item1_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item2 vars
	if ($table0_item2_name) {
		$name = $table0_item2_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item3 vars
	if ($table0_item3_name) {
		$name = $table0_item3_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item4 vars
	if ($table0_item4_name) {
		$name = $table0_item4_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item5 vars
	if ($table0_item5_name) {
		$name = $table0_item5_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item6 vars
	if ($table0_item6_name) {
		$name = $table0_item6_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item7 vars
	if ($table0_item7_name) {
		$name = $table0_item7_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item8 vars
	if ($table0_item8_name) {
		$name = $table0_item8_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item9 vars
	if ($table0_item9_name) {
		$name = $table0_item9_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item10 vars
	if ($table0_item10_name) {
		$name = $table0_item10_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item11 vars
	if ($table0_item11_name) {
		$name = $table0_item11_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item12 vars
	if ($table0_item12_name) {
		$name = $table0_item12_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item13 vars
	if ($table0_item13_name) {
		$name = $table0_item13_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item14 vars
	if ($table0_item14_name) {
		$name = $table0_item14_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fclose($fp);
		}
	}
	// item15 vars
	if ($table0_item15_name) {
		$name = $table0_item15_name;

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
		fwrite($fp, "\$consulta = \"INSERT INTO \$table0 SET\n");
		fclose($fp);
	}
	// item0 sql
	if ($table0_item0_name) {
		$name = $table0_item0_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item1 sql
	if ($table0_item1_name) {
		$name = $table0_item1_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item2 sql
	if ($table0_item2_name) {
		$name = $table0_item2_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item3 sql
	if ($table0_item3_name) {
		$name = $table0_item3_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item4 sql
	if ($table0_item4_name) {
		$name = $table0_item4_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item5 sql
	if ($table0_item5_name) {
		$name = $table0_item5_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item6 sql
	if ($table0_item6_name) {
		$name = $table0_item6_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item7 sql
	if ($table0_item7_name) {
		$name = $table0_item7_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item8 sql
	if ($table0_item8_name) {
		$name = $table0_item8_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item9 sql
	if ($table0_item9_name) {
		$name = $table0_item9_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item10 sql
	if ($table0_item10_name) {
		$name = $table0_item10_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item11 sql
	if ($table0_item11_name) {
		$name = $table0_item11_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item12 sql
	if ($table0_item12_name) {
		$name = $table0_item12_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item13 sql
	if ($table0_item13_name) {
		$name = $table0_item13_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item14 sql
	if ($table0_item14_name) {
		$name = $table0_item14_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"\$${name}\\\"");
			fclose($fp);
		}
	}
	// item15 sql
	if ($table0_item15_name) {
		$name = $table0_item15_name;
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
	$arxiu = "$project/table0/new2.php";
	$content = file_get_contents("files/table_generic/new2.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END new2.php
	// #########################








	// #########################
	//          edit.php
	// #########################
	
	$arxiu = "$project/table0/edit.php";
	copy("files/table_generic/edit.php.1", "$arxiu");

	$frase = "\$ID0 = \$_GET['ID0'];\n\n\n";
	
	$frase .= "### consulta\n";
	$frase .= "\$consulta = \"SELECT * FROM \$table0 WHERE ID0 = \$ID0\";\n";
	$frase .= "\$resultado = mysqli_query(\$link,\$consulta);\n\n";
	$frase .= "while (\$fila = mysqli_fetch_array(\$resultado)) {;\n";

	file_put_contents("$arxiu", $frase, FILE_APPEND);



	// item0 vars
	if ($table0_item0_name) {
		$name = $table0_item0_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item1 vars
	if ($table0_item1_name) {
		$name = $table0_item1_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item2 vars
	if ($table0_item2_name) {
		$name = $table0_item2_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item3 vars
	if ($table0_item3_name) {
		$name = $table0_item3_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item4 vars
	if ($table0_item4_name) {
		$name = $table0_item4_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item5 vars
	if ($table0_item5_name) {
		$name = $table0_item5_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item6 vars
	if ($table0_item6_name) {
		$name = $table0_item6_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item7 vars
	if ($table0_item7_name) {
		$name = $table0_item7_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item8 vars
	if ($table0_item8_name) {
		$name = $table0_item8_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item9 vars
	if ($table0_item9_name) {
		$name = $table0_item9_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item10 vars
	if ($table0_item10_name) {
		$name = $table0_item10_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item11 vars
	if ($table0_item11_name) {
		$name = $table0_item11_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item12 vars
	if ($table0_item12_name) {
		$name = $table0_item12_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item13 vars
	if ($table0_item13_name) {
		$name = $table0_item13_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item14 vars
	if ($table0_item14_name) {
		$name = $table0_item14_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$${name} = \$fila['${name}'];\n");
			fclose($fp);
		}
	}
	// item15 vars
	if ($table0_item15_name) {
		$name = $table0_item15_name;
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
	$frase .= "print \"	<input type='hidden' name='ID0' value='\$ID0'>\\n\";\n\n";
	$frase .= "print \"	<table id='edit'>\\n\";\n";

	file_put_contents("$arxiu", $frase, FILE_APPEND);


	// ########################
	// formulari

	// item0
	if ($table0_item0_name) {
		$name = $table0_item0_name;
		$type = $table0_item0_type;

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
	if ($table0_item1_name) {
		$name = $table0_item1_name;
		$type = $table0_item1_type;

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
	if ($table0_item2_name) {
		$name = $table0_item2_name;
		$type = $table0_item2_type;

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
	if ($table0_item3_name) {
		$name = $table0_item3_name;
		$type = $table0_item3_type;

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
	if ($table0_item4_name) {
		$name = $table0_item4_name;
		$type = $table0_item4_type;

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
	if ($table0_item5_name) {
		$name = $table0_item5_name;
		$type = $table0_item5_type;

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
	if ($table0_item6_name) {
		$name = $table0_item6_name;
		$type = $table0_item6_type;

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
	if ($table0_item7_name) {
		$name = $table0_item7_name;
		$type = $table0_item7_type;

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
	if ($table0_item8_name) {
		$name = $table0_item8_name;
		$type = $table0_item8_type;

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
	if ($table0_item9_name) {
		$name = $table0_item9_name;
		$type = $table0_item9_type;

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
	if ($table0_item10_name) {
		$name = $table0_item10_name;
		$type = $table0_item10_type;

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
	if ($table0_item11_name) {
		$name = $table0_item11_name;
		$type = $table0_item11_type;

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
	if ($table0_item12_name) {
		$name = $table0_item12_name;
		$type = $table0_item12_type;

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
	if ($table0_item13_name) {
		$name = $table0_item13_name;
		$type = $table0_item13_type;

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
	if ($table0_item14_name) {
		$name = $table0_item14_name;
		$type = $table0_item14_type;

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
	if ($table0_item15_name) {
		$name = $table0_item15_name;
		$type = $table0_item15_type;

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
	$arxiu = "$project/table0/edit.php";
	$content = file_get_contents("files/table_generic/edit.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END edit.php
	// #########################










	// #########################
	//          edit2.php
	// #########################
	
	$arxiu = "$project/table0/edit2.php";
	copy("files/table_generic/edit2.php.1", "$arxiu");


	$frase = "if(isset(\$_POST['ID0'])) {\n";
	$frase .= " 	\$ID0 = \$_POST['ID0'];\n";
	$frase .= "} else {\n";
	$frase .= " 	print \"<p>ERROR: missing data.</p>\";\n";
	$frase .= " 	print \"</body></html>\";\n";
	$frase .= " 	exit;\n";
	$frase .= "}\n\n\n";

	$frase .= "// vars form\n";

	file_put_contents("$arxiu", $frase, FILE_APPEND);



	// item0 vars
	if ($table0_item0_name) {
		$name = $table0_item0_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item1 vars
	if ($table0_item1_name) {
		$name = $table0_item1_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item2 vars
	if ($table0_item2_name) {
		$name = $table0_item2_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item3 vars
	if ($table0_item3_name) {
		$name = $table0_item3_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item4 vars
	if ($table0_item4_name) {
		$name = $table0_item4_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item5 vars
	if ($table0_item5_name) {
		$name = $table0_item5_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item6 vars
	if ($table0_item6_name) {
		$name = $table0_item6_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item7 vars
	if ($table0_item7_name) {
		$name = $table0_item7_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item8 vars
	if ($table0_item8_name) {
		$name = $table0_item8_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item9 vars
	if ($table0_item9_name) {
		$name = $table0_item9_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item10 vars
	if ($table0_item10_name) {
		$name = $table0_item10_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item11 vars
	if ($table0_item11_name) {
		$name = $table0_item11_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item12 vars
	if ($table0_item12_name) {
		$name = $table0_item12_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item13 vars
	if ($table0_item13_name) {
		$name = $table0_item13_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item14 vars
	if ($table0_item14_name) {
		$name = $table0_item14_name;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "\$${name} = \$_POST['${name}'];\n");
			fwrite($fp, "\$${name} = rtrim(\$${name});\n\n");
			fclose($fp);
		}
	}
	// item15 vars
	if ($table0_item15_name) {
		$name = $table0_item15_name;

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
	$frase .= "\$consulta = \"UPDATE \$table0 SET\n";

	file_put_contents("$arxiu", $frase, FILE_APPEND);





	// item0 sql
	if ($table0_item0_name) {
		$name = $table0_item0_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item1 sql
	if ($table0_item1_name) {
		$name = $table0_item1_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item2 sql
	if ($table0_item2_name) {
		$name = $table0_item2_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item3 sql
	if ($table0_item3_name) {
		$name = $table0_item3_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item4 sql
	if ($table0_item4_name) {
		$name = $table0_item4_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item5 sql
	if ($table0_item5_name) {
		$name = $table0_item5_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item6 sql
	if ($table0_item6_name) {
		$name = $table0_item6_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item7 sql
	if ($table0_item7_name) {
		$name = $table0_item7_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item8 sql
	if ($table0_item8_name) {
		$name = $table0_item8_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item9 sql
	if ($table0_item9_name) {
		$name = $table0_item9_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item10 sql
	if ($table0_item10_name) {
		$name = $table0_item10_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item11 sql
	if ($table0_item11_name) {
		$name = $table0_item11_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item12 sql
	if ($table0_item12_name) {
		$name = $table0_item12_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item13 sql
	if ($table0_item13_name) {
		$name = $table0_item13_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item14 sql
	if ($table0_item14_name) {
		$name = $table0_item14_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}
	// item15 sql
	if ($table0_item15_name) {
		$name = $table0_item15_name;
		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, ",\n	$name = \\\"$$name\\\"");
			fclose($fp);
		}
	}

	// final bucle
	$fp = fopen("$arxiu", "a");
	if ($fp) {
		fwrite($fp, " WHERE ID0 = \$ID0;\";\n");
		fclose($fp);
	}
	


	// peu edit2.php
	$arxiu = "$project/table0/edit2.php";
	$content = file_get_contents("files/table_generic/edit2.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END edit2.php
	// #########################






	// #########################
	//          delete.php
	// #########################

	// cap
	$arxiu = "$project/table0/delete.php";
	copy("files/table_generic/delete.php.1", "$arxiu");


	$frase = "if(isset(\$_GET['ID0'])) {\n";
	$frase .= " 	\$ID0 = \$_GET['ID0'];\n";
	$frase .= "} else {\n";
	$frase .= " 	print \"<p>ERROR: missing data.</p>\";\n";
	$frase .= " 	print \"</body></html>\";\n";
	$frase .= " 	exit;\n";
	$frase .= "}\n\n\n";

	$frase .= "\$consulta = \"DELETE FROM \$table0 WHERE ID0 = \$ID0;\";\n";
	file_put_contents("$arxiu", $frase, FILE_APPEND);



	// peu delete.php
	$arxiu = "$project/table0/delete.php";
	$content = file_get_contents("files/table_generic/delete.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END delete.php
	// #########################
	

	

	


	// #########################
	//          index.php
	// #########################

	// cap
	$arxiu = "$project/table0/index.php";
	copy("files/table_generic/index.php.1", "$arxiu");


	$frase = "\$table = \$table0;\n";	
	file_put_contents("$arxiu", $frase, FILE_APPEND);


	// peu index.php
	$arxiu = "$project/table0/index.php";
	$content = file_get_contents("files/table0/index.php.2");
	file_put_contents("$arxiu", $content, FILE_APPEND);

	//        END index.php
	// #########################









	// ############################
	//    table0 in install.php
	// ############################

	$arxiu = "$project/install.php";
	
	// cap install.php
	copy("files/install.php.1", "$arxiu");



	// item0
	if ($table0_item0_name) {
		$name = $table0_item0_name;
		$type = $table0_item0_type;
		$value = $table0_item0_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	// table $table0_name \n");
			//fwrite($fp, "	\$sql = \"CREATE TABLE $table0_name (\";\n");
			fwrite($fp, "	\$sql = \"CREATE TABLE \$table0 (\";\n");
			fwrite($fp, "	\$sql .= \" ID0 int(12) NOT NULL AUTO_INCREMENT,\";\n");

			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}

	// item1
	if ($table0_item1_name) {
		$name = $table0_item1_name;
		$type = $table0_item1_type;
		$value = $table0_item1_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	
	// item2
	if ($table0_item2_name) {
		$name = $table0_item2_name;
		$type = $table0_item2_type;
		$value = $table0_item2_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item3
	if ($table0_item3_name) {
		$name = $table0_item3_name;
		$type = $table0_item3_type;
		$value = $table0_item3_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item4
	if ($table0_item4_name) {
		$name = $table0_item4_name;
		$type = $table0_item4_type;
		$value = $table0_item4_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item5
	if ($table0_item5_name) {
		$name = $table0_item5_name;
		$type = $table0_item5_type;
		$value = $table0_item5_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item6
	if ($table0_item6_name) {
		$name = $table0_item6_name;
		$type = $table0_item6_type;
		$value = $table0_item6_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item7
	if ($table0_item7_name) {
		$name = $table0_item7_name;
		$type = $table0_item7_type;
		$value = $table0_item7_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item8
	if ($table0_item8_name) {
		$name = $table0_item8_name;
		$type = $table0_item8_type;
		$value = $table0_item8_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item9
	if ($table0_item9_name) {
		$name = $table0_item9_name;
		$type = $table0_item9_type;
		$value = $table0_item9_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item10
	if ($table0_item10_name) {
		$name = $table0_item10_name;
		$type = $table0_item10_type;
		$value = $table0_item10_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item11
	if ($table0_item11_name) {
		$name = $table0_item11_name;
		$type = $table0_item11_type;
		$value = $table0_item11_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item12
	if ($table0_item12_name) {
		$name = $table0_item12_name;
		$type = $table0_item12_type;
		$value = $table0_item12_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item13
	if ($table0_item13_name) {
		$name = $table0_item13_name;
		$type = $table0_item13_type;
		$value = $table0_item13_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}
	// item14
	if ($table0_item14_name) {
		$name = $table0_item14_name;
		$type = $table0_item14_type;
		$value = $table0_item14_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}

	// item15
	if ($table0_item15_name) {
		$name = $table0_item15_name;
		$type = $table0_item15_type;
		$value = $table0_item15_value;

		$fp = fopen("$arxiu", "a");
		if ($fp) {
			fwrite($fp, "	\$sql .= \" ${name} ${type} COLLATE $collate ${value},\";\n");
			fclose($fp);
		}
	}




	$fp = fopen("$arxiu", "a");
	if ($fp) {
		fwrite($fp, "	\$sql .= \" PRIMARY KEY (ID0)\";\n");
		fwrite($fp, "	\$sql .= \");\";\n\n");
		
		
		fwrite($fp, "	if(mysqli_query(\$link, \$sql)) {\n");
		fwrite($fp, "		print \"<p>Make table \$table0 <b>[ OK ]</b></p>\";\n");
		fwrite($fp, "	} else {\n");
		fwrite($fp, "		print \"<p>Make table \$table0 <b>[ ERROR ]</b></p>\";\n");
		fwrite($fp, "		die(mysqli_error(\$link));\n");
		fwrite($fp, "	}\n");


		fclose($fp);
	}

	// END table0 in install.php
	// #########################

}


?>
