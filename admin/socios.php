<?php

include "includes.php";

Configuration::getControlPanel()->accessOrRedirect();

// print_r($imSettings['access']);die();
$imSettings['access']['dbid'] = '';
$imSettings['access']['dbtable'] = 'w5_socios';
$imSettings['access']['datadbtable'] = 'w5_socios_data';

$db = getDbData($imSettings['access']['dbid']);
$pa = new ImPrivateArea();
$pa->setDBDataSocios(ImDb::from_db_data($db),$imSettings['access']['dbtable'],$imSettings['access']['datadbtable']);
if (isset($_GET['validate'])) {
	$pa->validateWaitingUserById($_GET['validate']);
	echo "<script>location.href='news.php#user_" . $_GET['validate'] . "';</script>";
	exit;
}
if (isset($_GET['saveNews'])) {
	if(isset($_GET['id']))
	{
	// print_r($_FILES);die();
		$res = $pa->registerUpdateSocios($_POST,$_FILES,$_GET['id']);
	}else
	{		
		$res = $pa->registerNewSocios($_POST,$_FILES);
		// print_r($res);die();
	}
	if ($res > 0)
	{
		header('Location: socios.php');
	}
	exit();
}

if (isset($_GET['editSocios'])) {
	$res = $pa->registerUpdateSocios($_POST,$_FILES,$_GET['id']);
	if ($res > 0)
	{
		header('Location: socios.php');
	}
	exit();
}


if (isset($_GET['validationemail'])) {
	$pa->sendValidationEmail($_GET['validationemail'], $imSettings['access']['emailfrom']);
	echo "<script>location.href='news.php?ok';</script>";
	exit;
}
if (isset($_GET['delete'])) {
	$pa->deleteSocios($_GET['delete']);
	echo "<script>location.href='socios.php?ok';</script>";
	exit;
}



if (isset($_GET['insertar'])) 
{
	$mainT = Configuration::getControlPanel()->getMainTemplate();
	$mainT->pagetitle = l10n("Socios","Gestor de socios");
	$mainT->content = "";
	$contentT = new Template("templates/socios/addSocios.php");
	$contentT->cssClass = "privatearea";
	$contentT->content = "";

	// $tableT = new Template("templates/news/addNews.php");
	// $tableT->users = $pa->getNewsById();
	// $contentT->content .= $tableT->render();


	$mainT->content = $contentT->render();
	echo $mainT->render();
}else if (isset($_GET['edit'])) {	

	$mainT = Configuration::getControlPanel()->getMainTemplate();
	$mainT->pagetitle = l10n("Socios","Gestor de socios");
	$mainT->content = "";
	$contentT = new Template("templates/socios/addSocios.php");
	$contentT->cssClass = "privatearea";
	$contentT->content = "";
	$contentT->users = $pa->getSociosById(array($_GET['id']));

	$mainT->content = $contentT->render();
	echo $mainT->render();
}else
{
	// Load the main template
	$mainT = Configuration::getControlPanel()->getMainTemplate();
	$mainT->pagetitle = l10n("Socios","Gestor de socios");
	$mainT->content = "";
	$contentT = new Template("templates/socios/bodySocios.php");
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
	$tableT = new Template("templates/socios/socioTable.php");
	$tableT->users = $pa->getSociosById();
	$contentT->content .= $tableT->render();

	$mainT->content = $contentT->render();
	echo $mainT->render();
}
