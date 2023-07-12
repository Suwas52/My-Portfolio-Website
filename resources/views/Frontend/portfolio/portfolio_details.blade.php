@extends('Frontend.main_master')
@section('Frontend')
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .left {
            width: 100%;
        }

        .image {
            height: 200px;
            width: 200px;
            position: relative;
        }

        .projects__img {
            height: 150px;
            width: 120px;
            object-fit: contain;
        }
    </style>
    <section class="projects section" id="projects">
        <h2 class="section__title">Projects Details</h2>
        <div class="container">
            <div class="left">
                <div class="image">
                    <img src="{{ $portfolio->portfolio_img }} " alt="Projects Image" class="projects__img" />
                </div>
            </div>
            <div class="right">hello</div>
        </div>
    </section>
@endsection
