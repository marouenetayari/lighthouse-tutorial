<?php

namespace App\GraphQL\Queries;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserQuery {

    public function me(){
        return Auth::guard('api')->user();
    }

    public function all(){
        return User::all();
    }

    public function find($root, array $args){
        return User::find($args['id']);
    }
}

