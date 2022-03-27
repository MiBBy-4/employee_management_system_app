@extends('layouts.app')
@section('title')Employees list @endsection

@section('content')
    <h1 class="text-center mt-2">Employees List</h1>
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>@sortablelink('first_name', 'First Name')</th>
                    <th>@sortablelink('last_name', 'Last Name')</th>
                    <th>@sortablelink('salary', 'Salary')</th>
                    <th>@sortablelink('date_of_birth', 'Date of birth')</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->date_of_birth }}</td>
                        <td>
                            <a href="{{ route('employees.edit', $employee->id) }}" type="button" class="btn btn-outline-primary">Update</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container d-flex justify-content-md-center mt-4">
        {{$employees->appends($_GET)->links()}}
    </div>
@endsection
