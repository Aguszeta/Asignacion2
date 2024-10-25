<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$input = json_decode(file_get_contents("php://input"), true);

if (isset($input['inicioAño']) && isset($input['finAño'])) {
    $inicioAño = $input['inicioAño'];
    $finAño = $input['finAño'];

    echo "<p>Año de inicio: $inicioAño  -  Año de fin: $finAño</p>";

    echo "<div id='listaAños'>"; 

    function esBisiesto($year) {
        return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
    }

    for ($year = $inicioAño; $year <= $finAño; $year++) {
        if (esBisiesto($year)) {
            echo "<span class='year leap-year'>$year</span>"; 
        } else {
            echo "<span class='year non-leap-year'>$year</span>";
        }
    }

    echo "</div>"; 

    echo "<p class='nota'>Nota: Los recuadros pintados de amarillo son años bisiestos.</p>";
} else {
    echo "No se recibieron los años correctamente. Asegúrate de hacer la solicitud con un cuerpo JSON.";
}
?>
