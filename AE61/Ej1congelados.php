<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
 require_once __DIR__ . "/Ej1.php";

 class Congelados  extends Producto{
    private $pais;
    private $fechaenvasado;
    private $tempmant;

    public function __construct($fechac,$numlot,$pais,$fechaenvasado,$tempmant){
        parent::__construct($fechac, $numlot);
        $this->pais = $pais;
        $this->fechaenvasado = $fechaenvasado;
        $this->tempmant = $tempmant;
      }

    public function setpais($pais) {
        $this->pais = $pais;
    }

    public function setfechaenvasado($fechaenvasado) {
        $this->fechaenvasado = $fechaenvasado;
    }

    public function settempmant($tempmant) {
        $this->tempmant = $tempmant;
    }
    public function obtenerinfo() {
        return parent::obtenerinfo() . ", País: $this->pais, Fecha de envasado: $this->fechaenvasado, Temperatura de mantenimiento: $this->tempmant";
    }
}

    ?>
</body>
</html>