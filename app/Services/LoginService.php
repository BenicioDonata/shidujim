<?php


namespace App\Services;

use App\Models\User;
use Exception;

class LoginService
{
    public function getUserByUsername($data_request)
    {
        try
        {

            $user = User::user($data_request->email);

            if(!$user)
                return false;

            return $user ;

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }


}
