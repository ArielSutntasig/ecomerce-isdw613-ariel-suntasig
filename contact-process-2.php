<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (
        isset($_POST["nombre"]) && $_POST["nombre"] != ""
        && isset($_POST["edad"]) && $_POST["edad"] != ""
        && isset($_POST["direccion"]) && $_POST["direccion"] != ""
    ) {
        echo ('Nombre: ' . $_POST["nombre"] . '<br />');
        echo 'Edad: ' . $_POST["edad"] . '<br />';
        echo 'Direcci&oacute;n: ' . $_POST["direccion"] . '<br />';
    } else {
        echo "Todos los campos son requeridos";
    }
    ?>

</body>

</html>
