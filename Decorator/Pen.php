<?php
namespace  Decorator;
use Decorator\Pattern\iPen;

// toutes les classes suivront le contrat iPen même la classe décorée
class Pen implements iPen {

    protected $m;
    // pour le message
    public function __construct($m) {
        $this->m = $m;
    }

    public function write() {
        return $this->m;
    }

}

?>
