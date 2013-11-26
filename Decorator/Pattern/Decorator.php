<?php
namespace  Decorator\Pattern;
use Decorator\Pattern\iPen;

// on factorise le code dans le decorator 
abstract class Decorator implements iPen {

        protected $decorator;

        public function __construct(iPen $d) {
            $this->decorator = $d;
        }

    }
?>
