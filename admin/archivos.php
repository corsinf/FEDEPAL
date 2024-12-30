<?php

include "includes.php";

Configuration::getControlPanel()->accessOrRedirect();

// print_r($imSettings['access']);die();
$imSettings['access']['dbid'] = '';
$imSettings['access']['dbtable'] = 'w5_archivos';
$imSettings['access']['datadbtable'] = 'w5_archivos_data';

$db = getDbData($imSettings['access']['dbid']);
$pa = new ImPrivateArea();
$pa->setDBDataArchivos(ImDb::from_db_data($db),$imSettings['access']['dbtable'],$imSettings['access']['datadbtable']);
if (isset($_GET['validate'])) {
	$pa->validateWaitingUserById($_GET['validate']);
	echo "<script>location.href='news.php#user_" . $_GET['validate'] . "';</script>";
	exit;
}
if (isset($_GET['saveArchivo'])) {

	$res = $pa->registerNewARchivo($_POST,$_FILES);
	if ($res > 0)
	{
		header('Location: archivos.php');
	}
	exit();
}

if (isset($_GET['validationemail'])) {
	$pa->sendValidationEmail($_GET['validationemail'], $imSettings['access']['emailfrom']);
	echo "<script>location.href='news.php?ok';</script>";
	exit;
}
if (isset($_GET['delete'])) {
	$pa->deleteArchivos($_GET['delete']);
	echo "<script>location.href='archivos.php?ok';</script>";
	exit;
}

if (isset($_GET['insertar'])) 
{
	$mainT = Configuration::getControlPanel()->getMainTemplate();
	$mainT->pagetitle = l10n("Archivos","Gestor de Archivos");
	$mainT->content = "";
	$contentT = new Template("templates/archivos/addArchivos.php");
	$contentT->cssClass = "privatearea";
	$contentT->content = "";
	$contentT->carpetas = $pa->getCArpetas('carpeta');

	$mainT->content = $contentT->render();
	echo $mainT->render();
}else
{
	// Load the main template
	$mainT = Configuration::getControlPanel()->getMainTemplate();
	$mainT->pagetitle = l10n("Noticias","Gestor de archivos");
	$mainT->content = "";
	$contentT = new Template("templates/archivos/bodyFile.php");
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
	$tableT = new Template("templates/archivos/archivosTabla.php");
	$tableT->users = $pa->getArchivosById();
	$contentT->content .= $tableT->render();

	$mainT->content = $contentT->render();
	echo $mainT->render();
}
