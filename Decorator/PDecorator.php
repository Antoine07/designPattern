<?php
namespace  Decorator;
use Decorator\Pattern\Decorator;

// une classe permettant de décorer la classe Pen d'un paragraphe
class PDecorator extends Decorator {

    public function write() {
        return "<p>{$this->decorator->write()}</p>";
    }

}

?>
