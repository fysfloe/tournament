<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            ['name' => 'Group A'],
            ['name' => 'Group B'],
            ['name' => 'Group C'],
            ['name' => 'Group D'],
        ]);  
    }
}
