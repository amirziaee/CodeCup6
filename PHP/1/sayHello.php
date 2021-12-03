<?php

function sayHello(array $words, int $reverseIndex): void
{
    
    $words[$reverseIndex] = strrev($words[$reverseIndex]);
    

    echo implode(' ', $words). "\n";
}

sayHello(['Hello', 'puCedoC', '6!'], 1);
sayHello(['malaS', 'CodeCup', '6!'], 0);

?>

