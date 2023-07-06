@extends('Frontend.main_master')
@section('Frontend')
    <style>
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content-description {
            padding: 20px;

        }



        .title_1 {
            color: #4a4a4a;
            line-height: 1;
            font-size: 3.5rem;
            font-weight: 700;
            margin: 0 0 10px;
        }

        .title_2 {
            color: #999;
            line-height: 1;
            font-size: 3rem;
            font-weight: 700;
            margin: 0 0 10px;
        }

        .title_3 {
            letter-spacing: .3px;
            font-weight: normal;
            line-height: 1.4;
            font-size: 1.6em;
            padding: 0 20px;
            margin-bottom: 25px;
        }

        .btn {
            border: none;
        }

        .btn a {
            color: #fff;
        }

        @media(max-width:568px) {
            .title_1 {
                font-size: 2.5rem;
            }

            .title_2 {
                font-size: 2.5rem;
            }

            .title_3 {
                font-size: 1rem;
                margin-bottom: 15px;
            }
        }

        @media screen and (min-width: 568px) and (max-width: 768px) {
            .title_1 {
                font-size: 3rem;
            }

            .title_2 {
                font-size: 3rem;
            }

            .title_3 {
                font-size: 1.2rem;
                margin-bottom: 15px;
            }
        }
    </style>




    <section class="about section" id="about">



        <div class="about__container container grid section__border">
            <div class="content">
                <h1 class="title_1">Whoops!</h1>
                <h2 class="title_2">Lost in space?</h2>
                <h4 class="title_3">The page you're looking for <b>isn't available.</b> </h4>
                <h4 class="title_3">We recommend you to go back to our home screen.😅</h4>
                <button class="btn"><a href="{{ route('main-page') }}">Take a Back</a></button>

            </div>
        </div>
    </section>
@endsection
