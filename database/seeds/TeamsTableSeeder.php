<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            ['name' => 'Team 1', 'group_id' => 1],
            ['name' => 'Team 2', 'group_id' => 2],
            ['name' => 'Team 3', 'group_id' => 3],
            ['name' => 'Team 4', 'group_id' => 4],
            ['name' => 'Team 5', 'group_id' => 1],
            ['name' => 'Team 6', 'group_id' => 2],
            ['name' => 'Team 7', 'group_id' => 3],
            ['name' => 'Team 8', 'group_id' => 4],
            ['name' => 'Team 9', 'group_id' => 1],
            ['name' => 'Team 10', 'group_id' => 2],
            ['name' => 'Team 11', 'group_id' => 3],
            ['name' => 'Team 12', 'group_id' => 4],
            ['name' => 'Team 13', 'group_id' => 1],
            ['name' => 'Team 14', 'group_id' => 2],
            ['name' => 'Team 15', 'group_id' => 3],
            ['name' => 'Team 16', 'group_id' => 4],
            ['name' => 'Team 17', 'group_id' => 1]
        ]);  
    }
}
