<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Años</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="lista.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h1>Generador de Listado de Años</h1>

        <label for="inicioAño">Año de inicio:</label>
        <input type="number" id="inicioAño" name="inicioAño" placeholder="Ej: 2000">
        
        <label for="finAño">Año de fin:</label>
        <input type="number" id="finAño" name="finAño" placeholder="Ej: 2020">

        <button onclick="generateYearList()">Generar listado</button>

        <div id="lista"><!-- Lista de años --></div> 
    </div>
</body>
</html>
