<?php

/*
Atempt of creation bundle for Symfony 6

*/

namespace EureKaLos\BoxtalBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EurekaLosBoxtalBundle extends Bundle
{
    public static function register()
    {
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    public static function autoload($class)
    {
        $class = str_replace('Emc\\', '', $class);
        $class = str_replace('\\', '/', $class);
        $class = str_replace('Env', '', $class);
        require $class .'.php';
    }
}