<?php
// ESTE PHP SE HIZO PARA PROTEGER LAS PÁGINAS SIN ANTES INICIAR SESIÓN

    session_start();

    //!: SI NO isset: EXISTE LA VARIABLE SESIÓN usuario HAZ LO SOGUIENTE
    if(!isset($_SESSION['usuario'])){
      //ECHO ES MENSAJE
      echo '
      <script>
        alert("Por favor, debes iniciar sesión");
        window.location = "index.php";
      </script>
      ';
      // DESTRUIR CUALQUIER SESIÓN QUE EXISTA
      session_destroy();
      // CON DIE, EL CÓDIGO SE MUERE, SE DETIENE.
      die();
    }

// AQUÍ SÍ ES MUY NECESARIO CERRAR EL CÓDIGO PHP CON ? Y >
// YA QUE LUEGO SEGUIRÁ CON EL HTML
?>

<!-- --------------------------------------------------------------------------------------- -->
<!-- CÓDIGO HML BIENVENIDA -->
<!DOCTYPE html>
<html>
<head>
  <title>Bienvenido(a)</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: linear-gradient(to bottom, #e8f1f8, #bed4e6);
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
      text-align: center;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: #892929;
    }
    
    h1 {
      font-size: 48px;
      color: #892929;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
    
    p {
      font-size: 24px;
      color: #666666;
      margin-bottom: 30px;
    }
    
    .btn {
      display: inline-block;
      padding: 12px 24px;
      font-size: 18px;
      color: #ffffff;
      background-color: #337ab7;
      border-radius: 4px;
      text-decoration: none;
      transition: background-color 0.3;
    }
    
    .btn:hover {
      background-color: #23527c;
    }
  </style>
</head>
<body>
  </div>
</body>
</html>
