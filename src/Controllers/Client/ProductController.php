<?php

namespace Cuong\XuongOopPhp2\Controllers\Client;

use Cuong\XuongOopPhp2\Commons\Controller;

class ProductController extends Controller
{
    public function index()
    {
        echo __CLASS__  . '@' . __FUNCTION__;
    }

    public function detail($id)
    {
        echo __CLASS__  . '@' . __FUNCTION__ . '@' . $id;
    }
}