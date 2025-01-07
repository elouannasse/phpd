<?php
$host = "localhost" ;
$dbname = "chalangephp" ;
$user = "root" ;
$pass = "" ;
$link ;
$dsn = "mysql:host="."$host".";dbname="."$dbname" ; 
$link = new PDO($dsn,$user,$pass);     