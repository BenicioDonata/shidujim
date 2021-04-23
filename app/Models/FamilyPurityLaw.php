<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class FamilyPurityLaw extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'family_purity_laws_title'

    ];

    protected $table = "family_purity_laws";

    public static function familipuritylaw(){

        return FamilyPurityLaw::all();
    }

    public function form()
    {
        return $this->hasOne('App\Models\form');

    }

}
