<?php

function __autoload($class)
{
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}

include __DIR__ . '/vendor/autoload.php';