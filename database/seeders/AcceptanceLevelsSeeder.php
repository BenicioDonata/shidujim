<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AcceptanceLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('acceptance_levels')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('acceptance_levels')->insert([
            [
                'acceptance_levels_title' => 'Kasher solo en Casa',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'acceptance_levels_title' => 'Siempre Kasher',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'acceptance_levels_title' => 'Kasher siempre + Shabat',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'acceptance_levels_title' => 'Abrej (que estudie todo el dia)',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'acceptance_levels_title' => 'Que estudie Tora medio dÍa y trabaje',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'acceptance_levels_title' => 'Kasher siempre + Shabat + un minimo de estudio semanal',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'acceptance_levels_title' => 'Que sepa hebreo',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'acceptance_levels_title' => 'Me da lo mismo cumpla o no',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
