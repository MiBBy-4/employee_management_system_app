@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-3">Update an {{ $employee->last_name }}</h1>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('employees.update', $employee->id) }}">
            @csrf
            @method('PATCH')
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="firstName" value="{{ $employee->first_name }}" name="first_name" placeholder="Input employee's first name">
                <label for="firstName">First Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="last_name" value="{{ $employee->last_name }}" id="lastName" placeholder="Input employee's last name">
                <label for="lastName">Last Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" class="form-control" name="salary" value="{{ $employee->salary }}" id="salary" placeholder="Input employee's salary">
                <label for="salary">Salary</label>
              </div>
              <div class="form-floating mb-3">
                <input type="date" class="form-control" name="date_of_birth" value="{{ $employee->date_of_birth }}" id="date_of_birth" placeholder="Input employee's date of birth">
                <label for="date_of_birh">Date of Birth</label>
              </div>
              <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
