<?php
define('MYSQL_HOSTNAME','localhost');
define('MYSQL_DATABASE','crudajax');
define('MYSQL_USERNAME','root');
define('MYSQL_PASSWORD','');
try {
    $db = new PDO('mysql:host=' . MYSQL_HOSTNAME . '; dbname=' . MYSQL_DATABASE . '', MYSQL_USERNAME, MYSQL_PASSWORD);
} catch (exception $e) {
    die('Erreur ' . $e->getMessage());
}