@extends('Frontend.main_master')
@section('Frontend')
    <style>
        .section__title {

            margin-bottom: 10rem;


        }
    </style>
    <section class="services section" id="services">
        <h2 class="section__title">Services</h2>

        {{-- <span class="section__subtitle"> What i offer </span> --}}

        @php
            $services = App\Models\Services::latest()->get();
        @endphp

        <div class="services__container container grid section__border">


            @foreach ($services as $service)
                <div class="services__card">
                    <i class="ri-{{ $service->logo }}"></i>

                    <h2 class="services__title">
                        {{ $service->service_name }}
                    </h2>

                    <p class="services__description">
                        {{ $service->service_desc }}
                    </p>

                    <div class="services__border"></div>
                </div>
            @endforeach
            <!--<div class="services__card">
                            <i class="ri-code-line"></i>

                            <h2 class="services__title">
                                Web <br />
                                Development
                            </h2>

                            <p class="services__description">
                                Service that provides the best quality and at the request of the
                                client, with professional work and customer support.
                            </p>

                            <div class="services__border"></div>
                        </div>
                         <div class="services__card">
                                                                                                    <i class="ri-quill-pen-line"></i>

                                                                                                    <h2 class="services__title">
                                                                                                      Digital <br />
                                                                                                      Animator
                                                                                                    </h2>

                                                                                                    <p class="services__description">
                                                                                                      Service that provides the best quality and at the request of the
                                                                                                      client, with professional work and customer support.
                                                                                                    </p>

                                                                                                    <div class="services__border"></div>
                                                                                                  </div> -->
        </div>
    </section>
@endsection
