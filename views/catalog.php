<?php
require_once "includes/products.php";

$validProductsDisplay = ["grid", "list"];
$productsDisplay = $_GET["products"] ?? "grid";

if (!in_array($productsDisplay, $validProductsDisplay)) {
  $productsDisplay = "grid";
}

$categorias = ["floral", "dulce", "herbal", "citrica", "especiada", "amaderada", "tropical", "frutal", "limpia"]
?>

<div class="mobile-btns">
  <button class="content btn">
    <img src=" img/icons/filter.svg" alt="Ícono de filtro">
    Filtros
  </button>
</div>

<aside class="filters">

  <button>
    <span class="sr-only">Cerrar filtros</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
      <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
    </svg>
  </button>

  <div class="content filters-container">

    <ul class="filters__anchors">
      <li><a href="#destacados">Categorías</a></li>
      <li><a href="#destacados">Precio</a></li>
      <li><a href="#destacados">Descuento</a></li>
      <li><a href="#destacados">Otras características</a></li>
      <li><a href="#destacados">Ordenar por</a></li>
    </ul>

    <div>
      <div class="filter">
        <strong class="filter__header">Categorías</strong>
        <div class="filter__body">
          <?php
          foreach ($categorias as $item) {
          ?>
            <label class="filter__label">
              <input type="checkbox" name="<?= $item ?>">
              <?= ucfirst($item) ?>
            </label>
          <?php
          }
          ?>
        </div>
      </div>
    </div>

    <div>
      <button>Limpiar filtros</button>
      <button>Ver resultados</button>
    </div>
  </div>
</aside>

<div class="desktop-header">
  <a class="content btn btn-square <?php if ($productsDisplay === "list") echo "btn--active" ?>" href="index.php?seccion=catalogo&products=list">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-list">
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M9 6l11 0" />
      <path d="M9 12l11 0" />
      <path d="M9 18l11 0" />
      <path d="M5 6l0 .01" />
      <path d="M5 12l0 .01" />
      <path d="M5 18l0 .01" />
    </svg>
  </a>
  <a class="content btn btn-square <?php if ($productsDisplay === "grid") echo "btn--active" ?>" href="index.php?seccion=catalogo&products=grid">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
      <path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm5 2h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4h-4V5zM3 20a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6zm2-5h4v4H5v-4zm8 5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6zm2-5h4v4h-4v-4z"></path>
    </svg>
  </a>
  <label class="content order-by">
    Ordenar por
    <select>
      <option value="">Más relevantes</option>
      <option value="">Menor precio</option>
      <option value="">Mayor precio</option>
    </select>
  </label>
</div>

<div class="products-container catalog products-container--<?= $productsDisplay ?>">
  <?php
  foreach ($products as $candle) {
  ?>
    <div class="content card" data-color="<?= $candle["color_css"] ?>">
      <img class="card__image" src="img/candles/<?= $candle["imagen"] ?>" alt="Foto del producto">
      <div class="card__body">
        <h2 class="card__title"><?= $candle["nombre"] ?></h2>
        <?php
        if ($candle["descuento"] > 0) {
        ?>
          <p class="card__price" title="Precio en $USD">
            <span class="tachado"><?= "$$candle[precio]" ?></span>
            <strong>$<?= (number_format($candle["precio"] - ($candle["precio"] / $candle["descuento"]), 2)) ?></strong>
          </p>

          <div class="card__discount">
            <p><strong><?= $candle["descuento"] ?>%</strong> off</p>
            <!-- <small>Ahorrá $<?= number_format($candle["precio"] / $candle["descuento"], 2) ?></small> -->
          </div>
        <?php
        } else {
        ?>
          <p class="card__price" title="Precio en $USD">
            <strong><?= "$$candle[precio]" ?></strong>
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