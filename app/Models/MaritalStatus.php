<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaritalStatus extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'marital_statuses_title'

    ];

    protected $table = "marital_statuses";

    public function form()
    {
        return $this->hasOne('App\Models\form');

    }

    public static function maritalstatusbystring($search){

        return MaritalStatus::where('marital_statuses_title', 'like','%'.strtolower($search).'%')->get();
    }

    public function forms(){
        return $this->belongsToMany('App\Models\Form','forms_civil_status')
            ->withPivot('form_id')->withTimestamps();;
    }
}
