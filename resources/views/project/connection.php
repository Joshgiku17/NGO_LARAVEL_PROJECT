<?php
$dbhost="localhost";
$dbname="NGO";
$dbuser="root";
$dbpassword="";

try{
    $dbcon= new PDO("mysql:host=$dbhost;$dbname",$dbuser,$dbpassword);
    echo "successfuly connected";
}catch(Exception $e){
    Echo "connected failed".$e->getMessage();
}
?>