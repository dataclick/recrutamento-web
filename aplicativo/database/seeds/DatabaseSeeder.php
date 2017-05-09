<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ClubsTableSeeder::class);
        // $this->call(PartnersTableSeeder::class);

        foreach (range('A', 'D') as $club) {
            DB::table('clubs')->insert([
                'name' => 'Clube ' . $club,
            ]);
        }

        foreach (range(1, 4) as $partner) {
            DB::table('partners')->insert([
                'name' => 'Sócio ' . $partner,
            ]);
        }

        $x = 4;
        foreach (range(1, $x) as $i => $partner) {
            foreach (range(1, $x - $i) as $club) {
                DB::table('club_partner')->insert([
                    'club_id' => $club,
                    'partner_id' => $partner,
                ]);
            }
        }
    }
}
