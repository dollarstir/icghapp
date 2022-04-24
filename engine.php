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
