<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sons')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('sons')->insert([
            [
                'sons_title' => 'Ya tengo hijos y quiero más',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'sons_title' => 'Ya tengo hijos y no quiero más',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'sons_title' => 'Si quiero tener hijos',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'sons_title' => 'No lo sé aun',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
