<?php

namespace App\Http\Controllers;

use App\Http\Modules\Response;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /** @var array*/
    private $rules = [];
    /** @var Validator*/
    private $validator;

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
    protected function respondWithSuccess($data = [], $status = Response::HTTP_OK) {
        return Response::sendJson($data, $status);
    }

    protected function dataSend($data = [], $status = Response::HTTP_OK){
        $messages = '';
        foreach($data as $message){
            $messages .= $message . "\n" . nl2br("\n");
        }
        return $messages;
    }

    /**
     * respond with all validation errors
     * @param  \Illuminate\Validation\Validator $validator the validator that failed to pass
     * @param integer $status
     * @return \Illuminate\Http\Response the appropriate response containing the error message
     */
    protected function respondWithFailedValidation(\Illuminate\Validation\Validator $validator = null)  {
        $validator = (!isset($validator)) ? $this->validator : $validator;
        return $this->respondWithErrors($validator->messages()->all(), $status = Response::HTTP_BAD_REQUEST);
    }

    protected function respondWithErrors($errors, $status = Response::HTTP_BAD_REQUEST) {
        return Response::sendJsonWithErrors($errors, $status);
    }
}
