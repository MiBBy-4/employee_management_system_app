<?php

namespace App\Http\Controllers\Employees;

use App\Http\Requests\Employee\EmployeeRequest;
use App\Models\Employee;
use App\Http\Controllers\Controller;

class EmployeeController extends EmployeeBaseController
{
    public function index()
    {
        $employees = Employee::sortable()->paginate(10);

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

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index');
    }
}
