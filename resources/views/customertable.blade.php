@extends('components.main')

@push('title')
    <title>Customer</title>
@endpush

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 text-start">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                    Add
                </button>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($customers as $customerdata)
                            <tr>
                                <td>{{ $customerdata->full_name }}</td>
                                <td>{{ $customerdata->email }}</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
