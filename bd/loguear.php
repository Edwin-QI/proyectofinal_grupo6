<?php
    require 'conexion.php';
    session_start();

    $email = $_POST['email']; //guardamos el campo email de la pagina index, en una variable
    $pass = $_POST['pass']; //guardamos la contrasenia de la pagina index, en una variable

    $query = "SELECT COUNT(*) as conteo from usuarios where email = '$email' and password = '$pass' "; //realizamos la consulta a la bd
    $consulta = mysqli_query($conn,$query);
    $array = mysqli_fetch_array($consulta);

    if($array['conteo']>0){
        $_SESSION['username'] = $email;
        header("Location: ../welcome.php");
    }else{
        echo "<script>
            alert('Correo o Contreseña son incorrectos');
            window.location= '../index.php'
            </script>";
    }
?>