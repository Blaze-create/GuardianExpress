@extends('layouts.layout')
@section('content')
    <div class="container-fluid">
        <div class="a404-wrapper">
            <div class="row errormissing">
                <div class="col">
                    <div class="bigError">
                        <div class="first-one">
                            <div class="glitch-wrapper">
                                <div class="glitch" data-text="404">404</div>
                            </div>
                        </div>
                        <div class="second-one">
                            <div class="glitch-wrapper">
                                <div class="glitch" data-text="404">404</div>
                            </div>
                        </div>

                    </div>
                    <div class="error-message">
                        <div class="title">
                            Page Missing!
                        </div>
                        <div class="message">
                            But no worries! Our ostrich is looking everywhere while you wait safely.
                        </div>
                        <div class="go-home-btn">
                            <a href="{{ route('home') }}">
                                <button class="btn">
                                    Go Home
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col img">
                    <img src="{{ asset('img/404.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
