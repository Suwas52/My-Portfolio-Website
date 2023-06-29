@extends('admin.admin_dashboard');
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Portfolio Section</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>

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
                                <form method="post" action="{{ route('store.portfolios') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row m-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Portfolio Title</h6>
                                        </div>
                                        <div class="form-group col-sm-9">

                                            <select name="portfolio_cat_id" class="form-control">
                                                <option value="0" disabled>Select Portfolio Title
                                                </option>
                                                @foreach ($portfolio_cat as $portfolio)
                                                    <option value="{{ $portfolio->id }}">{{ $portfolio->portfolio_title }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            <span class="text-danger">
                                                @error('portfolio_cat_id')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Portfolio Name</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="portfolio_name" class="form-control"
                                                placeholder="Enter Portfolio Name " />
                                            <span class="text-danger">
                                                @error('portfolio_name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Portfolio Image</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="file" name="portfolio_img" class="form-control"
                                                id="image" />
                                            <span class="text-danger">
                                                @error('portfolio_img')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">

                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <img id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                                class="rounded-circle p-1 bg-primary"
                                                style="width:100px; height:100px; object-fit:cover ">
                                        </div>
                                    </div>

                                    <div class="row m-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Portfolio Url</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="portfolio_url" class="form-control"
                                                placeholder="Enter Portfolio Link " />
                                            <span class="text-danger">
                                                @error('portfolio_url')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row m-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Description</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">

                                            <textarea class="form-control " name="portfolio_desc" value="Describe yourself here...">  </textarea>
                                            <span class="text-danger">
                                                @error('portfolio_desc')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-3 radius-5"><i
                                            class="bx bx-store mr-1"></i>Add </button>

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
@endsection
