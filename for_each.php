<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
//Actividad 2: Bucle FOREACH
//Instrucciones: Dado un arreglo con los nombres de varias frutas, recorre el arreglo e imprime cada fruta utilizando un bucle foreach.

$frutas = ["pera","manzana","platano"];

foreach ($frutas as $fruta) {
    echo "<p> $fruta </p>";
}
    ?>
</body>
</html>