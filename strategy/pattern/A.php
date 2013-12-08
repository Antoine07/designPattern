<?php
/**
 * Class extends Context a use algo of strategy 
 */

class A extends Context {
    
    public function getUse($arg1, $arg2){
        // code something with $arg1, ...
        $this->strategy->execute();
    }
}

?>
