<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::truncate();
        Job::unguard();

        $faker = \Faker\factory::create();

        User::all()->each(function ($user) use ($faker) {

            foreach (range(3, 5) as $i){
                $status = 'QUEUED';

                if($i == 4){
                    $status = 'PROCESSING';
                } elseif ($i == 5){
                    $status = 'COMPLETED';
                }

                Job::create([
                    'user_id' => $user->getKey() ,
                    'title' => $faker->sentence,
                    'status' => $status
                ]);
            }
        });
    }
}
