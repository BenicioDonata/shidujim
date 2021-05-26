<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\UserStatus;
use App\Models\UserType;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('users')->insert([
            [
                'name' => 'Administrador',
                'email' => 'admin@shidujim.com',
                'password' => bcrypt('P4t4n?l0c@'),
                'userstatus_id' => UserStatus::all()->find('id',env('ACTIVO')),
                'usertype_id' => UserType::all()->find('id',env('ADMINISTRADOR')),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
