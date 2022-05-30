 $(document).ready(function() {

    $('#btnconsulta').click(function() {
            let parid=prompt("Teclee el ID a consultar");

            $.post('registro.php',{par1:parid},function(data){
              refrescar(data);
              },'json');
        });




   function refrescar(objeto) 
   {
    console.log(objeto);
    $('#idpersona').val(objeto.idpersona);
    $('#nombre').val(objeto.nombre);
    $('#paterno').val(objeto.paterno);
    $('#materno').val(objeto.materno);
    $('#edad').val(objeto.edad);
    $('#correo').val(objeto.correo);
    $('#pass').val(objeto.pass);
    $('#ntarjeta').val(objeto.ntarjeta);
    $('#pin').val(objeto.pin);
    $('#vigencia').val(objeto.vigencia);
  }

});