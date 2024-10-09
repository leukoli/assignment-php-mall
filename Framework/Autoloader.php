<?php
namespace Framework;

/**
 * auto load class
 *
 * @author li yuguang
 * @copyright 2024 CPCE-PolyU SEHS3245-101 Group 5
 */
class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
           $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
            if (file_exists(DOC_ROOT . $file)) {
                require $file;
                return true;
            }
            throw new \Exception("$file not found!");
        });
    }
}