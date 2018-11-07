<?php

namespace LambSlim\Application;

class Route
{
    /**
     * @var \Slim\App
     */
    protected static $httpHandler;

    public static function setHttpHandler(\Slim\App $httpHandler)
    {
        self::$httpHandler = $httpHandler;
    }

    /**
     * @param string $pattern
     * @param \Closure $closure
     */
    public static function get(string $pattern, \Closure $closure)
    {
        self::$httpHandler->get($pattern, $closure);
    }

    /**
     * @param string $pattern
     * @param \Closure $closure
     */
    public static function post(string $pattern, \Closure $closure)
    {
        self::$httpHandler->post($pattern, $closure);
    }

    /**
     * @param string $pattern
     * @param \Closure $closure
     */
    public static function put(string $pattern, \Closure $closure)
    {
        self::$httpHandler->put($pattern, $closure);
    }

    /**
     * @param string $pattern
     * @param \Closure $closure
     */
    public static function patch(string $pattern, \Closure $closure)
    {
        self::$httpHandler->patch($pattern, $closure);
    }

    /**
     * @param string $pattern
     * @param \Closure $closure
     */
    public static function delete(string $pattern, \Closure $closure)
    {
        self::$httpHandler->delete($pattern, $closure);
    }

    /**
     * @param string $pattern
     * @param \Closure $closure
     */
    public static function options(string $pattern, \Closure $closure)
    {
        self::$httpHandler->options($pattern, $closure);
    }

    /**
     * @param string $pattern
     * @param \Closure $closure
     */
    public static function any(string $pattern, \Closure $closure)
    {
        self::$httpHandler->any($pattern, $closure);
    }
}