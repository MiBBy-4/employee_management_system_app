<?php

namespace App\Http\Controllers\employees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return 'table with employees';
    }

    public function create()
    {
        return 'form to create an employee';
    }

    public function store()
    {
        return 'it is should be function to post a new employee';
    }

    public function edit()
    {
        return 'form to update an employee';
    }

    public function update()
    {
        return 'it is should be function to update an employee';
    }

    public function destroy()
    {
        return 'it is should be function to delete an employee';
    }
}
