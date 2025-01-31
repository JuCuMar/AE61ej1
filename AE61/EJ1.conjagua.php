<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php

 class Agua  extends Congelados{
    private $sal;

    public function __construct($fechac,$numlot,$pais,$fechaenvasado,$tempmant,$sal){
        parent:: __construct($fechac,$numlot,$pais,$fechaenvasado,$tempmant);
        $this->sal = $sal;
      }

    public function setsal($sal) {
        $this->sal = $sal;
    }
    public function obtenerinfo() {
        return parent::obtenerinfo() . $this->sal;
    }
}
    ?>
</body>
</html>