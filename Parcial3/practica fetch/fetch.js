 $(document).ready(function() {


 document.getElementById("btnfetch").addEventListener("click",function()
 {
  let promesa = fetch('registro.php');
  promesa.then( respuesta => respuesta.json() )
         .then(datos => console.log(datos) );

         fetch('registro.php')
            .then(respuesta => respuesta.json())
              .then(datos => console.log(datos));



 });
 });