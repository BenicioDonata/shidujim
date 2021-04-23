<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('studies')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('studies')->insert([
            [
                'studies_title' => 'Primario Completo',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'studies_title' => 'Secundario Completo',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'studies_title' => 'Universitario Completo',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'studies_title' => 'Posgrado',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'studies_title' => 'Escuela Primaria Hebrea',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'studies_title' => 'Shiurim 1 por semana',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'studies_title' => 'Shiurim 2 por Semana',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'studies_title' => 'Shiurim mas de dos por semana',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'studies_title' => 'Ieshiva/Seminario',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'studies_title' => 'Secundaria Hebrea',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
