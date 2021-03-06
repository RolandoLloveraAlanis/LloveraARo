<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

	<title>Rolando Llovera Alanis</title>
</head>
<body>

  <div>
  <div class="container mb-3 mt-3">
  <table id="example" class="table table-striped " style="width:100%">
        <thead>
            <tr>
                <th>NIVEL</th>
                <th >PERIODO</th>
                <th >INSTITUCION EDUCATIVA</th>
                <th >DOCUMENTOS OBTENIDOS</th>
                <th >COMENTARIOS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Preescolar/Kinder</td>
                <td>2005-2006</td>
                <td>Preescolar Emma Concepcion Rocha Gomez</td>
                <td>Diploma de disciplina</td>
                <td>Lo unico que recuerdo fue el como batalle para aprenderme el nombre del kinder</td>
            </tr>
              <tr>
                <td>Educacion Primaria</td>
                <td>2006-2012</td>
                <td>Escuela Primaria Jose Vasconcelos</td>
                <td>Diplomas por buen desempeño obteniendo el 2 lugar de mi generacion, certificado de primaria, reconocimientos por concursos de oratoria y escolta</td>
                <td>Creo que fue de mis mejores epocas por no decir que las unicas, puesto que me desempeñe como orador en 4° y 5°, tambien como sargento de la escolta en 6°, di el discurso de despedida en la graduacion</td>
            </tr>
                <tr>
                <td>Eduacion Secundaria</td>
                <td>2012-2015</td>
                <td>Escuela Secundaria General No. 7 Gral. Emiliano Zapata</td>
                <td>Certificado de secundaria</td>
                <td>Lo unico reelevanteque hice fue pintar un mural en la barda de la escuela que desaparecio al siguiente año</td>
            </tr>
                <tr>
                <td>Educacion media superior</td>
                <td>2015-2018</td>
                <td>Cbtis 137</td>
                <td>Certificado de preparatoria,titulo de tecnico en programacion, reconocimiento por concurso de la OMI</td>
                <td></td>
            </tr>
                <tr>
                <td>Educacion superior</td>
                <td>2018-...</td>
                <td>Instituo Tecnologico de Nuevo Laredo</td>
                <td></td>
                <td></td>
            </tr>
	   </tbody>
    </table>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        	$(document).ready(function(){
		$('#example').DataTable({
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
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>