<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Study extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'studies_title'

    ];

    protected $table = "studies";

    public function forms(){
        return $this->belongsToMany('App\Models\Form','forms_studies')
            ->withPivot('form_id')->withTimestamps();;
    }

    public function formseeks(){
        return $this->belongsToMany('App\Models\Form','forms_studies_lvl_seeks')
            ->withPivot('form_id')->withTimestamps();;
    }
}
