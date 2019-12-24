<?php
/**
 * Created by PhpStorm.
 * User: jefinghelbrecht
 * Date: 24/10/18
 * Time: 21:37
 */

namespace ModernWays\MVC;

class Routing
{
    static private $namespace;
    static private $entity;
    static private $action;
    static private $id;
    static private $route;
    static private $default;

    /**
     * @return mixed
     */
    public static function getEntity()
    {
        return self::$entity;
    }

    /**
     * @return mixed
     */
    public static function getAction()
    {
        return self::$action;
    }

    /**
     * @return mixed
     */
    public static function getNamespace()
    {
        return self::$namespace;
    }

    /**
     * @return mixed
     */
    public static function getId()
    {
        return self::$id;
    }

    /**
     * @return mixed
     */
    public static function getRoute()
    {
        return self::$route;
    }

    /**
     * @return mixed
     */
    public static function getDefault()
    {
        return self::$default;
    }

    /**
     * @param mixed $route
     */
    public static function setRoute($route)
    {
        if (substr($route, 0, 1) == '/') {
            $route = substr($route, 1);
        }
        self::$route = $route;
    }

    public static function setRouteFromUrl($scriptName, $redirectUrl)
    {
        // echo $scriptName;
        $pos = strrpos($scriptName, '/');
        $path = substr($scriptName, 0, $pos + 1);
        self::setRoute(str_replace($path, '', $redirectUrl));
    }

    public static function init($default)
    {
        self::$default = $default;
        $ucArray = explode('/', isset(self::$route) ? self::$route : self::$default);
        self::$namespace = isset($ucArray[0]) ? $ucArray[0] : 'None';
        self::$entity = isset($ucArray[1]) ? $ucArray[1] : 'None';
        self::$action = isset($ucArray[2]) ? $ucArray[2] : 'None';
        self::$id = isset($ucArray[3]) ? $ucArray[3] : 'None';
    }

    public static function toString()
    {
        $info = 'Namespace: ' . self::$namespace . '<br/>';
        $info .= 'Entity: ' . self::$entity . '<br/>';
        $info .= 'Action: ' . self::$action . '<br/>';
        $info .= 'Id: ' . self::$id . '<br/>';
        $info .= 'Route: ' . self::$route . '<br/>';
        $info .= 'Default: ' . self::$default;
        return $info;
    }
}