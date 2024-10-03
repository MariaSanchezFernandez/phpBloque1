<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejercicios PHP.
    Nombres de animales.
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Nombres de animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php
$animales = [
  "Ballena" => "img/ballena.svg",
  "Caballito de Mar" => "img/caballito-mar.svg",
  "Camello" => "img/camello.svg",
  "Cebra" => "img/cebra.svg",
  "Elefante" => "img/elefante.svg",
  "Hipopótamo" => "img/hipopotamo.svg",
  "Jirafa" => "img/jirafa.svg",
  "León" => "img/leon.svg",
  "Leopardo" => "img/leopardo.svg",
  "Medusa" => "img/medusa.svg",
  "Mono" => "img/mono.svg",
  "Oso Blanco" => "img/oso-blanco.svg",
  "Oso" => "img/oso.svg",
  "Pájaro" => "img/pajaro.svg",
  "Pingüino" => "img/pinguino.svg",
  "Rinoceronte" => "img/rinoceronte.svg",
  "Serpiente" => "img/serpiente.svg",
  "Tigre" => "img/tigre.svg",
  "Tortuga Marina" => "img/tortuga-marina.svg",
  "Tortuga" => "img/tortuga.svg"
];

$animalAleatorio = array_rand($animales);
?>

<div>
  <h2><?php echo $animalAleatorio; ?></h2>
  <img src="<?php echo $animales[$animalAleatorio]; ?>" alt="<?php echo $animalAleatorio; ?>" />
</div>


  <footer></footer>
</body>
</html>
