<?php

namespace App\GraphQL\Types;

use App\Models\User;

class UserType {
    public function jobs(User $user){
        return $user->jobs()->get();
    }
}
