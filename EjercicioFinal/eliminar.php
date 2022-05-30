<?php


include("conexion.php");
$con=conectar();


$rol=$_GET['id'];


$sql="DELETE FROM usuario WHERE id= '$rol'";
$query=mysqli_query($con,$sql);

if($query){
   
    header('location: listareliminar.php');
    
}else{
   
}
?>