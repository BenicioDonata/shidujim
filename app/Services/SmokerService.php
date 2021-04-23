<?php


namespace App\Services;

use App\Models\Smoker;
use Exception;


class SmokerService
{

    public function getSmokers() {

        try {

            return  Smoker::smoker();

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

}
