<?php

namespace App\Modules\VergoBase\Http\Services;

use App\Modules\VergoBase\Database\Models\User as Model;
use App\Modules\VergoBase\Database\Models\Token;

class User extends Base{

    public function auth($data){
        $user = Model::query()
            ->where('login', $data['login'])
            ->orWhere('email', $data['login'])
            ->with('token')
            ->with('role')
            ->first();
        if(!$user || !$user->chkPassword($data['password'])) {
            return $this->addError('Email/Login or password is invalid');
        }

        if(!$user->token) {
            $user->createToken($user);
        }
        $this->setModel($user);
    }

    public function authByToken($token){
        if(!$token) {
            return;
        }
        $user = Model::query()
            ->with(['token' => function($query) use ($token){
                return $query->where('token', $token);
            }])
            ->with('role')
            ->first();
        if(!isset($user->id)) {
            return;
        }
        $this->setModel($user);
        return $user;
    }
}