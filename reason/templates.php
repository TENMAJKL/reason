<?php

function view($template, $vars = [])
{   
    extract($vars);
    $file = __DIR__ . '/../views/' . $template;
    require $file;
}

function prevent($text)
{
    //workuju na tom
}

?>