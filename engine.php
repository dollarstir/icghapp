<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('main/index.php', $context);
        }
    ),

    new Route(
        '/ads',
        function ($context) {
            return Viewer::view('main/ads.php', $context);
        }
    ),

    new Route(
        '/ncount',
        function ($context) {
            return Viewer::view('main/ncount.php', $context);
        }
    ),

    new Route(
        '/addratings',
        function ($context) {
            return Viewer::view('main/addrate.php', $context);
        }
    ),

    new Route(
        '/myrate',
        function ($context) {
            return Viewer::view('main/myrate.php', $context);
        }
    ),

    new Route(
        '/bookings',
        function ($context) {
            return Viewer::view('main/bookings.php', $context);
        }
    ),

    new Route(
        '/',
        function ($context) {
            return Viewer::view('install.php', $context);
        }
    ),

    new Route(
        '/',
        function ($context) {
            return Viewer::view('install.php', $context);
        }
    ),

    new Route(
        '/',
        function ($context) {
            return Viewer::view('install.php', $context);
        }
    ),

    new Route(
        '/',
        function ($context) {
            return Viewer::view('install.php', $context);
        }
    ),

    new Route(
        '/',
        function ($context) {
            return Viewer::view('install.php', $context);
        }
    ),

    new Route(
        '/',
        function ($context) {
            return Viewer::view('install.php', $context);
        }
    ),
]);
$router->launch();
