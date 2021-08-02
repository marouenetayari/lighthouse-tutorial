<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\factory::create();

        User::create([
            'name' => 'Jhon Doe',
            'email' => 'jhon.doe.graaphql.com',
            'password' => bcrypt('123456'),
        ]);

        foreach (range(1, 9) as $i){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email ,
                'password' => Str::random(10),
            ]);
        }
    }
}
