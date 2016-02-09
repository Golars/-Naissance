<?php

namespace App\Modules\VBanners\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\VBanners\Database\Models\Banners as Model;
/**
 * Required from [VERGO]Base Module
 */
use App\Modules\VBanners\Http\Service\Banners\Service;
use App\Modules\VergoBase\Http\Controllers\Controller;

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

    /**
     * @param Request $request
     * @return \App\Modules\VergoBase\Http\Requests\Response|\Illuminate\Http\Response
     */
    public function add(Request $request){
        if ($request->method() == 'GET') {
            $model = new Model();
            return view('vergo_base::test',['model' =>  $model]);
        }
        $this->setRules([
            'name'      =>  'required|min:2',
            'file_cover'=>  'required|image',
            'position'  =>  'required',
            'href'      =>  'required|min:3'
        ]);
        if ($this->isValidationFails($request)){
            return $this->sendWithErrors($this->getValidatorErrors());
        }

        if(Service::create($this->getRulesInput($request),$request->file('file_cover'))){
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
            return view('vergo_base::test',['model' =>  $model]);
        }

        $this->setRules([
            'id'            =>  'required',
            'name'          =>  'required|min:2',
            'file_cover'    =>  'required|image',
            'position'      =>  'required',
            'href'          =>  'required|min:3'
        ]);

        if ($this->isValidationFails($request)){
            return $this->sendWithErrors($this->getValidatorErrors());
        }

        if (Service::update($this->getRulesInput($request),$request->file('file_cover'))){
            return $this->sendOk(['message'=>'Success']);
        }

        return $this->sendWithErrors('Not found page');
    }
}