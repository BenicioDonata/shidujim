<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LocalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('localities')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('localities')->insert([
            [
                'localities_title'=> 'Buenos Aires',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Ciudad de México',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Ciudad de Panamá',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Chile',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Uruguay',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Caracas',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Estados Unidos',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Israel',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Cordoba',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Tucuman',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Rosario',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Otros Lugares de Argentina',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Otros',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Distrito Federal',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Miami',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'New York',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Los Angeles',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Me da lo mismo',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'San Pablo',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'Río de Janeiro',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'localities_title'=> 'España',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
