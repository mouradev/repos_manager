<?php

use Illuminate\Database\Seeder;

class CreateAdminUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!\App\User::where('email', 'lucas'.'@homemmaquina.com.br')->first()) {
            $User = \App\User::create([
                'name' => 'Lucas Moura',
                'email' => 'lucas'.'@homemmaquina.com.br',
                'type' => 3,
                'github_username' => 'mouradev',
                'password' => bcrypt('eganrac'),
            ]);
            $User->save();
        }

        if(!\App\User::where('email', 'richard'.'@homemmaquina.com.br')->first()) {
            $User = \App\User::create([
                'name' => 'Richard',
                'email' => 'richard'.'@homemmaquina.com.br',
                'type' => 3,
                'password' => bcrypt('eganrac'),
            ]);
            $User->save();
        }
    }
}
