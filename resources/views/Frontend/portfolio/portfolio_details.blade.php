@extends('Frontend.main_master')
@section('Frontend')
    <style>
        .container {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* .left {
                                        width: 100%;
                                    } */

        .image {
            width: 700px;
            height: 400px;
            /* position: relative; */
        }

        /* .projects__img {
                                            height: 250px;
                                            width: 120px;
                                            object-fit: contain;
                                        } */
    </style>
    <section class="projects section" id="projects">
        <h2 class="section__title">Projects Details</h2>
        <div class="container">
            <div class="left">
                <div class="image">
                    <h1>{{ $portfolio->portfolio_name }}</h1>
                    <img src="{{ $portfolio->portfolio_img }}" alt="portfolio" />
                </div>
            </div>
            {{-- <div class="right">hello</div> --}}
        </div>
    </section>
@endsection
