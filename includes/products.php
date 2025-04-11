<?php

// $categorias = [];

$products = [
  [
    "id" => 1,
    "nombre" => "Lavanda",
    "color_css" => "lavanda",
    "descripcion" => "Vela aromática con fragancia a lavanda. Ideal para crear un ambiente agradable y especial.",
    "precio" => 12.16,
    "cantidad" => 59,
    "imagen" => "lavanda.webp",
    "descuento" => 10,
    "detalles" => [
      "Material" => "Cera de soja",
      "Duración" => "40 horas",
      "Tamaño" => "6 cm x 6 cm",
      "Color" => "Verde",
      "Peso" => "200 gramos"
    ],
    "fragancia" => "Lavanda",
    "categoria" => "floral",
    "notas_aromaticas" => [
      "Salida" => "Flores frescas",
      "Corazón" => "Pétalos suaves",
      "Fondo" => "Almizcle"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "lavanda_1.webp",
      "lavanda_2.webp"
    ],
    "fecha_lanzamiento" => "2024-01-17",
    "edicion_limitada" => false,
    "envio_gratis" => true,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 2,
    "nombre" => "Vainilla",
    "color_css" => "vainilla",
    "descripcion" => "Vela aromática con fragancia a vainilla. Ideal para crear un ambiente agradable y especial.",
    "precio" => 12.74,
    "cantidad" => 27,
    "imagen" => "vainilla.webp",
    "descuento" => 10,
    "detalles" => [
      "Material" => "Cera vegetal",
      "Duración" => "45 horas",
      "Tamaño" => "6 cm x 6 cm",
      "Color" => "Naranja",
      "Peso" => "200 gramos"
    ],
    "fragancia" => "Vainilla",
    "categoria" => "dulce",
    "notas_aromaticas" => [
      "Salida" => "Azúcar tostada",
      "Corazón" => "Vainilla cremosa",
      "Fondo" => "Caramelo"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "vainilla_1.webp",
      "vainilla_2.webp"
    ],
    "fecha_lanzamiento" => "2024-04-19",
    "edicion_limitada" => false,
    "envio_gratis" => true,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 3,
    "nombre" => "Eucalipto",
    "color_css" => "eucalipto",
    "descripcion" => "Vela aromática con fragancia a eucalipto. Ideal para crear un ambiente agradable y especial.",
    "precio" => 15.81,
    "cantidad" => 71,
    "imagen" => "eucalipto-square.jpg",
    "descuento" => 0,
    "detalles" => [
      "Material" => "Cera vegetal",
      "Duración" => "30 horas",
      "Tamaño" => "6.5 cm x 6.5 cm",
      "Color" => "Naranja",
      "Peso" => "250 gramos"
    ],
    "fragancia" => "Eucalipto",
    "categoria" => "herbal",
    "notas_aromaticas" => [
      "Salida" => "Hierbas verdes",
      "Corazón" => "Notas balsámicas",
      "Fondo" => "Madera suave"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "eucalipto_1.webp",
      "eucalipto_2.webp"
    ],
    "fecha_lanzamiento" => "2024-02-23",
    "edicion_limitada" => false,
    "envio_gratis" => true,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 4,
    "nombre" => "Rosa Mosqueta",
    "color_css" => "rosa-mosqueta",
    "descripcion" => "Vela aromática con fragancia a rosa mosqueta. Ideal para crear un ambiente agradable y especial.",
    "precio" => 10.68,
    "cantidad" => 35,
    "imagen" => "rosa-mosqueta-square.jpg",
    "descuento" => 15,
    "detalles" => [
      "Material" => "Cera de soja",
      "Duración" => "40 horas",
      "Tamaño" => "8 cm x 8 cm",
      "Color" => "Morado",
      "Peso" => "180 gramos"
    ],
    "fragancia" => "Rosa Mosqueta",
    "categoria" => "floral",
    "notas_aromaticas" => [
      "Salida" => "Flores frescas",
      "Corazón" => "Pétalos suaves",
      "Fondo" => "Almizcle"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "rosa-mosqueta_1.webp",
      "rosa-mosqueta_2.webp"
    ],
    "fecha_lanzamiento" => "2024-01-04",
    "edicion_limitada" => false,
    "envio_gratis" => true,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 5,
    "nombre" => "Cítrico",
    "color_css" => "citrico",
    "descripcion" => "Vela aromática con fragancia a cítrico. Ideal para crear un ambiente agradable y especial.",
    "precio" => 12.03,
    "cantidad" => 97,
    "imagen" => "citrico-square.jpg",
    "descuento" => 15,
    "detalles" => [
      "Material" => "Cera de soja",
      "Duración" => "35 horas",
      "Tamaño" => "8 cm x 8 cm",
      "Color" => "Azul",
      "Peso" => "220 gramos"
    ],
    "fragancia" => "Cítrico",
    "categoria" => "citrica",
    "notas_aromaticas" => [
      "Salida" => "Cítricos vibrantes",
      "Corazón" => "Piel de naranja",
      "Fondo" => "Notas dulces"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "cítrico_1.webp",
      "cítrico_2.webp"
    ],
    "fecha_lanzamiento" => "2024-02-19",
    "edicion_limitada" => false,
    "envio_gratis" => false,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 6,
    "nombre" => "Canela",
    "color_css" => "canela",
    "descripcion" => "Vela aromática con fragancia a canela. Ideal para crear un ambiente agradable y especial.",
    "precio" => 10.8,
    "cantidad" => 89,
    "imagen" => "canela2-square.jpg",
    "descuento" => 0,
    "detalles" => [
      "Material" => "Cera de palma",
      "Duración" => "45 horas",
      "Tamaño" => "6.5 cm x 6.5 cm",
      "Color" => "Naranja",
      "Peso" => "200 gramos"
    ],
    "fragancia" => "Canela",
    "categoria" => "especiada",
    "notas_aromaticas" => [
      "Salida" => "Canela intensa",
      "Corazón" => "Especias cálidas",
      "Fondo" => "Vainilla suave"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "canela_1.webp",
      "canela_2.webp"
    ],
    "fecha_lanzamiento" => "2024-01-09",
    "edicion_limitada" => false,
    "envio_gratis" => true,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 7,
    "nombre" => "Jazmín",
    "color_css" => "jazmin",
    "descripcion" => "Vela aromática con fragancia a jazmín. Ideal para crear un ambiente agradable y especial.",
    "precio" => 11.36,
    "cantidad" => 96,
    "imagen" => "jazmin-square.jpg",
    "descuento" => 20,
    "detalles" => [
      "Material" => "Cera vegetal",
      "Duración" => "50 horas",
      "Tamaño" => "8 cm x 8 cm",
      "Color" => "Beige",
      "Peso" => "200 gramos"
    ],
    "fragancia" => "Jazmín",
    "categoria" => "floral",
    "notas_aromaticas" => [
      "Salida" => "Flores frescas",
      "Corazón" => "Pétalos suaves",
      "Fondo" => "Almizcle"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "jazmín_1.webp",
      "jazmín_2.webp"
    ],
    "fecha_lanzamiento" => "2024-04-25",
    "edicion_limitada" => true,
    "envio_gratis" => false,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 8,
    "nombre" => "Sándalo",
    "color_css" => "sandalo",
    "descripcion" => "Vela aromática con fragancia a sándalo. Ideal para crear un ambiente agradable y especial.",
    "precio" => 13.13,
    "cantidad" => 65,
    "imagen" => "sandalo-square.jpg",
    "descuento" => 15,
    "detalles" => [
      "Material" => "Cera de palma",
      "Duración" => "40 horas",
      "Tamaño" => "7 cm x 7 cm",
      "Color" => "Blanco",
      "Peso" => "180 gramos"
    ],
    "fragancia" => "Sándalo",
    "categoria" => "amaderada",
    "notas_aromaticas" => [
      "Salida" => "Notas secas",
      "Corazón" => "Sándalo",
      "Fondo" => "Cedro"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "sándalo_1.webp",
      "sándalo_2.webp"
    ],
    "fecha_lanzamiento" => "2024-03-05",
    "edicion_limitada" => true,
    "envio_gratis" => false,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 9,
    "nombre" => "Coco",
    "color_css" => "coco",
    "descripcion" => "Vela aromática con fragancia a coco. Ideal para crear un ambiente agradable y especial.",
    "precio" => 13.2,
    "cantidad" => 66,
    "imagen" => "coco-square.jpg",
    "descuento" => 0,
    "detalles" => [
      "Material" => "Cera de soja",
      "Duración" => "35 horas",
      "Tamaño" => "6.5 cm x 6.5 cm",
      "Color" => "Verde",
      "Peso" => "250 gramos"
    ],
    "fragancia" => "Coco",
    "categoria" => "tropical",
    "notas_aromaticas" => [
      "Salida" => "Coco fresco",
      "Corazón" => "Frutas exóticas",
      "Fondo" => "Vainilla"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "coco_1.webp",
      "coco_2.webp"
    ],
    "fecha_lanzamiento" => "2024-03-27",
    "edicion_limitada" => false,
    "envio_gratis" => true,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 10,
    "nombre" => "Menta",
    "color_css" => "menta",
    "descripcion" => "Vela aromática con fragancia a menta. Ideal para crear un ambiente agradable y especial.",
    "precio" => 12.46,
    "cantidad" => 49,
    "imagen" => "menta-square.jpg",
    "descuento" => 15,
    "detalles" => [
      "Material" => "Cera de palma",
      "Duración" => "45 horas",
      "Tamaño" => "7 cm x 7 cm",
      "Color" => "Naranja",
      "Peso" => "200 gramos"
    ],
    "fragancia" => "Menta",
    "categoria" => "herbal",
    "notas_aromaticas" => [
      "Salida" => "Hierbas verdes",
      "Corazón" => "Notas balsámicas",
      "Fondo" => "Madera suave"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "menta_1.webp",
      "menta_2.webp"
    ],
    "fecha_lanzamiento" => "2024-04-14",
    "edicion_limitada" => false,
    "envio_gratis" => false,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 11,
    "nombre" => "Naranja y Clavo",
    "color_css" => "naranja-y-clavo",
    "descripcion" => "Vela aromática con fragancia a naranja y clavo. Ideal para crear un ambiente agradable y especial.",
    "precio" => 13.16,
    "cantidad" => 59,
    "imagen" => "naranja-y-clavo-square.jpg",
    "descuento" => 0,
    "detalles" => [
      "Material" => "Cera de abejas",
      "Duración" => "40 horas",
      "Tamaño" => "9 cm x 9 cm",
      "Color" => "Blanco",
      "Peso" => "180 gramos"
    ],
    "fragancia" => "Naranja y Clavo",
    "categoria" => "citrica",
    "notas_aromaticas" => [
      "Salida" => "Cítricos vibrantes",
      "Corazón" => "Piel de naranja",
      "Fondo" => "Notas dulces"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "naranja-y--clavo_1.webp",
      "naranja-y--clavo_2.webp"
    ],
    "fecha_lanzamiento" => "2024-04-20",
    "edicion_limitada" => true,
    "envio_gratis" => false,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 12,
    "nombre" => "Frutos Rojos",
    "color_css" => "frutos-rojos",
    "descripcion" => "Vela aromática con fragancia a frutos rojos. Ideal para crear un ambiente agradable y especial.",
    "precio" => 11.24,
    "cantidad" => 95,
    "imagen" => "frutos-rojos.webp",
    "descuento" => 10,
    "detalles" => [
      "Material" => "Cera de palma",
      "Duración" => "30 horas",
      "Tamaño" => "7 cm x 7 cm",
      "Color" => "Morado",
      "Peso" => "200 gramos"
    ],
    "fragancia" => "Frutos Rojos",
    "categoria" => "frutal",
    "notas_aromaticas" => [
      "Salida" => "Frutas del bosque",
      "Corazón" => "Notas dulces",
      "Fondo" => "Frutos secos"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "frutos-rojos_1.webp",
      "frutos-rojos_2.webp"
    ],
    "fecha_lanzamiento" => "2024-01-22",
    "edicion_limitada" => true,
    "envio_gratis" => false,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 13,
    "nombre" => "Manzana y Canela",
    "color_css" => "manzana-canela",
    "descripcion" => "Vela aromática con fragancia a manzana y canela. Ideal para crear un ambiente agradable y especial.",
    "precio" => 15.35,
    "cantidad" => 21,
    "imagen" => "manzana-canela.webp",
    "descuento" => 10,
    "detalles" => [
      "Material" => "Cera de palma",
      "Duración" => "35 horas",
      "Tamaño" => "9 cm x 9 cm",
      "Color" => "Beige",
      "Peso" => "220 gramos"
    ],
    "fragancia" => "Manzana y Canela",
    "categoria" => "frutal",
    "notas_aromaticas" => [
      "Salida" => "Frutas del bosque",
      "Corazón" => "Notas dulces",
      "Fondo" => "Frutos secos"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "manzana-y--canela_1.webp",
      "manzana-y--canela_2.webp"
    ],
    "fecha_lanzamiento" => "2024-02-21",
    "edicion_limitada" => false,
    "envio_gratis" => false,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 14,
    "nombre" => "Té Verde",
    "color_css" => "te-verde",
    "descripcion" => "Vela aromática con fragancia a té verde. Ideal para crear un ambiente agradable y especial.",
    "precio" => 16.36,
    "cantidad" => 26,
    "imagen" => "te-verde-square.jpg",
    "descuento" => 15,
    "detalles" => [
      "Material" => "Cera de soja",
      "Duración" => "35 horas",
      "Tamaño" => "7 cm x 7 cm",
      "Color" => "Naranja",
      "Peso" => "250 gramos"
    ],
    "fragancia" => "Té Verde",
    "categoria" => "herbal",
    "notas_aromaticas" => [
      "Salida" => "Hierbas verdes",
      "Corazón" => "Notas balsámicas",
      "Fondo" => "Madera suave"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "té-verde_1.webp",
      "té-verde_2.webp"
    ],
    "fecha_lanzamiento" => "2024-03-26",
    "edicion_limitada" => false,
    "envio_gratis" => false,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 15,
    "nombre" => "Algodón Fresco",
    "color_css" => "algodon-suave",
    "descripcion" => "Vela aromática con fragancia a algodón fresco. Ideal para crear un ambiente agradable y especial.",
    "precio" => 10.13,
    "cantidad" => 27,
    "imagen" => "algodon-fresco-square.jpg",
    "descuento" => 15,
    "detalles" => [
      "Material" => "Cera vegetal",
      "Duración" => "45 horas",
      "Tamaño" => "6 cm x 6 cm",
      "Color" => "Rosa",
      "Peso" => "200 gramos"
    ],
    "fragancia" => "Algodón Fresco",
    "categoria" => "limpia",
    "notas_aromaticas" => [
      "Salida" => "Aire fresco",
      "Corazón" => "Jabón suave",
      "Fondo" => "Algodón"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "algodón-fresco_1.webp",
      "algodón-fresco_2.webp"
    ],
    "fecha_lanzamiento" => "2024-03-11",
    "edicion_limitada" => true,
    "envio_gratis" => false,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 16,
    "nombre" => "Pino",
    "color_css" => "pino",
    "descripcion" => "Vela aromática con fragancia a pino. Ideal para crear un ambiente agradable y especial.",
    "precio" => 14.15,
    "cantidad" => 22,
    "imagen" => "pino.jpg",
    "descuento" => 20,
    "detalles" => [
      "Material" => "Cera vegetal",
      "Duración" => "50 horas",
      "Tamaño" => "7 cm x 7 cm",
      "Color" => "Amarillo",
      "Peso" => "250 gramos"
    ],
    "fragancia" => "Pino",
    "categoria" => "amaderada",
    "notas_aromaticas" => [
      "Salida" => "Notas secas",
      "Corazón" => "Sándalo",
      "Fondo" => "Cedro"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "pino_1.webp",
      "pino_2.webp"
    ],
    "fecha_lanzamiento" => "2024-01-25",
    "edicion_limitada" => false,
    "envio_gratis" => false,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ],
  [
    "id" => 17,
    "nombre" => "Chocolate",
    "color_css" => "chocolate",
    "descripcion" => "Vela aromática con fragancia a chocolate. Ideal para crear un ambiente agradable y especial.",
    "precio" => 10.58,
    "cantidad" => 42,
    "imagen" => "chocolate.webp",
    "descuento" => 20,
    "detalles" => [
      "Material" => "Cera de abejas",
      "Duración" => "35 horas",
      "Tamaño" => "7 cm x 7 cm",
      "Color" => "Rosa",
      "Peso" => "220 gramos"
    ],
    "fragancia" => "Chocolate",
    "categoria" => "dulce",
    "notas_aromaticas" => [
      "Salida" => "Azúcar tostada",
      "Corazón" => "Vainilla cremosa",
      "Fondo" => "Caramelo"
    ],
    "stock_alerta" => 10,
    "imagenes_extra" => [
      "chocolate_1.webp",
      "chocolate_2.webp"
    ],
    "fecha_lanzamiento" => "2024-02-04",
    "edicion_limitada" => false,
    "envio_gratis" => true,
    "tiempo_entrega_estimado" => "2 a 5 días hábiles"
  ]
];
