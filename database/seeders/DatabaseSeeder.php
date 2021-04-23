<?php

namespace Database\Seeders;

use App\Models\CoupleSons;
use App\Models\FamilyPurityLaw;
use App\Models\LiveOtherCountry;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([

            'user_statuses',
            'user_types',
            'genders',
            'lineages',
            'religious_compliance_levels',
            'smokers',
            'marital_statuses',
            'acceptance_levels',
            'studies',
            'languages',
            'sons',
            'live_other_countries',
            'localities',
            'qualities',
            'couple_sons',
            'family_purity_laws',
            'users'
        ]);

        $this->call(UserTypesSeeder::class);
        $this->call(UserStatusesSeeder::class);
        $this->call(GendersSeeder::class);
        $this->call(LineagesSeeder::class);
        $this->call(ReligiousComplianceLevelsSeeder::class);
        $this->call(SmokersSeeder::class);
        $this->call(MaritalStatusesSeeder::class);
        $this->call(AcceptanceLevelsSeeder::class);
        $this->call(StudiesSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(SonsSeeder::class);
        $this->call(LiveOtherCountriesSeeder::class);
        $this->call(LocalitiesSeeder::class);
        $this->call(QualitiesSeeder::class);
        $this->call(CoupleSonsSeeder::class);
        $this->call(FamilyPurityLawsSeeder::class);
        $this->call(UserSeeder::class);

    }

    protected function truncateTables(array $tables)
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table)
        {
            DB::table($table)->truncate();

        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
