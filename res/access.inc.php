<?php

// Users data
$imSettings['access']['users'] = array(
	'mrubio@corsinf.com' => array(
		'id' => '3uhnijca',
		'groups' => array('av8g5bpd'),
		'firstname' => 'Milton',
		'lastname' => 'Rubio',
		'email' => 'mrubio@corsinf.com',
		//'password' => '$2a$11$.0zXMb8N4mO.zGqJ6Q1qD.w1V3ftjToyN8zF5UDkMD8fwQJWYAVOC',
		'password' => '$2a$11$r65R7TpjKM2sGqaOty0PyeuNXG7VgS71aEdeaTl/sLWPzoqzPa1Jm',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => false
	),
	'info@fedepal.ec' => array(
		'id' => 'm4830r87',
		'groups' => array('isanheja'),
		'firstname' => 'Fernanda',
		'lastname' => 'Garzón',
		'email' => 'info@fedepal.ec',
		'password' => '$2a$11$hKzINl9xl03Pin9iCFSp7uFp024M7sKKxOVh2mb3Bx7KS84hPv/s6',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => 'home.html'
	),
	'paco@pepe.com' => array(
		'id' => 'fpj6zs4l',
		'groups' => array('av8g5bpd'),
		'firstname' => 'paco',
		'lastname' => 'pepe',
		'email' => 'paco@pepe.com',
		'password' => '$2a$11$r65R7TpjKM2sGqaOty0PyeuNXG7VgS71aEdeaTl/sLWPzoqzPa1Jm',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => false
	)
);

// Admins list
$imSettings['access']['admins'] = array('3uhnijca', 'fpj6zs4l');

// Page/Users permissions
$imSettings['access']['pages'] = array(
	'13' => array('m4830r87'),
	'17' => array('m4830r87'),
	'18' => array('m4830r87'),
	'20' => array('m4830r87')
);

// Web registration pages
$imSettings['access']['webregistrations_gid'] = '6n0xvqqc';
$imSettings['access']['waitingpages'] = array('12', '14');
$imSettings['access']['entrancepage'] = 'home.html';
$imSettings['access']['dbid'] = '';
$imSettings['access']['dbtable'] = 'w5_almkhpcw_access_management';
$imSettings['access']['datadbtable'] = 'w5_almkhpcw_users_data';
$imSettings['access']['emailfrom'] = 'mrubio@corsinf.com';

// PASSWORD CRYPT

$imSettings['access']['password_crypt'] = array(
	'encoding_id' => 'php_default',
	'encodings' => array(
		'no_crypt' => array(
			'encode' => function ($pwd) { return $pwd; },
			'check' => function ($input, $encoded) { return $input == $encoded; }
		),
		'php_default' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_DEFAULT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		),
		'csharp_bcrypt' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_BCRYPT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		)
	)
);

// End of file access.inc.php