<?php
namespace App\Http\Controllers;

use App\Http\Modules\User\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function submit(Request $request)
    {
        $model = new User();
        if (Auth::check()){
            return 'k';
        }
        if ($request->input('login')){
//            $validators = Validator::make(
//                [
//                    'login'                 =>  Input::get('login'),
//                    'first_name'            =>  Input::get('first_name'),
//                    'last_name'             =>  Input::get('last_name'),
//                    'email'                 =>  Input::get('email'),
//                    'password'              =>  Input::get('password'),
////                    'password-confirmation' =>  Input::get('password-confirmation'),
//                ],
//                [
//                    'login'                 =>  'required|unique:users,login|min:2|max:60',
//                    'first_name'            =>  'required|min:2|max:60',
//                    'last_name'             =>  'required|min:2|max:60',
//                    'email'                 =>  'required|unique:users,email|email|min:3',
////                    'password'              =>  'required|confirmed',
//                    'password'              =>  'required',
////                    'password-confirmation' =>  'same:password',
//                ],
//                [
//                    'required'  =>  'Must be field :attribute',
//                    'email'     =>  'E-mail format is incorrect',
//                    'unique'    =>  'This :attribute incorrect',
//                    'min'       =>  'Field :attribute must have min :min characters',
//                    'max'       =>  'Field :attribute must have max :max characters',
//                    'confirmed' =>  'Password not equal'
//                ]
//            );
            $this->setRules([
                'login'                 =>  'required|unique:users,login|min:2|max:60',
                'first_name'            =>  'required|min:2|max:60',
                'last_name'             =>  'required|min:2|max:60',
                'email'                 =>  'required|unique:users,email|email|min:3',
                'password'              =>  'required',
            ]);
            if ($this->isValidationFails($request)){
//                $errors = $this->respondWithSuccess($this->getValidatorErrors());
                $errors = $this->dataSend($this->getValidatorErrors());
            } else {
                $model->fill($this->getRulesInput($request));
                if ($model->signup()){
                    $success = "Success";
                }
            }
        }

        return view('auth.submit',[
            'title'=>'Registration',
            'errors'=>isset($errors)?$errors:null,
            'success'=>isset($success)?$success:null,

        ]);
    }
}