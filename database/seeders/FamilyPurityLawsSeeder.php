<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FamilyPurityLawsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('family_purity_laws')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('family_purity_laws')->insert([
            [
                'family_purity_laws_title' => 'Si',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'family_purity_laws_title' => 'No',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'family_purity_laws_title' => 'Tal vez',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'family_purity_laws_title' => 'Nunca',
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
