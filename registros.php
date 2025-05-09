<?php
require_once "autoloader.php";
$modelo = new Model();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevos Registros</title>
    <style>
            * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    nav.navbar {
      color: white;
      background-color: rgb(26, 196, 74);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
    }

    .logo h1 {
      font-size: 35px;
      font-weight: bold;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .nav-links a {
      text-decoration: none;
      color: white;
      padding: 8px 12px;
      border-radius: 6px;
    }

    .nav-links a:hover {
      background-color: darkgreen;
      color: white;
    }

    .footer {
    background-color: rgb(26, 196, 74);
    padding: 10px;
    text-align: center;
    color: white;
    position: fixed;
    bottom: 0;
    width: 100%;
    }
    
    .footer a {
      color: white;
      text-decoration: none;
    }
    .footer a:hover {
      color: #ddd;
    }
    
    body {
      padding-bottom: 100px;
    }

    p {
        max-width: 800px;
        margin: 40px auto 20px auto;
        font-size: 18px;
        text-align: center;
    }

    a {
        display: inline-block;
        background-color: rgb(26, 196, 74);
        color: white;
        text-decoration: none;
        padding: 12px 20px;
        border-radius: 8px;
        font-size: 16px;
        margin: 10px auto;
        text-align: center;
    }

    a:hover {
        background-color: darkgreen;
    }

    .botonesregistro {
        text-align: center;
        margin-top: 30px;
    }
    </style>
</head>
<body>  
  <nav class="navbar">
    <div class="logo"><h1>Farmaya</h1></div>
    <ul class="nav-links">
    <li><a href="principal.php">Inicio</a></li>
      <li><a href="acerca.php">Acerca</a></li>
      <li><a href="clientes.php">Clientes</a></li>
      <li><a href="farmacias.php">Farmacias</a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="pedidos.php">Pedidos</a></li>
      <li><a href="registros.php">Registros</a></li>
    </ul>
  </nav>
    <p>
        Bienvenido a la pagina de nuevos registros, a continuación podrás registrarte como nuevo cliente o solicitar un nuevo pedido:
    </p>

    <div class="botonesregistro">
  <a href="addclientes.php">Nuevo Cliente</a> 
  <br><br>
  <a href="addpedidos.php">Nuevo Pedido</a>
</div>
    <footer class="footer">
<p>&copy; 2025 Farmaya. Todos los derechos reservados.</p>
    <p>
      <a href="principal.php">Inicio</a> |
      <a href="acerca.php">Acerca de</a> |
      <a href="registros.php">Contacto</a>
    </p>
</footer>
</body>
</html>