<?php

/*definiëren van variabelen */
$databaseName = 'Cursist11';
$host = "mysql:host=164.132.193.60:3306;dbname=$databaseName"; //op de connectie string geef ik de database naam mee 
$user = 'Cursist11';
$password = 'Cursist_P5CRSI1311';
$options =     array(
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
