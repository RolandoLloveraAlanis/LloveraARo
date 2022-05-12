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
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>


          <form action="registropremium.php" method="POST">

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
            <div class="col-md-3">            
              <label  for="especialidad1" class="col-form-label">Tipo de tarjeta</label>
              <select  name="tarjeta" id="tarjeta" class="form-control"  required="">
                <option value="mastercard">Mastercard</option>
                <option value="visa">Visa</option>
              </select>
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
              <button type="button" id= "btnjson" >Json</button>
              
            </div>
            <div id="alerta" class="alert alert-warning alert-dismissible collapse" role="alert">
              <strong>FELICIDADES</strong> se te ha registrado con exito
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </form>
