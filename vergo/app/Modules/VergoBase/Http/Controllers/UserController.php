<?php
namespace App\Modules\VergoBase\Http\Controllers;

use Auth;
use App\Modules\VergoBase\Database\Models\User;
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
            return redirect('/');
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
        if ($model->save()){
            $result['message'] = "Success";
        }

        return view('vergo_base::auth.submit', $result);
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
        $data = $this->getRulesInput($request);
        $user = User::query()
            ->where('login', $data['login'])
            ->first();
        if(!$user || !$user->chkPassword($data['password'])) {
            return dd('Login or password is invalid');
        }
        Auth::login($user);
            return dd('success');
    }
}