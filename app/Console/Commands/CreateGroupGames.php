<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Group;
use App\Game;
use App\Team;

class CreateGroupGames extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'groupgames:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates the group games.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $groups = Group::all();

        foreach ($groups as $group) {
            $this->createGroupGames($group);

            $this->info('Created games in ' . $group->name);
        }

        $this->info('Created games in all groups!');
    }

    private function createGroupGames(Group $group)
    {
        foreach ($group->teams as $team) {
            foreach ($group->teams as $innerTeam) {
                if ($team === $innerTeam) {
                    continue;
                }

                Game::create([
                    'home_team_id' => $team->id,
                    'away_team_id' => $innerTeam->id,
                    'group_id' => $group->id
                ]);
            }
        }
    }
}
