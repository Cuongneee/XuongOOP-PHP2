<?php

namespace Cuong\XuongOopPhp2\Controllers\Admin;

use Cuong\XuongOopPhp2\Commons\Controller;
use Cuong\XuongOopPhp2\Commons\Helper;
use Cuong\XuongOopPhp2\Models\User;

class UserController extends Controller
{

    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        try {
            //code...
            [$users, $totalPage] = $this->user->paginate($_GET['page'] ?? 1);

            $this->renderViewAdmin('users.index', [
                'users' => $users,
                'totalPage' => $totalPage
            ]);

        } catch (\Throwable $th) {
            //throw $th;
            Helper::debug($th);
        }

    }

    public function crate()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function store()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function showw($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function edit($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function update($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function delete($id)
    {
        $this->user->delete($id);
        header('Location: ' .url('admin/users'));
        exit();
    }
}