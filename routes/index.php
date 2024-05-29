<?php
// Create Router instance
$router = new \Bramus\Router\Router();

// Định nghĩa đường dẫn
require_once __DIR__ . '/admin.php';
require_once __DIR__ . '/client.php';

$router->run();