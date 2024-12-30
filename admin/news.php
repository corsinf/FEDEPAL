<?php

include "includes.php";

Configuration::getControlPanel()->accessOrRedirect();

// print_r($imSettings['access']);die();
$imSettings['access']['dbid'] = '';
$imSettings['access']['dbtable'] = 'w5_news';
$imSettings['access']['datadbtable'] = 'w5_news_data';

$db = getDbData($imSettings['access']['dbid']);
$pa = new ImPrivateArea();
$pa->setDBDataNews(ImDb::from_db_data($db),$imSettings['access']['dbtable'],$imSettings['access']['datadbtable']);
if (isset($_GET['validate'])) {
	$pa->validateWaitingUserById($_GET['validate']);
	echo "<script>location.href='news.php#user_" . $_GET['validate'] . "';</script>";
	exit;
}
if (isset($_GET['saveNews'])) {

	// print_r($_FILES);die();
	$res = $pa->registerNewNews($_POST['txt_titulo'], $_POST['txt_body'],$_FILES);
	if ($res > 0)
	{
		header('Location: news.php');
	}
	exit();
}

if (isset($_GET['validationemail'])) {
	$pa->sendValidationEmail($_GET['validationemail'], $imSettings['access']['emailfrom']);
	echo "<script>location.href='news.php?ok';</script>";
	exit;
}
if (isset($_GET['delete'])) {
	$pa->deleteNews($_GET['delete']);
	echo "<script>location.href='news.php?ok';</script>";
	exit;
}

if (isset($_GET['insertar'])) 
{
	$mainT = Configuration::getControlPanel()->getMainTemplate();
	$mainT->pagetitle = l10n("Noticias","Gestor de noticias");
	$mainT->content = "";
	$contentT = new Template("templates/news/addNews.php");
	$contentT->cssClass = "privatearea";
	$contentT->content = "";

	$tableT = new Template("templates/news/addNews.php");
	$tableT->users = $pa->getNewsById();
	$contentT->content .= $tableT->render();


	$mainT->content = $contentT->render();
	echo $mainT->render();
}else
{
	// Load the main template
	$mainT = Configuration::getControlPanel()->getMainTemplate();
	$mainT->pagetitle = l10n("Noticias","Gestor de noticias");
	$mainT->content = "";
	$contentT = new Template("templates/news/bodyNews.php");
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
	$tableT = new Template("templates/news/newsTable.php");
	$tableT->users = $pa->getNewsById();
	$contentT->content .= $tableT->render();

	$mainT->content = $contentT->render();
	echo $mainT->render();
}
