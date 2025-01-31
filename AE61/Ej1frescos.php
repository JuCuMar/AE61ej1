<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php

 class Fresco  extends Producto{
    private $fenvasado;
    private $pais;

    public function __construct($fechac,$numlot,$fenvasado,$pais){
      parent:: __construct($fechac,$numlot);
      $this->fenvasado = $fenvasado;
      $this->pais = $pais;
    }

    public function setfenvasado($fenvasado) {
        $this->fenvasado = $fenvasado;
    }

    public function setpais($pais) {
        $this->pais = $pais;
    }
}
    ?>
</body>
</html>