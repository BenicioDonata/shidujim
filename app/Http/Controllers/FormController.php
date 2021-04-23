<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GenderService;
use App\Services\LineageService;
use App\Services\ReligiousComplianceLevelService;
use App\Services\SmokerService;
use App\Services\LocationService;
use App\Services\FormService;
use Exception;


class FormController extends Controller
{

    private $genderService;
    private $lineageService;
    private $religiouscompliancelevelService;
    private $smokerService;
    private $locationService;
    private $formService;

    public function __construct(GenderService $genderService, LineageService $lineageService, ReligiousComplianceLevelService $religiouscompliancelevelService, SmokerService $smokerService, LocationService $locationService, FormService $formService)
    {
        $this->genderService = $genderService;
        $this->lineageService = $lineageService;
        $this->religiouscompliancelevelService = $religiouscompliancelevelService;
        $this->smokerService = $smokerService;
        $this->locationService = $locationService;
        $this->formService = $formService;

    }


    public function index ()
    {

        try {

            //obtenemos los genders
            $genders = $this->genderService->getGenders();

            //obtenemos los lineages
            $lineages = $this->lineageService->getLineages();

            //obtenemos los Religious Compliance Levels
            $religiouscompliancelevels = $this->religiouscompliancelevelService->getReligiousComplianceLevels();

            //obtenemos las opciones del campo fumas
            $smokers = $this->smokerService->getSmokers();

            //obtenemos las opciones del campo localidad donde vivis
            $localities = $this->locationService->getLocalities();

            //retornamos a la vista los datos
            return view('partials.multi-step-form', compact('genders','lineages', 'religiouscompliancelevels', 'smokers','localities'));


        }catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }


    public function finalFormPage ()
    {

        return view('partials.final_form_page');
    }

    public function store (Request $request)
    {

        try {

            $message = 'Formulario cargado con exito.';
            $alert_type = 'success';

            if (!$request->all()){
                $message = 'Error en el envio de datos. Vuelva a intentarlo';
                $alert_type = 'error';
            }


            $fail_result_request = validate_request($request);

            if($fail_result_request)
            {
                $message = 'Error en el envio de datos. Vuelva a intentarlo';
                $alert_type = 'error';

            } else {

                $result_data_send = $this->formService->processDataPerson($request);

                if(!$result_data_send) {

                    $message = 'No se pudo cargar el formulario. Vuelva a intentarlo';
                    $alert_type = 'error';

                }


            }

            $notification = array(
                'message' => $message,
                'alert-type' => $alert_type

            );

//            return view('partials.final_form_page',compact('notification'));

            return redirect()->route('final-form-page')->with($notification);


        }catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }
}
