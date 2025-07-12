<?php
$data_source_name = 'mysql:host=mail_db;dbname=freshmail;charset=utf8';
$username = 'root';
$password = '';

try {
    $db = new PDO($data_source_name, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
