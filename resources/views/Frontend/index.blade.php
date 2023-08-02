@extends('Frontend.main_master')
@section('Frontend')
    {{-- Home Section Started --}}
    @include('Frontend.home.home_section')
    {{-- Home Section Ended --}}

    <!--==================== SKILLS ====================-->

    {{-- Skills Section Started --}}
    @include('Frontend.skills.skills_section')
    {{-- Skills Section Ended --}}


    <!--==================== QUALIFICATION starts====================-->
    @include('Frontend.qualification.qualification_section')
    <!--==================== QUALIFICATION ends====================-->


    <!--==================== SERVICES ====================-->


    <!--==================== PROJECTS starts====================-->
    @include('Frontend.portfolio.portfolios_section')
    <!--==================== PROJECTS ends====================-->


    <!--==================== TESTIMONIAL starts ====================-->
    {{-- @include('Frontend.testimonial.testimonial_section') --}}

    <!--==================== TESTIMONIAL ends ====================-->


    <!--==================== CONTACT starts ====================-->
    <!--==================== CONTACT ends====================-->
@endsection
