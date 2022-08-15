<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sibling;
use App\Models\Health_physical_dev;
use App\Models\family_bg;
use App\Models\personal_info;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(5)->create();

        $personal_info = Personal_info::factory()->create([
         ]); 

          Family_bg::factory()->create([
          'personal_info_id' => $personal_info->id
          ]);

          Sibling::factory(2)->create([
            'personal_info_id' => $personal_info->id
          ]);

          Health_physical_dev::factory()->create([
            'personal_info_id' => $personal_info->id
          ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //]);
    }
}
