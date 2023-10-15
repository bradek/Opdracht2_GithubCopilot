<?php
/*Make a class 'Berichten' with 'naam' and 'bericht' as private properties.
Also make the needed getters and setters, don't make any other methods yet.*/
class Berichten {
    private $naam;
    private $bericht;
    public function __construct($naam, $bericht) {
        $this->naam = $naam;
        $this->bericht = $bericht;
    }
    public function getNaam() {
        return $this->naam;
    }
    public function getBericht() {
        return $this->bericht;
    }
    public function setNaam($naam) {
        $this->naam = $naam;
    }
    public function setBericht($bericht) {
        $this->bericht = $bericht;
    }
}
?>