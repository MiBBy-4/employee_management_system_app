@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-3">Create an Employee</h1>
    <div class="container">
        <form action="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Input employee first name">
                <label for="firstName">First Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="last_name" id="lastName" placeholder="Input employee last name">
                <label for="lastName">Last Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" class="form-control" name="salary" id="salary" placeholder="Input employee salary">
                <label for="salary">Salary</label>
              </div>
              <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
