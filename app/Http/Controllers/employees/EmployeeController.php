<?php

namespace App\Http\Controllers\employees;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        dd($employees);
    }

    public function create()
    {
        return 'form to create an employee';
    }

    public function store()
    {
        return 'it is should be function to post a new employee';
    }

    public function edit($employeeId)
    {
        return "form to update an $employeeId";
    }

    public function update($employeeId)
    {
        return "it is should be function to update an $employeeId";
    }

    public function destroy($employeeId)
    {
        return "it is should be function to delete an $employeeId";
    }
}
