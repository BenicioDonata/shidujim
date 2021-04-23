<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('genders')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('genders')->insert([
            [
                'genders_character'=> 'M',
                'genders_title' => 'Mujer',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'genders_character'=>'H',
                'genders_title' => 'Hombre',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
