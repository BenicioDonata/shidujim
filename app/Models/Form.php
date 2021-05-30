<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Study;
use App\Models\FormStudy;
use App\Models\Gender;
use App\Models\MaritalStatus;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use HasFactory, Notifiable,  SoftDeletes;

    private $q;

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
        'age',
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
            ->withPivot('study_id')->withTimestamps();
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
            ->withPivot('quality_id')->withTimestamps();
    }

    public function maritalstatuses(){
        return $this->belongsToMany('App\Models\MaritalStatus','forms_civil_status')
            ->withPivot('marital_status_id')->withTimestamps();
    }

    public function studiesseeks(){
        return $this->belongsToMany('App\Models\Study','forms_studies_lvl_seeks')
            ->withPivot('study_id')->withTimestamps();
    }

    public function locations(){
        return $this->belongsToMany('App\Models\Location','forms_localities')
            ->withPivot('location_id')->withTimestamps();
    }

    public function qualityseeks(){
        return $this->belongsToMany('App\Models\Quality','forms_qualities_seeks')
            ->withPivot('quality_id')->withTimestamps();
    }

    public function files()
    {
        return $this->hasMany('App\Models\File');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public static function forms(){

        return Form::with('gender','maritalstatus','religiouscompliancelevel','smoker','son','location','coupleson','familypuritylaw')->get();
    }

    public function scopeName($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orwhere('name','LIKE', '%'.$search.'%');
        }
    }

    public function scopeNamehebrew($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orwhere('name_hebrew','LIKE', '%'.$search.'%');
        }
    }

    public function scopeLastname($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orwhere('lastname','LIKE', '%'.$search.'%');
        }
    }

    public function scopeSeconlastname($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orwhere('second_lastname','LIKE', '%'.$search.'%');
        }
    }

    public function scopeGender($query, $search)
    {
        if(trim($search)!= null)
        {

            $gender = Gender::genderbystring($search);
            if(isset($gender[0]))
                return $query->orwhere('forms.gender_id', '=',$gender[0]->id);

        }
    }

    public function scopeGenders($query, $search)
    {

        if(trim($search)!= null) {

            $this->q = true;
            if ($search == 3 ) {
                return $query->whereIn('forms.gender_id', array(1, 2), 'or');
            } else {
                return $query->orwhere('forms.gender_id', '=',$search);
            }
        }
    }

    public function scopeMaritalsatus($query, $search)
    {
        if(trim($search)!= null)
        {

            $maritalstatus = MaritalStatus::maritalstatusbystring($search);

            if(isset($maritalstatus[0]))
                return $query->orwhere('forms.maritalstatus_id', '=',$maritalstatus[0]->id);

        }
    }

    public function scopeFormscivilstatus($query, $search)
    {
        if(isset($search[0]))
        {
            if($this->q) {
                if(in_array(4,$search)){
                    return $query->whereIn('forms.maritalstatus_id',array(1,2,3), 'and');
                }else{
                    return $query->whereIn('forms.maritalstatus_id',array($search),'and');
                }

            }else{
                $this->q = true;
                if(in_array(4,$search)){
                    return $query->whereIn('forms.maritalstatus_id',array(1,2,3), 'or');
                }else{
                    return $query->whereIn('forms.maritalstatus_id',array($search),'or');
                }
            }
        }
    }

    public function scopeCouplesons($query, $search)
    {

        if(trim($search)!= null) {

            if($this->q) {
                if ($search == 3 ) {
                    return $query->whereIn('forms.coupleson_id', array(1, 2, 3),'and');
                } else {
                    return $query->whereIn('forms.coupleson_id', array($search), 'and');
                }
            }else{
                $this->q = true;
                if ($search == 3 ) {
                    return $query->whereIn('forms.coupleson_id', array(1, 2, 3),'or');
                } else {
                    return $query->whereIn('forms.coupleson_id', array($search), 'or');
                }
            }

        }
    }

    public function scopeReligiouscompliancelevel($query, $search)
    {
        if(isset($search[0])) {
            if($this->q) {
                return $query->whereIn('forms.religiouscompliancelevel_id', $search, 'and');
            }else{
                $this->q = true;
                return $query->whereIn('forms.religiouscompliancelevel_id', $search, 'or');
            }
        }

    }

    public function scopeSons($query, $search)
    {
        if(isset($search[0])) {
            if($this->q) {
                return $query->whereIn('forms.son_id',$search,'and');
            }else{
                $this->q = true;
                return $query->whereIn('forms.son_id',$search,'or');
            }
        }

    }

    public function scopeLanguages($query, $search)
    {
        if(isset($search[0])) {
            if($this->q) {
                return $query->join('forms_languages', 'forms_languages.form_id', '=', 'forms.id')
                    ->whereIn('forms_languages.language_id', $search, 'and');
            }else{
                $this->q = true;
                return $query->join('forms_languages', 'forms_languages.form_id', '=', 'forms.id')
                    ->whereIn('forms_languages.language_id', $search, 'or');
            }
        }
    }

    public function scopeCountsons($query, $search)
    {
        if($search <= 1) {
            return $query->orwhere('forms.count_sons', '=', $search);
        }else{
            return $query->orwhere('forms.count_sons', '<=', $search);
        }
    }

    public function scopeSmoke($query, $search)
    {
        if($search == 3) {
             return $query->whereIn('forms.smoker_id', array(1,2), 'or');
        }else{
            return $query->orwhere('forms.smoker_id', '=', $search);
        }
    }

    public function scopeYearsrange($query, $search_form, $search_to)
    {
        if(trim($search_form)!= null && trim($search_to)!= null)
        {
            return $query->orwhere('forms.years_range_from', '>=', $search_form)
                         ->where('forms.years_range_to', '<=', $search_to);
        }
    }

    public function scopeAgesrange($query, $search_form, $search_to)
    {
        if(trim($search_form)!= null && trim($search_to)!= null )
        {
            if($this->q) {

                return $query->whereBetween('forms.age', [$search_form, $search_to]);
            }else{

                return $query->orwhereBetween('forms.age', [$search_form, $search_to]);
            }

        }
    }

    public function formstudy(){
        return $this->belongsToMany('App\Models\FormsStudies','forms_studies')
            ->withPivot('form_id')->withTimestamps();
    }

    public function scopeStudies($query, $search)
    {
        if(isset($search[0]))
        {
          return   $query->orwhereHas('studies', function ($query) use ($search) {
                    $query->whereIn('forms_studies.study_id',array($search));

            });
        }
    }

    public function scopeLocation($query, $search)
    {
        if(isset($search[0]))
        {
            return $query->whereIn('forms.location_id',$search,'or');
        }
    }

    public function scopeAcceptedlevel($query, $search)
    {
        if(isset($search[0]))
        {
            return $query->orwhereHas('acceptancelevel', function ($query) use ($search) {
                $query->whereIn('forms_acceptance_levels.acceptance_level_id',array($search));
            });
        }
    }

    public function scopeQualities($query, $search)
    {
        if(isset($search[0]))
        {
            return $query->orwhereHas('quality', function ($query) use ($search) {
                $query->whereIn('forms_qualities.quality_id',array($search));
            });
        }
    }

    public function scopeLivefuture($query, $search)
    {
        if(isset($search[0]))
        {
            if (in_array(18,$search)) {
                return $query->orwhereHas('locations', function ($query) use ($search) {
                    $query->whereIn('forms_localities.location_id',array(1,2,3,4,5,6,8,9,10,11,15,16,17));
                });

            } else{
                return $query->orwhereHas('locations', function ($query) use ($search) {
                    $query->whereIn('forms_localities.location_id',array($search));
                });
            }
        }
    }

    public function scopePartnerFeelRange($query, $search_form, $search_to)
    {
        if(trim($search_form)!= null && trim($search_to)!= null)
        {
            return $query->orwhere('forms.find_partner', '>=', $search_form)
                ->where('forms.find_partner', '<=', $search_to);
        }
    }

    public function scopeFamilyPurityLaws($query, $search)
    {
        if(isset($search[0]))
        {
            if (in_array(3,$search))
                return $query->whereIn('forms.familypuritylaw_id', array(1,2,3),'or');

            if (in_array(4,$search))
                return $query->orwhere('forms.familypuritylaw_id','=',4);


            return $query->whereIn('forms.familypuritylaw_id', array($search),'or');
        }
    }

    public function scopeEmail($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orwhere('email','LIKE', '%'.strtolower($search).'%');
        }
    }

    public function scopeMainphone($query, $search)
    {
        if(trim($search)!= null)
        {
            return $query->orwhere('main_phone','LIKE', '%'.strtolower($search).'%');
        }
    }

    public static function formbyid($id){

        return Form::where('id',$id)->with('gender','maritalstatus','religiouscompliancelevel','smoker','son','location','coupleson','familypuritylaw','files','studies','languages','quality','acceptancelevel','maritalstatuses','studiesseeks','locations','qualityseeks')->first();
    }


}
