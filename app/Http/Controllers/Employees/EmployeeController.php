<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends EmployeeBaseController
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

    public function store(EmployeeRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('employees.index');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Employee $employee, EmployeeRequest $request)
    {
        $data = $request->validated();
        $this->service->update($employee, $data);

        return redirect()->route('employees.index');
    }

    public function destroy($employeeId)
    {
        return "it is should be function to delete an $employeeId";
    }
}
