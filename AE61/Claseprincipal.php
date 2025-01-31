<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
 require_once __DIR__ . "/Ej1congelados.php";



/*$Refrigerado  = new Refrigerado ();
$Fresco = new Fresco();
$Agua = new Agua();
$Aire = new Aire();
$Nitrogeno = new Nitrogeno();*/

$Congelados = new Congelados("10/10/2025", 123456, "España", "10/05/2097", "17 grados");

echo "Promedio de los 3 numeros es: " . $Congelados->obtenerinfo() . "<br>";

    ?>
</body>
</html>