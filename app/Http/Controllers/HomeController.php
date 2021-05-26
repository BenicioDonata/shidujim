<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Form;
use Illuminate\Http\Request;
use App\Services\UserServices;
use App\Services\FormService;
use App\Services\GenderService;
use App\Services\LineageService;
use App\Services\ReligiousComplianceLevelService;
use App\Services\SmokerService;
use App\Services\LocationService;
use App\Services\CommentService;
use Maatwebsite\Excel\Facades\Excel;

use Exception;
use App\Exports\FormsExport;

class HomeController extends Controller
{

    private $userService;
    private $formService;
    private $genderService;
    private $lineageService;
    private $religiouscompliancelevelService;
    private $smokerService;
    private $locationService;
    private $commentService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserServices $userService, FormService $formService,
                                GenderService $genderService, LineageService $lineageService,
                                ReligiousComplianceLevelService $religiouscompliancelevelService,
                                SmokerService $smokerService, LocationService $locationService,
                                CommentService $commentService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
        $this->formService = $formService;
        $this->genderService = $genderService;
        $this->lineageService = $lineageService;
        $this->religiouscompliancelevelService = $religiouscompliancelevelService;
        $this->smokerService = $smokerService;
        $this->locationService = $locationService;
        $this->commentService = $commentService;


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashAdmin()
    {
        try {

            $users = $this->userService->getUsers();

            return view('dash_admin', compact('users'));

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }

    public function updateStatusUser($id)
    {

        try {

            $user = $this->userService->updateStatusUser($id);

            if (!$user) {

                $notification = array(
                    'message' => 'No se pudo activar el usuario. Vuelva a intentarlo',
                    'alert-type' => 'error'

                );

                return redirect()->route('dash_admin')->with($notification);

            }

            $notification = array(
                'message' => 'Cambio de estado con éxito!',
                'alert-type' => 'success'

            );

            return redirect()->route('dash_admin')->with($notification);

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }


    public function updateAdminUser($id)
    {

        try {

            $user = $this->userService->updateAdminUser($id);

            if (!$user) {

                $notification = array(
                    'message' => 'No se pudo activar como Administrador el usuario. Vuelva a intentarlo',
                    'alert-type' => 'error'

                );

                return redirect()->route('dash_admin')->with($notification);

            }

            $notification = array(
                'message' => 'Cambio de estado a Administrador exitosamente!',
                'alert-type' => 'success'

            );

            return redirect()->route('dash_admin')->with($notification);

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function deleteUser($id)
    {

        try {

            $user = $this->userService->deleteUser($id);

            if (!$user) {

                $notification = array(
                    'message' => 'No se pudo eliminar el usuario. Vuelva a intentarlo',
                    'alert-type' => 'error'

                );

                return redirect()->route('dash_admin')->with($notification);

            }

            $notification = array(
                'message' => 'Usuario eliminado exitosamente!',
                'alert-type' => 'success'

            );

            return redirect()->route('dash_admin')->with($notification);

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function searchUser(Request $request)
    {

        try {

            $users = $this->userService->searchUsers($request);


            return view('dash_admin', compact('users'));

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function searchForm(Request $request)
    {

        try {

            $forms = $this->formService->searchForm($request);

            return view('dash_user', compact('forms'));

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function updateStatusForm($id)
    {

        try {

            $user = $this->formService->updateStatusForm($id);

            if (!$user) {

                $notification = array(
                    'message' => 'No se pudo modificar el estado al formulario. Vuelva a intentarlo',
                    'alert-type' => 'error'

                );

                return redirect()->route('dash_user')->with($notification);

            }

            $notification = array(
                'message' => 'Cambio de estado con éxito!',
                'alert-type' => 'success'

            );

            return redirect()->route('dash_user')->with($notification);

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function dashUser()
    {

        try {

            $forms = $this->formService->getForms();

            return view('dash_user', compact('forms'));

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function editForm($id)
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

            $form = $this->formService->editForms($id);

            return view('partials.edit-multi-step-form', compact('form', 'genders', 'lineages', 'religiouscompliancelevels', 'smokers', 'localities'));


        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));


        }
    }


    public function matchPersonForm(Request $request)
    {

        try {


            $forms = $this->formService->matchPersons($request);

            return view('dash_user', compact('forms'));

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function downloadmMatchPersonForm(Request $request)
    {
        try {
            return Excel::download(new FormsExport(json_decode(base64_decode($request->collection))), 'matcheo_' . date('Y-d-m H:i:s') . '.xlsx');
        } catch (\Exception $e) {
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }

    public function saveComment(Request $request)
    {
        try {

            $message = 'Comentario cargado con exito.';
            $alert_type = 'success';

            if (!$request->all()){
                $message = 'Error en la carga del comentario. Vuelva a intentarlo';
                $alert_type = 'error';
            }

            $fail_result_request = validate_request_comment($request);

            if($fail_result_request)
            {
                $message = 'Campo comentario requerido.';
                $alert_type = 'error';

            } else {

                $result_data_send = $this->commentService->insertComment($request);

                if(!$result_data_send) {
                    $message = 'No se pudo cargar el comentario. Vuelva a intentarlo';
                    $alert_type = 'error';
                }
            }

            $notification = array(
                'message' => $message,
                'alert-type' => $alert_type

            );

            return redirect()->route('dash_user')->with($notification);

        }catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }

    public function getComments(Request $request,$id)
    {

        if ($request->ajax()) {
            $comments = Comment::comments($id);
            return response()->json($comments);
        }
    }

    public function updateForm(Request $request)
    {

        try {

            $message = 'Formulario actualizado con exito.';
            $alert_type = 'success';

            if (!$request->all()){
                $message = 'Error en la actualizacion de datos. Vuelva a intentarlo';
                $alert_type = 'error';
            }

            $fail_result_request = validate_request_edit($request);

            if($fail_result_request)
            {
                $message = 'Error en la actualizacion de datos. Vuelva a intentarlo';
                $alert_type = 'error';

            } else {

                $result_data_update = $this->formService->updateFormById($request);

                if(!$result_data_update) {
                    $message = 'No se pudo actualizar el formulario. Vuelva a intentarlo';
                    $alert_type = 'error';
                }

            }
            $notification = array(
                'message' => $message,
                'alert-type' => $alert_type
            );
            return redirect()->route('dash_user')->with($notification);
        }catch (\Exception $e) {
            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }

    }

    public function deleteForm($id)
    {

        try {

            $user = $this->formService->deleteForm($id);

            if (!$user) {

                $notification = array(
                    'message' => 'No se pudo eliminar el formulario. Vuelva a intentarlo',
                    'alert-type' => 'error'

                );

                return redirect()->route('dash_user')->with($notification);

            }

            $notification = array(
                'message' => 'Formulario eliminado con éxito!',
                'alert-type' => 'success'

            );

            return redirect()->route('dash_user')->with($notification);

        } catch (\Exception $e) {

            throw new Exception(sprintf("ERROR: '%s'", $e->getMessage()));
        }
    }

}
