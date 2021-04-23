<?php


namespace App\Services;

use App\Models\ReligiousComplianceLevel;
use Exception;


class ReligiousComplianceLevelService
{

    public function getReligiousComplianceLevels() {

        try {

            return  ReligiousComplianceLevel::religiouscompliancelevel();

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

}
