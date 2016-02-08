<?php

namespace App\Modules\VergoBase\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\VergoBase\Http\Service\Banners\Service;
use App\Modules\VergoBase\Database\Models\Banners as Model;

class BannerController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request){
        $deleted = ($request->input('deleted', null));
        $collection = Service::getAll($deleted);
        return $collection;
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\Response|null
     */
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


    public function add(Request $request){
        if ($request->method() == 'GET') {
            $model = new Model();
            return $this->sendOk(['message'=>'Add page coming soon']);
        }
        $this->setRules([
            'name'  =>  'required|min:2',
            'url'   =>  'required|min:3',
            'text'  =>  'required'
        ]);
        if ($this->isValidationFails($request)){
            return $this->sendWithErrors($this->getValidatorErrors());
        }

    }
}