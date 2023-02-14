<?php

$host = '<SERVERNAME>.mysql.database.azure.com';
$db   = 'data';
$user = 'user';
$pass = '<PASSWORD>';
$port = "3306";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
    \PDO::MYSQL_ATTR_SSL_CA       => '/usr/local/share/ca-certificates/DigiCertGlobalRootCA.crt.pem'
];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

try {
     $pdo = new \PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$stmt = $pdo->query("SELECT * FROM data");
while ($row = $stmt->fetch()) {
    echo $row['column_name']."<br />\n";
}

phpinfo(); ?>