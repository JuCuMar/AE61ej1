<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
 class Producto {
    private $fechac;
    private $numlot;

    public function __construct($fechac,$numlot){
        $this->fechac = $fechac;
        $this->numlot = $numlot;
    }

    public function setfechc($fechac) {
        $this->fecahc = $fechac;
    }

    public function setnumlot($numlot) {
        $this->numlot = $numlot;
    }

    public function obtenerinfo() {
        return "Fecha de caducidad: $this->fechac, Número de lote: $this->numlot";
    }
}

    ?>
</body>
</html>