<?php

namespace Cuong\XuongOopPhp2\Controllers\Admin;

use Cuong\XuongOopPhp2\Commons\Controller;

class UserController extends Controller
{
    public function index()
    {
        echo __CLASS__  . '@' . __FUNCTION__;
    }

    public function crate()
    {
        echo __CLASS__  . '@' . __FUNCTION__ ;
    }

    public function showw($id)
    {
        echo __CLASS__  . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function edit($id)
    {
        echo __CLASS__  . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function update($id)
    {
        echo __CLASS__  . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function delete($id)
    {
        echo __CLASS__  . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }
}