<?php

namespace Core;

class Route {
    // Store route data
    private $routes = [];
    // Store instance
    protected static $instance;

    // Initialize Singleton for Route
    private static function init() {
        if (self::$instance) return;

        self::$instance = new self(); 
    }

    // Prevent route from instantiating outside of class
    private function __construct() {}

    // Store Route
    public static function store($route, $callback) {
        self::init();
        $me = self::$instance;
        $me->routes[$route] = $callback;
    }

    // Get Route Data
    public static function get($route) {
        self::init();
        $me = self::$instance;
        return $me->routes[$route];
    }
}
