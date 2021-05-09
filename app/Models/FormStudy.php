<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormStudy extends Model
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

    protected $table = "forms_studies";

    public function forms(){
        return $this->belongsToMany('App\Models\Form','forms_studies')
            ->withPivot('form_id')->withTimestamps();;
    }

    public function studies(){
        return $this->belongsToMany('App\Models\Study','forms_studies')
            ->withPivot('study_id')->withTimestamps();
    }


}
