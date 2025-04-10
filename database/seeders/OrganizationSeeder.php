<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizations =[
            [
                'name' => 'BEM',
                'desc' => 'bem banget woww'
            ],
            [
                'name' => 'GENTA',
                'desc' => 'Gentabanget wow'
            ],
        ];

        foreach($organizations as $organization){
            Organization::create($organization);
        }
    }
}
