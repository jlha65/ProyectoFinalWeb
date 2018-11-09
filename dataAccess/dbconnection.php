<?php
$DB_PASS = 'root';
$DB_NAME = 'user';
$DB_HOST = 'localhost';
$DB_USER = 'root';
try{
    $DB_CON = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME",$DB_USER,$DB_PASS);
    $DB_CON->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$dbConnection->exec("set names utf8");
    return $dbConnection;
    echo("success");
} catch(PDOException $ex){
    echo $ex->getMessage();
}
?>
