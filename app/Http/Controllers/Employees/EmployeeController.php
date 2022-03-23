<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreRequest;
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

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('employees.index');
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
