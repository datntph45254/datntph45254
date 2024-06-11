<?php

namespace  Hi\Oop\Controllers\Admin;

use Hi\Oop\Commons\Controller;
use Hi\Oop\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}