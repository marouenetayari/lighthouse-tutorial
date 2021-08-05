<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class AuthMutator{
    public function login($root, array $args){
        $credentials = Arr::only($args, ['email', 'password']);

        if(Auth::once($credentials)){
            $token = Str::random(60);

            $user = auth()->user();
            $user->api_token = $token;
            $user->save();

            return $token;
        }

        return null;
    }
}
