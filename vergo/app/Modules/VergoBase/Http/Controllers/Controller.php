<?php

namespace App\Modules\VergoBase\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Modules\VergoBase\Http\Requests\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController{
    protected $prefix = '';
    protected $moduleName = 'vergo_base';
    protected $service;
    protected $serviceName;

    /** @var array*/
    private $rules = [];
    /** @var Validator*/
    private $validator;

    /**
     * Controller constructor.
     * @param string $serviceName
     */
    public function __construct($serviceName = 'App\Modules\VergoBase\Http\Services\Base')
    {
        $this->serviceName = (isset($this->serviceName)) ? $this->serviceName : $serviceName;
        $this->service = App::make($this->serviceName);
    }

    /**
     * @return array
     */
    public function getRules() {
        return $this->rules;
    }

    /**
     * @param array $rules
     */
    public function setRules($rules) {
        $this->rules = $rules;
    }

    protected function getViewRoute($name = 'index'){
        return $this->moduleName . '::' . $this->prefix . '.' . $name;
    }
    protected function getRoute($name = 'index'){
        return route($this->prefix . ':' . $name);
    }
    protected function getValidatorErrors(){
        return $this->validator->messages()->all();
    }

    public function isValidationFails(Request $request){
        $validator = Validator::make($request->all(), $this->rules);
        $this->validator = $validator;
        return $validator->fails();
    }

    public function getRulesInput(Request $request, $addUserId = false,array $change = array()){
        $data = $request->only(array_keys($this->rules));
        if($addUserId) {
            $data['user_id'] = (isset($data['user_id'])) ? $data['user_id'] : null;
            $data['user_id'] = ($data['user_id'] || !$request->user()) ? $data['user_id'] : $request->user()->id;
        }
        if(!empty($change)) {
            foreach($change as $key => $value) {
                $data[$key] = $value;
            }
        }
        return $data;
    }

    /**
     * @param array $data
     * @param integer $status
     * @return Response
     */
    protected function sendOk($data = [], $status = Response::HTTP_OK) {
        return Response::sendJson($data, $status);
    }

    /**
     * respond with all validation errors
     * @param  \Illuminate\Validation\Validator $validator the validator that failed to pass
     * @return \Illuminate\Http\Response the appropriate response containing the error message
     */
    protected function sendWithFailedValidation(\Illuminate\Validation\Validator $validator = null)  {
        $validator = (!isset($validator)) ? $this->validator : $validator;
        return $this->sendWithErrors($validator->messages()->all(), $status = Response::HTTP_BAD_REQUEST);
    }

    protected function sendWithErrors($errors, $status = Response::HTTP_BAD_REQUEST) {
        return Response::sendJsonWithErrors($errors, $status);
    }

}
