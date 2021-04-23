<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CoupleSonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('couple_sons')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('couple_sons')->insert([
            [
                'couple_sons_title' => 'Si',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'couple_sons_title' => 'No',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'couple_sons_title' => 'Tal vez',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
