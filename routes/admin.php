<?php

// CRUD bao gồm: thêm, xem, sửa, xóa, danh sách
// User:
//          GET     -> USER/INDEX      -> INDEX          -> Danh sách
//          GET     -> USER/CREATE     -> CREATE         -> Hiển thị form thêm mới
//          POST    -> USER/STORE      -> STORE          -> Hiển thị form thêm mới
//          GET     -> USER/ID         -> SHOW   ($id)   -> Xem chi tiết
//          PUT     -> USER/ID/EDIT    -> EDIT   ($id)   -> Hiển thị form cập nhật
//          POST    -> USER/ID         -> UPDATE ($id)   -> Lưu dữ liệu từ form cập nhật vài DB
//          DELETE  -> USER/ID         -> DELETE ($id)   -> Xóa bản ghi trong DB

use Cuong\XuongOopPhp2\Controllers\Admin\UserController;

// CRUD USER
$router->mount('/admin', function () use ($router) {

    $router->mount('/users', function () use ($router) {
        $router->get('/',            UserController::class . '@index');
        $router->get('/create',      UserController::class . '@create');
        $router->post('/store',      UserController::class . '@store');
        $router->get('/{id}',        UserController::class . '@show');
        $router->put('/{id}/edit',   UserController::class . '@edit');
        $router->post('/{id}',       UserController::class . '@update');
        $router->delete('/{id}',     UserController::class . '@delete');
    });

});

