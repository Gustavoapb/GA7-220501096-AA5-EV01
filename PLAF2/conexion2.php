<?php
$servername = "localhost";
$database = "plaf_creaciones";
$username = "root@localhost";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database, $Apellidos, $Email, $Repetir_Contraseña);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


    $username = $_POST["usuario"];
    $password = $_POST["contraseña"];
    $Apellidos = $_POST["Apellidos"];
    $Email = $_POST["Email"];
    $Repetir_Contraseña= $_POST["Repetir Contraseña"];

    $sql = "SELECT * FROM usuario WHERE usuario = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if ($contraseña == $row["contraseña"]) {
            
            echo "Inicio de sesión exitoso";
        } else {

            echo "Contraseña incorrecta";
        }
    }
?>
