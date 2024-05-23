<?php

namespace App\Libraries;

use App\Libraries\constantManager\paginateConstant;
use App\Modules\Company\Models\Company;
use App\Modules\Employee\Models\EmployeeModel;
use App\Modules\TechnicalService\Models\TechnicalService;

class GatewayLibrary
{
    private $gatewayModel;
    private function setModel($module){
        $this->gatewayModel = new $module;
    }

    public function setModule($module){
        switch($module){
            case 'Company':
                $this->setModel(Company::class);
            break;
            case 'Employee':
                $this->setModel(EmployeeModel::class);
            break;
            case 'TechnicalService':
                $this->setModel(TechnicalService::class);
            break;
        }
    }

    public function getList(){
        return $this->gatewayModel->paginate(paginateConstant::LIST_PAGINATE_COUNT);
    }
}
