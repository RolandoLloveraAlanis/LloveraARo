<?php
include("conexion.php");
$con=conectar();

$id = $_POST['par1'];
$sql = $con->query("SELECT * FROM usuario WHERE id = '$id'");


$row = $sql->fetch_array();


$registro['nombre']  = $row['nombre'];
$registro['paterno'] =$row['apellidop'];
$registro['materno'] =$row['apellidom'];
$registro['edad']    =$row['edad'];
$registro['correo']  =$row['correoelectronico'];
$registro['pass']    =$row['password'];
$registro['ntarjeta']=$row['tarjeta'];
$registro['pin']     =$row['pin'];
$registro['vigencia']=$row['vigencia'];

$registroJson = json_encode($registro);
echo $registroJson;
?>