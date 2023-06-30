<section class="qualification section" id="qualification">
    <h2 class="section__title">Qualification</h2>
    <span class="section__subtitle">Experience & education</span>

    @php
        $educations = App\Models\Education::latest()->get();
        $experiences = App\Models\Experience::latest()->get();
    @endphp

    <div class="qualification__container container grid section__border">
        <!-- Qualification 1 -->
        <div class="qualification__content">
            <h3 class="qualification__title">
                <i class="ri-pencil-ruler-2-line"></i> Education
            </h3>
            <div class="qualification__info">

                @foreach ($educations as $education)
                    <div>
                        <h3 class="qualification__name">
                            {{ $education->academic_name }}
                        </h3>
                        <span class="qualification__country">{{ $education->education_name }}</span>
                        <span class="qualification__year">{{ $education->years }}</span>
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Qualification 2 -->
        <div class="qualification__content">
            <h3 class="qualification__title">
                <i class="ri-building-line"></i> Experience
            </h3>
            <div class="qualification__info">
                @foreach ($experiences as $experience)
                    <div>
                        <h3 class="qualification__name">{{ $experience->project }}</h3>
                        <span class="qualification__country">{{ $experience->field }}</span>
                        <span class="qualification__year">{{ $experience->years }}</span>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
