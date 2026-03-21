<?php
// DB credentials. Environment variables let the app run in XAMPP, Apache, or the PHP built-in server.
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_PORT', getenv('DB_PORT') ?: '3306');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_NAME', getenv('DB_NAME') ?: 'carrental');

// Establish database connection.
try {
    $dsn = "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
    $options = array();
    if (defined('Pdo\\Mysql::ATTR_INIT_COMMAND')) {
        $options[constant('Pdo\\Mysql::ATTR_INIT_COMMAND')] = "SET NAMES 'utf8'";
    } elseif (defined('PDO::MYSQL_ATTR_INIT_COMMAND')) {
        $options[constant('PDO::MYSQL_ATTR_INIT_COMMAND')] = "SET NAMES 'utf8'";
    }
    $dbh = new PDO(
        $dsn,
        DB_USER,
        DB_PASS,
        $options
    );
} catch (PDOException $e) {
    exit("Database connection failed. Update DB_HOST/DB_PORT/DB_USER/DB_PASS/DB_NAME in your server environment. Error: " . $e->getMessage());
}
?>
