<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSEIF</title>
</head>

<body>
    <form action="" method="get">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="edad">Edad</label>
        <input type="text" id="edad" name="edad">
        <br>
        <input type="submit" value="Introducir">
    </form>
    <?php
    if (isset($_GET['edad'])) {

        $edad = $_GET['edad'];
        if ($edad >= 18) {
            echo "eres mayor de edad";
        } else {
            echo "eres menor de edad";
        }
        
    }
    ?>
</body>

</html>