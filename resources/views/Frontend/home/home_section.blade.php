@php
    $homeSection = App\Models\HomeSection::findOrFail(1);
@endphp

<style>
    .btn {
        height: 50px;
        width: 120px;
        font-size: 12px;
        padding: 10px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background-color: var(--name-color); */
    }
</style>
<section class="home section" id="home">
    <div class="home__container container grid section__border">
        <div class="home__date ">
            <div class="home_content">
                <h3 class="home__title-h3">{{ $homeSection->short_title }}</h3>
                <h1 class="home__info-title">
                    I'm
                    <span> {{ $homeSection->title }} <br /> </span>
                </h1>
                <p class="home_desc">
                    {{ $homeSection->home_des }}
                </p>

                <div class="home__social">
                    <a href="https://www.facebook.com/su.waas.5/" target="_blank" class="home__social-link"><i
                            class="ri-facebook-box-line"></i></a>
                    <a href="https://twitter.com/suwas_danuwar" target="_blank" class="home__social-link"><i
                            class="ri-twitter-line"></i></a>
                    <a href="https://www.instagram.com/su_waas52/" target="_blank" class="home__social-link"><i
                            class="ri-instagram-line"></i></a>
                    <a href="https://www.linkedin.com/in/subash-danuwar/" target="_blank" class="home__social-link"><i
                            class="ri-linkedin-box-line"></i></a>
                    <a href="https://github.com/Suwas52" target="_blank" class="home__social-link"><i
                            class="ri-github-line"></i></a>
                </div>

                {{-- <div class="CV__button">
                    <a href="#" class="btn">Download CV</a>
                    <!-- <a href="#" class="btn">Hire Me</a> -->
                </div> --}}
            </div>

            <div class="home__blob grid">
                <div class="home__perfil">
                    <img src="{{ $homeSection->home_image }}" class="projects__img" alt="Home Profile" />
                </div>
            </div>
        </div>
    </div>
</section>
