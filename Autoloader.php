<?php
/**
 * Autoloader class
 *
 * @licence: Licensed under The MIT License
 * @author: Nicola Pietroluongo
 * @version: 1.0
 * @github: https://github.com/niklongstone/PHPAutoloader
 **/
class Autoloader
{
    static public $root = '';

    static public function loader($className)
    {
        $filename = self::$root .  str_replace('\\', DIRECTORY_SEPARATOR, $className) . ".php";
        if (file_exists($filename)) {
            include($filename);
            if (class_exists($className)) {
            return true;
            }
        }

    return true;
    }
}

spl_autoload_register('Autoloader::loader');

