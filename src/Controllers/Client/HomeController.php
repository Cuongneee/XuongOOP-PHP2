<?php

namespace Cuong\XuongOopPhp2\Controllers\Client;

use Cuong\XuongOopPhp2\Commons\Controller;
use Cuong\XuongOopPhp2\Commons\Helper;
use Cuong\XuongOopPhp2\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = new User();

        Helper::debug($user);

        $name = "Cuongneee";
        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}