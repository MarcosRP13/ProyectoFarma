<?php
require_once "autoloader.php";
$modelo = new Model();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Farmaya - Pedidos</title>
  <link rel="icon" href="logo.png" type="image/png" />
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

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 30px;
    }

    caption {
      caption-side: top;
      text-align: left;
      color: darkgreen;
      font-weight: bold;
      margin-bottom: 15px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
    }

    thead {
      background-color: rgb(26, 196, 74);
      color: white;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
    }

    tbody tr:hover {
      background-color: #c1f0d5;
    }

    @media (max-width: 768px) {
      .nav-links {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }

      table, thead, tbody, th, td, tr {
        display: block;
      }

      tbody tr {
        margin-bottom: 15px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
      }

      tbody td {
        padding: 10px;
        text-align: right;
        position: relative;
      }
    }

    .para {
      margin-top: 20px;
      text-align: right;
    }

    .para a {
      display: inline-block;
      background-color: rgb(26, 196, 74);
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }

    .para a:hover {
      background-color: darkgreen;
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

  <div class="container">
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
        <?php $modelo->showAllPedidos(); ?>
      </tbody>
      <div class="para">
      <a href="estped.php">Pedidos</a> 
</div>
  </div>

</body>
</html>
