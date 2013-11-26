<?php
namespace  Decorator;
use Decorator\Pattern\Decorator;

class IDecorator extends Decorator { 

    public function write() {
        return "<em>{$this->decorator->write()}</em>";
    }

}

?>
