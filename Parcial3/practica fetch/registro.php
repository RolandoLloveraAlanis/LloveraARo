<?php

$registro['nombre']  ='Rolando';
$registro['paterno'] ='Llovera';
$registro['materno'] ='Alanis';
$registro['edad'] ='22';
$registro['correo'] ='rolando.llovera@hotmail.com';
$registro['pass']  ='hola';
$registro['ntarjeta']       ='1234 6789 0123 4567';
$registro['pin']       ='789';
$registro['vigencia']       ='12/2024';

$registroJson = json_encode($registro);
echo $registroJson;
?>