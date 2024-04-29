@extends('components.main')

@push('title')
    <title>Edit</title>
@endpush

@section('content')
    <h1 class="text-center">Update Details</h1>
    <div class="container">
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" value="{{ $customers->full_name }}">
                <span class="text-danger">
                    @error('full_name')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $customers->email }}">
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
                Update
            </button>
        </form>
    </div>
@endsection
