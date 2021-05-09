<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormLocality extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'form_id',
        'location_id'

    ];

    protected $table = "forms_localities";

    public function locations(){
        return $this->belongsToMany('App\Models\Location','forms_localities')
            ->withPivot('location_id')->withTimestamps();
    }

    public function forms(){
        return $this->belongsToMany('App\Models\Form','forms_localities')
            ->withPivot('form_id')->withTimestamps();
    }

}
