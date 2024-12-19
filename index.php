<?php
// public/index.php

require_once 'database/db.php';
require_once 'controllers/ProductController.php';

$requestUri = parse_url($_SERVER['REQUEST_URI'])['path'];
$controller = new ProductController($db);

if ($requestUri === '/') {
    $controller->index();
} elseif ($requestUri === '/create') {
    $controller->create();
} elseif ($requestUri === '/delete') {
    $controller->delete();
} else {
    http_response_code(404);
    echo "Page not found";
}
?>
