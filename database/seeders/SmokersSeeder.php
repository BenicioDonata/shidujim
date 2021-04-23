<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SmokersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('smokers')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('smokers')->insert([
            [
                'smokers_title'=> 'Si',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'smokers_title'=>'No',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
