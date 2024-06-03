<?php
namespace Cuong\XuongOopPhp2\Controllers\Admin;

use Cuong\XuongOopPhp2\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}