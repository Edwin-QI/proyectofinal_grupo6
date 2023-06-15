<?php
$servername = "localhost";
$database = "proyectofinal_grupo6"; //nombre de la base de datos
$username = "root";
$password = "";
// Creando la conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// Comprobando conexion
    /*if(!$conn) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    echo "Conexion exitosa";
    mysqli_close($conn); */
?>