<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormAcceptanceLevel extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'form_id',
        'acceptancelevel_id'

    ];

    protected $table = "forms_acceptance_levels";

    public function forms(){
        return $this->belongsToMany('App\Models\Form','forms_acceptance_levels')
            ->withPivot('form_id')->withTimestamps();
    }
}
