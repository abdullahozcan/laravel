<?php

namespace App\Modules;

class routes
{
    CONST modules = [
        "employee" => [
            'middleware' => 'web',
            'routes' => 'app/Modules/Employee/routes/web.php',
            'prefix' => 'employee'
        ],
        "hr" => [
            'middleware' => 'web',
            'routes' => 'app/Modules/Hr/routes/web.php',
            'prefix' => 'hr'
        ],
        "crm" => [
            'middleware' => 'web',
            'routes' => 'app/Modules/Crm/routes/web.php',
            'prefix' => 'crm'
        ],
        "service" => [
            'middleware' => 'web',
            'routes' => 'app/Modules/TechnicalService/routes/web.php',
            'prefix' => 'services'
        ],
    ];
}
