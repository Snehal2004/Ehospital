<?php



$db_user = "root";
$db_pass = '1234';
$db_name = "ehospital";

$db = new PDO('mysql:host=localhost;dbname='. $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);