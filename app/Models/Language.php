<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'languages_title'

    ];

    protected $table = "languages";

    public function forms(){
        return $this->belongsToMany('App\Models\Form','forms_languages')
            ->withPivot('form_id')->withTimestamps();;
    }
}
