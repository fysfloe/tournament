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
        $groupA = DB::table('groups')->where('name', '=', 'Group A')->pluck('id')->first();
        $groupB = DB::table('groups')->where('name', '=', 'Group B')->pluck('id')->first();
        $groupC = DB::table('groups')->where('name', '=', 'Group C')->pluck('id')->first();
        $groupD = DB::table('groups')->where('name', '=', 'Group D')->pluck('id')->first();

        DB::table('teams')->insert([
            ['name' => 'Team 1', 'group_id' => $groupA],
            ['name' => 'Team 2', 'group_id' => $groupB],
            ['name' => 'Team 3', 'group_id' => $groupC],
            ['name' => 'Team 4', 'group_id' => $groupD],
            ['name' => 'Team 5', 'group_id' => $groupA],
            ['name' => 'Team 6', 'group_id' => $groupB],
            ['name' => 'Team 7', 'group_id' => $groupC],
            ['name' => 'Team 8', 'group_id' => $groupD],
            ['name' => 'Team 9', 'group_id' => $groupA],
            ['name' => 'Team 10', 'group_id' => $groupB],
            ['name' => 'Team 11', 'group_id' => $groupC],
            ['name' => 'Team 12', 'group_id' => $groupD],
            ['name' => 'Team 13', 'group_id' => $groupA],
            ['name' => 'Team 14', 'group_id' => $groupB],
            ['name' => 'Team 15', 'group_id' => $groupC],
            ['name' => 'Team 16', 'group_id' => $groupD],
            ['name' => 'Team 17', 'group_id' => $groupA]
        ]);  
    }
}
