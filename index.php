<?php
require __DIR__ . '/includes/session.php';
require __DIR__ . '/includes/helpers.php';
require __DIR__ . '/includes/flash.php';
require __DIR__ . '/includes/csrf.php';
require __DIR__ . '/includes/captcha.php';
require __DIR__ . '/includes/db.php';
require __DIR__ . '/includes/auth.php';

$page = $_GET['page'] ?? (is_logged_in() ? 'home' : 'login');
$routes = [
 'login'=>'pages/auth/login.php', 'register'=>'pages/auth/register.php', 'home'=>'pages/user/home.php',
 'logout'=>'actions/auth/logout.php', 'do_login'=>'actions/auth/login.php', 'do_register'=>'actions/auth/register.php',
];
if (!isset($routes[$page])) { http_response_code(404); exit('404'); }
require __DIR__ . '/' . $routes[$page];
