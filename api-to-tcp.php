<?php
session_start();

require('config.php');

$mode = $_GET['mode'];
$cmd = $_GET['cmd'];

if ($cmd == ""){
		die('No CMD sent');
}
if ($mode == "") {
		die('No Mode Sent');
}



if ($mode == "push") {

	// MAIN CMDS
	if ($cmd == "blackouton") {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,"FSOC002255");
		fclose($fp);
		echo "Blackout On";
	}
	if ($cmd == "blackoutoff") {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,"FSOC0021");
		fclose($fp);
		echo "Blackout OFF";
	}


	$name = "togglefreeze";
	$code = "FSOC123255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed5";
	$code = "FSOC206005";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed10";
	$code = "FSOC206010";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed20";
	$code = "FSOC206020";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed30";
	$code = "FSOC206030";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed40";
	$code = "FSOC206040";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed50";
	$code = "FSOC206050";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed75";
	$code = "FSOC206075";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed100";
	$code = "FSOC206100";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed150";
	$code = "FSOC206150";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed200";
	$code = "FSOC206200";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "masterspeed255";
	$code = "FSOC206255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "nextcuepage";
	$code = "FSOC301255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "prevcuepage";
	$code = "FSOC300255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist1";
	$code = "FSOC272255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist2";
	$code = "FSOC273255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist3";
	$code = "FSOC274255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist4";
	$code = "FSOC275255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist5";
	$code = "FSOC276255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}


	$name = "cuelist6";
	$code = "FSOC277255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}


	$name = "cuelist7";
	$code = "FSOC278255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist8";
	$code = "FSOC279255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist9";
	$code = "FSOC280255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist10";
	$code = "FSOC281255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist11";
	$code = "FSOC281255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}


	$name = "cuelist12";
	$code = "FSOC283255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist13";
	$code = "FSOC284255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist14";
	$code = "FSOC285255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist15";
	$code = "FSOC286255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}

	$name = "cuelist16";
	$code = "FSOC287255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}


	$name = "cuelist17";
	$code = "FSOC671255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist18";
	$code = "FSOC672255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist19";
	$code = "FSOC673255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist20";
	$code = "FSOC674255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist21";
	$code = "FSOC675255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist22";
	$code = "FSOC676255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist23";
	$code = "FSOC677255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist24";
	$code = "FSOC678255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist25";
	$code = "FSOC679255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist26";
	$code = "FSOC680255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist27";
	$code = "FSOC681255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist28";
	$code = "FSOC682255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist29";
	$code = "FSOC683255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist30";
	$code = "FSOC684255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist31";
	$code = "FSOC685255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "cuelist32";
	$code = "FSOC686255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}


	$name = "shutteropen";
	$code = "FSOC245255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "shutterclosed";
	$code = "FSOC246255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "strobelow";
	$code = "FSOC247255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "strobemed";
	$code = "FSOC248255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "strobehigh";
	$code = "FSOC249255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	// overrides
	
	$name = "override1";
	$code = "FSOC066255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override2";
	$code = "FSOC067255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override3";
	$code = "FSOC068255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override4";
	$code = "FSOC069255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override5";
	$code = "FSOC070255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override6";
	$code = "FSOC071255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override7";
	$code = "FSOC072255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override8";
	$code = "FSOC073255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override9";
	$code = "FSOC074255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override10";
	$code = "FSOC075255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override11";
	$code = "FSOC076255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override12";
	$code = "FSOC077255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override13";
	$code = "FSOC078255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override14";
	$code = "FSOC079255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override15";
	$code = "FSOC080255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override16";
	$code = "FSOC081255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override17";
	$code = "FSOC082255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override18";
	$code = "FSOC083255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override19";
	$code = "FSOC084255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override20";
	$code = "FSOC085255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override21";
	$code = "FSOC086255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override22";
	$code = "FSOC087255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override23";
	$code = "FSOC088255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override24";
	$code = "FSOC089255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override25";
	$code = "FSOC090255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override26";
	$code = "FSOC091255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override27";
	$code = "FSOC092255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override28";
	$code = "FSOC093255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override29";
	$code = "FSOC094255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override30";
	$code = "FSOC095255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override31";
	$code = "FSOC096255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	$name = "override32";
	$code = "FSOC097255";
	if ($cmd == $name) {
		$fp = fsockopen("localhost", "3332");
		fputs($fp,$code);
		fclose($fp);
		echo "$name";
	}
	
	
}

?>
