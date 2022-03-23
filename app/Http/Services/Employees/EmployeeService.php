<?php

namespace App\Http\Services\Employees;

use App\Models\Employee;

class EmployeeService
{
    public function store($data)
    {
        Employee::create($data);
    }
}

?>
