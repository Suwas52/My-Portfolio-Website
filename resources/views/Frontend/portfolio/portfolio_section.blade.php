@extends('Frontend.main_master')
@section('Frontend')
    <style>
        .p-btns {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 2.2rem;
            margin-top: 6rem;

        }

        .portfolio-images {
            gap: 3.2rem;
            margin-top: 4rem;

        }

        .portfolio-images img {
            width: 100%;
            border-radius: 7px;
            position: relative;
            overflow: hidden;
        }

        .img-overlay {
            position: relative;
            overflow: hidden;
        }

        .img-overlay .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradientSupport);
            opacity: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateY(100%);
            transition: all 0.3s linear;
            border-radius: 7px;

        }

        .img-overlay:hover>.overlay {
            transform: translateY(0);
            opacity: 0.6;
            cursor: pointer;
        }

        .img-overlay .common-heading {
            margin: 0;
            color: #fff;
            text-decoration: none;
        }





        .btns {
            background: var(--gradientSupport);
            padding: 0.5rem 1rem;
            border: none;
            color: #fff;
            display: inline-block;
            text-transform: uppercase;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
        }

        .btns:hover,
            {

            box-shadow: var(--shadowSupport);
        }


        .p-btn-active {
            transform: translateY(0.5rem);
        }

        .p-img-not-active {
            display: none;
        }



        .grid-three-column {
            grid-template-columns: repeat(3, 1fr);
        }

        .grid-four-column {
            grid-template-columns: repeat(4, 1fr);
        }


        @media screen and (max-width: 576px) {
            .btns {
                padding: 0.2rem 0.4rem;
                font-size: 0.6rem;
                font-weight: 400;
            }

            .p-btns {
                gap: 1.3rem;

            }

            .portfolio-images {
                gap: 2rem;

            }
        }

        @media screen and (max-width: 767px) {
            .btns {
                padding: 0.3rem 0.7rem;
                font-size: 0.8rem;
                font-weight: 400;
            }
        }
    </style>
    <section class="Portfolio-section section" id="portfolio">
        <h2 class="section__title">Portfolio</h2>
        @php
            
            $portfolioCategory = App\Models\PortfolioCategory::latest()->get();
            $portfolios = App\Models\portfolio::latest()->get();
            
        @endphp
        <div class="p-btns">
            @foreach ($portfolioCategory as $portfolio)
                <div class="btns p-btn" data-btn-num={{ $portfolio->id }}>{{ $portfolio->portfolio_title }}</div>
            @endforeach
            {{-- <div class="btns p-btn" data-btn-num="2">Youtube</div>
            <div class="btns p-btn" data-btn-num="3">Design</div> --}}
        </div>


        <div class="portfolio__container container grid grid-three-column section__border portfolio-images">

            @foreach ($portfolios as $portfolio)
                <div class="img-overlay p-btn-{{ $portfolio->portfolio_cat_id }}">
                    <img src="{{ $portfolio->portfolio_img }}" alt="portfolio" />
                    <div class="overlay">
                        <a href="{{ $portfolio->portfolio_url }}" target="_suwas"
                            class="common-heading">{{ $portfolio->portfolio_name }}</a>
                    </div>
                </div>
            @endforeach


        </div>

    </section>

    <script>
        //portfolio //
        const p_btns = document.querySelector(".p-btns");
        const p_btn = document.querySelectorAll(".p-btn");
        const p_img_elem = document.querySelectorAll(".img-overlay");
        p_btns.addEventListener('click', (e) => {
            const p_btn_clicked = e.target;

            p_btn.forEach((curElem) => curElem.classList.toggle("p-btn-active"));

            p_btn_clicked.classList.toggle('p-btn-active');

            const btn_num = p_btn_clicked.dataset.btnNum;
            console.log(btn_num);

            const img_active = document.querySelectorAll(`.p-btn-${btn_num}`);
            // console.log(img_active);


            p_img_elem.forEach((curElem) => curElem.classList.toggle('p-img-not-active'));

            img_active.forEach((curElem) => curElem.classList.toggle("p-img-not-active"));


        })
    </script>
@endsection
