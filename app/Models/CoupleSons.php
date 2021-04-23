<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoupleSons extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'couple_sons_title'

    ];

    protected $table = "couple_sons";

    public static function coupleson(){

        return CoupleSons::all();
    }

    public function form()
    {
        return $this->hasOne('App\Models\form');

    }
}
