@extends('layouts.app')

@section('title')Create an Employee @endsection

@section('content')
    <h1 class="text-center mb-3">Create an Employee</h1>
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
        <form method="POST" action="{{ route('employees.store') }}">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="firstName" value="{{ old('first_name') }}" name="first_name" placeholder="Input employee's first name">
                <label for="firstName">First Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" id="lastName" placeholder="Input employee's last name">
                <label for="lastName">Last Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="salary" value="{{ old('salary') }}" id="salary" placeholder="Input employee's salary">
                <label for="salary">Salary</label>
              </div>
              <div class="form-floating mb-3">
                <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" id="date_of_birth" placeholder="Input employee's date of birth">
                <label for="date_of_birh">Date of Birth</label>
              </div>
              <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
