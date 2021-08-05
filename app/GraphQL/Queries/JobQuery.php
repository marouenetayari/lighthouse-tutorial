<?php

namespace App\GraphQL\Queries;

use App\Models\Job;
use Illuminate\Support\Facades\App;

class JobQuery {

    public function byStatus($root, array $args){
        return Job::query()
            ->where('status', $args['status'])
            ->get();
    }

}

