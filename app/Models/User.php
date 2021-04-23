<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'userstatus_id',
        'usertype_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    protected $table = "users";

    public function userstatus()
    {
        return $this->belongsTo('App\Models\UserStatus');
    }

    public function usertype()
    {
        return $this->belongsTo('App\Models\UserType');
    }


    public static function user($username){

        return User::where('email',$username)->with('userstatus','usertype')->first();
    }

    public static function usersdisabled(){

        return User::all();
    }

    public static function userbyid($id){

        return User::where('id',$id)->with('userstatus','usertype')->first();
    }

    public function scopeName($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orWhere('name','LIKE', '%'.$search.'%');
        }
    }



    public function scopeEmail($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orWhere('email','LIKE', '%'.$search.'%');

        }
    }

    public function scopeStatus($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->join('user_statuses', 'user_statuses.id', '=', 'users.userstatus_id')
                ->orWhere('user_statuses.user_statuses_title', 'like','%'.strtolower($search).'%');
        }

    }


    public function scopeUsertypes($query, $search)
    {

        if(trim($search)!= null)
        {
            return $query->join('user_types', 'user_types.id', '=', 'users.usertype_id')
            ->orWhere('user_types.user_types_title', 'like','%'.strtolower($search).'%');
        }

    }





}
