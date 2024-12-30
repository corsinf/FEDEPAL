<?php

/*****************
	GENERAL SETTINGS
*****************/
$imSettings['search']['general'] = array(
	'menu_position' => 'left',
	'defaultScope' => array(
		'0' => 'home.html',
		'11' => 'capacitaciones.html',
		'15' => 'contactos.html',
		'16' => 'ficha-de-afiliacion.php'
	),
	'extendedScope' => array(
		'14' => 'socios.php',
		'20' => 'news.php'
	)
);

/*****************
	PRODUCTS SEARCH
*****************/
$imSettings['search']['products'] = array(
);

/*****************
	IMAGES SEARCH
*****************/
$imSettings['search']['images'] = array(
);

/*****************
	VIDEOS SEARCH
*****************/
$imSettings['search']['videos'] = array(
);
$imSettings['search']['dynamicobjects'] = array(
	'120' => array(
		'Folder' => 'web',
		'DefaultText' => '<p>¡Haz clic aquí para introducir el texto por defecto!</p>',
		'Page' => 'news.php',
		'PageTitle' => 'News',
		'ObjectTitle' => '',
		'ObjectId' => 'dynObj_20_01'
	)
);

// End of file search.inc.php