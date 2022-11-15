<?php

namespace App\View;

class View
{
    // gives the current directory
    const VIEW_DIRECTORY = __DIR__ . '/../../resources/views';
// loads the template
// points to the resources' views


    public static function make(string $view, array $args = [])
    {
        // if we have array with title and description
        // if we extract it we get it as a separate
        extract($args);
        return include self::VIEW_DIRECTORY . '/' . $view . '.php';
    }
}

