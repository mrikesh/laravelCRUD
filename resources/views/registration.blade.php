@extends('components.main')

@push('title')
    <title>Registration</title>
@endpush

@section('content')
    <h1 class="text-center">Registration</h1>
    <div class="container">
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name">
                <span class="text-danger">
                    @error('full_name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                <span class="text-danger">
                    @error('address')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <button class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
@endsection
