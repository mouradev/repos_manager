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
        DB::table('users')->insert([
            'name' => 'Lucas Moura',
            'email' => 'lucas'.'@homemmaquina.com.br',
            'type' => 3,
            'github_username' => 'mouradev',
            'password' => bcrypt('eganrac'),
        ]);

        DB::table('users')->insert([
            'name' => 'Richard',
            'email' => 'richard'.'@homemmaquina.com.br',
            'type' => 3,
            'password' => bcrypt('eganrac'),
        ]);
    }
}
