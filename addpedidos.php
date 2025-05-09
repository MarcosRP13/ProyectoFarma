<?php
require_once 'autoloader.php';
$modelo = new Model();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Pedidos</title>
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

    footer {
    background-color: rgb(26, 196, 74);
    padding: 10px;
    text-align: center;
    color: white;
    position: fixed;
    bottom: 0;
    width: 100%;
    }
    
    footer a {
      color: white;
      text-decoration: none;
    }
    footer a:hover {
      color: #ddd;
    }
    
    body {
      padding-bottom: 100px;
    }

    .formulario {
        background-color: #f5fff9;
        border: 1px solid #b2eac4;
        border-radius: 12px;
        padding: 30px;
        max-width: 500px;
        margin: 40px auto;
    }

    .formulario label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: bold;
    }

    .formulario button {
        background-color: rgb(26, 196, 74);
        color: white;
        padding: 12px 18px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        width: 100%;
    }

    input {
        padding: 10px;
    }
</style>
</head>
<body>
<nav class="navbar">
    <div class="logo"><h1>Farmaya</h1></div>
    <ul class="nav-links">
      <li><a href="acerca.php">Acerca</a></li>
      <li><a href="clientes.php">Clientes</a></li>
      <li><a href="farmacias.php">Farmacias</a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="pedidos.php">Pedidos</a></li>
      <li><a href="registros.php">Registros</a></li>
    </ul>
  </nav>
  <form class="formulario" action="procesarPedidos.php" method="post">
  <label for="tupedcode">  <?php $modelo->mostrarNuevoCodigoPedido(); ?>  </label><br>
  <label for="codpe">Codigo Pedido:</label><br>
  <input type="text" name="codpe" id="Codigo Pedido" required><br><br>

  <label for="canted">Cantidad:</label><br>
  <input type="text" name="canted" id="Cantidad"><br><br>

  <label for="codlie">Codigo Cliente:</label><br>
  <input type="text" name="codlie" id="Codigo Cliente" required><br><br>

  <label for="codrm">Codigo Farmacia:</label><br>
  <input type="text" name="codrm" id="Codigo Farmacia" required><br><br>

  <label for="codrod">Codigo Producto:</label><br>
  <input type="text" name="codrod" id="Codigo Producto" required><br><br>

  <input type="submit" value="Enviar">
</form>
<footer>
<p>&copy; 2025 Farmaya. Todos los derechos reservados.</p>
    <p>
      <a href="principal.php">Inicio</a> |
      <a href="acerca.php">Acerca de</a> |
      <a href="registros.php">Contacto</a>
    </p>
</footer>
</body>
</html>