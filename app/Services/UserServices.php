<?php


namespace App\Services;

use App\Models\User;
use App\Models\UserStatus;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Exception;

class UserServices
{

    public function getUsers() {

        try {

            return  User::with('userstatus','usertype')
                            ->where('users.deleted_at','=',NULL)
                            ->orderBy('users.id','DESC')->paginate(50);

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function updateStatusUser($id) {

        try {

                $user = User::userbyid($id);

                DB::beginTransaction();

                $user->userstatus_id  = ($user->userstatus->id == env('DESHABILITADO')) ? env('ACTIVO') : env('DESHABILITADO') ;

                $user->save();

                DB::commit();

                return $user;

        } catch (\Exception $e) {

            DB::rollback();

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }


    public function updateAdminUser($id) {

        try {

            $user = User::userbyid($id);

            DB::beginTransaction();

            $user->usertype_id  = ($user->usertype->id == env('USUARIO')) ? env('ADMINISTRADOR') : env('USUARIO');

            $user->save();

            DB::commit();

            return $user;

        } catch (\Exception $e) {

            DB::rollback();

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function deleteUser($id) {

        try {

            $user = User::userbyid($id);

            DB::beginTransaction();

            $user->deleted_at  = Carbon::now()->format('Y-m-d H:i:s');
            $user->userstatus_id = env('DESHABILITADO');
            $user->usertype_id = env('USUARIO');

            $user->save();

            DB::commit();

            return $user;

        } catch (\Exception $e) {

            DB::rollback();

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function searchUsers($request) {

        try {

            $name  = $request->get('search');
            $email = $request->get('search');
            $status = $request->get('search');
            $types = $request->get('search');


            $users = User::orderBy('users.id','DESC')
                ->name($name)
                ->email($email)
                ->status($status)
                ->usertypes($types)
                ->Where('users.deleted_at','=',NULL)
                ->paginate(50);

            return $users;


        } catch (\Exception $e) {

            DB::rollback();

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }



}
