@extends('Frontend.main_master')
@section('Frontend')
    {{-- Home Section Started --}}
    @include('Frontend.home.home_section')
    {{-- Home Section Ended --}}

    <!--==================== SKILLS ====================-->

    {{-- Skills Section Started --}}
    @include('Frontend.skills.skills_section')
    {{-- Skills Section Ended --}}


    <!--==================== QUALIFICATION ====================-->
    <section class="qualification section" id="qualification">
        <h2 class="section__title">Qualification</h2>
        <span class="section__subtitle">Experience & education</span>

        <div class="qualification__container container grid section__border">
            <!-- Qualification 1 -->
            <div class="qualification__content">
                <h3 class="qualification__title">
                    <i class="ri-pencil-ruler-2-line"></i> Education
                </h3>
                <div class="qualification__info">
                    <div>
                        <h3 class="qualification__name">
                            Bachelor in Information Technology
                        </h3>
                        <span class="qualification__country">Kist College of Information Technology</span>
                        <span class="qualification__year">2019-2023</span>
                    </div>

                    <div>
                        <h3 class="qualification__name">Intermediate</h3>
                        <span class="qualification__country">Himalayan White House International College</span>
                        <span class="qualification__year">2017 - 2019</span>
                    </div>

                    <div>
                        <h3 class="qualification__name">SLC</h3>
                        <span class="qualification__country">Sagarmatha English Boarding School</span>
                        <span class="qualification__year">2003 - 2016</span>
                    </div>
                </div>
            </div>

            <!-- Qualification 2 -->
            <div class="qualification__content">
                <h3 class="qualification__title">
                    <i class="ri-building-line"></i> Work
                </h3>
                <div class="qualification__info">
                    <div>
                        <h3 class="qualification__name">Fontend Developer</h3>
                        <span class="qualification__country">Myself</span>
                        <span class="qualification__year">2020 - 2021</span>
                    </div>

                    <div>
                        <h3 class="qualification__name">Backend Developer</h3>
                        <span class="qualification__country">Myself</span>
                        <span class="qualification__year">2021 - 2022</span>
                    </div>

                    <div>
                        <h3 class="qualification__name">Software Engineer</h3>
                        <span class="qualification__country">Myself</span>
                        <span class="qualification__year">2022 - Present</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================== SERVICES ====================-->


    <!--==================== PROJECTS starts====================-->
    @include('Frontend.portfolio.portfolios_section')
    <!--==================== PROJECTS ends====================-->


    <!--==================== TESTIMONIAL starts ====================-->
    @include('Frontend.testimonial.testimonial_section')

    <!--==================== TESTIMONIAL ends ====================-->


    <!--==================== CONTACT starts ====================-->
    <!--==================== CONTACT ends====================-->
@endsection
