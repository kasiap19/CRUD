<?php
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'root';
$db_database	= 'phpVersion'; 


$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>