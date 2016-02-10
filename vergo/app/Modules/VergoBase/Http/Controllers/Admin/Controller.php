<?php

namespace App\Modules\VergoBase\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Modules\VergoBase\Http\Controllers\Controller as BaseController;

class Controller extends BaseController{
    public function index(){
        return view('vergo_base::admin.index');
    }

    public function login(){
        return view('vergo_base::admin.login');
    }
}
