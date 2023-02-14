<?php 
$CONFIG = [
	'dbdriveroptions' => [
		PDO::MYSQL_ATTR_SSL_CA => '/var/www/html/config/DigiCertGlobalRootCA.crt.pem',
		PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => true,
	],
];