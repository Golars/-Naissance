<?php

namespace App\Modules\VergoBase\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController{

    public function index(){
        return 'Hello from VergoBase';
    }

}
