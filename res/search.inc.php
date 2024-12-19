<?php

/*****************
	GENERAL SETTINGS
*****************/
$imSettings['search']['general'] = array(
	'menu_position' => 'left',
	'defaultScope' => array(
		'0' => 'home.html',
		'11' => 'capacitaciones.html',
		'14' => 'socios.html',
		'15' => 'contactos.html',
		'16' => 'ficha-de-afiliacion.php'
	),
	'extendedScope' => array(
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
	'2212' => array(
		'Folder' => 'web\DATOS',
		'DefaultText' => '<p>¡Haz clic aquASDASDASDASDASDí para introducir el texto por defecto!</p>',
		'Page' => 'convenios.php',
		'PageTitle' => 'Convenios',
		'ObjectTitle' => '',
		'ObjectId' => 'dynObj_12_22'
	)
);

// End of file search.inc.php