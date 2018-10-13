<?php

use Illuminate\Database\Seeder;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = DB::table('teams')->get();

        DB::table('participants')->insert([
            [
                'firstname' => 'Angelina',
                'surname' => 'Koschel',
                'team_id' => $teams[0]->id
            ],
            [
                'firstname' => 'Robert',
                'surname' => 'Rainer',
                'team_id' => $teams[0]->id
            ],
            [
                'firstname' => 'Sebastian',
                'surname' => 'Nedoma',
                'team_id' => $teams[1]->id
            ],
            [
                'firstname' => 'Alexander',
                'surname' => 'Hellwig',
                'team_id' => $teams[1]->id
            ],
            [
                'firstname' => 'Patrick',
                'surname' => 'Ziwna',
                'team_id' => $teams[2]->id
            ],
            [
                'firstname' => 'Michael',
                'surname' => 'Willvonseder',
                'team_id' => $teams[2]->id
            ],
            [
                'firstname' => 'Philipp',
                'surname' => 'Novomeszky',
                'team_id' => $teams[3]->id
            ],
            [
                'firstname' => 'Christina',
                'surname' => 'Edelbacher',
                'team_id' => $teams[3]->id
            ],
            [
                'firstname' => 'Matthias',
                'surname' => 'Gallee',
                'team_id' => $teams[4]->id
            ],
            [
                'firstname' => 'Michael',
                'surname' => 'Kaindl',
                'team_id' => $teams[4]->id
            ],
            [
                'firstname' => 'Manuel',
                'surname' => 'Müller',
                'team_id' => $teams[5]->id
            ],
            [
                'firstname' => 'Florian',
                'surname' => 'Jung',
                'team_id' => $teams[5]->id
            ],
            [
                'firstname' => 'Florian',
                'surname' => 'Hofinger',
                'team_id' => $teams[6]->id
            ],
            [
                'firstname' => 'Vanessa',
                'surname' => 'Rumpf',
                'team_id' => $teams[6]->id
            ],
            [
                'firstname' => 'Kurtish',
                'surname' => 'Ipcheski',
                'team_id' => $teams[7]->id
            ],
            [
                'firstname' => 'Fayez',
                'surname' => 'Khalil',
                'team_id' => $teams[7]->id
            ],
            [
                'firstname' => 'Gregor',
                'surname' => 'Stellnberger',
                'team_id' => $teams[8]->id
            ],
            [
                'firstname' => 'Mladen',
                'surname' => 'Vukovic',
                'team_id' => $teams[8]->id
            ],
            [
                'firstname' => 'Andreas',
                'surname' => 'Altheimer',
                'team_id' => $teams[9]->id
            ],
            [
                'firstname' => 'Anastasia',
                'surname' => 'Koneva',
                'team_id' => $teams[9]->id
            ],
            [
                'firstname' => 'Lisa',
                'surname' => 'Baumüller',
                'team_id' => $teams[10]->id
            ],
            [
                'firstname' => 'Peter',
                'surname' => 'Nekut',
                'team_id' => $teams[10]->id
            ],
            [
                'firstname' => 'Lukas',
                'surname' => 'Struber',
                'team_id' => $teams[11]->id
            ],
            [
                'firstname' => 'Florian',
                'surname' => 'Fink',
                'team_id' => $teams[11]->id
            ],
            [
                'firstname' => 'Marcel',
                'surname' => 'Mondel',
                'team_id' => $teams[12]->id
            ],
            [
                'firstname' => 'Tina',
                'surname' => 'Öhler',
                'team_id' => $teams[12]->id
            ],
            [
                'firstname' => 'Andreas',
                'surname' => 'Unterkircher',
                'team_id' => $teams[13]->id
            ],
            [
                'firstname' => 'Vikram',
                'surname' => 'Sandhu',
                'team_id' => $teams[13]->id
            ],
            [
                'firstname' => 'Alexander',
                'surname' => 'Hochreiter',
                'team_id' => $teams[14]->id
            ],
            [
                'firstname' => 'Alexander',
                'surname' => 'Birke',
                'team_id' => $teams[14]->id
            ],
            [
                'firstname' => 'Jeffrey',
                'surname' => 'Gabunia',
                'team_id' => $teams[15]->id
            ],
            [
                'firstname' => 'Samson',
                'surname' => 'Obasuyi',
                'team_id' => $teams[15]->id
            ],
            [
                'firstname' => 'Constantin',
                'surname' => 'Wintoniak',
                'team_id' => $teams[16]->id
            ],
            [
                'firstname' => 'Dominik',
                'surname' => 'Hackl',
                'team_id' => $teams[16]->id
            ]
        ]); 
    }
}
