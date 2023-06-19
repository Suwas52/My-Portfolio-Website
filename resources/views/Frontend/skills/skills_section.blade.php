<section class="skills section" id="skills">
    <h2 class="section__title">Skills</h2>
    <span class="section__subtitle"> My Favorite Skills </span>
    <div class="skills__container container grid section__border">
        <!--==================== SKILLS - 1====================-->
        <div class="skills_content">

            @php
                $skill_title1 = App\Models\Skills::where('id', 1)->first();
                $skill1 = App\Models\SkillData::where('skill_title_id', $skill_title1->id)
                    ->latest()
                    ->get();
            @endphp

            <h3 class="skills__title">
                <i class="ri-braces-line"></i>{{ $skill_title1->skill_title }}
            </h3>



            <div class="skills__info">

                @foreach ($skill1 as $skills)
                    <div class="skills__data">
                        <a href="#" class="skills__blob">
                            <img src="{{ $skills->skill_image }} " alt="skills image" />

                        </a>
                        <h3 class="skills__name">{{ $skills->skill_name }}</h3>
                    </div>
                @endforeach
                {{-- <div class="skills__data">
                    <div class="skills__blob">
                        <img src="{{ asset('frontend/assets/img/css-3.svg') }} " alt="skills image" />
                    </div>

                    <h3 class="skills__name">CSS</h3>

                </div>
                <div class="skills__data">
                    <div class="skills__blob">
                        <img src="{{ asset('frontend/assets/img/logo-javascript.svg') }} " alt="skills image" />
                    </div>

                    <h3 class="skills__name">JavaScript</h3>

                </div>
                <div class="skills__data">
                    <div class="skills__blob">
                        <img src="{{ asset('frontend/assets/img/react-2.svg') }} " alt="skills image" />
                    </div>

                    <h3 class="skills__name">React</h3>

                </div>
                <div class="skills__data">
                    <div class="skills__blob">
                        <img src="{{ asset('frontend/assets/img/git-icon.svg') }} " alt="skills image" />
                    </div>

                    <h3 class="skills__name">Git</h3>

                </div> --}}
            </div>
        </div>
        <!--==================== SKILLS  - 2====================-->
        <div class="skills_content">

            @php
                
                $skill_title2 = App\Models\Skills::where('id', 2)->first();
                $skill2 = App\Models\SkillData::where('skill_title_id', $skill_title2->id)
                    ->latest()
                    ->get();
            @endphp

            <h3 class="skills__title">
                <i class="ri-braces-line"></i>{{ $skill_title2->skill_title }}
            </h3>
            <div class="skills__info">

                @foreach ($skill2 as $skills)
                    <div class="skills__data">
                        <a href="#" class="skills__blob">
                            <img src="{{ $skills->skill_image }} " alt="skills image" />

                        </a>

                        <h3 class="skills__name">{{ $skills->skill_name }}</h3>
                    </div>
                @endforeach


                {{-- <div class="skills__data">
                    <div class="skills__blob">
                        <img src="{{ asset('frontend/assets/img/sketch-2.svg') }} " alt="skills image" />
                    </div>

                    <h3 class="skills__name">Sketch</h3>

                </div>
                <div class="skills__data">
                    <div class="skills__blob">
                        <img src="{{ asset('frontend/assets/img/adobe-xd-1.svg') }} " alt="skills image" />
                    </div>
                    <h3 class="skills__name">Adobe XD</h3>


                </div>
                <div class="skills__data">
                    <div class="skills__blob">
                        <img src="{{ asset('frontend/assets/img/invision.svg') }} " alt="skills image" />
                    </div>

                    <h3 class="skills__name">InvisionApp</h3>

                </div>
                <div class="skills__data">
                    <div class="skills__blob">
                        <img src="{{ asset('frontend/assets/img/adobe-photoshop-2.svg') }} " alt="skills image" />
                    </div>

                    <h3 class="skills__name">Photoshop</h3>

                </div> --}}
            </div>
        </div>
    </div>
</section>
