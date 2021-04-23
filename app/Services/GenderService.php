<?php

namespace App\Services;

use App\Models\Gender;
use Exception;


class GenderService
{

    public function getGenders() {

        try {

            return  Gender::gender();

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }


}
