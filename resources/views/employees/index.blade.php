@extends('layouts.app')
@section('title')Employees list @endsection

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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <th scope="row">{{ $employee->first_name }}</th>
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
@endsection
