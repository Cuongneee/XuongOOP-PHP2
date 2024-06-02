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

    public function create()
    {
        $this->renderViewAdmin('users.create', []);
        exit();
    }

    public function store()
    {
        $this->user->insert([
            'name' => $_POST['name'],
            'avata' => $_FILES['avata']['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ]);
        header('Location: ' . url('admin/users'));
        exit();
    }

    public function show($id)
    {
        $this->edit($id);
    }

    public function edit($id)
    {
        $oneUser = $this->user->findById($id);
        $this->renderViewAdmin('users.update', [
            'oneUser' => $oneUser
        ]);
    }

    public function update($id)
    {
        $this->user->update($id, [
            'name' => $_POST['name'],
            'avata' => $_FILES['avata']['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ]);
        header('Location: ' . url('admin/users'));
        exit();
    }

    public function delete($id)
    {
        $this->user->delete($id);
        header('Location: ' . url('admin/users'));
        exit();
    }
}