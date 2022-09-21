<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $myUser = new User();
        $myUser->name = 'Antonius';
        $myUser->email = 'antomendetta@gmail.com';
        $myUser->password = Hash::make('1234hello');
        $myUser->save();

        for ($i=0; $i<8 ; $i++) { 
            $user = new User();
            $user->name = $faker->userName();
            $user->email = $faker->unique()->email();
            $user->password = Hash::make($faker->password());
            $user->save();
        }

    }
}
