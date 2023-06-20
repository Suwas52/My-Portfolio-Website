@extends('Frontend.main_master')
@section('Frontend')
    <style>
        .content-description {
            padding: 20px;

        }
    </style>
    <section class="section">
        <h2 class="section__title">About</h2>

    </section>



    <section class="about section" id="about">

        @php
            $aboutSection = App\Models\About::findOrFail(1);
        @endphp

        <div class="about__container container grid section__border">
            <div class="content">
                <h3 class="content-description">{{ $aboutSection->about_name }}</h3>
                <h3 class="content-description">
                    {{ $aboutSection->about_profession }}</h3>
                <h3 class="content-description">
                    {{ $aboutSection->short_des }}</h3>
                <h3 class="content-description">
                    {{ $aboutSection->long_des }}
                </h3>
                <h3 class="content-description">
                    {{ $aboutSection->about_end }}</h3>
            </div>
        </div>
    </section>
@endsection
