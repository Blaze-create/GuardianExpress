@extends('layouts.layout')
@section('content')
    <!-- Testimonial -->
    <div class="container-fluid">
        <div class="heading-section">
            <div class="heading-section-title">
                Our Testimonial
            </div>
            <div class="heading-section-subtitle">
                Read What Others Have Experienced with Their Guardian Angels
            </div>
        </div>
        <div class="row testimonial">
            <div class="col reveal">
                <div class="comment">
                    <div class="quote reveal">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p class="reveal">I was skeptical at first, but after receiving my guardian angel, I've never felt more
                        supported. The messages and guidance I receive are always spot on, and it feels like I have a true
                        friend by my side.</p>
                </div>
                <div class="user reveal">
                    <div class="name">
                        Sarah D.
                    </div>
                    <div class="role">
                        Los Angeles
                    </div>
                </div>
            </div>
            <div class="col reveal">
                <div class="comment">
                    <div class="quote reveal">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p class="reveal">I can't thank this service enough for the comfort it's brought me during tough times.
                        Knowing that my guardian angel is watching over me has given me a sense of peace I didn't know was
                        possible.</p>
                </div>
                <div class="user reveal">
                    <div class="name">
                        Michael R.
                    </div>
                    <div class="role">
                        New York
                    </div>
                </div>
            </div>
            <div class="col reveal">
                <div class="comment">
                    <div class="quote reveal">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <p class="reveal">The angelic consultation I had was truly transformative. The advisor was so insightful
                        and helped me connect with my guardian angel in a way I never thought possible. I feel like I have a
                        renewed sense of purpose and direction in my life.</p>
                </div>
                <div class="user reveal">
                    <div class="name">
                        Emma S.
                    </div>
                    <div class="role">
                        London
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- PRICING -->
    <div class="container-fluid" id="pricing_container">
        <div class="heading-section">
            <div class="heading-section-title reveal" style="color: white">
                Choose Your Angelic Bundle: Select Your Level of Support
            </div>
            <div class="heading-section-subtitle reveal" style="color: gray">
                Discover the Perfect Package for Your Personal Guidance and Support Needs
            </div>
        </div>
        <div class="row modern-price">
            <div class="col reveal" style="--clr:#6a5acd;">
                <div class="type basic">
                    basic
                </div>
                <div class="price">
                    $100<span>/Single-time use</span>
                </div>
                <div class="feature basic">
                    <ul>
                        <li>One-Time Angel Delivery</li>
                        <li>Initial Angelic Guidance</li>
                        <li>Starter Angelic Messages</li>
                        <li>Newsletter</li>
                    </ul>
                </div>
                <div class="button basic">
                    <a href="{{ route('checkout', 'basic') }}">Order Basic</a>
                </div>
            </div>

            <div class="col reveal" style="--clr:#c78100;">
                <div class="type pro">
                    subscription
                </div>
                <div class="price">
                    $50 <span>/month</span>
                </div>
                <div class="feature pro">
                    <ul>
                        <li>Monthly Angel Delivery</li>
                        <li>Regular Angelic Messages</li>
                        <li>Continuous Angelic Guidance</li>
                        <li>Exclusive Community Access</li>

                    </ul>
                </div>
                <div class="button pro">
                    <a href="{{ route('checkout', 'subscription') }}">Order Subscription</a>
                </div>
            </div>

            <div class="col reveal" style="--clr:#00a16c;">
                <div class="type deluxe">
                    Consultation
                </div>
                <div class="price">
                    <div class="promo">
                        <div class="old">$200</div>
                        <div class="new">$150</div>
                    </div> <span>/Single-time use</span>
                </div>
                <div class="feature">
                    <ul>
                        <li>Personalized Angelic Consultation</li>
                        <li>In-Depth Guidance</li>
                        <li>Extended Session</li>
                        <li>256 bandwinth</li>
                        <li>Follow-Up Support</li>
                        <li>Priority Access</li>
                    </ul>
                </div>
                <div class="button deluxe">
                    <a href="{{ route('checkout', 'consultation') }}">Get Consultation</a>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid" style="background: rgba(0, 0, 0, 0.4)">
        <div class="section-categorie reveal">
            <p>we are proud to work with these companies</p>
        </div>
        <div class="row sponsor">
            <div class="col reveal down">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-square fa-3x"></i>
                </div>
                <div class="sponsor-name">
                    square
                </div>
            </div>
            <div class="col reveal down">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-rocket fa-3x"></i>
                </div>
                <div class="sponsor-name">
                    airbnb
                </div>
            </div>
            <div class="col reveal down">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-shuffle fa-3x"></i>
                </div>
                <div class="sponsor-name">
                    evernote
                </div>
            </div>
            <div class="col reveal down">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-magnifying-glass fa-3x"></i>
                </div>
                <div class="sponsor-name">
                    pinterest
                </div>
            </div>
        </div>
    </div>
@endsection
