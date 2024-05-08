<?php
$host="192.168.0.19:3306";
$user="yayo";
$password="Marino21";
$dbname="datos";

$conexion = new mysqli($host, $user, $password, $dbname);

if($conexion->connect_error){
    echo "no hay conexion";
    
}else{
    
} 
?>