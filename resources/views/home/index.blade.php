@extends('home.layouts.home')

    @section('homeContent')
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="{{ asset('assets/img/hero/hero-img-2.jpeg') }}" alt="" class="home__img">
                {{-- <img src="{{ asset('assets/img/hero/hero-img.png') }}" alt="" class="home__img"> --}}

                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__data-subtitle"> Discover the best minds in London! </span>
                        <h1 class="home__data-title"> Struggling With <br> <b> Staff Shortages? </b> <br> We Deliver Trusted Talent — Fast. </h1>
                        <a href="tel:07463401030" class="button"> Get a Staff Today </a>
                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                    <div class="home__info">
                        <div>
                            <span class="home__info-title"> 3 suited advocate just for you </span>
                            <a href="" class="button button--flex button--link home__info-button"> More <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__info-overlay">
                            <img src="{{ asset('assets/img/home2.jpg') }}" alt="" class="home__info-img">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title"> Who Are We </h2>
                        <p class="about__description">
                            At Matrix-recruitment limited, we specialize in supplying high-quality, ready-to-work staff to businesses across London. Whether you're facing unexpected absences or long-term staffing gaps, we respond quickly with skilled professionals who get the job done.
                        </p>
                        <a href="#" class="button"> More about Us? </a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="{{ asset('assets/img/about1.jpg') }}" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="assets/{{ asset('assets/img/about2.jpg') }}" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== DISCOVER ====================-->
            <section class="discover section" id="services">
                <h2 class="section__title">  Our Services </h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="{{ asset('assets/img/hero/hero-img.png') }}" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title"> Temp-to-Perm </h2>
                                <span class="discover__description"> Try before you hire—reduce risk by assessing candidates in real-time before offering a permanent position. </span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="{{ asset('assets/img/discover2.jpg') }}" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title"> Permanent Recruitment </h2>
                                <span class="discover__description"> We help you find the right candidates for long-term success. </span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="{{ asset('assets/img/discover4.jpg') }}" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title"> Temporary Staffing </h2>
                                <span class="discover__description"> Need help for a day, a week, or a month? We provide vetted, trained staff on demand. </span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--==================== EXPERIENCE ====================-->
            <section class="experience section">
                <h2 class="section__title"> With Our Experience <br> MRL Will Serve You </h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number"> Top </h2>
                            <span class="experience__description"> Industry-Specific <br> Expertise </span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number"> 95% </h2>
                            <span class="experience__description"> Fast, Reliable <br> Staffing Solutions </span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number"> We are </h2>
                            <span class="experience__description"> Fully Committed to <br> giving Excellence </span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="{{ asset('assets/img/experience1.jpg') }}" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="{{ asset('assets/img/experience2.jpg') }}" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SUBSCRIBE ====================-->
            <section class="subscribe section">
                <div class="subscribe__bg">
                    <div class="subscribe__container container">
                        <h2 class="section__title subscribe__title"> Subscribe Our <br> Newsletter </h2>
                        <p class="subscribe__description"> Subscribe to our newsletter and get first hand updates about the job market in the whole of London!. </p>
    
                        <form action="" class="subscribe__form">
                            @csrf
                            <input type="email" name="email" placeholder="Enter email address" class="subscribe__input" required>
    
                            <button type="submit" class="button">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </section>
            
            <!--==================== SPONSORS ====================-->
            <section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="{{ asset('assets/img/sponsors1.png') }}" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="{{ asset('assets/img/sponsors2.png') }}" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="{{ asset('assets/img/sponsors3.png') }}" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="{{ asset('assets/img/sponsors4.png') }}" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="{{ asset('assets/img/sponsors5.png') }}" alt="" class="sponsor__img">
                    </div>
                </div>
            </section>
        </main>

    @endsection