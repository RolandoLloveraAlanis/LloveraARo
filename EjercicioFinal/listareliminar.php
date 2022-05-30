<?php
include("conexion.php");
$con = conectar();


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">

 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
  
  
<script>
	$(document).ready(function(){
		$('#tablausuario').DataTable({
			"order": [[1, "asc"]],
			"language":{
				"lengthMenu": "Mostrar _MENU_ registros por pagina",
				"info": "Mostrando pagina _PAGE_ de _PAGES_",
				"infoEmpty": "No hay registros disponibles",
				"infoFiltered": "(filtrada de _MAX_ registros)",
				"loadingRecords": "Cargando...",
				"processing":     "Procesando...",
				"search": "Buscar:",
				"zeroRecords":    "No se encontraron registros coincidentes",
				"paginate": {
					"next":       "Siguiente",
					"previous":   "Anterior"
				},					
			}
		});	
	});	
</script>

<style>

.dropdown-menu
{
  color: #16181b;
  text-decoration: none;
  background: teal;
}
.dropdown-item:hover{
  background-color: darkcyan !important;
  font-size: 15px;
  
}
</style>


  <title>ELIMINAR</title>
</head>

<body>
     <!-- Inicio barra de navegacion-->
     <nav class="navbar navbar-inverse sidebarNavigation" data-sidebarClass="navbar-inverse">

    <div class="container-fluid">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle left-navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="crud.php">MENU</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          
          <li><a href="listarmodificar.php">Modificar Alumno</a></li>



        </ul>
      
      </div>
    </div>
  </nav>
    <!-- Fin barra de navegacion-->


  <!-- Formulario para dar de alta un usuario-->

    <div class="container mt-5">
        <div class="col-md-12 ">
            <?php
         
            $consulta = "SELECT id,apellidop,apellidom,nombre FROM usuario";

            if (!$resultado = $con->query($consulta)) {
            echo "Lo sentimos, no se pudo realizar la consulta.";
            exit;
            }
            ?>
            <div class="table-responsive">
                <table class="table table-striped " id="tablausuario">
                    <thead>
                    <tr>
                        <th class="text-center">Id </th>
                        <th> Apellido parterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        
                        <th class="text-center">Eliminar</th>
			
                        

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($filas = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <tr>
                        <td align="center"><?php echo $filas['id'] ?></td>
                        <td><?php echo $filas['apellidop'] ?></td>
                        <td><?php echo $filas['apellidom'] ?></td>
                        <td><?php echo $filas['nombre'] ?></td>
                       
                        <th class="text-center"><a href="#" data-href="eliminar.php?id=<?php echo $filas['id'] ?> " data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></th>
			

                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  <!-- Fin del formulario -->


  <!-- Modal--Eliminar-->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
        </div>

        <div class="modal-body">
          ¿Desea eliminar este usuario?
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger btn-ok">Eliminar</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

      $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');

    });
  </script>





</body>

</html>