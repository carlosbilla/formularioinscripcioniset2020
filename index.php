<?php
    $db_connection = pg_connect("host=ec2-174-129-253-47.compute-1.amazonaws.com dbname=dd9lraajhtiljc user=xeuhldijwddzdw password=3309ad02e81eebea23fdb7fbd8ce55cd78a9f6db4d6ea705678ba9c070192dcc");
    $result = pg_query($db_connection, "SELECT 'lastname'");
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bare - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $result; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <style>
    h1, h2{
      text-align: center;
    }
    label{
      font-weight: bold;
    }
  </style>
  <h1>INSTITUTO SUPERIOR DE ESTUDIOS TECNICOS</h1>
  <h2>FICHA DE INSCRIPCION</h2>
  <form>

      
    <div class="row">
      <div class="col">
        <div class="container-fluid">
          <label for="carrera">Seleccionar carrera: </label>
          <select class="form-control">
            <option>Manipulacion de alimentos</option>
            <option>Instrumetacion quirurgica</option>
            <option>Tecnico en programación</option>
          </select>
          <br>
          <label for="nombre">Nombre/s: </label>
          <input type="text" name="nombre" id="nombre" required>
          <label for="apellido">Apellido/s: </label>
          <input type="text" name="apellido" id="apellido" required><br>
          <label for="dni">DNI: </label>
          <input type="number" name="dni" id="dni" required><br><br>
          <label for="edad">Edad:  </label>
          <input type="number" name="edad" id="edad">años<br><br>
          <label for="nacionalidad">Nacionalidad:  </label>
          <input type="text" name="nacionalidad" id="nacionalidad"><br><br>
          <label for="tituloSecundario">Titulo secundario:  </label>
          <input type="text" name="tituloSecundario" id="tituloSecundario"><br><br>
          <label for="nroDeRegistro">Nro. de registro: </label>
          <input type="number" name="nroDeRegistro" id="nroDeRegistro"><br><br>
          <label for="expedidoPor">Expedido por:  </label><br>
          <p><small>Institucion que expide el titulo secundario (Ejemplo: Escuela Tecnica n°5)</small></p>
          <input type="text" name="expedidoPor" id="expedidoPor"><br><br>
          <label for="direccion">Direccion: </label>
          <input type="text" name="direccion" id="direccion" required><br><br>
          <label for="telefonoFijo">Telefono fijo: </label>
          <input type="number" name="telefonoFijo" id="telefonoFijo">
          <label for="celular">Celular: </label>
          <input type="number" name="celular" id="celular" required><br><br>
          <label for="correoElectronico">Correo electronico:   </label>
          <input type="email" name="correoElectronico" id="correoElectronico"  required><br><br>
          <label for="firma">Firma: </label><br><br><br><br>
          <center><input type="submit" name="Enviar"></center>
        </div>
      </div>
    </div>
</form>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
