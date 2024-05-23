<?php

namespace App\Modules;

class migrations
{
    CONST migrations = [
        "employee" => [
            'middleware' => 'web',
            'migrations' => 'app/Modules/Employee/routes/web.php',
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
    ];

}
