<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="css/vaidroll.css">
  <link rel="icon" href="iconos/1.png">



  <title>Inicia sesion</title>
  
</head>
<body>
  <br>
      <div class="container">
      <div class="header">
       
      </div>
      </div>

<div class="caja1">
<form method="post" action="#">
<div class="formtlo">¿Que deseas hacer hoy?</div>
  <a class="btn btn-primary" href="nuevoregistro.php">AGREGAR</a> <br><br>
<a class="btn btn-primary" href="listareliminar.php">ELIMINAR</a> <br><br>
<a class="btn btn-primary" href="listarbuscar.php">BUSCAR</a> <br><br>
<a class="btn btn-primary" href="listareditar.php">EDITAR</a> <br><br>



<div align="center">
<img src="iconos/1.png" align="center" height="50" width="50">
</div>
<div class="form-group">
  <?php
     if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
     {
      echo "<div style='color:White ' class='error'>Usuario o contraseña invalido </div>";
          header('Refresh: 1; URL=iniciodesesion.php');
      }
  ?>
  </div>                          
</form>
</div>
<script>
  function verpassword(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password")
	  {
          tipo.type = "text";
      }
	  else
	  {
          tipo.type = "password";
      }
  }
</script>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    </body>
</html>