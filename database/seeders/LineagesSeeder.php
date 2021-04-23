<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LineagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('lineages')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('lineages')->insert([
            [
                'lineages_title' => 'Israel',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lineages_title' => 'Levy',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lineages_title' => 'Cohen',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'lineages_title' => 'No lo se',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
