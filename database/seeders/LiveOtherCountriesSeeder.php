<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LiveOtherCountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('live_other_countries')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('live_other_countries')->insert([
            [
                'live_other_countries_title' => 'Si',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'live_other_countries_title' => 'No',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'live_other_countries_title' => 'Tal vez',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
