<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Farmaya</title>
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

    h3 {
      font-weight: bold;
      font-size: 20px;
    }

    img {
      height: 400px;
      width: 200px;
    }

    .lado {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 20px;
      text-align: center;
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
  <div>
    <br><h3>Tu App de Farmacias</h3>
    <p>Tu medicina lista antes de que llegues</p><br>
  </div>

  <div>
    <h3>¿Qué es esta app?</h3>
    <p>
      Esta aplicación web te permite solicitar tus medicamentos a la farmacia antes de salir de casa.<br>
      Así te aseguras de que estén disponibles al momento de recogerlos.<br> 
      Y si necesitas receta, solo tienes que subir una foto.
    </p><br>
  </div>

  <div>
    <h3>Vista previa de la app</h3>

    <div class="lado">
    <div>
      <img src="img/navegacion.jpg">
      <p><i>Busca fácilmente el medicamento que necesitas</i></p>
    </div>

    <div>
      <img src="img/compra.jpg">
      <p><i>Compra tu recete en pocos pasos</i></p>
    </div>

    <div>
      <img src="img/sesion.jpg">
      <p><i>Inicia Sesion</i></p>
    </div>

    <div>
      <img src="img/registro.jpg">
      <p><i>Registrate</i></p>
    </div>
  </div>

  <div>
    <br><h3>¿Cómo funciona?</h3>
    <ol>
      <li>Busca el medicamento desde la app.</li>
      <li>Consulta si está disponible en tu farmacia.</li>
      <li>Solicítalo si no lo tienen.</li>
      <li>Sube tu receta <b>(si se requiere)</b>.</li>
      <li>Recoge tu pedido sin tiempo de espera.</li><br>
    </ol>
  </div>

  <div>
    <h2>Descarga la app</h2>
    <p>Muy pronto disponible en App Store y Google Play</p>
    <a href="#">Descargar</a>
  </div>

  <div>
    <p>&copy; 2025 Tu App de Farmacias | <a href="#">Contacto</a> | <a href="#">Preguntas Frecuentes</a></p>
  </div>

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