<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php

 class Aire  extends Congelados{
    private $nitro;
    private $oxigeno;
    private $dioxcarb;
    private $vapor;

    public function __construct($fechac,$numlot,$pais,$fechaenvasado,$tempmant,$nitro,$oxigeno,$dioxcarb,$vapor){
        parent:: __construct($fechac,$numlot,$pais,$fechaenvasado,$tempmant);
        $this->nitro = $nitro;
        $this->oxigeno = $oxigeno;
        $this->dioxcarb = $dioxcarb;
        $this->vapor = $vapor;

      }

    public function setnitro($nitro) {
        $this->nitro = $nitro;
    }

    public function setoxigeno($oxigeno) {
        $this->oxigeno = $oxigeno;
    }

    public function setdioxcarb($dioxcarb) {
        $this->dioxcarb = $dioxcarb;
    }

    public function setvapor($vapor) {
        $this->vapor = $vapor;
    }
    
}
    ?>
</body>
</html>