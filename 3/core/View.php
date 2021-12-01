<?php

namespace Core;

class View
{
    public static function render(string $view , $args = [])
    {
        extract($args , EXTR_SKIP);
        $file = __DIR__ . '/../resources/views/' . $view . '.php';
        require $file;
    }
}