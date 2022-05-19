<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="iconos/1.png">

    <title>SharkSmart</title>
    <!-- Bootstrap core CSS -->
 

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
      <script src="fetch.js"></script>
       
  </head>

  <body>
    <!-- Modal insertar -->
          <form class="form">

            <div class="row">
              <div class="col-md-12">            
                <label  for="control1" class="col-form-label">Nombre(s):</label>
                <input type="text" name="nombre" id="nombre" class="form-control"  required="">
              </div>
              <div class="col-md-6">            
                <label  for="grupo1" class="col-form-label">Apellido Paterno:</label>
                <input type="text" name="paterno" id="paterno" class="form-control"  required="">
              </div>
              <div class="col-md-6">            
                <label  for="nombre1" class="col-form-label">Apellido Materno:</label>
                <input type="text" name="materno" id="materno" class="form-control"  required="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">            
                <label  for="especialidad1" class="col-form-label">Edad</label>
                <input type="text" name="edad" id="edad" class="form-control"  required="">
              </div>
            </div>
            <div class="row">
             <div class="col-md-6">            
              <label  for="especialidad1" class="col-form-label">Correo electronico:</label>
              <input type="text" name="correo" id="correo" class="form-control"  required="">
            </div>
            <div class="col-md-6">            
              <label  for="especialidad1" class="col-form-label">Contraseña:</label>
              <input type="password" name="pass" id="pass" class="form-control" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">            
              <label  for="especialidad1" class="col-form-label">Numero de tarjeta</label>
              <input type="text" name="ntarjeta" id="ntarjeta" class="form-control"  required="">
            </div>

            <div class="col-md-4">            
              <label  for="especialidad1" class="col-form-label">PIN</label>
              <input type="password" name="pin" id="pin" class="form-control"  required="">
            </div>
          </div>
           <div class="row">
              <div class="col-md-3">            
                <label  for="especialidad1" class="col-form-label">Vigencia</label>
                <input type="text" name="vigencia" id="vigencia" class="form-control"  required="">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id= "cancelar" class="btn btn-secondary" data-dismiss="modal" title="Se cancela la operacion">Cancelar</button>

              <button type="button" id="registro"class="btn btn-primary" title="Se registraran tus datos para darte de alta">Registrarse</button><br>
              <button id="btnjson" type="button" class="btn btn-primary" title="Obtiene Json">Json</button>
              <button id="btnfetch" type="button" class="btn btn-primary" title="Obtiene Fetch">Fetch</button>
              
            </div>
            <div id="alerta" class="alert alert-warning alert-dismissible collapse" role="alert">
              <strong>FELICIDADES</strong> se te ha registrado con exito
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </form>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="jquery-slim.min.js"><\/script>')</script>
       
         

        <script>
          $(document).ready(function(){
            $('#registro').click(function(){
              $('#alerta').show();
            });
          });

        </script>
      </body>
      </html>