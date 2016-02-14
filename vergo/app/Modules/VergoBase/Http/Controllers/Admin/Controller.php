<?php

namespace App\Modules\VergoBase\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Modules\VergoBase\Http\Controllers\Controller as BaseController;

class Controller extends BaseController{
    protected $prefix = 'admin';

    public function index(Request $request){
        return view($this->getViewRoute());
    }
}
