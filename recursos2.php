<?php require_once("res/x5engine.php"); ?>
<?php require 'vendor/autoload.php';

// Ruta al archivo JSON de la cuenta de servicio
$credentialsPath = __DIR__ . '/credentials.json';

// Crear una instancia del cliente de Google usando la cuenta de servicio
$client = new Google_Client();
$client->setAuthConfig($credentialsPath);
$client->addScope(Google_Service_Drive::DRIVE_READONLY);

// Crear una instancia del servicio de Google Drive
$service = new Google_Service_Drive($client);

// IDs de las carpetas raíz con sus nombres
$rootFolders = [
    "1DUSTOKjUdDTUGzDskelsgXrvPLDKMZmQ" => "ACUERDOS MINISTERIALES 2024",
    "1ivbrVM3kjWnKHNoA2Lj3ZfutF-kr32-W" => "LINEAMIENTOS 2024",
    "1bwmuIrM366mlfNjTf90VQK4WTnjp6Dzm" => "RESOLUCIONES 2024"
];

// Función recursiva para listar carpetas y archivos en el orden del Drive
function listFilesAndFolders($service, $folderId, $indent = 0)
{
    try {
        // Consultar archivos y carpetas dentro de la carpeta actual, ordenados por "name"
        $files = $service->files->listFiles([
            'q' => "'$folderId' in parents",
            'fields' => 'files(id, name, mimeType)',
            'orderBy' => 'folder, name', // Ordena carpetas primero, luego archivos, por nombre
        ]);

        $output = "";

        foreach ($files->getFiles() as $file) {
            // Identificar si es una carpeta
            if ($file->getMimeType() === 'application/vnd.google-apps.folder') {
                // Mostrar la carpeta y listar su contenido recursivamente
                $output .= "<li><strong>📁 {$file->getName()}</strong></li>";
                $output .= "<ul>";
                $output .= listFilesAndFolders($service, $file->getId(), $indent + 1);
                $output .= "</ul>";
            } else {
                // Mostrar el archivo con enlace para previsualización
                $fileUrl = "https://drive.google.com/file/d/{$file->getId()}/preview";
                $output .= "<li>📄 <a href='#' onclick='visualizarArchivo(\"$fileUrl\")'>{$file->getName()}</a></li>";
            }
        }

        return $output;
    } catch (Exception $e) {
        return "Error al listar archivos: " . $e->getMessage();
    }
}

// Crear una lista HTML para cada carpeta raíz
$fileLists = [];
foreach ($rootFolders as $folderId => $folderName) {
    $fileLists[$folderName] = listFilesAndFolders($service, $folderId);
}
?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="es-ES" dir="ltr">

<head>
    <title>Recursos - Fedepal</title>
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
    <meta name="author" content="Corsinf" />
    <meta name="generator" content="Incomedia WebSite X5 Pro 2024.4.8 - www.websitex5.com" />
    <meta property="og:locale" content="es" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://localhost/imsearch.php" />
    <meta property="og:title" content="Búsqueda" />
    <meta property="og:site_name" content="Fedepal" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="style/reset.css?2024-4-8-0" media="screen,print" />
    <link rel="stylesheet" href="style/print.css?2024-4-8-0" media="print" />
    <link rel="stylesheet" href="style/style.css?2024-4-8-0" media="screen,print" />
    <link rel="stylesheet" href="style/template.css?2024-4-8-0" media="screen" />
    <style type="text/css">
        #pluginAppObj_13_12 {
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="pluginAppObj/imHeader_pluginAppObj_04/custom.css" media="screen, print" />
    <link rel="stylesheet" href="pluginAppObj/imFooter_pluginAppObj_12/custom.css" media="screen, print" />
    <link rel="stylesheet" href="pcss/imsearch.css?2024-4-8-0-638709142472444584" media="screen,print" />
    <script src="res/jquery.js?2024-4-8-0"></script>
    <script src="res/x5engine.js?2024-4-8-0" data-files-version="2024-4-8-0"></script>
    <script src="pluginAppObj/imHeader_pluginAppObj_04/main.js"></script>
    <script src="pluginAppObj/imFooter_pluginAppObj_12/main.js"></script>
    <script>
        window.onload = function() {
            checkBrowserCompatibility('El Explorador que estás usando no es compatible con las funciones requeridas para mostrar este Sitio web.', 'El Navegador que estás utilizando podría no ser compatible con las funciones requeridas para poder ver este Sitio web.', '[1]Actualiza tu explorador [/1] o [2]continuar de todos modos[/2].', 'http://outdatedbrowser.com/');
        };
        x5engine.utils.currentPagePath = 'imsearch.php';
        x5engine.boot.push(function() {
            x5engine.imPageToTop.initializeButton({});
        });
    </script>
    <link rel="stylesheet" href="libs/bootstrap.min.css">
    <script src="libs/bootstrap.bundle.min.js"></script>


    <link rel="icon" href="favicon.png?2024-4-8-0-638709142472384571" type="image/png" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TR6L3QCK');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GTM-TR6L3QCK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GTM-TR6L3QCK');
    </script>

    <script>
        function visualizarArchivo(url) {
            document.getElementById('viewer-frame').src = url;
        }
    </script>
    <style>
        /* Configuración global para que la página use toda la pantalla */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        /* Contenedor principal que ocupa toda la pantalla */
        #imPageExtContainer {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Contenedor central con sidebar e iframe */
        main {
            display: flex;
            flex: 1;
            min-height: calc(100vh - 150px);
            overflow: hidden;
            margin-bottom: 30px;

        }

        /* Contenedor de los documentos y visor */
        #imContentGraphics {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
        }

        /* Sidebar (Lista de documentos) - Ocupa el 50% de la pantalla */
        .sidebar {
            height: 80vh;
            overflow-y: auto;
            color: #34538b;
			text-decoration: none;
            width: 50%;
            min-width: 50%;
            max-width: 50%;
            background: #f8f9fa;
            padding: 15px;
            border-right: 2px solid #ddd;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }


        /* Contenedor del iframe */
        .viewer {
            width: 50%;
            max-width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
        }

        /* Ajustar el iframe para ocupar todo el espacio disponible */
        .viewer iframe {
            width: 100%;
            height: 100vh;
            min-height: 500px;
            border: none;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }


        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            /* Espaciado entre botones */
            margin-bottom: 30px;
            /* Espaciado con el footer */
        }

        .button {
            background-color: #e68d24;
            /* Color naranja del botón */
            color: white;
            padding: 12px 18px;
            font-size: 16px;
            font: normal normal bold 14pt 'Lato';
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .button:hover {
            background-color: #cc7a00;
        }

        footer {
            width: 100%;
            background: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: relative;
            margin-top: auto;
        }

        @media (max-width: 768px) {
            main {
                flex-direction: column;
            }

            .sidebar,
            .viewer {
                width: 100%;
                max-width: 100%;
            }
        }
    </style>
</head>


<body> <!-- Google Tag Manager (noscript) -->
    <header id="imHeader">
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
                            </li>
                            <li class="imMnMnMiddle imLevel" data-link-paths=",/home.html,/" data-link-anchor="Nosotros" data-link-hash="-1827235661">
                                <div class="label-wrapper">
                                    <div class="label-inner-wrapper"><a href="home.html#Nosotros" class="label" onclick="return x5engine.utils.location('home.html#Nosotros', null, false)">Nosotros</a></div>
                                </div>
                            </li>
                            <li class="imMnMnMiddle imLevel" data-link-paths=",/home.html,/" data-link-anchor="Delimitador" data-link-hash="267966236">
                                <div class="label-wrapper">
                                    <div class="label-inner-wrapper"><a href="home.html#Delimitador" class="label" onclick="return x5engine.utils.location('home.html#Delimitador', null, false)">Directorio</a></div>
                                </div>
                            </li>
                            <li class="imMnMnMiddle imPage" data-link-paths=",/capacitaciones.html">
                                <div class="label-wrapper">
                                    <div class="label-inner-wrapper">
                                        <a class="label" href="capacitaciones.html">
                                            Capacitaciones </a>
                                    </div>
                                </div>
                            </li>
                            <li class="imMnMnLast imLevel" data-link-paths=",/contactos.html" data-link-hash="-1004161921">
                                <div class="label-wrapper">
                                    <div class="label-inner-wrapper"><a href="contactos.html" class="label" onclick="return x5engine.utils.location('contactos.html', null, false)">Contactos</a></div>
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
                    x5engine.boot.push(function() {
                        x5engine.initMenu(imHeader_imMenuObject_02_settings)
                    });
                    $(function() {
                        $('#imHeader_imMenuObject_02_container ul li').not('.imMnMnSeparator').each(function() {
                            var $this = $(this),
                                timeout = 0;
                            $this.on('mouseenter', function() {
                                if ($(this).parents('#imHeader_imMenuObject_02_container-menu-opened').length > 0) return;
                                clearTimeout(timeout);
                                setTimeout(function() {
                                    $this.children('ul, .multiple-column').stop(false, false).fadeIn();
                                }, 250);
                            }).on('mouseleave', function() {
                                if ($(this).parents('#imHeader_imMenuObject_02_container-menu-opened').length > 0) return;
                                timeout = setTimeout(function() {
                                    $this.children('ul, .multiple-column').stop(false, false).fadeOut();
                                }, 250);
                            });
                        });
                    });
                </script>
            </div>
            <div id="imHeader_imObjectImage_03_wrapper" class="template-object-wrapper">
                <div id="imHeader_imObjectImage_03">
                    <div id="imHeader_imObjectImage_03_container"><img src="images/cropped-logosmall.svg" title="" alt="" width="250" height="92" />
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

    <main>
        <div id="imContentGraphics">
            <div class="sidebar">
                <h1>DOCUMENTOS NORMATIVOS</h1>
                <?php foreach ($fileLists as $folderName => $fileList): ?>
                    <h2><?php echo $folderName; ?></h2>
                    <ul>
                        <?php echo $fileList; ?>
                    </ul>
                <?php endforeach; ?>
            </div>

            <!-- Viewer con el iframe -->
            <div class="viewer">
                <iframe id="viewer-frame" src=""></iframe>
            </div>
        </div>

    </main>

    <div class="content">
        <div class="button-container">
            <button type="button" class="button" onclick="x5engine.utils.location('capacitaciones.php', null, false);">
                Repositorio de capacitaciones
            </button>

            <button type="button" class="button" onclick="x5engine.utils.location('fotos.php', null, false);">
                Memorias 2024 - 2028
            </button>
        </div>
    </div>

    <footer id="imFooter">
        <div id="imFooterObjects">
            <div id="imFooter_imTextObject_06_wrapper" class="template-object-wrapper">
                <div id="imFooter_imTextObject_06">
                    <div data-index="0" class="text-tab-content grid-prop current-tab " id="imFooter_imTextObject_06_tab0" style="opacity: 1; ">
                        <div class="text-inner">
                            <div class="imTALeft">
                                <div data-line-height="1" class="imTALeft"><span class="fs15lh1-5"><b><span class="cf1">Contactos</span></b></span></div>
                                <div data-line-height="1.15" class="imTAJustify">
                                    <div><span class="fs11lh1-5 cf2"><a href="tel:+59322489914" class="imCssLink">+593-2248914</a></span></div>
                                    <div>
                                        <div><span class="fs11lh1-5 cf2"><a href="https://api.whatsapp.com/send?phone=+593999247290" class="imCssLink">+593 9 9924 7290</a></span></div>
                                    </div>
                                </div>
                                <div data-line-height="1.15" class="imTAJustify">
                                    <div><span class="fs11lh1-5 cf2">info@fedepal.ec</span></div>
                                </div>
                                <div data-line-height="1.15" class="imTAJustify"><span class="fs11lh1-5 cf2">Quito - Ecuador </span><span class="fs11lh1-5 cf2"><br></span></div>
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
                                <div data-line-height="1" class="imTALeft"><span class="imTAJustify fs11lh1-5 cf2">República del Salvador 525</span><br></div>
                                <div data-line-height="1" class="imTALeft"><span class="imTAJustify fs11lh1-5 cf2">e Irlanda</span></div>
                                <div data-line-height="1" class="imTALeft"><span class="imTAJustify fs11lh1-5 cf2">Edificio Rosanía</span></div>
                                <div data-line-height="1" class="imTALeft"><span class="imTAJustify fs11lh1-5 cf2">Pb Junto al Hotel Dann Carlton</span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="imFooter_imTextObject_09_wrapper" class="template-object-wrapper">
                <div id="imFooter_imTextObject_09">
                    <div data-index="0" class="text-tab-content grid-prop current-tab " id="imFooter_imTextObject_09_tab0" style="opacity: 1; ">
                        <div class="text-inner">
                            <div class="imTALeft">
                                <div data-line-height="1" class="imTALeft">
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
                                        <span class="fs11lh1-5 cf2">
                                            <a href="convenios.php" class="imCssLink" onclick="return x5engine.utils.location('convenios.php', null, false)">Convenios</a>
                                        </span>
                                    </div>
                                    <div>
                                        <a href="socios.php" class="imCssLink" onclick="return x5engine.utils.location('socios.php', null, false)">Portal de Socios</a>
                                    </div>
                                    <div>
                                        <div>
                                            <a href="https://webmail.fedepal.ec/" target="_blank" class="imCssLink"><span class="fs11lh1-5">Webmail</span></a>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="news.php" class="imCssLink" onclick="return x5engine.utils.location('news.php', null, false)">Noticias</a>
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
    x
    <noscript class="imNoScript">
        <div class="alert alert-red">Para utilizar este sitio tienes que habilitar JavaScript.</div>
    </noscript>
    <script>
        $(document).ready(function() {
            function ajustarIframe() {
                let alturaDisponible = $(window).height() - $("header").outerHeight() - $("footer").outerHeight() - 20;
                $("#viewer-frame").css("height", alturaDisponible + "px");
            }
            ajustarIframe();
            $(window).resize(ajustarIframe);
        });
    </script>

</body>

</html>