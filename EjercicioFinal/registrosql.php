<?php
 include("conexion.php");
 $con=conectar();




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


 


 
 
 
 $sql="INSERT INTO usuario (nombre,apellidop,apellidom,edad,correoelectronico,password,rol,tipotarjeta,tarjeta,pin,vigencia) values (UPPER('$nombre'),UPPER('$paterno'),UPPER('$materno'),UPPER('$edad'),UPPER('$correo'),UPPER('$pass'),1,UPPER('$tipotarjeta'),UPPER('$numtarjeta'),UPPER('$pin'),UPPER('$vigencia'))";   
 
  $query=mysqli_query($con,$sql);
 

  if($query){
    echo "<script>alert('Registrado correctamente'); window.location='crud.php'</script>";
    
}else{
    echo "<script>alert('No se registro correctamente')</script>";
}

?>