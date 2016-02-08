<?php

namespace App\Modules\VergoBase\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\VergoBase\Database\Models\StaticPages as Model;
use App\Modules\VergoBase\Http\Service\StaticPages\Service as Service;

class StaticPagesController extends Controller
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
    public function getOne(Request $request, $id = null){
        if (!isset($id)){
            return $this->sendWithErrors('Bad input data');
        }
        $model = Service::getOne($id,($request->input('status', null)));
        if (!$model){
            return $this->sendWithErrors('Not found page');
        }
        return $model;
    }

    /**
     * @param Request $request
     * @return \App\Modules\VergoBase\Http\Requests\Response|\Illuminate\Http\Response
     */
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
        $save = Service::create($this->getRulesInput($request));
        if($save){
            return $this->sendOk(['message' => 'Success']);
        }
        return $this->sendWithErrors('Something went wrong');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \App\Modules\VergoBase\Http\Requests\Response|\Illuminate\Http\Response
     */
    public function edit(Request $request, $id){
        if (!isset($id)){
            return $this->sendWithErrors('Bad input data');
        }
        if ($request->method() == 'GET') {
            $model = Model::query()->find($id);
            if (!$model){
                return $this->sendWithErrors('Not found page');
            }
            return $this->sendOk(['message'=>'Add page coming soon']);
        }
        $this->setRules([
            'id'    =>  'required',
            'name'  =>  'required|min:2',
            'url'   =>  'required|min:3',
            'text'  =>  'required'
        ]);
        if ($this->isValidationFails($request)){
            return $this->sendWithErrors($this->getValidatorErrors());
        }
        $save = Service::update($this->getRulesInput($request));
        if (!$save){
            return $this->sendWithErrors('Not found page');
        }
        return $this->sendOk(['message'=>'Success']);
    }
}