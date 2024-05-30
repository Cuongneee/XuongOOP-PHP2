<?php

// Website có các trang là:
// Trang chủ
// Giới thiệu
// Liên hệ
// Sản phẩm
// Chi tiết sản phẩm

// HTTP method: get, post, put (path), delete, option, head

use Cuong\XuongOopPhp2\Controllers\Client\AboutController;
use Cuong\XuongOopPhp2\Controllers\Client\ContactController;
use Cuong\XuongOopPhp2\Controllers\Client\HomeController;
use Cuong\XuongOopPhp2\Controllers\Client\ProductController;

$router->get('/',                   HomeController::class       . '@index');
$router->get('/about',              AboutController::class      . '@index');

$router->get('/contact',            ContactController::class    . '@index');
$router->post('/contact/store',     ContactController::class    . '@store');

$router->get('/products',           ProductController::class    . '@index');
$router->get('/products/{id}',      ProductController::class    . '@detail');