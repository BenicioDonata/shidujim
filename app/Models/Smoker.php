<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Smoker extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'smokers_title'

    ];

    protected $table = "smokers";

    public static function smoker(){

        return Smoker::all();
    }


    public function form()
    {
        return $this->hasOne('App\Models\form');

    }
}
