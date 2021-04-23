<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gender extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'genders_character',
        'geneders_title'

    ];

    protected $table = "genders";

    public static function gender(){

        return Gender::all();
    }

    public function form()
    {
        return $this->hasOne('App\Models\form');

    }



}
