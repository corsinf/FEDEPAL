<?php require_once("res/x5engine.php"); ?>
<?php imCheckAccess('18', ''); 

$imSettings['access']['dbid'] = '';
$imSettings['access']['dbtable'] = 'w5_videos';
$imSettings['access']['datadbtable'] = 'w5_videos_data';

$db = getDbData($imSettings['access']['dbid']);
$pa = new ImPrivateArea();
$pa->setDBDataVideos(ImDb::from_db_data($db), $imSettings['access']['dbtable'], $imSettings['access']['datadbtable']);
$videos = json_encode($pa->getArchivosVideos());

?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="es-ES" dir="ltr">
	<head>
		<title>Videos - Fedepal</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Corsinf" />
		<meta name="generator" content="Incomedia WebSite X5 Pro 2024.4.8 - www.websitex5.com" />
		<meta property="og:locale" content="es" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://localhost/videos.php" />
		<meta property="og:title" content="Videos" />
		<meta property="og:site_name" content="Fedepal" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2024-4-8-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2024-4-8-0" media="print" />
		<link rel="stylesheet" href="style/style.css?2024-4-8-0" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?2024-4-8-0" media="screen" />
		<link rel="stylesheet" href="appsresources/swiper.min.css" media="screen, print" />
		<link rel="stylesheet" href="pluginAppObj/pluginAppObj_18_03/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pluginAppObj/imHeader_pluginAppObj_04/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pluginAppObj/imFooter_pluginAppObj_12/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pcss/videos.css?2024-4-8-0-638709142474232537" media="screen,print" />
		<script src="res/jquery.js?2024-4-8-0"></script>
		<script src="res/x5engine.js?2024-4-8-0" data-files-version="2024-4-8-0"></script>
		<script src="appsresources/swiper.min.js"></script>
		<script src="pluginAppObj/pluginAppObj_18_03/main.js"></script>
		<script src="pluginAppObj/imHeader_pluginAppObj_04/main.js"></script>
		<script src="pluginAppObj/imFooter_pluginAppObj_12/main.js"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('El Explorador que estás usando no es compatible con las funciones requeridas para mostrar este Sitio web.','El Navegador que estás utilizando podría no ser compatible con las funciones requeridas para poder ver este Sitio web.','[1]Actualiza tu explorador [/1] o [2]continuar de todos modos[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'videos.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="favicon.png?2024-4-8-0-638709142473987715" type="image/png" />
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TR6L3QCK');</script>
		<!-- End Google Tag Manager -->
		<!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=GTM-TR6L3QCK"></script><script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'GTM-TR6L3QCK');</script>
	
		<!-- Para las librerias utilizadas -->

		<link rel="stylesheet" href="libs/bootstrap.min.css">
		<link rel="stylesheet" href="libs/fancytree/skin-lion/ui.fancytree.css">

		<script src="libs/bootstrap.bundle.min.js"></script>
		<script src="libs/jquery.fancytree-all-deps.min.js"></script>
	</head>
	<body> <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TR6L3QCK"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
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
							<div id="imStickyBarObjects"><div id="imStickyBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imStickyBar_imObjectImage_01"><div id="imStickyBar_imObjectImage_01_container"><a href="home.html" onclick="return x5engine.utils.location('home.html', null, false)"><img src="images/cropped-logosmall.svg" title="" alt="" width="198" height="92" />
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
	</li><li class="imMnMnMiddle imLevel" data-link-paths=",/home.html,/" data-link-anchor="Nosotros" data-link-hash="-1827235661"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="beneficios.html" class="label" >Beneficios</a></div></div></li></li><li class="imMnMnMiddle imPage" data-link-paths=",/capacitaciones.html">
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
						<div id="imSideBarObjects"><div id="imSideBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imSideBar_imObjectImage_01"><div id="imSideBar_imObjectImage_01_container"><img src="images/empty-GT_imagea-1-.webp" title="" alt="" width="140" height="140" />
</div></div></div></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="imPageRow_1" class="imPageRow">
						
						</div>
						<div id="imCell_4" class=""> <div id="imCellStyleGraphics_4"></div><div id="imCellStyleBorders_4"></div><div id="imTextObject_18_04">
							<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imTextObject_18_04_tab0" style="opacity: 1; ">
								<div class="text-inner">
									<div class="imTACenter"><span class="fs48lh1-5">Ahora puedes acceder a nuestras capacitaciones, recursos y mucho más.</span></div><div><br></div>
								</div>
							</div>
						
						</div>
						</div><div id="imPageRow_2" class="imPageRow">
						
						</div>
						<div id="imCell_5" class=""> 				
						
							

							<style>
								.borde {
									box-shadow: 0 4px 8px 0 rgba(184, 113, 29, 0.8); /* Sombra color tomate */
									border: 1px solid rgba(255, 99, 71, 0.5); /* (Opcional) Borde color tomate */
									border-radius: 8px; /* (Opcional) Esquinas redondeadas */
								}

								#fancytree-container {
									max-height: 500px;
									overflow: auto;
									border: 1px solid #ddd;
									padding: 10px;
								}

								.fancytree-title {
									white-space: nowrap;
									overflow-x: auto;
									display: inline-block;
									max-width: 90%;
									scrollbar-width: thin; 
									scrollbar-color:rgba(49, 52, 118, 1) #f1f1f1; 
								}

								.fancytree-title::-webkit-scrollbar {
									height: 8px; 
								}

								.fancytree-title::-webkit-scrollbar-thumb {
									background: rgba(49, 52, 118, 1); 
									border-radius: 10px; 
								}

								.fancytree-title::-webkit-scrollbar-thumb:hover {
									background: #E68D24; 
								}

								.fancytree-title::-webkit-scrollbar-track {
									background:rgb(120, 119, 119); 
									border-radius: 10px;
								}

								.fancytree-title::-webkit-scrollbar-track:hover {
									background:rgb(120, 119, 119);
								}
								
							</style>

							<div id="">
								<div class="container mt-0" >

									<div data-index="0"  class="mb-4"  id="imTextObject_18_05_tab0" style="opacity: 1; " >
										<div class="text-inner text-center">
											<div><span class="fs20lh1-5 ff1 ">¿Te lo perdiste? No te preocupes. Uno de los beneficios de ser socio es que puedes acceder y revisarlo cuando quieras.</span></div>
										</div>
									</div>
									
									<div class="row pt-4">
										<div class="col-12 col-md-6 pt-3 pt-md-0">
											<h6>CAPACITACIONES VIDEOS</h6>
											<div class="mb-3">
												<input type="text" id="tree-search" class="form-control"
													placeholder="Buscar archivos o carpetas...">
											</div>
											<div id="fancytree-container" class=""></div>

											<h6 class="pt-3">CAPACITACIONES</h6>
											<div class="mb-3">
												<input type="text" id="tree-search-1" class="form-control"
													placeholder="Buscar archivos o carpetas...">
											</div>
											<div id="fancytree-container-1" class=""></div>
										</div>

										<div class="col-12 col-md-6 pt-3 pt-md-0">
											<div class="d-flex justify-content-center">
												<iframe class="borde" src='' id="iframe_recursos_pdf" frameborder="0" width="900px" height="700px"></iframe>
											</div>
										</div>
									</div>
									
								</div>										
							</div>
						
						</div>
						

						<!-- <div id="imCell_3" class=""> 
							<div id="imCellStyleGraphics_3"></div>
							<div id="imCellStyleBorders_3"></div>
							<div id="pluginAppObj_18_03">
						        <div id="youtubegallery_pluginAppObj_18_03" class="bullets">
						        </div>
						        <script>
						            youtubegallery_pluginAppObj_18_03();
						        </script>

						       </div>
							   <div id="imCellStyleDescription_3">
								<div>
								ABRIL
								</div>
							</div>
						</div> -->

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

		<style>
			/* Ocultar checkbox en carpetas */
			.fancytree-node.fancytree-folder .fancytree-checkbox {
				display: none;
			}
		</style>
		
		<script>
			$(document).ready(function() {
				$("#fancytree-container").fancytree({
					extensions: ["edit", "filter"],
					//quicksearch: true,
					source: { url: "api_google_drive.php?videos=true" },
					checkbox: true, 
					selectMode: 1, 
					icons: true,
					lazyLoad: function(event, data) {
						var node = data.node;
						data.result = { url: "api_google_drive.php?busqueda=" + node.key }; // Carga solo cuando se expande
					},
					select: function(event, data) {
						var node = data.node; // Nodo seleccionado
						var url = (data.node.data.url);
						definir_ruta_iframe_referencias_laborales(url);
					},
				});

				// Función de búsqueda
				$("#tree-search").on("keyup", function() {
					var tree = $.ui.fancytree.getTree("#fancytree-container");
					var match = $(this).val();
					if (match) {
						tree.filterNodes(match, {
							autoExpand: true
						}); 
					} else {
						tree.clearFilter();
					}
				});

				/*
				Capacitaciones
				*/

				$("#fancytree-container-1").fancytree({
					extensions: ["edit", "filter"],
					//quicksearch: true,
					source: { url: "api_google_drive.php?capacitaciones=true" },
					checkbox: true, 
					selectMode: 1, 
					icons: true,
					lazyLoad: function(event, data) {
						var node = data.node;
						data.result = { url: "api_google_drive.php?busqueda=" + node.key }; // Carga solo cuando se expande
					},
					select: function(event, data) {
						var node = data.node; // Nodo seleccionado
						var url = (data.node.data.url);
						definir_ruta_iframe_referencias_laborales(url);
					},
				});

				// Función de búsqueda
				$("#tree-search-1").on("keyup", function() {
					var tree = $.ui.fancytree.getTree("#fancytree-container-1");
					var match = $(this).val();
					if (match) {
						tree.filterNodes(match, {
							autoExpand: true
						}); 
					} else {
						tree.clearFilter();
					}
				});
			});

			function definir_ruta_iframe_referencias_laborales(url) {
				url_def = url
				var cambiar_ruta = $('#iframe_recursos_pdf').attr('src', url_def);
			}
		</script>


	</body>
</html>

