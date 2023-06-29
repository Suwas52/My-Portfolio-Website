@extends('Frontend.main_master')
@section('Frontend')
    <style>
        .text-danger {
            color: red;
            font-size: 20px;
            margin: 30px 0 0 20px;
        }
    </style>
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
                        <a href="https://www.facebook.com/messages/t/100010402067897/" target="_blank"
                            class="contact__button">
                            Write me
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact__content">
                <h3 class="contact__title">
                    <i class="ri-send-plane-line"></i> Write me your project
                </h3>

                <form method="post" action="{{ route('contact_message') }}" class="contact__form" id="contact-form">
                    @csrf
                    <div class="contact__form-div">
                        <label class="contact__form-tag">Names</label>
                        <input type="text" name="contact_name" placeholder="Write your names" class="contact__form-input"
                            id="contact-name" />
                        <div class="text-danger">
                            <span>
                                @error('contact_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>
                    <div class="contact__form-div">
                        <label class="contact__form-tag">Mail</label>
                        <input type="text" name="contact_email" placeholder="Write your email"
                            class="contact__form-input" id="contact-email" />
                        <div class="text-danger">
                            <span>
                                @error('contact_email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="contact__form-div contact__form-area">
                        <label class="contact__form-tag">Message</label>
                        <textarea placeholder="Write your Message" name="message" id="contact-project" class="contact__form-input"></textarea>
                        <div class="text-danger">
                            <span>
                                @error('message')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="contact__button">
                        Submit <i class="ri-arrow-right-up-line"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
