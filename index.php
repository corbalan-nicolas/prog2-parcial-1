<?php

$seccion = $_GET["seccion"] ?? "catalogo";
$vista = $seccion;
$seccionesValidas = [
  "catalogo" => [
    "titulo" => "Inicio"
  ],
  "contacto" => [
    "titulo" => "Contacto"
  ],
  "404" => [
    "titulo" => "Página no encontrada"
  ]
];

if (!array_key_exists($seccion, $seccionesValidas)) {
  $vista = "404";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lumina | <?= $seccionesValidas[$vista]["titulo"] ?></title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Styles -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- Scripts -->
  <script defer src="js/main.js"></script>
</head>

<body>

  <div id="humo"></div>
  <header>
    <div class="bg-claro">
      <div class="container logo-container bg-claro text-oscuro">
        <img class="logo-image" src="img/logo-oscuro.svg" alt="Logo de la empresa Lumina">
        <h1 class="logo-text">Lumina</h1>
      </div>
    </div>
    <div class="bg-eucalipto">
      <div class="container sub-header">
        <button id="toggleParticles" title="Desactivar/Activar particulas de humo">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);">
            <path d="M16.5 8c0 1.5-.5 3.5-2.9 4.3.7-1.7.8-3.4.3-5-.7-2.1-3-3.7-4.6-4.6-.4-.3-1.1.1-1 .7 0 1.1-.3 2.7-2 4.4C4.1 10 3 12.3 3 14.5 3 17.4 5 21 9 21c-4-4-1-7.5-1-7.5.8 5.9 5 7.5 7 7.5 1.7 0 5-1.2 5-6.4 0-3.1-1.3-5.5-2.4-6.9-.3-.5-1-.2-1.1.3"></path>
          </svg>
        </button>
        <nav class="nav-container">
          <ul>
            <li><a href="index.php?seccion=catalogo">Inicio</a></li>
            <li><a href="index.php?seccion=contacto">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="container section-<?= $seccion ?>">
    <?php
    require_once "views/$vista.php";
    ?>
  </main>

  <footer class="bg-rosa-mosqueta">
    <div class="container">
      <p>&copy; Corbalan Nicolas Leonel, 2025</p>
    </div>
  </footer>
</body>

</html>