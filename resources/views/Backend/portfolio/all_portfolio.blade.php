@extends('admin.admin_dashboard');
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Portfolios</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Home</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.portfolios') }}" class="btn btn-primary">Add Portfolio </a>

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
                                            <th scope="col">Portfolio Name</th>
                                            <th scope="col">Langauges</th>
                                            <th scope="col">Image </th>
                                            <th scope="col">Description </th>
                                            <th scope="col">Url </th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portfolios as $key => $portfolio)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $portfolio->portfolio_name }}</td>
                                                <td>{{ $portfolio['portfolio']['portfolio_title'] }}</td>
                                                <td>
                                                    <img src="{{ asset($portfolio->portfolio_img) }}"
                                                        style="width:70px; height:70px; object-fit:contain" alt="Logo">
                                                </td>
                                                <td>{{ $portfolio->portfolio_url }}</td>
                                                <td>{{ $portfolio->portfolio_desc }}</td>

                                                <td>
                                                    <a class="btn btn-primary" href="">Edit</a>

                                                </td>
                                                <td>
                                                    <a class="btn btn-danger" href="">Delete</a>

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
