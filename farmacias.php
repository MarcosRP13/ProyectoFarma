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
      <li><a href="productos.php">Productos</a></li>
      <li><a href="pedidos.php">Pedidos</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </nav>
  <table>
    <caption>Lista de Farmacias - Farmaya</caption>
    <thead>
      <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo Electrónico</th>
        <th>Dirección</th>
        <th>Ciudad</th>
      </tr>
    </thead>
    <tbody>
    <?php $modelo->showAllFarmacias()?>
    </tbody>
  </table>
</body>
</html>