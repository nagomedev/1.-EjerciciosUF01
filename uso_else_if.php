<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso else if</title>
</head>

<body>
    <form method="POST" action=""> 
        <label for="calificacion">Ingresa tu calificación:</label> 
        <input type="number" name="calificacion" id="calificacion" required> 
        <input type="submit" value="Enviar"> 
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $calificacion = $_POST["calificacion"];
        if ($calificacion >= 90) {
            echo "<p>Aprobado con honores</p>";
        } elseif ($calificacion >= 60) {
            echo "<p>Aprobado</p>";
        } else {
            echo "<p>Suspendido</p>";
        }
    } 
    ?> 
        </body>

</html>