<?php
  require 'bd/sesion.php';
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informacion Grupo6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="welcome.php">Informacion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="welcome.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" href="informacion.php">Acerca de Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $email ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="bd/cerrar_sesion.php">Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<p></p>
<div class="container">
  <!--h2 class="text-center">Acerca de Nosotros</h2-->
  <div class="abs-center">
    <div class="mb-3">
    <h1 class="text-center">
    <label for="exampleInputEmail1" class="form-label text-center">Somos el grupo No. 6
    </h1>
    <h4 class="text-center">
    <p></p>
    <h2 class="text-center">INTEGRANTES.</p>
    <p></p>
    <p></p>Luis Francisco Ramirez Lopez - 1793-15-22810
    <p></p>Edwin Eleazar Quinon Ico - 1793-16-15691
    <p></p>Nery Jose Cancinos Rodas - 1793-15-2521
    <p></p>Gustavo Adolfo Figueroa - 1793-13-7748
    <p></p>Juan Jose Mena Mendez - 1793-16-8380
    <p></p>Lizbeth Anahí Montiel Méndez - 1793-14-8478
    </h4>
    </label>
    </div>
  </div>
</div>
    </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>