<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php

 class Nitrogeno  extends Congelados{
    private $metodocong;
    private $exposicion;

    public function __construct($fechac,$numlot,$pais,$fechaenvasado,$tempmant,$exposicion,$metodocong){
        parent:: __construct($fechac,$numlot,$pais,$fechaenvasado,$tempmant);
        $this->exposicion = $exposicion;
      }

    public function setxposicion($exposicion) {
        $this->exposicion = $exposicion;
    }
    public function setmetodocong($metodocong) {
        $this->metodocong = $metodocong;
    }

}
    ?>
</body>
</html>