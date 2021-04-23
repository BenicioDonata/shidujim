<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quality extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'qualities_title'

    ];

    protected $table = "qualities";

    public function forms(){
        return $this->belongsToMany('App\Models\Form','forms_qualities')
            ->withPivot('form_id')->withTimestamps();;
    }

    public function formseeks(){
        return $this->belongsToMany('App\Models\Form','forms_qualities_seeks')
            ->withPivot('form_id')->withTimestamps();;
    }


}
