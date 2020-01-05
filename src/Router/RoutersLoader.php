<?php


namespace Routers;


class RoutersLoader
{
    private static $routers = [];

    public function __construct()
    {

    }

    public static function checkValidRouters(string $controller)
    {
        $result = false;
        self::$routers = include(ROOT_DIR . '/src/Router/routers.php');
        foreach (self::$routers as $key => $value) {
            if ($controller === $key && $value === true) {
                $result = $value;
            }
        }
        return $result;

    }
}