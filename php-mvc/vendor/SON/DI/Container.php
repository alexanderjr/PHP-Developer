<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 22/05/17
 * Time: 22:29
 */

namespace SON\DI;

use App\Conn;

class Container
{
    public static function getModel($model)
    {
        $class = "\\App\\Models\\".ucfirst($model);
        return new $class(Conn::getDB());
    }
}