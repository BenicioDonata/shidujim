<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormStudyLvlSeek extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'form_id',
        'study_id'

    ];

    protected $table = "forms_studies_lvl_seeks";

    public function formseeks(){
        return $this->belongsToMany('App\Models\Form','forms_studies_lvl_seeks')
            ->withPivot('form_id')->withTimestamps();;
    }

    public function studiesseeks(){
        return $this->belongsToMany('App\Models\Study','forms_studies_lvl_seeks')
            ->withPivot('study_id')->withTimestamps();
    }
}
