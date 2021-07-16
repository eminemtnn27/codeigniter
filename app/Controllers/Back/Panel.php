<?php

namespace App\Controllers\Back;
use App\Controllers\BaseController;

class Panel extends BaseController
{
    public function _construct(){
        parent::_construct();
    }
    public function index(){
        return view('back/homepage');
    }
}
 