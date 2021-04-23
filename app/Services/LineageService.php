<?php


namespace App\Services;

use App\Models\Lineage;
use Exception;


class LineageService
{

    public function getLineages() {

        try {

            return  Lineage::lineage();

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

}
