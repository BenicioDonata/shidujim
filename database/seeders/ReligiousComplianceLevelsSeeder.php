<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReligiousComplianceLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('religious_compliance_levels')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('religious_compliance_levels')->insert([
            [
                'religious_compliance_lvl' => 'Ninguno',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'religious_compliance_lvl' => 'Kasher',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'religious_compliance_lvl' => 'Kasher + Shabat',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'religious_compliance_lvl' => 'Kasher + Shabat + Tzniut',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'religious_compliance_lvl' => ' Kasher + Shabat + Estudio de Torá',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
