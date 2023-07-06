@extends('admin.admin_dashboard');
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">About Section</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">

            </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" id="myForm" action="{{ route('update.about') }}">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $aboutSection->id }}">





                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">About Name</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="about_name" class="form-control"
                                                value="{{ $aboutSection->about_name }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">About Profession</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <textarea class="form-control " name="about_profession" placeholder="Required example textarea">{{ $aboutSection->about_profession }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">About Description</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <textarea class="form-control " name="short_des" placeholder="Required example textarea">{{ $aboutSection->short_des }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">About Funny</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <textarea class="form-control " name="long_des">{{ $aboutSection->long_des }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> Complement</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="about_end" class="form-control"
                                                value="{{ $aboutSection->about_end }}" />
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info px-5"><i
                                            class="bx bx-cloud-download mr-1"></i>Update About</button>





                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    brand_name: {
                        required: true,
                    },
                },
                messages: {
                    brand_name: {
                        required: 'Please Enter Brand Name',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
