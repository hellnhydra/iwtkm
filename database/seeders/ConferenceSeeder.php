<?php

// database/seeders/ConferenceSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferenceSeeder extends Seeder
{
    public function run()
    {
        Conference::create(['name' => 'Conference 1', 'description' => 'Description for Conference 1']);
        Conference::create(['name' => 'Conference 2', 'description' => 'Description for Conference 2']);
    }
}