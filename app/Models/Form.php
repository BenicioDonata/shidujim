<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'name_hebrew',
        'lastname',
        'second_lastname',
        'gender_id',
        'date_of_birth',
        'maritalstatus_id',
        'profession',
        'email',
        'main_phone',
        'count_sons',
        'religiouscompliancelevel_id',
        'reference_one',
        'reference_two',
        'community_assists',
        'rabanim_know',
        'smoker_id',
        'son_id',
        'location_id',
        'coupleson_id',
        'years_range_from',
        'years_range_to',
        'find_partner',
        'familypuritylaw_id',
        'about_u',
        'about_u_partner'

    ];

    protected $table = "forms";

    public function gender()
    {
        return $this->belongsTo('App\Models\Gender');
    }

    public function maritalstatus()
    {
        return $this->belongsTo('App\Models\MaritalStatus');
    }

    public function familypuritylaw()
    {
        return $this->belongsTo('App\Models\FamilyPurityLaw');
    }

    public function religiouscompliancelevel()
    {
        return $this->belongsTo('App\Models\ReligiousComplianceLevel');
    }

    public function acceptancelevel(){
        return $this->belongsToMany('App\Models\AcceptanceLevel','forms_acceptance_levels')
            ->withPivot('acceptance_level_id')->withTimestamps();;
    }

    public function studies(){
        return $this->belongsToMany('App\Models\Study','forms_studies')
            ->withPivot('study_id')->withTimestamps();;
    }

    public function languages(){
        return $this->belongsToMany('App\Models\Language','forms_languages')
            ->withPivot('language_id')->withTimestamps();;
    }

    public function smoker()
    {
        return $this->belongsTo('App\Models\Smoker');
    }

    public function son()
    {
        return $this->belongsTo('App\Models\Son');
    }

    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }

    public function coupleson()
    {
        return $this->belongsTo('App\Models\CoupleSons');
    }

    public function quality(){
        return $this->belongsToMany('App\Models\Quality','forms_qualities')
            ->withPivot('quality_id')->withTimestamps();;
    }

    public function maritalstatuses(){
        return $this->belongsToMany('App\Models\MaritalStatus','forms_civil_status')
            ->withPivot('marital_status_id')->withTimestamps();;
    }

    public function studiesseeks(){
        return $this->belongsToMany('App\Models\Study','forms_studies_lvl_seeks')
            ->withPivot('study_id')->withTimestamps();;
    }

    public function locations(){
        return $this->belongsToMany('App\Models\Location','forms_localities')
            ->withPivot('location_id')->withTimestamps();;
    }

    public function qualityseeks(){
        return $this->belongsToMany('App\Models\Quality','forms_qualities_seeks')
            ->withPivot('quality_id')->withTimestamps();;
    }

    public function files()
    {
        return $this->hasMany('App\Models\File');
    }

    public static function forms(){

        return Form::with('gender','maritalstatus','religiouscompliancelevel','smoker','son','location','coupleson','familypuritylaw')->get();
    }

    public function scopeName($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orWhere('name','LIKE', '%'.$search.'%');
        }
    }

    public function scopeNamehebrew($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orWhere('name_hebrew','LIKE', '%'.$search.'%');
        }
    }

    public function scopeLastname($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orWhere('lastname','LIKE', '%'.$search.'%');
        }
    }

    public function scopeSeconlastname($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orWhere('second_lastname','LIKE', '%'.$search.'%');
        }
    }

    public function scopeGender($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->join('genders', 'genders.id', '=', 'forms.gender_id')
                ->orwhere('genders.genders_title', 'like','%'.strtolower($search).'%');
        }
    }

    public function scopeMaritalsatus($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->join('marital_statuses', 'marital_statuses.id', '=', 'forms.maritalstatus_id')
                ->orwhere('marital_statuses.marital_statuses_title', 'like','%'.strtolower($search).'%');
        }
    }

    public function scopeEmail($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orWhere('email','LIKE', '%'.strtolower($search).'%');
        }
    }


    public function scopeMainphone($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orWhere('main_phone','LIKE', '%'.strtolower($search).'%');
        }
    }

    public static function formbyid($id){

        return Form::where('id',$id)->with('gender','maritalstatus','religiouscompliancelevel','smoker','son','location','coupleson','familypuritylaw','files')->first();
    }


}
