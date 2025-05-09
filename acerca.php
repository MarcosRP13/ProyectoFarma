<?php
require_once "autoloader.php";
$modelo = new Model();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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

    h2 {
      font-weight: bold;
      font-size: 20px;
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

    b {
      color: green;
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

    <section class="section">
      <h2>Acerca de</h2>
      <p>
        Sabemos lo valioso que es tu tiempo y lo importante que es contar con tus medicamentos justo cuando los necesitas. Por eso, creamos esta aplicación con una idea sencilla pero poderosa: <b>que puedas pedir tus medicamentos con anticipación a la farmacia, directamente desde tu celular o computadora</b>, sin tener que dar vueltas ni hacer colas innecesarias.
      </p>
      <p>
        <b>¿Te ha pasado que vas a la farmacia y justo no tienen lo que necesitas?</b> Con nuestra app, eso se acabó. Aquí puedes buscar el medicamento que estás por comprar y ver si está disponible en tu farmacia más cercana. Si no lo tienen, puedes solicitarlo directamente desde la app.
      </p>
      <p>
        Para los medicamentos con receta, puedes subir una foto de tu receta médica para que la farmacia prepare tu pedido con anticipación. Al recogerlo, solo muestras la receta física para validar tu compra.
      </p>
      <p>
        Nuestra misión es <b>hacerte la vida más fácil</b>, evitarte pérdidas de tiempo y ayudarte a cuidar tu salud sin complicaciones.
      </p><br>
    </section>

    <section class="section">
      <h2>Nuestra Misión</h2>
      <p>
        <b>Hacer más fácil, rápida y segura la manera en que las personas acceden a sus medicamentos.</b> A través de la tecnología, conectamos a los usuarios con las farmacias de forma eficiente, clara y humana.
      </p><br>
    </section>

    <section class="section">
      <h2>Nuestra Visión</h2>
      <p>
        Imaginamos un futuro donde pedir tus medicamentos sea tan sencillo como enviar un mensaje. <b>Queremos farmacias preparadas para atenderte antes de que llegues, con una experiencia de compra más accesible y centrada en las personas.</b>
      </p><br>
    </section>

    <section class="section">
      <h2>Nuestros Valores</h2>
      <ul class="lista-valores">
        <li><b>Cercanía:</b> Somos un puente entre tú y tu bienestar. Nos importa que te sientas acompañado.</li>
        <li><b>Responsabilidad:</b> Tratamos cada solicitud con el respeto y cuidado que merece tu salud.</li>
        <li><b>Simplicidad:</b> Lo bueno no tiene que ser complicado. Todo es claro, rápido y sin rodeos.</li>
        <li><b>Confianza:</b> Protegemos tu información y colaboramos con farmacias responsables.</li>
        <li><b>Innovación con propósito:</b> Usamos la tecnología para resolver problemas reales.</li>
      </ul>
    </section>
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
