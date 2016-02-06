<?php
namespace App\Modules\VergoBase\Http\Controllers;

use App\Modules\VergoBase\Database\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $result = [
            'title' => 'Registration',
            'message' => '',
        ];

        if ($request->method() == 'GET') {
            return view('vergo_base::auth.submit', $result);
        }

        $model = new User();
        if (Auth::check()){
            return 'k';
        }

        $this->setRules([
            'login'                 =>  'required|unique:users,login|min:2|max:60',
            'first_name'            =>  'required|min:2|max:60',
            'last_name'             =>  'required|min:2|max:60',
            'email'                 =>  'required|unique:users,email|email|min:3',
            'password'              =>  'required',
        ]);

        if ($this->isValidationFails($request)){
            $result['error'] = 1;
            $result['message'] = $this->getValidatorErrors();
            return view('vergo_base::auth.submit', $result);
        }

        $model->fill($this->getRulesInput($request));
        if ($model->signup()){
            $result['message'] = "Success";
        }

        return view('vergo_base::auth.submit', $result);
    }

    public function getAllUser(){
        $collection = \App\Http\Modules\User\Models\User::query()->get();
        die(var_dump( $collection, __LINE__, __FUNCTION__, __FILE__));
    }

    public function login(Request $request){
        $result = [
            'title' => 'Login',
            'message' => '',
        ];

        if ($request->method() == 'GET') {
            return view('vergo_base::auth.login', $result);
        }
        $this->setRules([
            'login'     =>  'required|min:2|max:60',
            'password'  =>  'required|min:2|max:60'
        ]);
        if ($this->isValidationFails($request)){
            $result['error']=1;
            $result['message'] = $this->getValidatorErrors();
            return view('vergo_base::auth.login', $result);
        }
        if(Auth::attemp([
            'login'=>$request->input('login'),
            'password'=>$request->input('password')],false)){
            return dd('success');
        }
    }
}