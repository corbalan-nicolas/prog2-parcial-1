<?php
require_once "includes/productos.php";
?>
<div class="mobile-btns">
  <button class="btn">
    <img src=" img/icons/filter.svg" alt="Ícono de filtro">
    Filtros
  </button>
</div>
<aside class="filters">
  <button>
    <span class="sr-only">Cerrar filtros</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
      <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
    </svg>
  </button>
  <div class="filters-container">
    <ul class="filters__anchors">
      <li><a href="#destacados">Destacados</a></li>
      <li><a href="#destacados">Categorías</a></li>
      <li><a href="#destacados">Precio</a></li>
      <li><a href="#destacados">Descuento</a></li>
      <li><a href="#destacados">Otras características</a></li>
      <li><a href="#destacados">Ordenar por</a></li>
    </ul>
    <div>

    </div>
    <div>
      <button>Limpiar filtros</button>
      <button>Ver resultados</button>
    </div>
  </div>
</aside>
<label class="order-by">
  Ordenar por
  <select>
    <option value="">Más relevantes</option>
    <option value="">Menor precio</option>
    <option value="">Mayor precio</option>
  </select>
</label>
<div class=" products-container catalog">
  <?php
  foreach ($productos as $vela) {
  ?>
    <div class="card" data-color="<?= $vela["color_css"] ?>">
      <img class="card__image" src="img/velas/<?= $vela["imagen"] ?>" alt="Foto del producto">
      <div class="card__body">
        <h2 class="card__title"><?= $vela["nombre"] ?></h2>
        <?php
        if ($vela["descuento"] > 0) {
        ?>
          <p class="card__price">
            <span class="tachado"><?= "$$vela[precio]" ?></span>
            <strong>$<?= (number_format($vela["precio"] - ($vela["precio"] / $vela["descuento"]), 2)) ?></strong>
          </p>

          <div class="card__discount">
            <p><strong><?= $vela["descuento"] ?>%</strong> off</p>
            <!-- <small>Ahorrá $<?= number_format($vela["precio"] / $vela["descuento"], 2) ?></small> -->
          </div>
        <?php
        } else {
        ?>
          <p class="card__price">
            <strong><?= "$$vela[precio]" ?></strong>
          </p>
        <?php
        }
        ?>
      </div>
    </div>
  <?php
  }
  ?>
</div>