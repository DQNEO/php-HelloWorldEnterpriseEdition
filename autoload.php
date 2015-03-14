<?php

spl_autoload_register(function ($c) {
    $lastSlash = strrpos($c, '\\');
    if (false !== $lastSlash) {
        $lastSlash++;
        $ns = substr($c, 0, $lastSlash);
        $class = substr($c, $lastSlash);
        $path = strtr($ns, '\\', '/') . strtr($class, '_', '/');
    } else {
        $path = strtr($c, '_', '/');
    }
    @include_once $path . '.php';
});

