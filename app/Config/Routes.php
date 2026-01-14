<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('hubungi-kami', 'Home::contact');
$routes->get('adminlogin', 'Admin::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->match(['get', 'post'], 'adminlogin', 'Dashboard::index');
$routes->get('tentang-kami', 'Home::About');
$routes->get('cabang-jakarta', 'Home::cabang/jakarta');
$routes->get('cabang-tangerang', 'Home::cabang/tangerang');
$routes->get('cabang-medan', 'Home::cabang/medan');
$routes->get('blog', 'Home::blog');
$routes->get('blog/(:num)', 'Home::blog/$1');
$routes->get('dataquery', 'JQuery::Query');
$routes->get('postdata', 'JQuery::PostQuery');


$routes->group("", function ($routes) {
    $routes->get("register-user", "Register::reg");
    $routes->post("register-user", "Register::index");
    $routes->get("login-user", "Login::log");
    $routes->get('login/generateCaptchaImage', 'Login::generateCaptchaImage');
    $routes->post('login/validateCaptcha', 'Login::validateCaptcha');
    $routes->post("login-user", "Login::index");
    
    // Protected routes group
    $routes->group('', ['filter' => 'authFilter'], function($routes) {
        $routes->get("usersvalas", "UserValas::index");
    });
});

$routes->get("blog.test/blog", "Brjson::Article");
$routes->get("ci.test/valas", "Brjson::kurs");



$routes->get("loggedin","Login::xsstest");
$routes->post("submitdata","Login::xssTest");

// $routes->post("restrictedpage","Login::handleAjaxRequest");


$routes->get('api/branches', 'Brjson::index');
$routes->get('api/kursdata', 'Brjson::kurs');
$routes->get('api/article', 'Brjson::Article');
$routes->post('dataquery', 'Brjson::kurs');








