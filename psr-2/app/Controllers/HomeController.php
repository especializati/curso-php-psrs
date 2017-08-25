<?php
namespace App\Controllers;

use FooInterface;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class HomeController extends Bar implements FooInterface
{
    private $layout = false;


    public function sampleMethod($a, $b = null)
    {
        if ($a === $b) {
            bar();
        } elseif ($a > $b) {
            $foo->bar($arg1);
        } else {
            BazClass::bar($arg2, $arg3);
        }
    }


    final public static function bar()
    {
        // method body
    }
}