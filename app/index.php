<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/trinity.php';
        break;
    case '' :
        require __DIR__ . '/views/trinity.php';
        break;
    case '/healthz' :
        require __DIR__ . '/views/healthz.php';
        break;
    case '/livez' :
        require __DIR__ . '/views/livez.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
>