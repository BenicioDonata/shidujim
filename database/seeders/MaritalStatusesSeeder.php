<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MaritalStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('marital_statuses')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('marital_statuses')->insert([
            [
                'marital_statuses_title' => 'Soltero',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'marital_statuses_title' => 'Divorciado',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'marital_statuses_title' => 'Viudo',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'marital_statuses_title' => 'Me da igual',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
