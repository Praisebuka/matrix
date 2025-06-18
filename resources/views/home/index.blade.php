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
                            <a href="{{ route('contact us') }}" class="button button--flex button--link home__info-button"> More <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__info-overlay">
                            <img src="{{ asset('assets/img/hero/suited-candidates.jpeg') }}" alt="" class="home__info-img">
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
                        <a href="{{ route('about us') }}" class="button"> More about Us? </a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="{{ asset('assets/img/hero/singlelady_with_report.png') }}" alt="" class="about__img-one">
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
                            <img src="{{ asset('assets/img/hero/whitelady_on_desk.png') }}" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title"> Permanent Recruitment </h2>
                                <span class="discover__description"> We help you find the right candidates for long-term success. </span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="{{ asset('assets/img/hero/indianguy_inshop.jpeg') }}" alt="" class="discover__img">
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
                            <img src="{{ asset('assets/img/hero/whiteguy_with_desk.jpeg') }}" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="{{ asset('assets/img/hero/woman_on_desk.jpeg') }}" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== VIDEO ====================-->
            <section class="video section" style="display: none">
                <h2 class="section__title"> Video Explanation </h2>

                <div class="video__container container">
                    <p class="video__description"> Find out more with our video of the most us
                    </p>

                    <div class="video__content">
                        <video id="video-file">
                            <source src="assets/video/video.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!--==================== Our Experts ====================-->
            <section class="place section" id="place">
                <h2 class="section__title"> Meet Our Experts – The People Behind MRL </h2>

                <div class="place__container container grid">
                    <div class="place__card">
                        <img src="{{ asset('assets/img/the_team/md_real_portrait.jpg') }}" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <span class="place__rating-number"> MRL </span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title"> Tolulope Akinwumi </h3>
                                <span class="place__subtitle"> Founder & Director </span>
                                <span class="place__price"> A visionary leader with a strong background in healthcare and social work, Tolulope brings deep industry knowledge and a relentless drive to uplift both clients and candidates. </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="place__card">
                        <img src="{{ asset('assets/img/the_team/woman_with_coffee.jpeg') }}" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <span class="place__rating-number"> Google </span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title"> Olivia Mensah </h3>
                                <span class="place__subtitle"> Senior Talent Partner </span>
                                <span class="place__price"> With over a decade in talent acquisition, Olivia specialises in placing healthcare and administrative professionals with precision and care. </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="place__card">
                        <img src="{{ asset('assets/img/the_team/co-employee.jpeg') }}" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <span class="place__rating-number"> MRL </span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title"> James Edwards </h3>
                                <span class="place__subtitle"> Compliance Manager </span>
                                <span class="place__price"> James ensures all recruitment practices meet the highest regulatory standards, safeguarding trust and reliability in every placement. </span>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="place__card">
                        <img src="{{ asset('assets/img/the_team/praise_njoga.jpg') }}" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <span class="place__rating-number"> HipheDavids </span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title"> Praise Njoga </h3>
                                <span class="place__subtitle"> IT Manager </span>
                                <span class="place__price"> Always up for new challenges, Praise stays ahead of the curve by keeping up with the latest tech trends and best practices in both software development and cybersecurity. </span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="place__card">
                        <img src="{{ asset('assets/img/the_team/co-employee-female-2.png') }}" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <span class="place__rating-number"> MRL </span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title"> Aisha Thompson </h3>
                                <span class="place__subtitle"> Client Relations Lead </span>
                                <span class="place__price"> Aisha bridges the gap between clients and candidates with clear communication and relationship-building that drives retention and satisfaction. </span>
                            </div>
                        </div>
                    </div>

                    <div class="place__card">
                        <img src="{{ asset('assets/img/the_team/ceo_portrait.png') }}" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <span class="place__rating-number"> MRL </span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title"> Daniel Nwosu </h3>
                                <span class="place__subtitle"> Operations Coordinator </span>
                                <span class="place__price"> Daniel keeps the wheels turning behind the scenes, streamlining processes to ensure every recruitment journey is seamless and efficient. </span>
                            </div>
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