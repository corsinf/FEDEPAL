<?php

include "includes.php";

Configuration::getControlPanel()->accessOrRedirect();

$db = getDbData($imSettings['access']['dbid']);
$pa = new ImPrivateArea();
$pa->setDbData(ImDb::from_db_data($db), $imSettings['access']['dbtable'], $imSettings['access']['datadbtable']);
if (isset($_GET['validate'])) {
	$pa->validateWaitingUserById($_GET['validate']);
	echo "<script>location.href='privatearea.php#user_" . $_GET['validate'] . "';</script>";
	exit;
}
if (isset($_GET['validate_socio'])) {
	$socio = 0;
	if($_GET['validate_socio']==1){ $socio = 1; }	
	// print_r($socio);die();
	if(isset($_GET['id']))
	{
		$pa->validateSocioUserById($socio,$_GET['id']);
	}
	echo "<script>location.href='privatearea.php#user_" . $_GET['id'] . "';</script>";
	exit;
}
if (isset($_GET['passwordemail'])) {
	$pa->sendLostPasswordEmail($_GET['passwordemail'], $imSettings['access']['emailfrom']);
	echo "<script>location.href='privatearea.php?ok';</script>";
	exit;
}
if (isset($_GET['validationemail'])) {
	$pa->sendValidationEmail($_GET['validationemail'], $imSettings['access']['emailfrom']);
	echo "<script>location.href='privatearea.php?ok';</script>";
	exit;
}
if (isset($_GET['delete'])) {
	$pa->deleteUser($_GET['delete']);
	echo "<script>location.href='privatearea.php?ok';</script>";
	exit;
}

// Load the main template
$mainT = Configuration::getControlPanel()->getMainTemplate();
$mainT->pagetitle = l10n("private_area_title", "Private Area");
//$mainT->stylesheets = array("css/comments.css");
$mainT->content = "";
$contentT = new Template("templates/common/box.php");
$contentT->cssClass = "privatearea";
$contentT->content = "";

// Show a confirmation message
if (isset($_GET['ok'])) {
	$messageT = new Template("templates/common/text-message.php");
	$messageT->message = l10n('private_area_success', 'Completed Succesfully');
	$messageT->extraCssClass = "fore-green";
	$contentT->content .= $messageT->render();
}

// Show the table
$tableT = new Template("templates/privatearea/table.php");
$tableT->users = $pa->getUsersById();
$contentT->content .= $tableT->render();

$mainT->content = $contentT->render();
echo $mainT->render();

