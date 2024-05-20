<?php
use PDO;
use PDOException;
use RuntimeException;
use TypeError;


# Your Google Cloud Platform project ID
$username = "root"; // e.g. 'your_db_user'
$password = ""; // e.g. 'your_db_password'
$dbName = "account"; // e.g. 'your_db_name'
$instanceUnixSocket = "level-studio-421512:asia-northeast3:mydb"; // e.g. '/cloudsql/project:region:instance'
$dbChar = "utf8"; 

$dsn = "mysql:unix_socket=/cloudsql/{$instanceUnixSocket};dbname={$dbName};charset={$dbChar}";

?>
