<?php

namespace Facade\Library;

class Form {

    public function open() {
        return 'open';
    }
    
    public function elem($args=[]){
        return $this;
    }

}
