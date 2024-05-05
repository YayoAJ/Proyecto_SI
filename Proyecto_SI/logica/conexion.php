<?php
$host="127.0.0.1";
$port="3306";
$socket="";
$user="root";
$password="Marino21";
$dbname="db";

$conexion = new mysqli($host, $user, $password, $dbname, $port, $socket);

if($conexion->connect_error){
    echo "no hay conexion";
    
}else{
    
} 
?>

