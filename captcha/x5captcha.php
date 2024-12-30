<?php
include("../res/x5engine.php");
$nameList = array("n8e","f7n","yrx","576","8ks","mwh","xny","eps","2me","8rw");
$charList = array("G","S","R","J","6","J","E","X","E","4");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
