<?php

namespace Cuong\XuongOopPhp2\Controllers\Client;

use Cuong\XuongOopPhp2\Commons\Controller;
use Cuong\XuongOopPhp2\Commons\Helper;
use Cuong\XuongOopPhp2\Models\User;

class HomeController extends Controller
{
    public function index()
    {
       

        $name = "Cuongneee";
        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}