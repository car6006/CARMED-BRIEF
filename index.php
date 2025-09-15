<?php
// Simple router for CARMED-BRIEF
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

switch ($path) {
    case '/':
    case '/greeting':
        include 'resources/views/greeting.blade.php';
        break;
    default:
        http_response_code(404);
        echo '404 - Page not found';
        break;
}
?>