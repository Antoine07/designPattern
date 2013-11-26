<?php
/**
 * @author: Antoine07
 * 
 * Exemple simple de design pattern decorator, une classe Pen et ses classes "decorators"
 * 
 * Une classe Pen est décorée par des classes si besoin, pour que tout fonctionne correctement il faut mettre en place:
 * un contrat que les classes doivent suivrent et factoriser le code nécessaire dans une classe abstraite. Tout ceci donne le design pattern "decorator"
 */


// autoloader super fast !
$classMap=array(
    'Decorator\Pattern\Decorator'=>'Pattern/Decorator.php', 
    'Decorator\Pattern\iPen'=> 'Pattern/iPen.php', 
    'Decorator\PDecorator'=> 'PDecorator.php', 
    'Decorator\IDecorator'=> 'IDecorator.php', 
    'Decorator\Pen'=> 'Pen.php', 
    );

// attention au passage par référence pour utiliser le tableau dans la fonction anonyme
spl_autoload_register(function($className) use (&$classMap) {
    $className=trim($className);
    if(isset($classMap[$className])){
        include $classMap[$className];
    }
    else{
        die($className.' doesn\'t exist');
    }

});

use Decorator\Pen;
use Decorator\IDecorator;
use Decorator\PDecorator;

// affichera '<p><em>hello world</em></p>'
var_dump((new PDecorator((new IDecorator(new Pen('hello world')))))->write());


?>
