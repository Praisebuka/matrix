@extends('home.layouts.home')

    @section('homeContent')
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="{{ asset('assets/img/hero/hero-img-2.jpeg') }}" alt="" class="home__img">
                {{-- <img src="{{ asset('assets/img/hero/hero-img.png') }}" alt="" class="home__img"> --}}

                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__data-subtitle"> Discover the best talents </span>
                        <h1 class="home__data-title"> Struggling With <br> <b> Staff Shortages? </b> <br> We Deliver Trusted Talent — Fast. </h1>
                        <a href="#" class="button"> Get a Staff Today </a>

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