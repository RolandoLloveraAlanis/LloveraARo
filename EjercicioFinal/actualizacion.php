<?php
include("conexion.php");
$con=conectar();



$id = $_POST["usuario_id"];
$nombre=$_POST["nombre"];
$paterno=$_POST["paterno"];
$materno=$_POST["materno"];
$edad=$_POST["edad"];
$correo=$_POST["correo"];
$pass=$_POST["pass"];
$tipotarjeta = $_POST['tarjeta'];
$numtarjeta=$_POST["ntarjeta"];
$pin=$_POST["pin"];
$vigencia=$_POST["vigencia"];





$sql="UPDATE usuario SET nombre=UPPER('$nombre'),apellidop=UPPER('$paterno'),apellidom=UPPER('$materno'),edad=UPPER('$edad'),correoelectronico=UPPER('$correo'),password=UPPER('$pass'),rol=1,tipotarjeta=UPPER('$tipotarjeta'),tarjeta=UPPER('$numtarjeta'),pin=UPPER('$pin'),vigencia=UPPER('$vigencia') WHERE id='$id'";   

$query=mysqli_query($con,$sql);


if($query){
  echo "<script>alert('Modificado correctamente'); window.location='listarbuscar.php'</script>";

}else{
  echo "<script>alert('No se pudo modificar')</script>";
}

?>