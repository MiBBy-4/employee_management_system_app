@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-2">Employees List</h1>
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Date of Birth</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">{{ $employee->first_name }}</th>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->day_of_birth }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
