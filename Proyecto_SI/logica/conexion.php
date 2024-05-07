<?php
$host="sql113.infinityfree.com";
$user="if0_36499435";
$password="9mHixvYjkY3";
$dbname="if0_36499435_tercera_capa";

$conexion = new mysqli($host, $user, $password, $dbname);

if($conexion->connect_error){
    echo "no hay conexion";
    
}else{
    
} 
?>

