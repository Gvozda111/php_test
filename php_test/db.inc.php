<?php 
$servername = "localhost";
$dbname="test";
$username = "root";
$password = "";

try{
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
    $sql="CREATE DATABASE IF NOT EXISTS `test` ";
    $db->exec($sql);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

return $db;
} catch (PDOException $e){
    var_dump($e);
    return false;
}

$db= null;

?>