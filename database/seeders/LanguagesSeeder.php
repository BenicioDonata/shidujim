<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('languages')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('languages')->insert([
            [
                'languages_title' => 'Español',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'languages_title' => 'Ingles',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'languages_title' => 'Hebreo',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
