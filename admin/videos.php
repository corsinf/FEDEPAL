<?php

include "includes.php";

Configuration::getControlPanel()->accessOrRedirect();

// print_r($imSettings['access']);die();
$imSettings['access']['dbid'] = '';
$imSettings['access']['dbtable'] = 'w5_videos';
$imSettings['access']['datadbtable'] = 'w5_videos_data';

$db = getDbData($imSettings['access']['dbid']);
$pa = new ImPrivateArea();
$pa->setDBDataVideos(ImDb::from_db_data($db), $imSettings['access']['dbtable'], $imSettings['access']['datadbtable']);

if (isset($_GET['validate'])) {
	$pa->validateWaitingUserById($_GET['validate']);
	echo "<script>location.href='videos.php#user_" . $_GET['validate'] . "';</script>";
	exit;
}

if (isset($_GET['saveVideo'])) {

	$res = $pa->registerNewVideos($_POST);
	if ($res > 0) {
		header('Location: videos.php');
	}
	exit();
}

if (isset($_GET['listArchivos'])) {

	echo json_encode($pa->getArchivosRecursos());

	exit();
}


if (isset($_GET['validationemail'])) {
	$pa->sendValidationEmail($_GET['validationemail'], $imSettings['access']['emailfrom']);
	echo "<script>location.href='videos.php?ok';</script>";
	exit;
}
if (isset($_GET['delete'])) {
	$pa->deleteVideos($_GET['delete']);
	echo "<script>location.href='videos.php?ok';</script>";
	exit;
}

if (isset($_GET['insertar'])) {
	$mainT = Configuration::getControlPanel()->getMainTemplate();
	$mainT->pagetitle = l10n("Videos", "Gestor de videos");
	$mainT->content = "";
	$contentT = new Template("templates/videos/addVideos.php");
	$contentT->cssClass = "privatearea";
	$contentT->content = "";
	$contentT->carpetas = $pa->getCArpetasVideos('carpeta');

	$mainT->content = $contentT->render();
	echo $mainT->render();
} else {
	// Load the main template
	$mainT = Configuration::getControlPanel()->getMainTemplate();
	$mainT->pagetitle = l10n("Videos", "Gestor de videos");
	$mainT->content = "";
	$contentT = new Template("templates/videos/bodyVideos.php");
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
	$tableT = new Template("templates/videos/videosTabla.php");
	$tableT->users = $pa->getVideosById();
	$contentT->content .= $tableT->render();

	$mainT->content = $contentT->render();
	echo $mainT->render();
}
