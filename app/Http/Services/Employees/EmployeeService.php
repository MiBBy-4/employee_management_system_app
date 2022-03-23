<?php

namespace App\Http\Services\Employees;

use App\Models\Employee;

class EmployeeService
{
    public function store($data)
    {
        Employee::create($data);
    }

    public function update($employee, $data)
    {
        $employee->update($data);
    }
}

?>
