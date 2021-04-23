<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'localities_title'

    ];

    protected $table = "localities";

    public static function location(){

        return Location::all();
    }

    public function form()
    {
        return $this->hasOne('App\Models\form');

    }

    public function forms(){
        return $this->belongsToMany('App\Models\Form','forms_localities')
            ->withPivot('form_id')->withTimestamps();;
    }
}
