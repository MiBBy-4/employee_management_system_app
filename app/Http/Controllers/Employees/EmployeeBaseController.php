<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Http\Services\Employees\EmployeeService;
use Illuminate\Http\Request;

class EmployeeBaseController extends Controller
{
    public $service;

    public function __construct(EmployeeService $service)
    {
        $this->service = $service;
    }
}
