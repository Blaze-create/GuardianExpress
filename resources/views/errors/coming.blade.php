@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="coming-soon-wrapper">
            <div class="row soon">
                <div class="col">
                    <div class="big-double">
                        <div class="big-text">
                            Coming Soon!
                        </div>
                        <div class="big-text b">
                            Coming Soon!
                        </div>
                    </div>
                    <div class="soon-message">
                        <h4>Get notified when we launch</h4>
                        <p><span>Something in the way! Subscribe to our newsletter to be the first to know about
                                upcomings features and discounts.</span> </p>
                        <a href="{{ route('home') }}" class="btn">GO HOME</a>
                    </div>
                    <div class="newsletter-box">
                        <form action="">
                            <input type="email" class="form-control" placeholder="Your Email Address">
                            <button class="btn" type="submit">Subscribe <i class="fa-solid fa-envelope"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col img">
                    <img src="{{ asset('img/soon.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
