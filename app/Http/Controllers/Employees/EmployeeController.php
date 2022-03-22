<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store()
    {
        dd(request());
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
