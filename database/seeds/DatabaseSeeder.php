<?php

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
        // $this->call(UsersTableSeeder::class);

        \App\Models\User::create([
            'name' => 'John Doe',
            'email' => 'email@example.com',
            'password' => bcrypt('secret'),
        ]);

        $gdiId = \App\Models\Faction::insertGetId([
            'slug' => 'gdi',
            'name' => 'GDI',
        ]);

        \App\Models\Commander::create([
            'faction_id' => $gdiId,
            'slug' => 'lt-strongarm',
            'name' => 'Lt. Strongarm',
//            'description' => 'placeholder',
            'rarity' => 'rare',
            'unlocked_at_level' => 1,
            'base_health' => 30000,
            'harvester_health' => 3400,
            'commander_power_name' => 'Minigun Turret',
            'commander_power_description' => '',
            'commander_power_cost' => 40,
        ]);


    }
}
