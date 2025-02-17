<header class="header" id="header">
    @php
        $footer = App\Models\Footer::findOrFail(1);
    @endphp
    <nav class="nav container">
        <a href="{{ route('main-page') }}" class="nav__logo"> {{ $footer->logo }}</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list grid">
                <li class="nav__item">
                    <a href="{{ route('main-page') }}" class="nav__link ">
                        <i class="ri-home-5-line"></i> Home
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('about.part') }}" class="nav__link">
                        <i class="ri-trophy-line"></i> About
                    </a>
                </li>
                {{-- <li class="nav__item">
                    <a href="#qualification" class="nav__link">
                        <i class="ri-book-open-line"></i> Qualification
                    </a>
                </li> --}}
                {{-- <li class="nav__item">
                    <a href="{{ route('services.section') }}" class="nav__link">
                        <i class="ri-briefcase-line"></i> Services
                    </a>
                </li> --}}
                <li class="nav__item">
                    <a href="{{ route('portfolio.section') }}" class="nav__link">
                        <i class="ri-image-line"></i> Projects
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('contact_section') }}" class="nav__link">
                        <i class="ri-chat-3-line"></i> Contact
                    </a>
                </li>
            </ul>
            <!-- close button  -->
            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>
        <div class="nav__buttons">
            <!-- Theme change button  -->
            <i class="ri-moon-line change-theme" id="theme-button"></i>

            <!-- toggle button  -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-4-line"></i>
            </div>
        </div>
    </nav>
</header>
