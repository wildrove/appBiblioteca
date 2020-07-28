<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
      /*  DB::table('users')->insert([
        	'first_name' => 'Wilder',
        	'last_name' => 'Vagner Gaspar',
        	'user_name' => 'wilder',
        	'cpf' => '06714797680',
        	'user_type' => 'Administrator',
        	'email' => 'wilderagner@hotmail.com',
        	'password' => '12345678',
            'birthday' => '1984-10-06',
            'created_at' => now(),
            'updated_at' => now(),
            'remember_token' => 'rebrwjerkewjrhwe'

        ]);

        */

        factory(\App\User::class, 20)->create()->each(function($user){
            $user->books()->save(factory(\App\Book::class)->make());
        });
    }
}
