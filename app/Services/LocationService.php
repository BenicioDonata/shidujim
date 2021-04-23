<?php


namespace App\Services;

use App\Models\Location;
use Exception;

class LocationService
{

    public function getLocalities() {

        try {

            return  Location::location();

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

}
