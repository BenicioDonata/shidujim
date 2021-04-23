<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QualitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('qualities')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('qualities')->insert([
            [
                'qualities_title'=> 'Simpático/a',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'qualities_title'=> 'Profesional',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'qualities_title'=> 'Culto',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'qualities_title'=> 'Buen Humor',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'qualities_title'=> 'Ordenada/o',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'qualities_title'=> 'Familiero',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'qualities_title'=> 'Cariñoso/a',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'qualities_title'=> 'Irat Shamaim',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'qualities_title'=> 'Que no fume',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
