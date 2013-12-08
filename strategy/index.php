<?php

// autoloader
spl_autoload_register(
        function ($className) {
            include 'pattern/'.$className.'.php';
        }
);

(new A(new AlgorithmeA))->getUse('val1', 'val2');
(new A(new AlgorithmeB))->getUse('val1', 'val2');

// and for B use facotoring alogorithme it's now with so easy with this pattern
(new B(new AlgorithmeA))->getUse('val1', 'val2');
(new B(new AlgorithmeB))->getUse('val1', 'val2');



?>
