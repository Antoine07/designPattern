<?php

class Car implements IteratorAggregate{
    public $person=array();
    
    public function addPerson(Person $p){
        $this->person[]=$p;
    }
    
    // on itère alors sur l'objet retourner par cette méthode
    public function getIterator() {
        return new ArrayIterator($this->person); // retourne un itérateur
    }
}

?>
