<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB; 
use Faker\Generator as Faker;

use Illuminate\Support\Facades\Hash; 

use Illuminate\Support\Str;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
public function run(Faker $faker)
{ 

	for ($i = 0; $i < 30; $i++) {
		DB::table('users')->insert([
			'name' => $faker->firstName(),
			'last_name' => $faker->lastName(),
			'dob' => $faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('d/m/Y'),
            'gender'=>$faker->randomElement(['Male', 'Female']),
            'annual_income'=>$faker->randomElement(['500000', '600000', "700000"]),
            'occupation'=>$faker->randomElement(['Private Job', 'Goverment Job', "Business"]),
            'family_type'=>$faker->randomElement(['Joint Family', 'Nuclear Family']),
            'manglik'=>$faker->randomElement(['Yes', 'No', "Both"]),
			'email' => $faker->unique()->safeEmail,
			'created_at' => now(),
			'updated_at' => now(),
            'password' => bcrypt('password@123'), // Can also be used Hash::make('password@123')
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
	}
}
}
