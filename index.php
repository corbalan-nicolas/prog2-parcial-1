<?php

$section = $_GET["section"] ?? "catalog";
$view = $section;
$validSections = [
  "catalog" => [
    "title" => "Inicio"
  ],
  "contact" => [
    "title" => "Contacto"
  ],
  "about-us" => [
    "title" => "Sobre nosotros"
  ],
  "product-detail" => [
    "title" => "Detalle de producto"
  ],
  "404" => [
    "title" => "Página no encontrada"
  ]
];

if (!array_key_exists($section, $validSections)) {
  $view = "404";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lumina | <?= $validSections[$view]["title"] ?></title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Styles -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- Scripts -->
  <script defer src="js/main.js"></script>
</head>

<body>

  <div id="smokeEffectArea"></div>
  <header>
    <div class="bg-claro">
      <div class="container logo-container bg-claro text-oscuro">
        <img class="logo-image" src="img/logo-oscuro.svg" alt="Logo de la empresa Lumina">
        <h1 class="logo-text">Lumina</h1>
      </div>
    </div>
    <div class="bg-eucalipto">
      <div class="container sub-header">
        <button id="toggleParticles" class="btn btn-square btn-content" title="Desactivar/Activar particulas de humo">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-flame">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 10.941c2.333 -3.308 .167 -7.823 -1 -8.941c0 3.395 -2.235 5.299 -3.667 6.706c-1.43 1.408 -2.333 3.621 -2.333 5.588c0 3.704 3.134 6.706 7 6.706s7 -3.002 7 -6.706c0 -1.712 -1.232 -4.403 -2.333 -5.588c-2.084 3.353 -3.257 3.353 -4.667 2.235" />
          </svg>
        </button>
        <nav class="nav-container">
          <ul>
            <li><a href="index.php?section=catalog">Velas Aromáticas</a></li>
            <li><a href="index.php?section=about-us">Nosotros</a></li> <!-- (introducción) -->
            <li><a href="index.php?section=contact">Contacto</a></li>

            <!-- SECCIONES (las mismas que las de IDM)
            " " = nada
            "m" = maquetación
            "x" = todo / gran parte / lo escencial terminado

            - [ ] introducción
            - [ ] libre
            - [ ] detalle de producto
            - [m] formulario de contacto
            - [x] catálogo completo
                      [ ] Mínimo 2 filtros para el 10
            -->
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main class="container section-<?= $section ?>">
    <?php
    require_once "views/$view.php";
    ?>
  </main>

  <footer class="bg-rosa-mosqueta">
    <div class="container">
      <p>&copy; Corbalan Nicolas Leonel, 2025</p>
    </div>
  </footer>
</body>

</html>