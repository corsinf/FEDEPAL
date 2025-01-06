<?php
include("../res/x5engine.php");
$nameList = array("rra","j8s","gds","7jj","fym","dh2","wrh","a8k","lhh","zks");
$charList = array("E","5","L","N","S","7","J","5","N","X");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
