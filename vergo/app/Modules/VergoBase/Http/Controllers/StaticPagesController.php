<?php

namespace App\Modules\VergoBase\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\VergoBase\Database\Models\StaticPages as Model;
use App\Modules\VergoBase\Http\Service\StaticPages\Page as Service;
class StaticPagesController extends Controller
{
    public function index(Request $request){
        $deleted = ($request->input('deleted', null));
        $collection = Service::getAll($deleted);
        return $collection;
    }

    public function page(Request $request, $id){
        if (!isset($id)){
            return $this->sendWithErrors('Bad input data');
        }
        $model = Service::getOne($id,($request->input('status', null)));
        if (empty($model)){
            return $this->sendWithErrors('Not found page');
        }
        return $model;
    }

    public function add(Request $request){
        if ($request->method() == 'GET') {
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
        $model = new Model();
        $model->fill($this->getRulesInput($request));
        if ($model->save()){
            return $this->sendOk(['message'=>'Success']);
        }
        return $this->sendWithErrors('Something went wrong');
    }
}