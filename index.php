<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <form class="form" action="bd/loguear.php" method="POST"> 
    <img src="img/red.jpg">
    <p></p>
    <div>
        <input type="email" class="form-control border border-dark" name="email" id="email" placeholder="Correo">
    </div>
    <br>
    <div>
        <input type="password" class="form-control border border-dark" name="pass" id="pass" placeholder="Contraseña">
    </div>
    <br>
    <button class="btn btn-primary" href="welcome.php">Ingresar</button>
    </section> 
</body>
</html>