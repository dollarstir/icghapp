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
        '/user',
        function ($context) {
            return Viewer::view('main/user.php', $context);
        }
    ),

    new Route(
        '/ptest',
        function ($context) {
            return Viewer::view('main/ptest.php', $context);
        }
    ),

    new Route(
        '/updateprofile',
        function ($context) {
            return Viewer::view('main/updateprofile.php', $context);
        }
    ),

    new Route(
        '/tupsu',
        function ($context) {
            return Viewer::view('main/tupsu.php', $context);
        }
    ),

    new Route(
        '/reglog',
        function ($context) {
            return Viewer::view('main/reglog.php', $context);
        }
    ),

    new Route(
        '/reg',
        function ($context) {
            return Viewer::view('main/reg.php', $context);
        }
    ),

    new Route(
        '/otp',
        function ($context) {
            return Viewer::view('main/otp.php', $context);
        }
    ),

    new Route(
        '/presult',
        function ($context) {
            return Viewer::view('main/presult.php', $context);
        }
    ),

    new Route(
        '/newpass',
        function ($context) {
            return Viewer::view('main/newpass.php', $context);
        }
    ),

    new Route(
        '/newcounse',
        function ($context) {
            return Viewer::view('main/newcounse.php', $context);
        }
    ),

    new Route(
        '/mnotify',
        function ($context) {
            return Viewer::view('main/mnotify.php', $context);
        }
    ),

    new Route(
        '/fes',
        function ($context) {
            return Viewer::view('main/fes.php', $context);
        }
    ),

    new Route(
        '/version',
        function ($context) {
            return Viewer::view('main/version.php', $context);
        }
    ),

    new Route(
        '/changepass',
        function ($context) {
            return Viewer::view('main/changepass.php', $context);
        }
    ),

    new Route(
        '/cftest',
        function ($context) {
            return Viewer::view('main/cftest.php', $context);
        }
    ),

    new Route(
        '/cform',
        function ($context) {
            return Viewer::view('main/cform.php', $context);
        }
    ),

    new Route(
        '/cc',
        function ($context) {
            return Viewer::view('main/cc.php', $context);
        }
    ),

    new Route(
        '/cancel',
        function ($context) {
            return Viewer::view('main/cancel.php', $context);
        }
    ),

    new Route(
        '/book1',
        function ($context) {
            return Viewer::view('main/book1.php', $context);
        }
    ),

    new Route(
        '/book',
        function ($context) {
            return Viewer::view('main/book.php', $context);
        }
    ),

    new Route(
        '/bk',
        function ($context) {
            return Viewer::view('main/bk.php', $context);
        }
    ),

    new Route(
        '/app-login',
        function ($context) {
            return Viewer::view('main/app-login.php', $context);
        }
    ),

    new Route(
        '/cform',
        function ($context) {
            return Viewer::view('install.php', $context);
        }
    ),

    new Route(
        '/groups',
        function ($context) {
            return Viewer::view('main/groups.php', $context);
        }
    ),
]);
$router->launch();
