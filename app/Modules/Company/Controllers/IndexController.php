<?php

namespace App\Modules\Company\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\Company\Models\Company;

class IndexController extends Controller
{
    private $companyModel;
    function __construct(Company $companyModel)
    {
        $this->companyModel = $companyModel;
    }

    public function list()
    {
        $companies = $this->companyModel->paginate(25);
        return view('modules.company.list',['companies' => $companies]);
    }
}
