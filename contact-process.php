<?php
// Activar el almacenamiento en búfer de salida
ob_start();
// Iniciar el código PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST["nombre"] ?? "";
    $edad = $_POST["edad"] ?? "";
    $direccion = $_POST["direccion"] ?? "";
    $correo = $_POST["correo"] ?? "";
    $comentario = $_POST["comentario"] ?? "";
    $sistemasOperativos = isset($_POST["os"]) ? (is_array($_POST["os"]) ? $_POST["os"] : [$_POST["os"]]) : [];
    $metodoPago = $_POST["paymentMethod"] ?? "";
    $direccionEntrega = $_POST["deliveryAddress"] ?? "";
    $clave = $_POST["clave"] ?? "";

  
    $sistemasOperativosStr = implode(", ", $sistemasOperativos);

    // Mostrar el título después de iniciar el código PHP
    echo "<h1>INPUT RECEIVED</h1>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<th>Parameter</th>";
    echo "<th>Value</th>";
    echo "</thead>";
    echo "<tr>";
    echo "<td> Nombre: </td>";
    echo "<td> $nombre </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Edad: </td>";
    echo "<td> $edad </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Dirección: </td>";
    echo "<td> $direccion </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Correo Electrónico: </td>";
    echo "<td> $correo </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Comentario: </td>";
    echo "<td> $comentario </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Sistemas Operativos: </td>";
    echo "<td> $sistemasOperativosStr </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Método de Pago: </td>";
    echo "<td> $metodoPago </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Dirección de Entrega: </td>";
    echo "<td> $direccionEntrega </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Clave: </td>";
    echo "<td> $clave </td>";
    echo "</tr>";

    $nombreArchivo = $_FILES["file1"]["name"] ?? "";
    $tipoArchivo = $_FILES["file1"]["type"] ?? "";
    $tamañoArchivo = $_FILES["file1"]["size"] ?? "";
    $rutaTemporal = $_FILES["file1"]["tmp_name"] ?? "";
    if (!empty($rutaTemporal) && is_uploaded_file($rutaTemporal)) {

        $directorioDestino = "Files/";
        $rutaDestino = $directorioDestino . $nombreArchivo;
         move_uploaded_file($rutaTemporal, $rutaDestino);

        echo "<table border='1'>";
        echo "<thead>";
        echo "<h3> Archivo de Factura: </h3> <br>";
        echo "<th>Parameter</th>";
        echo "<th>Value</th>";
        echo "</thead>";
        echo "<tr>";
        echo "<td> Nombre: </td>";
        echo "<td> $nombreArchivo </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> Tipo: </td>";
        echo "<td> $tipoArchivo </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> Tamaño: </td>";
        echo "<td> $tamañoArchivo bytes </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> Ruta temporal: </td>";
        echo "<td> $rutaTemporal </td>";
    echo "</tr>";
        echo "<tr>";
        echo "<td> Ruta de destino: </td>";
        echo "<td> $rutaDestino </td>";
        echo "</tr>";
    } else {
        echo "No se ha cargado ningún archivo de factura. <br>";
    }
} else {
    // Redireccionar a la página de inicio si alguien intenta acceder directamente a contact-process.php
    header("Location: /contact.html");
    // Terminar la ejecución del script
    exit();
}
// Desactivar el almacenamiento en búfer de salida
ob_end_flush();
?>
