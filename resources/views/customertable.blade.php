@extends('components.main')

@push('title')
    <title>Customer</title>
@endpush

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 text-start">
                <a href="{{ route('customer.create') }}"><button type="button" class="btn btn-primary">
                        Add
                    </button></a>
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
                                    <td>{{ $customerdata->address }}</td>
                                    <td>
                                        @if ($customerdata->status == 1)
                                            <a href=""><span class="badge badge-success">Active</span></a>
                                        @else
                                            <a href=""><span class="badge badge-danger">Inactive</span></a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('customer.edit', ['id' => $customerdata->customer_id]) }}"><button
                                                class="btn btn-primary">Edit</button>
                                            <a href="{{ route('customer.delete', ['id' => $customerdata->customer_id]) }}"><button
                                                    class="btn btn-danger">Delete</button></a>
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
