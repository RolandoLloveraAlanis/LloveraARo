 $(document).ready(function() {




 $('#btnjson').click(function() {
          $.post('registro.php',{},function(data){

                console.log(data);
                $('#nombre').val(data.nombre);
                $('#paterno').val(data.paterno);
                $('#materno').val(data.materno);
                $('#edad').val(data.edad);
                $('#correo').val(data.correo);
                $('#pass').val(data.pass);
                $('#ntarjeta').val(data.ntarjeta);
                $('#pin').val(data.pin);
                $('#vigencia').val(data.vigencia);

            },'json');
      });

 });