<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormQuality extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'form_id',
        'quality_id'

    ];

    protected $table = "forms_qualities";

    public function quality(){
        return $this->belongsToMany('App\Models\Quality','forms_qualities')
            ->withPivot('quality_id')->withTimestamps();;
    }

    public function forms(){
        return $this->belongsToMany('App\Models\Form','forms_qualities')
            ->withPivot('form_id')->withTimestamps();;
    }

}
