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
                    <a href="{{ route('add.experience') }}" class="btn btn-primary">Add Education </a>

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
                                            <th scope="col">Academic Name</th>
                                            <th scope="col">Education Name</th>
                                            <th scope="col">Years</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($experiences as $key => $experience)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $experience->project }}</td>
                                                <td>{{ $experience->field }}</td>
                                                <td>{{ $experience->years }}</td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('edit.experience', $experience->id) }}">Edit</a>
                                                    <a class="btn btn-danger"
                                                        href="{{ route('delete.experience', $experience->id) }}">Delete</a>
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
