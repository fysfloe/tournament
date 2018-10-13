<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Florian Hofinger',
            'email' => 'hofinger.flo@gmail.com',
            'password' => bcrypt('asdf12'),
        ]);
    }
}
