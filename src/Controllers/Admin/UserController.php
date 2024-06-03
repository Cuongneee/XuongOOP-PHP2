<?php

namespace Cuong\XuongOopPhp2\Controllers\Admin;

use Cuong\XuongOopPhp2\Commons\Controller;
use Cuong\XuongOopPhp2\Commons\Helper;
use Cuong\XuongOopPhp2\Models\User;
use Rakit\Validation\Validator;


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
        
    }

    public function store()
    {
        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|max:50',
            'avata' => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/users/create'));
            exit;

        } else {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ];

            if (!empty($_FILES['avata']) && $_FILES['avata']['size'] > 0) {

                $from = $_FILES['avata']['tmp_name'];
                $to = 'uploads/' . time() . $_FILES['avata']['name'];

                if (move_uploaded_file($from, PATH_ASSET . $to)) {
                    $data['avata'] = $to;
                } else {
                    $_SESSION['errors']['avata'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url('admin/users/create'));
                    exit;
                }
            }

            $this->user->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/users'));
            exit;
        }
    }


    public function show($id)
    {

        $user = $this->user->findById($id);

        $this->renderViewAdmin('users.show', [
            'user' => $user
        ]);
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
        try {

            $user = $this->user->findById($id);

            $this->user->delete($id);

            if ($user['avata'] && file_exists(PATH_ASSET . $user['avata'])) {
                unlink(PATH_ASSET . $user['avata']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        
        header('Location: ' . url('admin/users'));
        exit();
    }
}