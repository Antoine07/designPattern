<?php

spl_autoload_register(function($className){
    include $className.".php";
});

$car=new Car();

$car->addPerson(new Person('Antoine'));
$car->addPerson(new Person('Naoudi'));
$car->addPerson(new Person('Cécile'));
$car->addPerson(new Person('Fenley'));

foreach($car as $v){
  echo "<p>{$v->getName()}</p>";
}

?>
