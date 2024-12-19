<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nombres', @$_POST['imObjectForm_90_1'], '', false);
	$form->setField('E-mail', @$_POST['imObjectForm_90_2'], '', false);
	$form->setField('Objeto', @$_POST['imObjectForm_90_3'], '', false);
	$form->setField('Mensaje', @$_POST['imObjectForm_90_4'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '5D37457B29947114A6FBD7BEF3B92BC1' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$db = getDbData();
		if (!$db)
			die("Cannot find db");
		$db = ImDb::from_db_data($db);		if (!$form->saveToDb($db, 'contactos'))
			die("Unable to connect to db");
		$form->mailToOwner('soporte@corsinf.com', '', 'info@fedepal.ec', 'Notificación de ' . $imSettings['general']['url'] . '', 'Nuevos datos recibidos desde mi sitio web:', false);
		$form->mailToCustomer('soporte@corsinf.com', 'info@fedepal.ec', $_POST['imObjectForm_90_2'], '¡Gracias por contactarnos!', '¡Hola!
Gracias por contactarnos.

Confirmamos que hemos recibido sus datos correctamente y que nuestro equipo responderá a su solicitud lo antes posible.

¡Gracias por haber elegido nuestro sitio web!', false);
		@header('Location: ../home.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file