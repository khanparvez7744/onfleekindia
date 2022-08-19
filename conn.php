<?php
session_start();
$dsn = "mysql:host=localhost;dbname=onfleeki_onfleekdb10";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
?>