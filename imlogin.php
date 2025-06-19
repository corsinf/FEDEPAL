<?php require_once("res/x5engine.php"); ?>
<?php
$pa = Configuration::getPrivateArea();
if (isset($_GET['landing_page'])) {
	$pa->savePage($_GET['landing_page']);
}
$fromCart = false;
$pa->admin_email = 'rpilca@corsinf.com';
$db = getDbData();
if ($db === false)
	die("Cannot find a database");
$pa->setDBData(ImDb::from_db_data($db), 'w5_almkhpcw_access_management', 'w5_almkhpcw_users_data');
if (isset($_GET['waitingusers']) && ($headers = imRequestHeaders()) !== false) {
	if (isset($_GET['wsx5callversion'])) {
		$token = "";
		foreach ($headers as $key => $value)
			if (strtolower($key) == 'x-incomedia-wsx5-token')
				$token = $value;
		if ($token == '662hlvnrregrek75mhu5jbrw4gf6z87wtxn2vm8th3qpv5h94x5')
			echo $pa->getDbUsers($_GET['wsx5callversion']);
	} else {
		http_response_code(400);
	}
	exit();
}
if (isset($_GET['validate'])) {
	if ($pa->validateWaitingUserByKey($_GET['validate'], true))
		$pa->sessionSafeRedirect('imlogin.php?uservalidated');
	else
		header('Location: imlogin.php?err=-6');
	exit();
}
if (isset($_GET['cngpwd']) || isset($_GET['cngpwdml'])) {
	$token_status_code = $pa->get_token_status_code($_GET['cngpwdml'], $_GET['cngpwd']);
	if($token_status_code < 0) {
		if($token_status_code == -10) header('Location: imlogin.php');
		if($token_status_code == -11) header('Location: imlogin.php?loginstatus=' . $token_status_code);
		exit();	}}
if (isset($_POST['imCngPwdToken']) || isset($_POST['imCngPwdEmail'])) {
	if (!isset($_POST['imCngPwdToken']) || !isset($_POST['imCngPwdEmail'])) {
		header('Location: imlogin.php');
	} else if (isset($_POST['imCngPwd']) && isset($_POST['imCngPwdConfirm']) && $_POST['imCngPwd'] == $_POST['imCngPwdConfirm']) {
		$status_code = $pa->change_password($_POST['imCngPwdEmail'], $_POST['imCngPwdToken'], $_POST['imCngPwd']);
		if($status_code == -10) {
			header('Location: imlogin.php');
		} else if ($status_code == -9) {			header('Location: imlogin.php?cngpwd=' . $_POST['imCngPwdToken'] . '&cngpwdml=' . $_POST['imCngPwdEmail'] . '&loginstatus=' . $status_code);
		} else if ($status_code < 0) {			header('Location: imlogin.php?loginstatus=' . $status_code);
		} else {
			$page = $pa->getSavedPage() ? $pa->getSavedPage() : $pa->getLandingPage();
			$pa->clearSavedPage();
			$pa->sessionSafeRedirect($page);
		}
	} else {
		header('Location: imlogin.php?cngpwd=' . $_POST['imCngPwdToken'] . '&cngpwdml=' . $_POST['imCngPwdEmail'] . '&loginstatus=-12');
	}	exit();
}
if (isset($_POST['lostdata'])) {
	$res = $pa->sendLostPasswordEmail($_POST['lostdata']);
	header('Location: imlogin.php?loginstatus=' . ($res ? '4' : '-7'));
}
if (isset($_GET['registernew']) && $_GET['registernew'] == 1 && checkJsAndSpam('D57C1FCAA1FF70812096ED8AA71E6898')) {
	$res = $pa->registerNewUser($_POST['imUnameReg'], $_POST['imRegPwd'], $_POST['imFirstname'], $_POST['imLastname'], 0);
	if ($res > 0)
		$pa->sendValidationEmail($res);
	if ($res > 0)
		$pa->sendNotificationEmail($res);
	if ($res > 0 && ($_GET['redirect_after_registration'] == 'true' || $fromCart)) {
		$page = $pa->getSavedPage() ? $pa->getSavedPage() : $pa->getLandingPage();
		$pa->clearSavedPage();
		$pa->sessionSafeRedirect($page);
	} else {
		header('Location: imlogin.php?registrationstatus=' . ($res <= 0 ? $res : '2'));
	}
	exit();
}
if (isset($_POST['imUname']) && isset($_POST['imPwd'])) {
	$result = $pa->login($_POST['imUname'], $_POST['imPwd']);

	// print_r($result);die();
	if ($result < 0) {
		header('Location: imlogin.php?loginstatus=' . $result);
		exit();
	}
	$page = $pa->getSavedPage() ? $pa->getSavedPage() : $pa->getLandingPage();
	if (!$page) {
		if(isset($_SERVER["HTTP_REFERER"]) && strlen($_SERVER["HTTP_REFERER"]) && strpos($_SERVER["HTTP_REFERER"], 'imlogin.php') === false) {
			$page = preg_replace('/\?.*/', '', $_SERVER["HTTP_REFERER"]) . '?loginstatus=1';
		} else {
			$page = 'imlogin.php?loginstatus=1';
		}
	}
	$pa->clearSavedPage();
	$pa->sessionSafeRedirect($page);
}
?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="es-ES" dir="ltr">
	<head>
		<title>Área reservada - Fedepal</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Corsinf" />
		<meta name="generator" content="Incomedia WebSite X5 Pro 2024.4.4 - www.websitex5.com" />
		<meta property="og:locale" content="es" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://localhost/imlogin.php" />
		<meta property="og:title" content="Área reservada" />
		<meta property="og:site_name" content="Fedepal" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2024-4-4-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2024-4-4-0" media="print" />
		<link rel="stylesheet" href="style/style.css?2024-4-4-0" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?2024-4-4-0" media="screen" />
		<link rel="stylesheet" href="pluginAppObj/imHeader_pluginAppObj_04/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pluginAppObj/imFooter_pluginAppObj_12/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pcss/imlogin.css?2024-4-4-0-638676382339711650" media="screen,print" />
		<script src="res/jquery.js?2024-4-4-0"></script>
		<script src="res/x5engine.js?2024-4-4-0" data-files-version="2024-4-4-0"></script>
		<script src="pluginAppObj/imHeader_pluginAppObj_04/main.js"></script>
		<script src="pluginAppObj/imFooter_pluginAppObj_12/main.js"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('El Explorador que estás usando no es compatible con las funciones requeridas para mostrar este Sitio web.','El Navegador que estás utilizando podría no ser compatible con las funciones requeridas para poder ver este Sitio web.','[1]Actualiza tu explorador [/1] o [2]continuar de todos modos[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imlogin.php';
			x5engine.boot.push(function () { x5engine.utils.imCodeProtection('Corsinf'); });
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="favicon.png?2024-4-4-0-638676382339164836" type="image/png" />
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<!-- Inicio Header -->

					<header id="imHeader">
						<h1 class="imHidden">Fedepal</h1>
						<div id="imHeaderObjects">
							<div id="imHeader_imMenuObject_02_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE -->
								<div id="imHeader_imMenuObject_02">
									<div id="imHeader_imMenuObject_02_container">
										<div class="hamburger-button hamburger-component">
											<div>
												<div>
													<div class="hamburger-bar"></div>
													<div class="hamburger-bar"></div>
													<div class="hamburger-bar"></div>
												</div>
											</div>
										</div>
										<div class="hamburger-menu-background-container hamburger-component">
											<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
												<div class="hamburger-menu-close-button"><span>&times;</span></div>
											</div>
										</div>
										<ul class="menu-mobile-animated hidden">
											<li class="imMnMnFirst imPage" data-link-paths=",/home.html,/">
												<div class="label-wrapper">
													<div class="label-inner-wrapper">
														<a class="label" href="home.html">
															Inicio </a>
													</div>
												</div>
											</li><li class="imMnMnMiddle imLevel" data-link-paths=",/beneficios.html">
												<div class="label-wrapper">
													<div class="label-inner-wrapper">
														<a class="label" href="beneficios.html">
															Beneficios </a>
													</div>
												</div>
											</li><li class="imMnMnMiddle imLevel" data-link-paths=",/capacitaciones.html">
												<div class="label-wrapper">
													<div class="label-inner-wrapper">
														<a class="label" href="capacitaciones.html">
															Capacitaciones </a>
													</div>
												</div>
											</li><li class="imMnMnMiddle imLevel" data-link-paths=",/ficha-de-afiliacion.php">
												<div class="label-wrapper">
													<div class="label-inner-wrapper">
														<a class="label" href="ficha-de-afiliacion.php">
															Afiliación </a>
													</div>
												</div>
											</li><li class="imMnMnLast imLevel" data-link-paths=",/contactos.html" data-link-hash="-1004161921">
												<div class="label-wrapper">
													<div class="label-inner-wrapper"><a href="contactos.html" class="label"
															onclick="return x5engine.utils.location('contactos.html', null, false)">Contactos</a>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div><!-- UNSEARCHABLE END -->
								<script>
									var imHeader_imMenuObject_02_settings = {
										'menuId': 'imHeader_imMenuObject_02',
										'responsiveMenuEffect': 'slide',
										'responsiveMenuLevelOpenEvent': 'mouseover',
										'animationDuration': 1000,
									}
									x5engine.boot.push(function () { x5engine.initMenu(imHeader_imMenuObject_02_settings) });
									$(function () { $('#imHeader_imMenuObject_02_container ul li').not('.imMnMnSeparator').each(function () { var $this = $(this), timeout = 0; $this.on('mouseenter', function () { if ($(this).parents('#imHeader_imMenuObject_02_container-menu-opened').length > 0) return; clearTimeout(timeout); setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250); }).on('mouseleave', function () { if ($(this).parents('#imHeader_imMenuObject_02_container-menu-opened').length > 0) return; timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250); }); }); });
					
								</script>
							</div>
							<div id="imHeader_imObjectImage_03_wrapper" class="template-object-wrapper">
								<div id="imHeader_imObjectImage_03">
									<div id="imHeader_imObjectImage_03_container"><img src="images/cropped-logosmall.svg" title="" alt=""
											width="250" height="92" />
									</div>
								</div>
							</div>
							<div id="imHeader_pluginAppObj_04_wrapper" class="template-object-wrapper"><!-- Login & Logout v.9 -->
								<div id="imHeader_pluginAppObj_04">
									<a class="imLogoutAnchor defaultStyle " href="#">Salir</a>
									<script>
										loginlogout_imHeader_pluginAppObj_04();
									</script>
								</div>
							</div>
						</div>
					</header>

					<!-- Fin header -->
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imStickyBar_imObjectImage_01"><div id="imStickyBar_imObjectImage_01_container"><a href="home.html" onclick="return x5engine.utils.location('home.html', null, false)"><img src="images/cropped-logosmall.svg" title="" alt="" width="198" height="73" />
</a></div></div></div><div id="imStickyBar_imMenuObject_02_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imStickyBar_imMenuObject_02"><div id="imStickyBar_imMenuObject_02_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/home.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="home.html">
Inicio		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imLevel" data-link-paths=",/home.html,/" data-link-anchor="Nosotros" data-link-hash="-1827235661"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="beneficios.html" class="label" >Beneficios</a></div></div></li><li class="imMnMnMiddle imPage" data-link-paths=",/capacitaciones.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="capacitaciones.html">
Capacitaciones		</a>
</div>
</div>
</li><li class="imMnMnMiddle imLevel" data-link-paths=",/home.html,/" data-link-anchor="Delimitador" data-link-hash="267966236"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="ficha-de-afiliacion.php" class="label" >Afiliación</a></div></div>
	</li><li class="imMnMnLast imLevel" data-link-paths=",/contactos.html" data-link-hash="-1004161921"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="contactos.html" class="label" onclick="return x5engine.utils.location('contactos.html', null, false)">Contactos</a></div></div></li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imStickyBar_imMenuObject_02_settings = {
	'menuId': 'imStickyBar_imMenuObject_02',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imStickyBar_imMenuObject_02_settings)});
$(function () {$('#imStickyBar_imMenuObject_02_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        if($(this).parents('#imStickyBar_imMenuObject_02_container-menu-opened').length > 0) return;         clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imStickyBar_imMenuObject_02_container-menu-opened').length > 0) return;         timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250);    });});});

</script>
</div></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Salta el menu principal">Vaya al Contenido</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"><div id="imSideBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imSideBar_imObjectImage_01"><div id="imSideBar_imObjectImage_01_container"><img src="images/empty-GT_imagea-1-.png" title="" alt="" width="140" height="140" />
</div></div></div></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imLoginPage">
						<?php if ($fromCart): ?>
							<h2 id ="imPgTitle" class="imTitleMargin">Paso 1 - Datos del cliente</h2>
							<script>x5engine.boot.push(function () {
							if (x5engine.cart.ui.steps.active) {
								$('#imPgTitle').before(x5engine.cart.ui.getStepStyleDom(0));
							}
							});</script>
						<?php elseif (isset($_GET['cngpwd']) && isset($_GET['cngpwdml'])): ?>
							<h2 id="imPgTitle" class="imTitleMargin">Restablecer contraseña</h2>
							<div style="height: 15px;">&nbsp;</div>
						<?php else: ?>
							<h2 id="imPgTitle" class="imTitleMargin">Área reservada</h2>
							<div style="height: 15px;">&nbsp;</div>
						<?php endif; ?>
							<?php if (isset($_GET['loginstatus']) && $_GET['loginstatus'] == 1): ?>
							<div class="alert alert-green"><?php echo $pa->messageFromStatusCode(1) ?></div>
							<?php else: ?>
										<div id="imLoginDescription"><?php echo isset($_GET['cart']) ? Configuration::getLocalizations()->get('cart_step2_descr_login', 'To set the order you are required to login or register.' ) : (isset($_GET['cngpwd']) && isset($_GET['cngpwdml']) ? Configuration::getLocalizations()->get('private_area_password_recovery_description', 'Enter new password below.' ) : 'Para acceder a esta sección del sitio web debe introducir sus detalles de inicio de sesión.'); ?></div>
										<div class="imLogin">
											<?php
												if (isset($_GET['loginstatus']) && $pa->messageFromStatusCode($_GET['loginstatus']) != '') {
													echo '<div class="alert alert-' . ($_GET['loginstatus'] >= 0 ? 'green' : 'red') . '">' . $pa->messageFromStatusCode($_GET['loginstatus']) . '</div>';
												}
											?>
						<?php if (isset($_GET['cngpwd']) && isset($_GET['cngpwdml'])): ?>
						<form method="post" action="imlogin.php" id="imCngPwdForm">
							<div class="imLoginBlock">
								<label for="imCngPwd"><span>Contraseña:</span></label><br />
								<input type="password" name="imCngPwd" id="imCngPwd" class="mandatory"><br />
							</div>
							<div class="imLoginBlock">
								<label for="imCngPwdConfirm"><span>Repite la contraseña:</span></label><br />
								<input type="password" name="imCngPwdConfirm" id="imCngPwdConfirm" class="mandatory"><br />
							</div>
							<input type="hidden" name="imCngPwdToken" id="imCngPwdToken" value="<?php echo $_GET['cngpwd']; ?>">
							<input type="hidden" name="imCngPwdEmail" id="imCngPwdEmail" value="<?php echo $_GET['cngpwdml']; ?>">
							<div class="imLoginBlock" style="text-align: right;">
								<input type="submit" value="Enviar" class="imLoginSubmit">
							</div>
						</form>
						<script>x5engine.boot.push(function() { x5engine.imForm.initForm('#imCngPwdForm', false, { 'jsid': 'D57C1FCAA1FF70812096ED8AA71E6898', showAll: true, offlineMessage: 'En la modalidad de prueba las páginas protegidas aparecen visualizadas sin el pedido de acceso. El área reservada es activada sólo con la publicación del sitio.' }); });</script>
						</div>
						<?php else: ?>
											<h3>¿Tiene ya una cuenta?</h3>
											<?php if ($fromCart): ?>
												<div class="imLoginTitleDescription">Acceda a su cuenta para acelerar el proceso de compra</div>
											<?php endif; ?>
											<form method="post" action="imlogin.php" id="imLoginForm">
												<div class="imLoginBlock">
													<label for="imUnameLogin"><span>E-mail:</span></label><br />
													<input type="email" name="imUname" id="imUnameLogin" class="mandatory" autofocus><br />
												</div>
												<div class="imLoginBlock">
													<label for="imPwdLogin"><span>Contraseña:</span></label><br />
													<input type="password" name="imPwd" id="imPwdLogin" class="mandatory"><br />
												</div>
												<div class="imLoginBlock" style="text-align: right;">
													<a href="#" class="imCssLink" style="margin-right: 3%;" onclick="$('#imLoginForm').slideUp();$('#imLostPassword').slideDown(); return false;">He olvidado mi contraseña</a>
													<input type="submit" value="Intro" class="imLoginSubmit">
												</div>
											</form>
											<script>x5engine.boot.push(function() { x5engine.imForm.initForm('#imLoginForm', false, { 'jsid': 'D57C1FCAA1FF70812096ED8AA71E6898', showAll: true, offlineMessage: 'En la modalidad de prueba las páginas protegidas aparecen visualizadas sin el pedido de acceso. El área reservada es activada sólo con la publicación del sitio.' }); });</script>
											<form method="post" id="imLostPassword" action="imlogin.php" style="display: none;">
												<div class="imLoginBlock">
													<label for="lostdata">Introduzca su email:*</label>
													<input type="text" id="lostdata" name="lostdata" class="mandatory">
												</div>
												<div class="imLoginBlock" style="text-align: right;">
													<input type="submit" value="Contraseña perdida?" class="imLoginSubmit">
												</div>
											</form>
											<script>x5engine.boot.push(function() { x5engine.imForm.initForm('#imLostPassword', false, { 'jsid': 'D57C1FCAA1FF70812096ED8AA71E6898', showAll: true, offlineMessage: 'En la modalidad de prueba las páginas protegidas aparecen visualizadas sin el pedido de acceso. El área reservada es activada sólo con la publicación del sitio.' }); });</script>
										</div>
										<div class="imLogin imRightElement">
											<?php
												if (isset($_GET['registrationstatus']) && $pa->messageFromStatusCode($_GET['registrationstatus']) != '') {
													echo '<div class="alert alert-' . ($_GET['registrationstatus'] > 0 ? 'green' : 'red') . '">' . $pa->messageFromStatusCode($_GET['registrationstatus']) . '</div>';
												}
											?>
											<h3>Registra una nueva cuenta</h3>
											<?php if ($fromCart): ?>
												<div class="imLoginTitleDescription">Cree una cuenta para guardar sus datos</div>
											<?php endif; ?>
											<form method="post" action="imlogin.php?registernew=1<?php if (@$_GET['redirect_after_registration'] == 'true') echo '&redirect_after_registration=true'; ?>" id="imRegister">
												<span style="display: flex;">
													<div class="imLoginBlock" style="width: 49%;">
														<label for="imFirstname"><span>Nombre:*</span></label><br />
														<input type="text" name="imFirstname" id="imFirstname" class="mandatory"><br />
													</div>
													<div class="imLoginBlock" style="width: 49%;">
														<label for="imLastname"><span>Apellidos:*</span></label><br />
														<input type="text" name="imLastname" id="imLastname" class="mandatory"><br />
													</div>
												</span>
												<div class="imLoginBlock">
													<label for="imUnameReg"><span>E-mail:*</span></label><br />
													<input type="email" name="imUnameReg" id="imUnameReg" class="mandatory valEmail"><br />
												</div>
												<div class="imLoginBlock">
													<label for="imRegPwd"><span>Contraseña:*</span></label><br />
													<input type="password" name="imRegPwd" id="imRegPwd" class="mandatory valPassword requirePolicy"><br />
												</div>
												<input type="text" value="" name="prt" class="prt_field">
												<div class="imLoginBlock" style="text-align: right;">
													<input type="submit" value="Registrarse" class="imLoginSubmit">
												</div>
											</form>
											<script>x5engine.boot.push(function() { x5engine.imForm.initForm('#imRegister', false, { 'jsid': 'D57C1FCAA1FF70812096ED8AA71E6898', showAll: true, offlineMessage: 'En la modalidad de prueba las páginas protegidas aparecen visualizadas sin el pedido de acceso. El área reservada es activada sólo con la publicación del sitio.' }); });</script>
										</div>
							<?php endif; ?>
						<?php endif; ?>
						</div>
						
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects">
							<div id="imFooter_imTextObject_06_wrapper" class="template-object-wrapper">
								<div id="imFooter_imTextObject_06">
									<div data-index="0" class="text-tab-content grid-prop current-tab " id="imFooter_imTextObject_06_tab0" style="opacity: 1; ">
										<div class="text-inner">
											<div class="imTALeft">
												<div data-line-height="1"><b><span class="fs15lh1-5 cf1">Contactos</span></b></div>
												<div class="imTAJustify"><span class="fs11lh1-5 cf2">+593-2248914</span></div>
												<div class="imTAJustify"><span class="fs11lh1-5 cf2">+593 9 9924 7290</span></div>
												<div class="imTAJustify"><span class="fs11lh1-5 cf2">info@fedepal.ec</span></div>
												<div data-line-height="1.15" class="imTAJustify"><span class="fs11lh1-5 cf2">Quito - Ecuador</span></div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div id="imFooter_imTextObject_08_wrapper" class="template-object-wrapper">
								<div id="imFooter_imTextObject_08">
									<div data-index="0" class="text-tab-content grid-prop current-tab " id="imFooter_imTextObject_08_tab0" style="opacity: 1; ">
										<div class="text-inner">
											<div class="imTALeft">
												<div data-line-height="1" class="imTAJustify"><span style="font-weight: 700;" class="fs14lh1-5 cf1">Dirección</span></div>
												<div data-line-height="1" class="imTALeft"><span class="imTAJustify fs11lh1-5 cf2">República del Salvador 525 e Irlanda Edificio Rosanía Pb Junto al Hotel Dann Carlton</span><br></div>
											</div>
										</div>
									</div>

								</div>
							</div>

							<div id="imFooter_imTextObject_11_wrapper" class="template-object-wrapper">
								<div id="imFooter_imTextObject_11">
									<div data-index="0" class="text-tab-content grid-prop current-tab " id="imFooter_imTextObject_11_tab0" style="opacity: 1; ">
										<div class="text-inner">
											<div class="imTALeft">
												<div data-line-height="1" class="imTALeft">
													<span class="fs15lh1-5"><b><span class="cf1">Servicios</span></b></span>
												</div>
												<div data-line-height="1.15" class="imTAJustify">
													<div>
														<a href="news.php" class="imCssLink" onclick="return x5engine.utils.location('news.php', null, false)"><span class="imTAJustify fs11lh1-5 cf2">Noticias</span></a>
													</div>
													<div>
														<a href="socios.php" class="imCssLink" onclick="return x5engine.utils.location('socios.php', null, false)"><span class="imTAJustify fs11lh1-5 cf2">Portal de Socios</span></a>
													</div>
													<hr>
													<div>
														<a href="convenios.php" class="imCssLink" onclick="return x5engine.utils.location('convenios.php', null, false)"><span class="imTAJustify fs11lh1-5 cf2">Convenios</span></a>
													</div>
													<div>
														<a href="recursos.php" class="imCssLink" onclick="return x5engine.utils.location('news.php', null, false)"><span class="imTAJustify fs11lh1-5 cf2">Normativa Ministerial</span></a>
													</div>
													<div>
														<a href="videos.php" class="imCssLink" onclick="return x5engine.utils.location('news.php', null, false)"><span class="imTAJustify fs11lh1-5 cf2">Videos</span></a>
													</div>
													<div>
														<a href="fotos.php" class="imCssLink" onclick="return x5engine.utils.location('news.php', null, false)"><span class="imTAJustify fs11lh1-5 cf2">Fotos</span></a>
													</div>
													<div>
														<a href="https://webmail.fedepal.ec/" class="imCssLink" target="_blank"><span class="imTAJustify fs11lh1-5 cf2">Webmail</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

							</div>
							<div id="imFooter_pluginAppObj_12_wrapper" class="template-object-wrapper"><!-- Social Icons v.19 -->
								<div id="imFooter_pluginAppObj_12">
									<div id="soc_imFooter_pluginAppObj_12">
										<div class="wrapper horizontal flat none">
											<div class='social-icon flat'><a href='https://www.facebook.com/FEDEPALECUADOR' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
														<path d="M57,93V54H70.14l2-15H57V29.09c0-4.39.94-7.39,7.24-7.39H72V8.14a98.29,98.29,0,0,0-11.6-.6C48.82,7.54,41,14.61,41,27.59V39H27V54H41V93H57Z" />
													</svg><span class='fallbacktext'>Fb</span></a></div>
											<div class='social-icon flat'><a href='https://www.youtube.com/user/fedepal' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
														<g>
															<path d="M89.2,34S88.42,28.49,86,26.06c-3-3.19-6.45-3.14-8-3.32C66.81,21.93,50,22,50,22h0s-16.79-.07-28,0.74c-1.56.19-5,.17-8,3.36C11.58,28.53,10.8,34,10.8,34A120.47,120.47,0,0,0,10,47V53A121,121,0,0,0,10.8,66s0.78,5.51,3.18,7.94c3,3.19,7,3.09,8.82,3.42,6.4,0.61,27.2.8,27.2,0.8s16.81,0,28-.83a11.44,11.44,0,0,0,8-3.39C88.42,71.48,89.2,66,89.2,66A121.16,121.16,0,0,0,90,53V47A121.16,121.16,0,0,0,89.2,34ZM41.74,60.38V37.9L63.35,49.18Z" />
														</g>
													</svg><span class='fallbacktext'>Yt</span></a></div>
											<div class='social-icon flat'><a href='https://x.com/fedepal' target='_blank'><svg width="100%" height="100%" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
														<g transform="matrix(0.233139,0,0,0.233139,15.0291,15)">
															<path d="M178.57,127.15L290.27,0L263.81,0L166.78,110.38L89.34,0L0,0L117.13,166.93L0,300.25L26.46,300.25L128.86,183.66L210.66,300.25L300,300.25M36.01,19.54L76.66,19.54L263.79,281.67L223.13,281.67" style="fill-rule:nonzero;" />
														</g>
													</svg><span class='fallbacktext'>X</span></a></div>
											<div class='social-icon flat'><a href='https://www.instagram.com/fedepal_uio/' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
														<g>
															<path d="M50,15.16c11.35,0,12.69,0,17.17.25a23.52,23.52,0,0,1,7.89,1.46,14.07,14.07,0,0,1,8.07,8.07,23.52,23.52,0,0,1,1.46,7.89c0.2,4.48.25,5.83,0.25,17.17s0,12.69-.25,17.17a23.52,23.52,0,0,1-1.46,7.89,14.07,14.07,0,0,1-8.07,8.07,23.52,23.52,0,0,1-7.89,1.46c-4.48.2-5.82,0.25-17.17,0.25s-12.69,0-17.17-.25a23.52,23.52,0,0,1-7.89-1.46,14.07,14.07,0,0,1-8.07-8.07,23.52,23.52,0,0,1-1.46-7.89c-0.2-4.48-.25-5.83-0.25-17.17s0-12.69.25-17.17a23.52,23.52,0,0,1,1.46-7.89,14.07,14.07,0,0,1,8.07-8.07,23.52,23.52,0,0,1,7.89-1.46c4.48-.2,5.83-0.25,17.17-0.25M50,7.5c-11.54,0-13,0-17.52.26a31.19,31.19,0,0,0-10.32,2A21.73,21.73,0,0,0,9.73,22.16a31.19,31.19,0,0,0-2,10.32C7.55,37,7.5,38.46,7.5,50s0,13,.26,17.52a31.19,31.19,0,0,0,2,10.32A21.73,21.73,0,0,0,22.16,90.27a31.19,31.19,0,0,0,10.32,2c4.53,0.21,6,.26,17.52.26s13,0,17.52-.26a31.19,31.19,0,0,0,10.32-2A21.73,21.73,0,0,0,90.27,77.84a31.19,31.19,0,0,0,2-10.32c0.21-4.53.26-6,.26-17.52s0-13-.26-17.52a31.19,31.19,0,0,0-2-10.32A21.73,21.73,0,0,0,77.84,9.73a31.19,31.19,0,0,0-10.32-2C63,7.55,61.54,7.5,50,7.5h0Z" />
															<path d="M50,28.18A21.82,21.82,0,1,0,71.82,50,21.82,21.82,0,0,0,50,28.18Zm0,36A14.17,14.17,0,1,1,64.17,50,14.17,14.17,0,0,1,50,64.17Z" />
															<circle cx="72.69" cy="27.31" r="5.1" />
														</g>
													</svg><span class='fallbacktext'>Ig</span></a></div>
										</div>

									</div>
									<script>
										socialicons_imFooter_pluginAppObj_12();
									</script>
								</div>
							</div>
						</div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Lea esta página de nuevo">Regreso al contenido</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">Para utilizar este sitio tienes que habilitar JavaScript.</div></noscript>
	</body>
</html>
