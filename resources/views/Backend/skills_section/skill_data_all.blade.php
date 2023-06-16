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
            <div class="ms-auto">
                <div class="btn-group">

                    <a href="{{ route('add.skill', $skill_title_id->id) }}" class="btn btn-primary">Add Skills
                    </a>

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
                                            <th scope="col">S.N</th>
                                            <th scope="col">Skill Name</th>
                                            <th scope="col">Skill Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($skills_data as $key => $skill)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $skill->skill_name }}</td>

                                                <td>
                                                    <img src="{{ asset($skill->skill_image) }}"
                                                        style="width:70px; height:70px" alt="Logo">
                                                </td>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('edit.skill_data', $skill->id) }}">Edit</a>
                                                    <a class="btn btn-danger"
                                                        href="{{ route('delete.skill_data', $skill->id) }}">Delete</a>

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
