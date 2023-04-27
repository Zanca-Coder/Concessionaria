<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'conssessionaria';

try{
    $connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(Exception $e){
    echo $e->getMessage();
    exit;
}