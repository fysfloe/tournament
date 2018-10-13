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
        DB::table('participants')->insert([
            [
                'firstname' => 'Angelina',
                'surname' => 'Koschel',
                'team_id' => 1
            ],
            [
                'firstname' => 'Robert',
                'surname' => 'Rainer',
                'team_id' => 1
            ],
            [
                'firstname' => 'Sebastian',
                'surname' => 'Nedoma',
                'team_id' => 2
            ],
            [
                'firstname' => 'Alexander',
                'surname' => 'Hellwig',
                'team_id' => 2
            ],
            [
                'firstname' => 'Patrick',
                'surname' => 'Ziwna',
                'team_id' => 3
            ],
            [
                'firstname' => 'Michael',
                'surname' => 'Willvonseder',
                'team_id' => 3
            ],
            [
                'firstname' => 'Philipp',
                'surname' => 'Novomeszky',
                'team_id' => 4
            ],
            [
                'firstname' => 'Christina',
                'surname' => 'Edelbacher',
                'team_id' => 4
            ],
            [
                'firstname' => 'Matthias',
                'surname' => 'Gallee',
                'team_id' => 5
            ],
            [
                'firstname' => 'Michael',
                'surname' => 'Kaindl',
                'team_id' => 5
            ],
            [
                'firstname' => 'Manuel',
                'surname' => 'Müller',
                'team_id' => 6
            ],
            [
                'firstname' => 'Florian',
                'surname' => 'Jung',
                'team_id' => 6
            ],
            [
                'firstname' => 'Florian',
                'surname' => 'Hofinger',
                'team_id' => 7
            ],
            [
                'firstname' => 'Vanessa',
                'surname' => 'Rumpf',
                'team_id' => 7
            ],
            [
                'firstname' => 'Kurtish',
                'surname' => 'Ipcheski',
                'team_id' => 8
            ],
            [
                'firstname' => 'Fayez',
                'surname' => 'Khalil',
                'team_id' => 8
            ],
            [
                'firstname' => 'Gregor',
                'surname' => 'Stellnberger',
                'team_id' => 9
            ],
            [
                'firstname' => 'Mladen',
                'surname' => 'Vukovic',
                'team_id' => 9
            ],
            [
                'firstname' => 'Andreas',
                'surname' => 'Altheimer',
                'team_id' => 10
            ],
            [
                'firstname' => 'Anastasia',
                'surname' => 'Koneva',
                'team_id' => 10
            ],
            [
                'firstname' => 'Lisa',
                'surname' => 'Baumüller',
                'team_id' => 11
            ],
            [
                'firstname' => 'Peter',
                'surname' => 'Nekut',
                'team_id' => 11
            ],
            [
                'firstname' => 'Lukas',
                'surname' => 'Struber',
                'team_id' => 12
            ],
            [
                'firstname' => 'Florian',
                'surname' => 'Fink',
                'team_id' => 12
            ],
            [
                'firstname' => 'Marcel',
                'surname' => 'Mondel',
                'team_id' => 13
            ],
            [
                'firstname' => 'Tina',
                'surname' => 'Öhler',
                'team_id' => 13
            ],
            [
                'firstname' => 'Andreas',
                'surname' => 'Unterkircher',
                'team_id' => 14
            ],
            [
                'firstname' => 'Vikram',
                'surname' => 'Sandhu',
                'team_id' => 14
            ],
            [
                'firstname' => 'Alexander',
                'surname' => 'Hochreiter',
                'team_id' => 15
            ],
            [
                'firstname' => 'Alexander',
                'surname' => 'Birke',
                'team_id' => 15
            ],
            [
                'firstname' => 'Jeffrey',
                'surname' => 'Gabunia',
                'team_id' => 16
            ],
            [
                'firstname' => 'Samson',
                'surname' => 'Obasuyi',
                'team_id' => 16
            ],
            [
                'firstname' => 'Constantin',
                'surname' => 'Wintoniak',
                'team_id' => 17
            ],
            [
                'firstname' => 'Dominik',
                'surname' => 'Hackl',
                'team_id' => 17
            ]
        ]); 
    }
}
