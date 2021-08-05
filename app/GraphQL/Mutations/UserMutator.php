<?php


namespace App\GraphQL\Mutations;


use App\Models\User;
use phpDocumentor\Reflection\Types\AbstractList;

class UserMutator
{
    public function create($root, array $args){
        $token = Str::random(60);

        $user = User::create($args);

        $user->api_token = $token;

        $user->save();

        return [
            'user' => $user,
            'token' => $token
        ];
    }
}
