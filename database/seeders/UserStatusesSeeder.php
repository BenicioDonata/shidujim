<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('user_statuses')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('user_statuses')->insert([
            [
                'user_statuses_title' => 'Activo',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_statuses_title' => 'Deshabilitado',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
