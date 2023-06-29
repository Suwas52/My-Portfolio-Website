@extends('admin.admin_dashboard');
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Home Section</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>

                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.testimonials') }}" class="btn btn-primary">Add Skills </a>

                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.n</th>
                                            <th scope="col">Client Name</th>
                                            <th scope="col">Project Name</th>
                                            <th scope="col">Client Image</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $key => $testimonial)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $testimonial->client_name }}</td>
                                                <td>{{ $testimonial->project_name }}</td>
                                                <td>
                                                    <img src="{{ asset($testimonial->client_img) }}" alt="user avatar"
                                                        class="rounded-circle" width="60" height="60">

                                                </td>
                                                <td>{{ $testimonial->client_desc }}</td>

                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('edit.testimonial', $testimonial->id) }}">Edit</a>
                                                    <a class="btn btn-danger"
                                                        href="{{ route('delete.testimonial', $testimonial->id) }}">Delete</a>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
