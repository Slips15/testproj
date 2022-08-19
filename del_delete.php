<?php
$dbh = new PDO('mysql: host=localhost; dbname=test_bd', 'root', '');

$id = $_POST['id'];
        
$dbh->query("DELETE FROM `info` WHERE `info`.`id` = " . $id);