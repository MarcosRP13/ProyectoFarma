<?php
require_once "autoloader.php";
$modelo = new Model();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="logo.png">
    <title>Farmaya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<nav class="navbar">
    <div class="logo"><h1>Farmaya</h1>
    </div>
    <ul class="nav-links">
      <li><a href="principal.php">Inicio</a></li>
      <li><a href="acerca.php">Acerca</a></li>
      <li><a href="clientes.php">Clientes</a></li>
      <li><a href="farmacias.php">Farmacias</a></li>
      <li><a href="productos.php">Productos</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </nav>
  <table>
    <caption>Lista de Pedidos - Farmaya</caption>
    <thead>
      <tr>
        <th>Código</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Cantidad</th>
        <th>Código Cliente</th>
        <th>Código Farmacia</th>
        <th>Código Producto</th>
      </tr>
    </thead>
    <tbody>
    <?php $modelo->showAllPedidos()?>
    </tbody>
  </table>
</body>
</html>