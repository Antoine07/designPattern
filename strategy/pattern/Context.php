<?php

abstract class Context implements iUse{
    protected $strategy=null;
    
    // composition of class implement iStrategy
    public function __construct(iStrategy $strategy){
        $this->strategy=$strategy;
    }
}

?>
