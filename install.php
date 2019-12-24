<?php

require ('config.php');

try {
$connection = new \PDO($host, $user, $password, $options);
    
$sql = file_get_contents('data/init.sql');
$connection->exec($sql);
echo 'tabellen zijn gemaakt';
} catch(PDOException $e) {
    echo "Er is iets fout gelopen: {$e->getMessage()}";
}