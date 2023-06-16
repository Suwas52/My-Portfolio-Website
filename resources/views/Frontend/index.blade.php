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
    <section class="services section" id="services">
        <h2 class="section__title">Services</h2>
        <span class="section__subtitle"> What i offer </span>

        <div class="services__container container grid section__border">
            <div class="services__card">
                <i class="ri-layout-4-line"></i>

                <h2 class="services__title">
                    UI/UX <br />
                    Designer
                </h2>

                <p class="services__description">
                    Service that provides the best quality and at the request of the
                    client, with professional work and customer support.
                </p>

                <div class="services__border"></div>
            </div>
            <div class="services__card">
                <i class="ri-code-line"></i>

                <h2 class="services__title">
                    Website <br />
                    Design
                </h2>

                <p class="services__description">
                    Service that provides the best quality and at the request of the
                    client, with professional work and customer support.
                </p>

                <div class="services__border"></div>
            </div>
            <!-- <div class="services__card">
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

    <!--==================== PROJECTS ====================-->
    <section class="projects section" id="projects">
        <h2 class="section__title">Projects</h2>
        <span class="section__subtitle">Most recent work</span>
        <div class="container section__border">
            <div class="projects__container swiper">
                <div class="swiper-wrapper">
                    <!-- Project 1 -->
                    <div class="projects__content swiper-slide">
                        <img src="{{ asset('frontend/assets/img/project1.jpg') }} " alt="Projects Image"
                            class="projects__img" />
                        <div>
                            <span class="projects__subtitle">Web</span>
                            <h1 class="projects__title">Modern Website</h1>
                            <a href="#" class="projects__button">
                                View Demo <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>

                    <!-- Project 1 -->
                    <div class="projects__content swiper-slide">
                        <img src="{{ asset('frontend/assets/img/project2.jpg') }} " alt="Projects Image"
                            class="projects__img" />
                        <div>
                            <span class="projects__subtitle">Web</span>
                            <h1 class="projects__title">ECommerce Store</h1>
                            <a href="#" class="projects__button">
                                View Demo <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>

                    <!-- Project 1 -->
                    <div class="projects__content swiper-slide">
                        <img src="{{ asset('frontend/assets/img/project3.jpg') }} " alt="Projects Image"
                            class="projects__img" />
                        <div>
                            <span class="projects__subtitle">Design</span>
                            <h1 class="projects__title">Application Design</h1>
                            <a href="#" class="projects__button">
                                View Demo <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>

                    <!-- Project 1 -->
                    <div class="projects__content swiper-slide">
                        <img src="{{ asset('frontend/assets/img/project4.jpg') }} " alt="Projects Image"
                            class="projects__img" />
                        <div>
                            <span class="projects__subtitle">Animation</span>
                            <h1 class="projects__title">Animation Prototypes</h1>
                            <a href="#" class="projects__button">
                                View Demo <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>

                <!-- swiper arrows -->
                <div class="swiper-button-next">
                    <i class="ri-arrow-right-s-line"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="ri-arrow-left-s-line"></i>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!--==================== TESTIMONIAL ====================-->
    <section class="testimonial section">
        <h2 class="section__title">Testimonial</h2>
        <span class="section__subtitle">My Client Saying</span>

        <div class="container section__border">
            <div class="testimonial__container swiper">
                <div class="swiper-wrapper">
                    <!--==================== TESTIMONIAL -1 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="client__img">
                            <img src="{{ asset('frontend/assets/img/Subash.jpg') }} " alt="" />
                        </div>
                        <p class="testimonial__description">
                            “Working with Chris is to give a good impression, I carry out
                            my project at a good cost, with excellent quality and
                            attention. Great service and recommended.”
                        </p>
                        <div>
                            <h3 class="testimonial_name">Subash Danuwar</h3>
                            <span class="testimonial__subtitle">Client</span>
                        </div>
                    </div>

                    <!--==================== TESTIMONIAL -1 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="client__img">
                            <img src="{{ asset('frontend/assets/img/suman.jpg') }} " alt="" />
                        </div>
                        <p class="testimonial__description">
                            “Working with Chris is to give a good impression, I carry out
                            my project at a good cost, with excellent quality and
                            attention. Great service and recommended.”
                        </p>
                        <div>
                            <h3 class="testimonial_name">Suman Danuwar</h3>
                            <span class="testimonial__subtitle">Client</span>
                        </div>
                    </div>

                    <!--==================== TESTIMONIAL -1 ====================-->
                    <div class="testimonial__content swiper-slide">
                        <p class="testimonial__description">
                            “Working with Chris is to give a good impression, I carry out
                            my project at a good cost, with excellent quality and
                            attention. Great service and recommended.”
                        </p>
                        <div>
                            <h3 class="testimonial_name">Anna Chel</h3>
                            <span class="testimonial__subtitle">Client</span>
                        </div>
                    </div>
                </div>

                <!-- swiper arrows -->
                <div class="swiper-button-next">
                    <i class="ri-arrow-right-s-line"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="ri-arrow-left-s-line"></i>
                </div>
            </div>
        </div>
    </section>

    <!--==================== CONTACT ====================-->
    <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">Get in touch</span>

        <div class="contact__container container grid section__border">
            <div class="contact__content">
                <h3 class="contact__title">
                    <i class="ri-chat-3-line"></i> Talk to me
                </h3>

                <div class="contact__info">
                    <div class="contact__data">
                        <span class="contact__data-title">Email</span>
                        <span class="contact__data-info">suwasdanuwar18@email.com</span>
                    </div>

                    <div class="contact__data">
                        <span class="contact__data-title">Whatsapp</span>
                        <span class="contact__data-info">9808082356</span>
                        <a href="#" target="_blank" class="contact__button">
                            Write me <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="contact__data">
                        <span class="contact__data-title">Facebook</span>
                        <span class="contact__data-info">su.waas.5/</span>
                        <a href="#" target="_blank" class="contact__button">
                            Write me
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact__content">
                <h3 class="contact__title">
                    <i class="ri-send-plane-line"></i> Write me your project
                </h3>

                <form action="" class="contact__form" id="contact-form">
                    <div class="contact__form-div">
                        <label class="contact__form-tag">Names</label>
                        <input type="text" name="user_name" required placeholder="Write your names"
                            class="contact__form-input" id="contact-name" />
                    </div>
                    <div class="contact__form-div">
                        <label class="contact__form-tag">Mail</label>
                        <input type="email" name="user_email" required placeholder="Write your email"
                            class="contact__form-input" id="contact-email" />
                    </div>
                    <div class="contact__form-div contact__form-area">
                        <label class="contact__form-tag">Project</label>
                        <textarea placeholder="Write your project" name="user_project" id="contact-project" class="contact__form-input"></textarea>
                    </div>

                    <button type="submit" class="contact__button">
                        Submit <i class="ri-arrow-right-up-line"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
