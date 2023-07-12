<section class="projects section" id="projects">
    <h2 class="section__title">Projects</h2>
    <span class="section__subtitle">Most recent work</span>
    <div class="container section__border">
        <div class="projects__container swiper">
            <div class="swiper-wrapper">
                <!-- Project 1 -->

                @php
                    $portfolios = App\Models\portfolio::latest()
                        ->limit(4)
                        ->get();
                @endphp

                @foreach ($portfolios as $portfolio)
                    <div class="projects__content swiper-slide">
                        <a href="{{ route('portfolio.details', $portfolio->id) }}"> <img
                                src="{{ $portfolio->portfolio_img }} " alt="Projects Image" class="projects__img" /></a>

                        <div>
                            <span class="projects__subtitle">{{ $portfolio->portfolio_name }}</span>
                            <h1 class="projects__title">{{ $portfolio['portfolio']['portfolio_title'] }}</h1>
                            {{-- <a href="{{ $portfolio->portfolio_url }}" class="projects__button">
                                View Demo <i class="ri-arrow-right-line"></i></a> --}}
                        </div>
                    </div>
                @endforeach

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
