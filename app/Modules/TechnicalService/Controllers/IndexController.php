<?php

namespace App\Modules\TechnicalService\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\TechnicalService\Models\TechnicalService;
use App\DataTables\TechnicalServiceDataTable;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $technicalServiceDataTable;
    private $technicalServiceModel;
    function __construct(TechnicalServiceDataTable $technicalServiceDataTable, TechnicalService $technicalServiceModel)
    {
        $this->technicalServiceDataTable = $technicalServiceDataTable;
        $this->technicalServiceModel = $technicalServiceModel;
    }

    public function create()
    {
        return view('modules.technicalservice.create');
    }

    public function list()
    {
        return $this->technicalServiceDataTable->render('modules.technicalservice.list');
    }

    public function store(Request $request){

    }
}
