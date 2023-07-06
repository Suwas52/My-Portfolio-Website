<style>
    footer {
        position: relative;
        width: 100%;
        height: auto;
        padding-top: 80px;
    }

    .wrapper {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .footer-widget {

        margin: 0 15px 30px;
        padding: 0 12px;
    }

    .footer-widget:nth-child(1) {
        width: calc(38% - 50px);
        margin-right: 30px;
    }

    .footer-widget:nth-child(2) {
        width: calc(15% - 30px);

    }

    .footer-widget:nth-child(3) {
        width: calc(20% - 30px);

    }

    .footer-widget:nth-child(4) {
        width: calc(27% - 30px);

    }



    .nav__logo {
        margin-bottom: 30px;

    }

    .desc {
        margin: 15px 0;
        font-size: 16px;
        line-height: 24px;
    }

    .socials {
        display: flex;
        align-items: center;
        justify-content: flex-start;

    }



    .footer__social-link {
        font-size: 1.5rem;
        margin: 0.4rem;
    }

    .footer__social-link:hover {}

    .footer__title {
        color: #585978;
        margin: 10px 0 20px;
        font-size: 18px;
        font-weight: 600px;
    }

    .footer__links li a,
    p {
        color: var(--text-color-light);
        font-size: 15px;
        line-height: 30px;
        transition: all 0.3s ease-out;
    }



    .footer__links li a:hover {
        color: var(--title-color);

    }

    .footer__copy {
        margin: 1rem;
        text-align: center;
    }




    @media(max-width:992px) {
        .container {
            max-width: 992px;
        }

        .footer-widget,
        .footer-widget:nth-child(1),
        .footer-widget:nth-child(2),
        .footer-widget:nth-child(3),
        .footer-widget:last-child {
            width: calc(40%);
        }


    }

    @media(max-width:768px) {
        .container {
            max-width: 720px;
        }

        .footer-widget,
        .footer-widget:nth-child(1),
        .footer-widget:nth-child(2),
        .footer-widget:nth-child(3),
        .footer-widget:last-child {
            width: calc(100%);
        }

    }
</style>
<footer>
    @php
        $footer = App\Models\Footer::findOrFail(1);
    @endphp
    <div class="  container ">
        <div class="wrapper ">
            <div class="footer-widget">
                <a href="" class="nav__logo">
                    {{ $footer->logo }}
                </a>
                <p class="desc">
                    {{ $footer->footer_desc }}
                </p>
                <ul class="socials">

                    <a href="https://www.facebook.com/su.waas.5/" target="_blank" class="footer__social-link"><i
                            class="ri-facebook-box-line"></i></a>


                    <a href="https://twitter.com/suwas_danuwar" target="_blank" class="footer__social-link"><i
                            class="ri-twitter-line"></i></a>


                    <a href="https://www.instagram.com/su_waas52/" target="_blank" class="footer__social-link"><i
                            class="ri-instagram-line"></i></a>


                    <a href="https://www.linkedin.com/in/subash-danuwar/" target="_blank" class="footer__social-link"><i
                            class="ri-linkedin-box-line"></i></a>


                    <a href="https://github.com/Suwas52" target="_blank" class="footer__social-link"><i
                            class="ri-github-line"></i></a>






                </ul>
            </div>
            <div class="footer-widget">
                <h6 class="footer__title">Quick Link</h6>
                <ul class="footer__links">
                    <li><a href="{{ route('main-page') }}">Home</a></li>
                    <li><a href="{{ route('about.part') }}">About</a></li>
                    <li><a href="{{ route('services.section') }}">Services</a></li>
                    <li><a href="{{ route('portfolio.section') }}">Portfolio</a></li>
                    <li><a href="{{ route('contact_section') }}">Contact</a></li>
                </ul>
            </div>
            <div class="footer-widget">
                <h6 class="footer__title">Services</h6>
                <ul class="footer__links">
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Desktop Development</a></li>

                </ul>
            </div>
            <div class="footer-widget">
                <h6 class="footer__title">Have a Questions?</h6>
                <ul class="footer__links">
                    <li>
                        <p><i class="ri-map-pin-line"></i> {{ $footer->location }}</p>
                    </li>
                    <li>
                        <p><i class="ri-phone-line"></i> {{ $footer->phone_no }}</p>
                    <li>
                        <p><i class="ri-mail-line"></i> {{ $footer->email }}</p>
                    </li>

                </ul>
            </div>
        </div>
        <div class="copyright__wrapper">
            <span class="footer__copy">{{ $footer->copy_right }}</span>
        </div>
    </div>
</footer>
