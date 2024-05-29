<?php

namespace Cuong\XuongOopPhp2\Commons;

class Model
{
    protected $conn;
    public function __construct()
    {
        //Thực hiện tự động khi khởi tạo
        // class nào liên quan đến Model
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}