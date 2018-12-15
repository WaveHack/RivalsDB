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
            'full_name' => 'Global Defense Initiative',
            'description' => 'The Global Defense Initiative is the global government of Earth. It was founded in accordance with the United Nations Global Defense Act (UNGDA), on the date of 12 October 1995, as a united military force for global peacekeeping.',
        ]);

        \App\Models\Faction::create([
            'slug' => 'nod',
            'name' => 'Nod',
            'full_name' => 'Brotherhood of Nod',
            'description' => 'The Brotherhood of Nod was a popular, global, religiously developed movement devoted to the guidance of the elusive and charismatic figure of Kane, and the extraterrestrial Tiberium substance that arrived on Earth in 1995.',
        ]);

        \App\Models\Commander::create([
            'faction_id' => $gdiId,
            'slug' => 'lt-strongarm',
            'name' => 'Lt. Strongarm',
            'description' => 'Lt. Strongarm leads the finest corps of engineers in the GDI armed forces. Tough as nails and smart as a whip, she delights in pulling pranks on the other members of the rank and file.',
            'rarity' => 'rare',
            'unlocked_at_level' => 1,
            'base_health' => 30000,
            'harvester_health' => 3400,
            'commander_power_name' => 'Minigun Turret',
            'commander_power_description' => 'Constructs a turret on the battlefield that is strong against infantry and aircraft. Loses health over time.',
            'commander_power_cost' => 40,
        ]);

        \App\Models\Unit::create([
            'faction_id' => $gdiId,
            'slug' => 'riflemen',
            'name' => 'Riflemen',
            'description' => 'The riflemen squad is GDI\'s standard infantry formation. Equipped with GD-2 automatic rifles and composite body armor, GDI Riflemen are an inexpensive and effective way of destroy enemy infantry units.',
            'rarity' => 'common',
            'type' => 'infantry',
            'unlocked_at_level' => 1,
            'health' => 100,
            'dps' => 100,
            'speed' => 'fast',
            'building' => 'barracks',
            'cost' => 10,
        ]);


    }
}
