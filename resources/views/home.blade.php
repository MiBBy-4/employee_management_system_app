@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container text-center">
                        {{ __('You are logged in!') }}
                        <div class="container mt-2">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-success">Check employees</a>
                            <a href="{{ route('employees.create') }}" class="btn btn-outline-primary">Create an employee</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
