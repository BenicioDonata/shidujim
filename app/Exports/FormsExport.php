<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class FormsExport implements FromView
{

    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    use Exportable;

    public function view(): View {

        return view('export.forms_search', [
            'data' => $this->request->data
        ]);

    }



}
