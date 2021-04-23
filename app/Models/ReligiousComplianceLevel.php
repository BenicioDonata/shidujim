<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReligiousComplianceLevel extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'religious_compliance_lvl'

    ];

    protected $table = "religious_compliance_levels";

    public static function religiouscompliancelevel(){

        return ReligiousComplianceLevel::all();
    }

    public function form()
    {
        return $this->hasOne('App\Models\form');

    }
}
