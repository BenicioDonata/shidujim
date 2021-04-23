<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('user_types')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('user_types')->insert([
            [
                'user_types_title' => 'Administrador',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_types_title' => 'Usuario',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
