<?php
$host="127.0.0.1:3306";
$user="yayo";
$password="Marino21";
$dbname="datos";

$conexion = new mysqli($host, $user, $password, $dbname);

if($conexion->connect_error){
    echo "no hay conexion";
    
}else{
    
} 
?>
