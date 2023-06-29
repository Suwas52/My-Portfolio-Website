<section class="testimonial section">
    <h2 class="section__title">Testimonial</h2>
    <span class="section__subtitle">My Client Saying</span>

    <div class="container section__border">
        <div class="testimonial__container swiper">

            @php
                $testimonials = App\Models\Testimonial::latest()->get();
                
            @endphp

            <div class="swiper-wrapper">

                @foreach ($testimonials as $testimonial)
                    <div class="testimonial__content swiper-slide">
                        <div class="client__img">
                            <img src="{{ asset($testimonial->client_img) }} " alt="" />
                        </div>
                        <p class="testimonial__description">
                            “{{ $testimonial->client_desc }}”
                        </p>
                        <div>
                            <h3 class="testimonial_name">{{ $testimonial->client_name }}</h3>
                            <span class="testimonial__subtitle">{{ $testimonial->project_name }}</span>
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
        </div>
    </div>
</section>
