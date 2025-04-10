<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $participants =[
            [
                'name' => 'Kelly',
                'personality' => 'so smart so smart'
            ],
            [
                'name' => 'Jason',
                'personality' => 'u u a a '
            ],
        ];

        foreach($participants as $participant){
            Participant::create($participant);
        }
    }
}
