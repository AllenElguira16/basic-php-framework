<?php

namespace Core;

use Core\Route;

// Main Function bootstrap
class App {
    // GET request
    function get($route, $callback) {
        Route::store($route, $callback);
    }

    // start application
    function start() {
        $callback = Route::get($_SERVER['REQUEST_URI']);

        $callback();
    }
}
