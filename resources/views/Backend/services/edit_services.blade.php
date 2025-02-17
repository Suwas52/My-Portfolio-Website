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
                        <li class="breadcrumb-item active" aria-current="page">Edit Home</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{ route('update.services') }}">
                                    @csrf

                                    <input type="text" name="id" value="{{ $service->id }}">

                                    <div class="row m-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Services Name</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="service_name" class="form-control"
                                                value="{{ $service->service_name }}" />

                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Description</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="service_desc" class="form-control"
                                                value="{{ $service->service_desc }}" />

                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">logo</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="logo" class="form-control"
                                                value="{{ $service->logo }}" />

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-3 radius-5"><i
                                            class="bx bx-store mr-1"></i>Add Service</button>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
