<?php

namespace App\Modules\VergoBase\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\VergoBase\Http\Service\Banners\Service;

class BannerController extends Controller
{
    public function index(Request $request){
        $deleted = ($request->input('deleted', null));
        $collection = Service::getAll($deleted);
        return $collection;
    }

    public function getOne(Request $request, $id){
        if (!isset($id)){
            return $this->sendWithErrors('Bad input data');
        }
        $model = Service::getOne($id,($request->input('status', null)));
        if (!$model){
            return $this->sendWithErrors('Not found page');
        }
        return $model;
    }
}