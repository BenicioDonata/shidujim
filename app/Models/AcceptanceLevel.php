<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcceptanceLevel extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'acceptance_levels_title'

    ];

    protected $table = "acceptance_levels";

    public function forms(){
        return $this->belongsToMany('App\Models\Form','forms_acceptance_levels')
            ->withPivot('form_id')->withTimestamps();;
    }

}
