<?php


namespace App\Services;

use App\Models\Form;
use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\ReligiousComplianceLevel;
use App\Models\Smoker;
use App\Models\Son;
use App\Models\Location;
use App\Models\CoupleSons;
use App\Models\FamilyPurityLaw;
use App\Models\File;
use Illuminate\Support\Facades\DB;
use Exception;
use Carbon\Carbon;



class FormService
{

    public function processDataPerson($data_request)
    {
        try
        {
            $data_form = $this->insertDataPerson($data_request);

            if(!$data_form)
               return false;

            $data_attach = $this->insertDataPersonAttach($data_form,$data_request);

            if(!$data_attach)
                return false;

            $files = $data_request->file('files');

            if($files)
                $data_file = $this->insertFilePerson($data_form,$files);

            if(!$data_file)
                return false;

            return true;

        } catch (\Exception $e) {
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }

    public function insertDataPerson($data_person)
    {
        try {
            DB::beginTransaction();

            $form = new Form();
            $form->name = $data_person->name;
            $form->name_hebrew = $data_person->name_hebrew;
            $form->lastname = $data_person->lastname;
            $form->second_lastname = $data_person->second_lastname;
            $form->gender()->associate(Gender::find($data_person->gender));
            $form->date_of_birth = $data_person->date_of_birth;
            $dataTime_date_of_birth = Carbon::createFromFormat('d/m/Y', $data_person->date_of_birth);
            $form->age = Carbon::now()->format('Y') - Carbon::parse($dataTime_date_of_birth)->format('Y');
            $form->maritalstatus()->associate(MaritalStatus::find($data_person->civil_status));
            $form->profession = $data_person->profession;
            $form->email = $data_person->email;
            $form->main_phone = $data_person->main_phone;
            $form->count_sons = $data_person->count_sons;
            $form->religiouscompliancelevel()->associate(ReligiousComplianceLevel::find($data_person->religiouscompliancelevel));
            $form->reference_one = null;
            $form->reference_two = null;
            $form->community_assists = $data_person->community_assists;
            $form->rabanim_know = $data_person->rabanim_know;
            $form->name_school = $data_person->name_school;
            $form->name_secondary_school = $data_person->name_secondary_school;
            $form->smoker()->associate(Smoker::find($data_person->smoke));
            $form->son()->associate(Son::find($data_person->sons));
            $form->location()->associate(Location::find($data_person->location));
            $form->coupleson()->associate(CoupleSons::find($data_person->couple_sons));
            $form->years_range_from = $data_person->years_range_from;
            $form->years_range_to = $data_person->years_range_to;
            $form->find_partner = $data_person->find_partner;
            $form->familypuritylaw()->associate(FamilyPurityLaw::find($data_person->family_purity_laws));
            $form->about_u = $data_person->about_u;
            $form->about_u_partner = $data_person->about_u_partner;

            $form->save();

            DB::commit();

            return $form;
       }
       catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }

    public function insertDataPersonAttach($form,$data_person_attach)
    {
        try {
            DB::beginTransaction();

            $form->acceptancelevel()->attach($data_person_attach->accepted_level);
            $form->studies()->attach($data_person_attach->studies);
            $form->languages()->attach($data_person_attach->languages);
            $form->quality()->attach($data_person_attach->qualities);
            $form->studiesseeks()->attach($data_person_attach->studies_lvl_seek);
            $form->locations()->attach($data_person_attach->live_future);
            $form->qualityseeks()->attach($data_person_attach->qualities_seek);
            $form->maritalstatuses()->attach($data_person_attach->civil_status_seeker);

            DB::commit();

            return true;

        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }

    public function insertFilePerson($form,$files)
    {
        try {
            DB::beginTransaction();

            foreach ($files as $file) {
                $random_String = $this->generateRandomString();
                $image = explode('.',$file->getClientOriginalName());
                $name_image = $image[0].'_'.$random_String.'.'.$image[1];

                $file_upload = new File();
                $file_upload->form()->associate(Form::find($form->id));
                $file_upload->files_name = $name_image;

                if($file_upload->save())
                    $file->move('images/upload_forms', $name_image);

            }

            DB::commit();

            return true;

        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    public function getForms() {

        try {

            return Form::with('gender','maritalstatus','religiouscompliancelevel','smoker','son','location','coupleson','familypuritylaw','files')
                        ->orderBy('forms.id','DESC')->paginate(50);

        } catch (\Exception $e) {
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function searchForm($request) {

        try {

            $name  = $request->get('search');
            $name_hebrew  = $request->get('search');
            $lastname = $request->get('search');
            $second_lastname  = $request->get('search');
            $gender = $request->get('search');
            $marital_status = $request->get('search');
            $email  = $request->get('search');
            $main_phone  = $request->get('search');
            $users_banner = $request->get('users_banner');

            $forms = Form::orderBy('forms.id','DESC')
                ->name($name)
                ->namehebrew($name_hebrew)
                ->lastname($lastname)
                ->seconlastname($second_lastname)
                ->gender($gender)
                ->maritalsatus($marital_status)
                ->email($email)
                ->mainphone($main_phone)
                ->queryfinal($users_banner)
                ->paginate(50)->withQueryString();

            return $forms;


        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function updateStatusForm($id) {

        try {

            $form = Form::formbyid($id);

            DB::beginTransaction();

            $form->is_check  = ($form->is_check == env('NO_CHECK') ) ? env('CHECK') : env('NO_CHECK') ;
            $form->date_check  = Carbon::now()->format('Y-m-d H:i:s');

            $form->save();

            DB::commit();

            return $form;

        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }

    public function editForms($id) {

        try {
            $result['form'] = Form::formbyid($id);

            foreach ($result['form']->studies as $study) {
                $result['studies'][$study->id] = $study->id;
            }

            foreach ($result['form']->languages as $languages) {
                $result['languages'][$languages->id] = $languages->id;
            }

            foreach ($result['form']->quality as $quality) {
                $result['quality'][$quality->id] = $quality->id;
            }

            foreach ($result['form']->acceptancelevel as $acceptancelevel) {
                $result['acceptancelevel'][$acceptancelevel->id] = $acceptancelevel->id;
            }

            foreach ($result['form']->maritalstatuses as $maritalstatuses) {
                $result['maritalstatuses'][$maritalstatuses->id] = $maritalstatuses->id;
            }

            foreach ($result['form']->studiesseeks as $studiesseeks) {
                $result['studiesseeks'][$studiesseeks->id] = $studiesseeks->id;
            }

            foreach ($result['form']->locations as $locations) {
                $result['locations'][$locations->id] = $locations->id;
            }

            foreach ($result['form']->qualityseeks as $qualityseeks) {
                $result['qualityseeks'][$qualityseeks->id] = $qualityseeks->id;
            }

            return  $result;

        } catch (\Exception $e) {
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function matchPersons($request) {

        try {

            $gender = $request->get('gender');
            $civil_status = $request->get('civil_status');
            $couple_sons = $request->get('couple_sons');
            $religiouscompliancelevel = $request->get('religiouscompliancelevel');
            $sons = $request->get('sons');
            $languages = $request->get('languages');
            $count_sons = $request->get('count_sons');
            $smoke = $request->get('smoke');
            $years_range_from = $request->get('years_range_from');
            $years_range_to = $request->get('years_range_to');
            $years_range_from_person = $request->get('years_range_from_person');
            $years_range_to_person = $request->get('years_range_to_person');
            $studies = $request->get('studies');
            $location = $request->get('location');
            $accepted_level = $request->get('accepted_level');
            $qualities = $request->get('qualities');
            $live_future = $request->get('live_future');
            $feel_range_from = $request->get('feel_range_from');
            $feel_range_to = $request->get('feel_range_to');
            $family_purity_laws = $request->get('family_purity_laws');
            $users_banner = $request->get('users_banner');

            $forms = Form::orderBy('forms.id','DESC')
                ->genders($gender)
                ->formscivilstatus($civil_status)
                ->couplesons($couple_sons)
                ->religiouscompliancelevel($religiouscompliancelevel)
                ->sons($sons)
                ->languages($languages)
                ->countsons($count_sons)
                ->smoke($smoke)
                ->yearsrange($years_range_from,$years_range_to)
                ->agesrange($years_range_from_person,$years_range_to_person)
                ->studies($studies)
                ->location($location)
                ->acceptedlevel($accepted_level)
                ->qualities($qualities)
                ->livefuture($live_future)
                ->partnerfeelrange($feel_range_from,$feel_range_to)
                ->familypuritylaws($family_purity_laws)
                ->queryfinal($users_banner)
                ->paginate(50)->withQueryString();

            return $forms;


        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function updateFormById($request) {

        try
        {
            $data_form_update = $this->updateDataPerson($request);

            if(!$data_form_update)
                return false;

            $data_detach_update = $this->updateDataPersonDetach($data_form_update);

            if(!$data_detach_update)
                return false;

            $data_attach_update = $this->updateDataPersonAttach($data_form_update,$request);

            if(!$data_attach_update)
                return false;

            return true;

        } catch (\Exception $e) {
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function updateDataPersonDetach($form)
    {

        try {

             DB::beginTransaction();

            $form->acceptancelevel()->detach();
            $form->studies()->detach();
            $form->languages()->detach();
            $form->quality()->detach();
            $form->studiesseeks()->detach();
            $form->locations()->detach();
            $form->qualityseeks()->detach();
            $form->maritalstatuses()->detach();

            DB::commit();

            return true;

        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }




    public function updateDataPersonAttach($form,$data_person_attach)
    {

        try {

            DB::beginTransaction();

            $form->acceptancelevel()->attach($data_person_attach->accepted_level);
            $form->studies()->attach($data_person_attach->studies);
            $form->languages()->attach($data_person_attach->languages);
            $form->quality()->attach($data_person_attach->qualities);
            $form->studiesseeks()->attach($data_person_attach->studies_lvl_seek);
            $form->locations()->attach($data_person_attach->live_future);
            $form->qualityseeks()->attach($data_person_attach->qualities_seek);
            $form->maritalstatuses()->attach($data_person_attach->civil_status_seeker);

            DB::commit();

            return true;

        }
        catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }



    public function updateDataPerson($request) {

        try {
            $id = $request->get('idform');

            $form = Form::formbyid($id);

            DB::beginTransaction();

            $form->name = $request->get('name');
            $form->name_hebrew = $request->get('name_hebrew');
            $form->lastname = $request->get('lastname');
            $form->second_lastname = $request->get('second_lastname');
            $form->gender()->associate(Gender::find($request->get('gender')));
            $form->date_of_birth = $request->get('date_of_birth');
            $dataTime_date_of_birth = Carbon::createFromFormat('d/m/Y', $request->get('date_of_birth'));
            $form->age = Carbon::now()->format('Y') - Carbon::parse($dataTime_date_of_birth)->format('Y');
            $form->maritalstatus()->associate(MaritalStatus::find($request->get('civil_status')));
            $form->profession = $request->get('profession');
            $form->email = $request->get('email');
            $form->main_phone = $request->get('main_phone');
            $form->count_sons = $request->get('count_sons');
            $form->religiouscompliancelevel()->associate(ReligiousComplianceLevel::find($request->get('religiouscompliancelevel')));
            $form->community_assists = $request->get('community_assists');
            $form->rabanim_know = $request->get('rabanim_know');
            $form->name_school = $request->get('name_school');
            $form->name_secondary_school = $request->get('name_secondary_school');
            $form->smoker()->associate(Smoker::find($request->get('smoke')));
            $form->son()->associate(Son::find($request->get('sons')));
            $form->location()->associate(Location::find($request->get('location')));
            $form->coupleson()->associate(CoupleSons::find($request->get('couple_sons')));
            $form->years_range_from = $request->get('years_range_from');
            $form->years_range_to = $request->get('years_range_to');
            $form->find_partner = $request->get('find_partner');
            $form->familypuritylaw()->associate(FamilyPurityLaw::find($request->get('family_purity_laws')));
            $form->about_u = $request->get('about_u');
            $form->about_u_partner = $request->get('about_u_partner');


            $form->save();

            DB::commit();

            return $form;

        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function deleteForm($id) {

        try {

            $form = Form::formbyid($id);

            DB::beginTransaction();

            $form->deleted_at  = Carbon::now()->format('Y-m-d H:i:s');
            $form->save();

            DB::commit();

            return $form;

        } catch (\Exception $e) {

            DB::rollback();

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function updateBlockedForm($id) {

        try {

            $form = Form::formbyid($id);

            DB::beginTransaction();

            $form->is_blocked  = ($form->is_blocked == env('NO_BLOCKED') ) ? env('BLOCKED') : env('NO_BLOCKED') ;
            $form->date_blocked  = Carbon::now()->format('Y-m-d H:i:s');
            $form->save();

            DB::commit();

            return $form;

        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function updateMatchedForm($id) {

        try {

            $form = Form::formbyid($id);

            DB::beginTransaction();

            $form->is_matched  = ($form->is_matched == env('NO_MATCHED') ) ? env('MATCHED') : env('NO_MATCHED') ;
            $form->date_matched  = Carbon::now()->format('Y-m-d H:i:s');
            $form->save();

            DB::commit();

            return $form;

        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function updateCoupledForm($id) {

        try {

            $form = Form::formbyid($id);

            DB::beginTransaction();

            $form->is_couple  = ($form->is_couple == env('NO_COUPLED') ) ? env('COUPLED') : env('NO_COUPLED') ;
            $form->date_couple  = Carbon::now()->format('Y-m-d H:i:s');
            $form->save();

            DB::commit();

            return $form;

        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

}
