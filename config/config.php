<?php
define('BASE_URL', 'http://php-vnexpress.local/');
define('ADMIN_URI', 'backendfgh');
define('ADMIN_URL', BASE_URL.ADMIN_URI);
// Database connectivity setup
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'vnexpress');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);
