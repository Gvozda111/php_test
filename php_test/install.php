<?php 
require './db.inc.php';

$stmt_createUsersTable = $db->prepare("
    CREATE TABLE IF NOT EXISTS `users`(
        `id` int AUTO_INCREMENT PRIMARY KEY,
        `name` varchar(30),
        `email` varchar (30),
        `password` varchar (32)
    )
");
$stmt_createUsersTable->execute();






?>