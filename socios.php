<?php require_once("res/x5engine.php"); ?>
<?php imCheckAccess('14', ''); 

$imSettings['access']['dbid'] = '';
$imSettings['access']['dbtable'] = 'w5_socios';
$imSettings['access']['datadbtable'] = 'w5_socios_data';

$db = getDbData($imSettings['access']['dbid']);
$pa = new ImPrivateArea();
$pa->setDBDataSocios(ImDb::from_db_data($db), $imSettings['access']['dbtable'], $imSettings['access']['datadbtable']);
$socios = json_encode($pa->getSociosById());

?>

<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="es-ES" dir="ltr">
	<head>
		<title>Socios - Fedepal</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Corsinf" />
		<meta name="generator" content="Incomedia WebSite X5 Pro 2024.4.8 - www.websitex5.com" />
		<meta property="og:locale" content="es" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://localhost/socios.php" />
		<meta property="og:title" content="Socios" />
		<meta property="og:site_name" content="Fedepal" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="style/reset.css?2024-4-8-0" media="screen,print" />
		<link rel="stylesheet" href="style/print.css?2024-4-8-0" media="print" />
		<link rel="stylesheet" href="style/style.css?2024-4-8-0" media="screen,print" />
		<link rel="stylesheet" href="style/template.css?2024-4-8-0" media="screen" />
		<link rel="stylesheet" href="res/portfolio.css" />
		<link rel="stylesheet" href="pluginAppObj/imHeader_pluginAppObj_04/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pluginAppObj/imFooter_pluginAppObj_12/custom.css" media="screen, print" />
		<link rel="stylesheet" href="pcss/socios.css?2024-4-8-0-638709142482068809" media="screen,print" />
		<script src="res/jquery.js?2024-4-8-0"></script>
		<script src="res/x5engine.js?2024-4-8-0" data-files-version="2024-4-8-0"></script>
		<script src="res/muuri.min.js"></script><script src="res/portfolio.js"></script>
		<script src="pluginAppObj/imHeader_pluginAppObj_04/main.js"></script>
		<script src="pluginAppObj/imFooter_pluginAppObj_12/main.js"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('El Explorador que estás usando no es compatible con las funciones requeridas para mostrar este Sitio web.','El Navegador que estás utilizando podría no ser compatible con las funciones requeridas para poder ver este Sitio web.','[1]Actualiza tu explorador [/1] o [2]continuar de todos modos[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'socios.php';
			x5engine.boot.push(function () { x5engine.parallax.start(); });
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="favicon.png?2024-4-8-0-638709142481848770" type="image/png" />
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TR6L3QCK');</script>
		<!-- End Google Tag Manager -->
		<!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=GTM-TR6L3QCK"></script><script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'GTM-TR6L3QCK');</script>
		<!-- <link rel="stylesheet" href="libs/bootstrap.min.css"> -->

		<link rel="stylesheet" href="libs/bootstrap.min.css">
		<script src="libs/bootstrap.bundle.min.js"></script>
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
	</li><li class="imMnMnMiddle imLevel" data-link-paths=",/home.html,/" data-link-anchor="Nosotros" data-link-hash="-1827235661"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="beneficios.html" class="label">Beneficios</a></div></div></li></li><li class="imMnMnMiddle imPage" data-link-paths=",/capacitaciones.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="capacitaciones.html">
Capacitaciones		</a>
</div>
</div>
<li class="imMnMnMiddle imLevel" data-link-paths=",/home.html,/" data-link-anchor="Delimitador" data-link-hash="267966236"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="ficha-de-afiliacion.php" class="label">Afiliación</a></div></div>
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
						<div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; overflow: hidden;"><div id="imPageRowGraphics_1"><div id="imPageRowGraphicsVideo_1_wrapper"><video id="imPageRowGraphicsVideo_1" class="imPageRowGraphicsVideo" src="video/medium-3161.mp4" autoplay loop playsinline muted></video>
						<script>
						   var video = document.querySelector('#imPageRowGraphicsVideo_1');
						   var promise = video.play();
						   if (promise !== undefined) {
						       promise.then(_ => {
						           video.muted = false;
						           if (video.paused) {
						               video.muted = true;
						               video.play();
						           }
						       });
						   }
						</script>
						</div></div></div>
						</div>
						<div id="imCell_124" class=""> <div id="imCellStyleGraphics_124"></div><div id="imCellStyleBorders_124"></div><div id="imTextObject_14_124">
							<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imTextObject_14_124_tab0" style="opacity: 1; ">
								<div class="text-inner">
									<div class="imTACenter"><div><span class="fs48lh1-5 cf1">PORTAL DE SOCIOS FEDEPAL</span></div></div>
								</div>
							</div>
						
						</div>
						</div>
						
						<div id="imCell_127" class=""> 
							<div id="imCellStyleGraphics_127"></div>
							<div id="imCellStyleBorders_127"></div>
							
							<div id="imObjectPortfolio_14_127">
								<div class="portfolio">
									<div class="portfolio__container">
										<div class="portfolio__category-bar">
											<ul class="portfolio__category-bar__nav">
												<li><a data-category-id="*" href="#">Todas las categor&#237;as</a></li>
												<li><a data-category-id="087slr7i" href="#">Sierra</a></li>
												<li><a data-category-id="z0yjwlp1" href="#">Amazon&#237;a</a></li>
											</ul>
										</div>
										<div class="portfolio__search-bar">
											<div class="portfolio__search-bar__search-field">
												<input type="text" placeholder="Buscar...">
												<div class="portfolio__search-bar__search-field__img">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
														x="0px" y="0px" viewBox="0 0 250.313 250.313" xml:space="preserve">
														<g>
															<path style="fill-rule:evenodd;clip-rule:evenodd;"
																d="M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76 c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911	c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38	c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146	c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236 C170.146,140.044,140.043,170.146,102.911,170.146z">
															</path>
														</g>
													</svg>
												</div>
											</div>
											<div class="portfolio__search-bar__sort-field">
												<ul>
													<li class="portfolio__search-bar__sort-field__text">
														<div>Ordenar por: <span>Predefinido</span></div>
														<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="11.97px" height="11.97px"
															xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 240.811 240.811"
															xml:space="preserve">
															<g>
																<path
																	d="M220.088,57.667l-99.671,99.695L20.746,57.655c-4.752-4.752-12.439-4.752-17.191,0 c-4.74,4.752-4.74,12.451,0,17.203l108.261,108.297l0,0l0,0c4.74,4.752,12.439,4.752,17.179,0L237.256,74.859 c4.74-4.752,4.74-12.463,0-17.215C232.528,52.915,224.828,52.915,220.088,57.667z">
																</path>
															</g>
														</svg>
													</li>
													<li class="portfolio__search-bar__sort-field__dropdown">
														<ul>
															<li data-value="default">Predefinido</li>
															<li data-value="date_desc">M&#225;s reciente</li>
															<li data-value="date_asc">M&#225;s antiguo </li>
															<li data-value="title">T&#237;tulo</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>

										<div class="portfolio__container-items hidden" id="pnl_portafolio_socios">

										</div>
									</div>
								</div>
							</div>

							
							<script>
						  x5engine.boot.push(function () {
						    let sizes = {};
						    sizes['ea2f0ee4d5cbb25e1ee6c7c4378fee7b'] = {};
						    sizes['ea2f0ee4d5cbb25e1ee6c7c4378fee7b']['items_per_row'] = '5';
						    sizes['ea2f0ee4d5cbb25e1ee6c7c4378fee7b']['width'] = '1100px';
						    sizes['ea2f0ee4d5cbb25e1ee6c7c4378fee7b']['height'] = '3120px';
						    sizes['ea2f0ee4d5cbb25e1ee6c7c4378fee7b']['breakpoint_min'] = '1150px';
						    sizes['d2f9bff7f63c0d6b7c7d55510409c19b'] = {};
						    sizes['d2f9bff7f63c0d6b7c7d55510409c19b']['items_per_row'] = '3';
						    sizes['d2f9bff7f63c0d6b7c7d55510409c19b']['width'] = '678px';
						    sizes['d2f9bff7f63c0d6b7c7d55510409c19b']['height'] = '5220px';
						    sizes['d2f9bff7f63c0d6b7c7d55510409c19b']['breakpoint_min'] = '720px';
						    sizes['d2f9bff7f63c0d6b7c7d55510409c19b']['breakpoint_max'] = '1149.9px';
						    sizes['72e5146e7d399bc2f8a12127e43469f1'] = {};
						    sizes['72e5146e7d399bc2f8a12127e43469f1']['items_per_row'] = '2';
						    sizes['72e5146e7d399bc2f8a12127e43469f1']['width'] = '442px';
						    sizes['72e5146e7d399bc2f8a12127e43469f1']['height'] = '7740px';
						    sizes['72e5146e7d399bc2f8a12127e43469f1']['breakpoint_min'] = '480px';
						    sizes['72e5146e7d399bc2f8a12127e43469f1']['breakpoint_max'] = '719.9px';
						    sizes['5ecdcca63de80fd3d4fbb36295d22b7d'] = {};
						    sizes['5ecdcca63de80fd3d4fbb36295d22b7d']['items_per_row'] = '1';
						    sizes['5ecdcca63de80fd3d4fbb36295d22b7d']['width'] = '0px';
						    sizes['5ecdcca63de80fd3d4fbb36295d22b7d']['height'] = '15510px';
						    sizes['5ecdcca63de80fd3d4fbb36295d22b7d']['breakpoint_max'] = '479.9px';
						    new portfolio( {
						      id: 'imObjectPortfolio_14_127',
						      sizes: sizes,
						      items_margin_hor: '30px', 
						      items_margin_ver: '30px', 
						      items_height: '180px',
						      items_effect : 'fadeInDown'
						    });
						  })
						</script>
						
						</div>
						
						<div id="imPageRow_2" class="imPageRow imParallax">
						<div id="Delimitador"></div>
						<div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; overflow: hidden;"><div id="imPageRowGraphics_2"></div></div>
						</div>
						<div id="imCell_121" class="animable rubberBand"> <div id="imCellStyleGraphics_121"></div><div id="imCellStyleBorders_121"></div><div id="imTextObject_14_121">
							<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imTextObject_14_121_tab0" style="opacity: 1; ">
							<div class="text-inner">
								<div class="imTACenter"><br></div>
								<div class="imTACenter">
									<div>
										<b><span class="fs36lh1-5 cf1">Agrupamos a las instituciones educativas particulares del país, para fortalecer la educación privada a nivel nacional.</span></b>
									</div>
								</div>
							</div>
							</div>
						
						</div>
						</div>
						<script>
							x5engine.boot.push(function () {
								x5engine.utils.onElementInViewPort($('#imCell_121').get(0), function () {
									x5engine.utils.revealObject($("#imCell_121"))
								}, 100);
							});
						</script>
						<div id="imPageRow_3" class="imPageRow">
						
						</div>

						<div id="imCell_128" class="">
							<div id="imCellStyleGraphics_128"></div>
							<div id="imCellStyleBorders_128"></div>
							<div id="imTextObject_14_128">
								<div data-index="0" class="text-tab-content grid-prop current-tab " id="imTextObject_14_128_tab0" style="opacity: 1; ">
									<div class="text-inner">
										<div class="imTAJustify mb-3"><span class="fs18lh1-5 cf1">FEDEPAL está afiliada a la Cámara de Comercio de Quito CCQ, tenemos un convenio a través del cual algunos beneficios de la CCQ son extendidos hacia las instituciones Federadas.</span></div>

										<div class="imTAJustify mb-3"><span class="fs18lh1-5 cf1">Las IE Federadas reciben Asesoramiento sin costo en preguntas jurídicas educativas generales y consultas gratuitas en derecho educativo, a través de procedimientos previamente establecidos canalizados a través de Secretaría.</span></div>

										<div class="imTAJustify mb-3"><span class="fs18lh1-5 cf1">Con base a las necesidades y situaciones que se van presentando, organizamos charlas y conservatorios con temas específicos para solventar y apoyar a nuestros federados en diferentes áreas (laboral, tributaria, académica, tecnológica, entre otros)</span></div>

										<div class="imTAJustify mb-3"><span class="fs18lh1-5 cf1">Asesoría Académica Pedagógica sin costo, bajo un procedimiento establecido, canalizados a través de Secretaría.</span></div>

										<div class="imTAJustify mb-3"><span class="fs18lh1-5 cf1">Eventos académicos, sociales y culturales, con temas de interés para la educación privada y la gestión de las instituciones educativas.</span></div>

										<div class="imTAJustify mb-3"><span class="fs18lh1-5 cf1">Talleres y capacitaciones que engloban las necesidades educativas de nuestros asociados.</span></div>

										<div class="imTAJustify mb-3"><span class="fs18lh1-5 cf1">Alianzas con proveedores de servicios, plataformas y productos educativos, con tarifas preferenciales para las instituciones afiliadas.</span></div>

										<div class="imTAJustify mb-3"><span class="fs18lh1-5 cf1">Representación de la Educación Particular frente a los entes del Estado (Presidencia de la República, Asamblea Nacional y Ministerio de Educación).</span></div>
									</div>
								</div>

							</div>
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

		<script>
			$(document).ready(function () {
			var container = $("#pnl_portafolio_socios");
			var data = <?= $socios ?>;

			if (data && Array.isArray(data)) {
				// Lista de prioridad con sus IDs correspondientes
				let prioridad = {
					"Colegio Frances de Quito": [16],
					"UNIDAD EDUCATIVA PARTICULAR DE AMÉRICA MARÍA A. CARRILLO DE MATA M.": [6],
					"Colegio Dalcroze": [29],
					"Colegio intisana": [24],
					"APCH": [9],
					"Rouuseau": [49],
					"ISM": [27, 28],
					"Planeta Azul": [53]
				};

				// Separar registros prioritarios y no prioritarios
				let prioritarios = [];
				let otros = [];

				data.forEach(item => {
					let agregado = false;
					for (let key in prioridad) {
						if (prioridad[key].includes(parseInt(item.id))) {
							prioritarios.push(item);
							agregado = true;
							break;
						}
					}
					if (!agregado) {
						otros.push(item);
					}
				});

				// Ordenar prioritarios según la lista dada
				let ordenados = [];
				for (let key in prioridad) {
					prioridad[key].forEach(id => {
						let encontrado = prioritarios.find(item => parseInt(item.id) === id);
						if (encontrado) ordenados.push(encontrado);
					});
				}

				// Concatenar los prioritarios con los demás
				let listaFinal = [...ordenados, ...otros];

				// Renderizar los datos en la interfaz
				listaFinal.forEach((item, index) => {
					let id_categoria = (item.region === "Sierra") ? "087slr7i" : 
									(item.region === "Amazonía") ? "z0yjwlp1" : "";
					let itemUrl = item.url || '#';

					let linkHtml = `<a href="#" onclick="abrirVentanaEmergente('${itemUrl}'); return false;">Link</a>`;

					let block = `
					<div id="ifr_socios_${item.id}" class="portfolio__card ${item.id} overlay-effect-follow image-effect-zoom" data-index="${index}" data-ts=""
						data-category-id="${id_categoria}" data-category-text="${item.region || ''}">
						<div class="portfolio__content">
							<img src="${item.foto || 'images/Logo-Atenas-UE_efif7e52.png'}" alt="" width="800" height="777">
							<div class="portfolio__card__bottom-bar">
								<div class="portfolio__card__bottom-bar__title">${item.institucion || 'Título no disponible'}</div>
							</div>
							<div class="portfolio__card__overlay">
								<div class="portfolio__card__overlay__content">
									<div class="portfolio__card__overlay__title">${item.institucion || 'Título no disponible'}</div>
									<div class="portfolio__card__overlay__button">
										${linkHtml}
									</div>
								</div>
							</div>
						</div>
					</div>`;

					container.append(block);
				});
			} else {
				console.error("Los datos no contienen un array válido.");
			}
			});

			function abrirVentanaEmergente(url, width = 1920, height = 1080) {
				// Obtener el tamaño de la pantalla
				let screenWidth = window.screen.width;
				let screenHeight = window.screen.height;

				// Calcular la posición centrada
				let left = (screenWidth - width) / 2;
				let top = (screenHeight - height) / 2;

				// Opciones de la ventana
				let opciones = `width=${width},height=${height},top=${top},left=${left},resizable=yes,scrollbars=yes`;

				// Abrir la ventana emergente
				let nuevaVentana = window.open(url, "ventanaEmergente", opciones);

				// Enfocar la ventana (si el navegador lo permite)
				if (nuevaVentana) {
					nuevaVentana.focus();
				} else {
					alert("Permite las ventanas emergentes para ver el contenido.");
				}
			}

		</script>

	</body>
</html>
