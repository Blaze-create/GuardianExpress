@extends('layouts.layout')
@section('content')
    <div class="index-ico">
        <a href="https://bff.ecoindex.fr/redirect/?url=https://needjob.rodrigues.webcup.hodi.host" target="_blank">
            <img src="https://bff.ecoindex.fr/badge/?theme=dark&url=https://needjob.rodrigues.webcup.hodi.host"
                alt="Ecoindex Badge" />
        </a>
    </div>
    <div class="header-wrapper" id="#particles-js">
        {{-- <div class="header-image" id="header_image"></div> --}}
        <img src="{{ asset('img/header.jpg') }}" alt="" class="header-image" id="header_image">
        <div class="header-center">
            <div class="banner-wrapper" id="scroll_wrapper">
                <div class="banner">
                    <div class="scroll" id="scroll_top">
                        <div>
                            <span>Let your guardian angel</span>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <div class="scroll" id="scroll_bottom">
                        <div>
                            <span>guiding you with <span id="text"></span></span>
                        </div>
                    </div>
                </div>
            </div>
            <p>
                Embrace the divine support that surrounds you, and discover a path of serenity and hope.
            </p>
            <a href="#angle_image" class="custom-btn">Get Started</a>
        </div>
    </div>
    <script>
        let typingText = new Typed("#text", {
            strings: ['love', 'comfort', "peace"],
            loop: true,
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 1000,
        });
    </script>

    <!-- IMAGE BANNER -->
    <div class="image-banner-wrapper">
        <section class="image-banner">
            <div class="wrapper wrapper-text">
                THIS IS YOUR DREAM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </section>
        <div class="image-banner">
            <ul class="wrapper">
                <li>
                    <img height='874' src='img/banner1.jpeg' width='1240'>
                </li>
                <li>
                    <img height='874' src='img/banner10.jpeg' width='1240'>
                </li>
                <li>
                    <img height='874' src='img/banner11.jpeg' width='1240'>
                </li>
            </ul>
        </div>
        <div class="image-banner">
            <ul class="wrapper">
                <li>
                    <img height='874' src='img/banner3.jpeg' width='1240'>
                </li>
                <li>
                    <img height='874' src='img/banner13.jpeg' width='1240'>
                </li>
                <li>
                    <img height='874' src='img/banner7.jpeg' width='1240'>
                </li>
                <li>
                    <img height='874' src='img/banner4.jpeg' width='1240'>
                </li>
            </ul>
        </div>
        <div class="image-banner">
            <ul class="wrapper">
                <li>
                    <img height='874' src='img/banner9.jpeg' width='1240'>
                </li>
                <li>
                    <img height='874' src='img/banner12.jpeg' width='1240'>
                </li>
                <li>
                    <img height='874' src='img/banner5.jpeg' width='1240'>
                </li>
            </ul>
        </div>
        <section class="image-banner">
            <div class="wrapper wrapper-text">
                THIS IS YOUR DREAM
            </div>
        </section>
    </div>


    <!-- ANGLE IMAGE -->
    <div class="container-fluid" id="angle_image">
        <div class="row two-image" id="hhh">

            <div class="col img" id="left_image">
                <img src='{{ asset('img/banner8.jpeg') }}' width='1240'>
            </div>

            <div class="col text">
                <div class="heading">
                    <h2>Crafted by Kindred Spirits,</h2>
                    <h2>For Kindred Spirits.</h2>
                </div>
                <div class="paragraph">
                    We've created these guardian angels to support people in their daily lives. Offering guidance,
                    comfort, and reassurance, our angels are steadfast companions through life's ups and downs. Powered
                    by compassion, they're here to bring peace and empowerment to each day.
                </div>
                <a href="{{ route('shop') }}" class="custom-btn" data-bs-placement="bottom" data-bs-toggle="tooltip"
                    data-bs-title="Get a guardian angel now">Get One Now</a>
            </div>

            <div class="col img" id="right_image">
                <img src='{{ asset('img/banner6.jpeg') }}' width='1240'>
            </div>

        </div>
    </div>



    <!-- IMAGE 4x4 -->
    <div class="container-fluid">
        <div class="row text-sideimage">
            <div class="col text">
                <div class="text-wrapper reveal">
                    <div class="section-title">
                        <h2>What they can do?</h2>
                    </div>
                    <div class="section-subtitle">
                        Discover Your Guardian Angel
                    </div>
                    <div class="section-accordion active">
                        <div class="main">
                            <span>1</span>
                            Guidance and Support
                        </div>
                        <div class="paragraph">
                            Our guardian angels provide personalized guidance and support, helping individuals navigate
                            life's challenges with confidence and clarity.
                        </div>
                    </div>
                    <div class="section-accordion">
                        <div class="main">
                            <span>2</span>
                            Comfort and Reassurance
                        </div>
                        <div class="paragraph">
                            With a gentle presence and comforting words, our angels offer reassurance and solace,
                            bringing peace to troubled hearts and minds.
                        </div>
                    </div>
                    <div class="section-accordion">
                        <div class="main">
                            <span>3</span>
                            Empowerment and Inspiration
                        </div>
                        <div class="paragraph">
                            By fostering a sense of empowerment and inspiration, our angels encourage individuals to
                            embrace their inner strength and live life to the fullest.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col image">
                <img class="right-image" src='{{ asset('img/banner1.jpeg') }}' width='1240' id="sideimage_img">
            </div>
        </div>
        <div class="row text-sideimage reverse">
            <div class="col text">
                <div class="text-wrapper second">
                    <div class="section-subtitle reveal">
                        Angelic Guidance Awaits
                    </div>
                    <div class="subtitle reveal">
                        Inspire your soul with the presence of a guardian angel, a beacon of light in life's darkest
                        moments. Let their gentle guidance illuminate your path, their comforting embrace soothe your
                        worries, and their unwavering support uplift your spirit.
                    </div>
                    <a href="{{ route('shop') }}" class="custom-btn reveal">Get Started</a>
                </div>
            </div>
            <div class="col image">
                <img id="sideimage_imgL" class="left-image" src='{{ asset('img/banner10.jpeg') }}' width='1240'>
            </div>
        </div>
    </div>















    <!-- MODERN CARD -->
    <div class="container-fluid" id="modern_card_bg">
        <div class="heading-section">
            <div class="heading-section-title reveal">
                Your Guardian Angel, Your Way: Choose Your Level of Support
            </div>
            <div class="heading-section-subtitle reveal">
                Discover the perfect level of angelic support with our flexible services. Whether you prefer the
                comforting presence of an angel delivered to your doorstep, regular guidance through a subscription, or
                personalized consultations with angelic advisors
            </div>
        </div>


        <div class="row modern-card">
            <div class="col reveal" id="left_modern">
                <div class="icon">
                    <i class="fa-solid fa-truck fa"></i>
                </div>
                <div class="heading">
                    Angel Delivery Service
                </div>
                <div class="description">
                    Have a guardian angel sent directly to your location to provide guidance, comfort, and support in
                    person.
                </div>
            </div>
            <div class="col reveal">
                <div class="icon">
                    <i class="fa-solid fa-plus fa-5x"></i>
                </div>
                <div class="heading">
                    Angel Guidance Subscription
                </div>
                <div class="description">
                    Receive regular messages, advice, and support from your guardian angel through a subscription
                    service
                </div>
            </div>
            <div class="col reveal" id="right_modern">
                <div class="icon">
                    <i class="fa-solid fa-user-doctor fa-5x"></i>
                </div>
                <div class="heading">
                    Angel Consultation Service
                </div>
                <div class="description">
                    Schedule consultations with experienced angelic advisors who can connect you with your guardian
                    angel for guidance and support.
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="intro">
        <div class="row intro">
            <div class="col text">
                <div class="section reveal">
                    Delivery
                </div>
                <div class="title reveal">
                    we offer some of the best Delivering service in the country
                </div>
                <div class="text reveal">
                    Our delivering service stands out as the best because we prioritize your peace of mind and
                    convenience above all else. With our commitment to timely and secure deliveries, your guardian angel
                    is just a click away, ready to offer guidance and support whenever you need it.
                </div>
                <div class="quote reveal">
                    We understand the importance of reliability and strive to exceed your expectations at every turn.
                    Experience the difference with our delivering service and let your guardian angel illuminate your
                    path to a brighter future.
                </div>
            </div>
            <div class="col image">
                <img src="{{ asset('img/truck.jpg') }}" alt="">
            </div>
        </div>
    </div>









    <!-- livechat -->
    <div class="container-fluid" id="livechat">
        <div class="livechat">
            <h3>
                Still not sure if GuardianExpress is right for you
            </h3>
            <p>
                Still not sure if our angelic services are right for you? Take the next step towards clarity and
                guidance. With our range of services tailored to meet your needs. Click below to discover the service
                that resonates with you and begin your journey towards a more enlightened and empowered life.
            </p>
            <a href="{{ route('shop') }}" class="custom-btn">Get One Now</a>
        </div>
    </div>

    <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
        <div id="live-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">

                @guest
                @else
                    @if (Auth::user()->profile_path)
                        <img src="{{ asset('img/profile/' . Auth::user()->profile_path) }}"class="rounded me-2"
                            style="height: 25px;width: 25px;object-fit: cover;border-radius: 5px;">
                    @else
                        <img src="{{ asset('img/pic.jpg') }}" class="rounded me-2"
                            style="height: 25px;width: 25px;object-fit: cover;border-radius: 5px;">
                    @endif
                @endguest
                <strong class="me-auto">Success!</strong>
                <small>Just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                @if (session('message'))
                    {{ session('message') }}
                @endif
            </div>
        </div>
    </div>


    @if (session('message'))
        <script>
            const toastLiveExample = document.getElementById("live-toast");
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            toastBootstrap.show();
        </script>
    @endif



    <!-- 4 COL BANNER -->
    <div class="container-fluid">
        <div class="row banner">
            <div class="col reveal">
                <div class="big-number" id="counter1">
                    9876
                </div>
                <div class="small-text">
                    Guardian Angels Delivered
                </div>
            </div>
            <div class="col reveal">
                <div class="big-number" id="counter2">
                    786
                </div>
                <div class="small-text">
                    Subscription Members
                </div>
            </div>
            <div class="col reveal">
                <div class="big-number" id="counter3">
                    154
                </div>
                <div class="small-text">
                    Consultations Conducted
                </div>
            </div>
            <div class="col reveal">
                <div class="big-number" id="counter4">
                    95%
                </div>
                <div class="small-text">
                    Customer Satisfaction
                </div>
            </div>
        </div>
    </div>



    <div class="mymodal-wrapper" id="promomodal">
        <div class="mymodal">
            <div class="close-btn" id="close-promo">
                <i class="fa-solid fa-x"></i>
            </div>
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>

            <div class="message">
                A special offer for you
            </div>
            <div class="the-promo">
                Special 50% 0FF on Consultants bundle
            </div>
            <div class="promo-btn">
                <a href="{{ route('shop') }}"> GET NOW</a>
            </div>
        </div>
    </div>


    <script>
        const modal = document.getElementById('promomodal');
        const closeButton = document.getElementById('close-promo');

        const maxDelayTime = 10000;

        const delayTime = Math.random() * maxDelayTime;
        const randomNumber = Math.random();
        const threshold = 0.5;
        if (randomNumber > threshold) {
            console.log('ok');
            setTimeout(showModal, delayTime);
        }

        function showModal() {
            modal.classList.add('show');
        }

        closeButton.addEventListener('click', () => {
            modal.classList.remove('show');
        });
    </script>
@endsection
