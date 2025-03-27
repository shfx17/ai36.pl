@extends('layouts.main')

@section('title', 'eBook o narzędziach AI')

@section('content')

    <div class="wrapper clearfix" id="wrapperParallax">
        <!-- Header ============================================= -->
        <header class="header header-transparent header-sticky">
            <nav class="navbar navbar-sticky navbar-expand-lg" id="primary-menu">
                <div class="container">
                    <a class="logo navbar-brand pr-2" href="{{ url('/') }}">
                        <img class="logo logo-dark h-10" src="{{ asset('assets/images/logo/dark-logo.png') }}" alt="ebook Logo"/>
                        <img class="logo logo-light h-10" src="{{ asset('assets/images/logo/white-logo.png') }}" alt="ebook Logo"/>
                    </a>
                    <div class="logo navbar-brand pr-2">
                        <h5 class="logo logo-light mt-5 text-white text-lg">ai36.pl</h5>
                        <h5 class="logo logo-dark mt-5 text-lg" style="color: #2d36a1;">ai36.pl</h5>
                    </div>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" data-scroll="scrollTo" href="#hero"> Home </a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#feature"> {{ __('messages.why you should') }} </a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#about"> {{ __('messages.about the book') }} </a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#author"> {{ __('messages.about us') }}  </a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#testimonials"> {{ __('messages.opinions') }} </a></li>
                            <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#pricing"> {{ __('messages.price') }} </a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('lang.switch', 'pl') }}">
                                    <svg width="32" height="20" viewBox="0 0 32 20" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="32" height="10" fill="white"/>
                                        <rect y="10" width="32" height="10" fill="red"/>
                                        <rect width="32" height="20" stroke="black" fill="none" stroke-width="0.5"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('lang.switch', 'en') }}">
                                    <svg width="32" height="20" viewBox="0 0 32 20" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="32" height="20" fill="#00247D"/>
                                        <polygon points="0,0 32,20 28,20 0,4" fill="white"/>
                                        <polygon points="32,0 0,20 4,20 32,4" fill="white"/>
                                        <polygon points="0,0 32,20 30,20 0,5" fill="#CF142B"/>
                                        <polygon points="32,0 0,20 2,20 32,5" fill="#CF142B"/>
                                        <rect x="13" width="6" height="20" fill="white"/>
                                        <rect y="7" width="32" height="6" fill="white"/>
                                        <rect x="14" width="4" height="20" fill="#CF142B"/>
                                        <rect y="8" width="32" height="4" fill="#CF142B"/>
                                        <rect width="32" height="20" stroke="black" fill="none" stroke-width="0.5"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="module-container">
                            <!--module-btn-->
                            <div class="module module-cta">
                                <form action="{{ route('checkout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn--secondary"> {{ __('messages.buy ebook') }} </button>
                                </form>
                            </div>
                        </div>
                        <!-- End Module Container  -->
                    </div>
                    <!-- End .nav-collapse-->
                </div>
                <!-- End .container-->
            </nav>
            <!-- End .navbar-->
        </header>
        <!-- End Header-->
        <!-- Start hero #1-->
        <section class="hero hero-mailchimp bg-primary-alt" id="hero">
            <div class="container">
                <div class="hero-cotainer">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="hero-content">
                                <h1 class="hero-headline"> {{ __('messages.36 ai tools') }} <br /> {{ __('messages.in one place') }} </h1>
                                <div class="hero-bio">
                                    {{ __('messages.home_description') }}
                                </div>
                                <div class="hero-action text-center">

                                    <form action="{{ route('checkout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn--secondary"> {{ __('messages.buy ebook') }} </button>
                                    </form>

                                    <div class="subscribe-alert"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6"><img class="img-fluid float-right" src="{{ asset('assets/images/cover/book.png') }}" alt="Book Cover"/></div>
                    </div>
                    <!-- End .row-->
                </div>
                <!-- End .hero-cotainer-->
            </div>
            <!-- End .container-->
            <div class="divider-shape-bottom"><svg viewBox="0 0 1920 250" xmlns="http://www.w3.org/2000/svg" style="background: #2D36A1" width="100%" preserveAspectRatio="none">
                    <path fill="rgb(244, 246, 249, 0.02)" d="M1920 250H0V0s126.707 78.536 349.975 80.05c177.852 1.203 362.805-63.874 553.803-63.874 290.517 0 383.458 57.712 603.992 61.408 220.527 3.696 278.059-61.408 412.23-17.239"></path>
                    <path fill="rgb(244, 246, 249, 0.08)" d="M1920 144s-467.917 116.857-1027.243-17.294C369.986 1.322 0 45.578 0 45.578V250h1920V144z"></path>
                    <path fill="#FFFFFF" d="M0 195.553s208.547-75.581 701.325-20.768c376.707 41.908 520.834-67.962 722.545-67.962 222.926 0 311.553 83.523 496.129 86.394V250H0v-54.447z"></path>
                </svg>
            </div>
        </section>
        <!-- End #hero-->
        <!-- Start Feature #1-->
        <section class="features text-center" id="feature">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <div class="heading text-center">
                            <h2 class="heading-title"> {{ __('messages.you wil learn') }} </h2>
                            <p class="heading-desc">
                                {{ __('messages.ebook_description') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4 ">
                        <div class="feature-panel">
                            <div class="feature-icon text-center">
                                <div class="bg-section"><img src="{{ asset('assets/images/icons/bg-icon-1.svg') }}" alt="icon svg"/></div><img src="{{ asset('assets/images/icons/icon-dollar.svg') }}" alt="Dollar Icon"/>
                            </div>
                            <div class="feature-content">
                                <h3> {{ __('messages.36 ai tools that will bring you profit') }} </h3>
                                <p> {{ __('messages.ebook_div_one') }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 ">
                        <div class="feature-panel active">
                            <div class="feature-icon text-center">
                                <div class="bg-section"><img src="{{ asset('assets/images/icons/bg-icon-2.svg') }}" alt="icon svg"/></div><img src="{{ asset('assets/images/icons/icon-cup.svg') }}" alt="Cup Icon"/>
                            </div>
                            <div class="feature-content">
                                <h3> {{ __('messages.innovative strategies') }} </h3>
                                <p> {{ __('messages.ebook_div_two') }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 ">
                        <div class="feature-panel">
                            <div class="feature-icon text-center">
                                <div class="bg-section"><img src="{{ asset('assets/images/icons/bg-icon-3.svg') }}" alt="icon svg"/></div><img src="{{ asset('assets/images/icons/icon-delivery.svg') }}" alt="Delivery Icon"/>
                            </div>
                            <div class="feature-content">
                                <h3> {{ __('messages.practical examples') }} </h3>
                                <p> {{ __('messages.ebook_div_three') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        About
        =============================================
        -->
        <section class="about" id="about">
            <div class="container">
                <div class="row align-items-center h-100">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="heading">
                            <h2 class="heading-title"> {{ __('messages.about the book') }} </h2>
                            <p class="heading-desc">
                                {{ __('messages.ebook_section_description') }}
                            </p>
                        </div>
                        <div class="row about-list">
                            <div class="col">
                                <div class="about-item style-1">
                                    <div class="about-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="46.603" viewBox="0 0 56.915 46.603">
                                            <g id="icon_and_text_1" data-name="icon and text 1" transform="translate(0 -42.126)">
                                                <path id="Path_3473" data-name="Path 3473" d="M226.836,152.949V125.538a.918.918,0,1,0-1.836,0v27.411a.918.918,0,0,0,1.836,0Z" transform="translate(-197.461 -72.397)" fill="#9775f9"/>
                                                <path id="Path_3474" data-name="Path 3474" d="M56,46.245c-1.941,0-4.359-.837-6.92-1.724-3.243-1.123-6.918-2.4-10.73-2.4a10.967,10.967,0,0,0-9.89,5.308,10.967,10.967,0,0,0-9.89-5.308c-3.812,0-7.487,1.273-10.73,2.4-2.561.887-4.979,1.724-6.92,1.724A.918.918,0,0,0,0,47.163V84.139a.918.918,0,0,0,.918.918c2.25,0,4.81-.887,7.52-1.825,3.106-1.075,6.626-2.294,10.129-2.294a9.349,9.349,0,0,1,7.226,2.956.918.918,0,0,0,1.356-1.238A11.188,11.188,0,0,0,18.567,79.1c-3.812,0-7.487,1.273-10.73,2.4a30.637,30.637,0,0,1-6,1.669V48.036a30.36,30.36,0,0,0,6.6-1.78c3.106-1.075,6.626-2.294,10.129-2.294,7.084,0,8.938,5.626,9.013,5.862a.918.918,0,0,0,1.755,0,9.144,9.144,0,0,1,9.013-5.862c3.5,0,7.023,1.219,10.129,2.294a30.355,30.355,0,0,0,6.6,1.78v35.13a30.642,30.642,0,0,1-6-1.669c-3.243-1.123-6.918-2.4-10.73-2.4a11.187,11.187,0,0,0-8.582,3.554.918.918,0,1,0,1.356,1.238,9.349,9.349,0,0,1,7.226-2.956c3.5,0,7.023,1.219,10.129,2.294,2.71.939,5.271,1.825,7.52,1.825a.918.918,0,0,0,.918-.918V47.163A.918.918,0,0,0,56,46.245Z" transform="translate(0 0)" fill="#9775f9"/>
                                                <path id="Path_3475" data-name="Path 3475" d="M56,378.337c-1.941,0-4.359-.837-6.92-1.724-3.243-1.123-6.918-2.4-10.73-2.4a11.247,11.247,0,0,0-8.3,3.255H26.865a11.247,11.247,0,0,0-8.3-3.255c-3.812,0-7.487,1.273-10.73,2.4-2.56.887-4.979,1.724-6.92,1.724a.918.918,0,1,0,0,1.836c2.25,0,4.81-.887,7.52-1.825,3.106-1.075,6.626-2.294,10.129-2.294a9.349,9.349,0,0,1,7.226,2.956.918.918,0,0,0,.678.3h3.972a.918.918,0,0,0,.678-.3,9.349,9.349,0,0,1,7.226-2.956c3.5,0,7.023,1.219,10.129,2.294,2.71.939,5.271,1.825,7.52,1.825a.918.918,0,0,0,0-1.836Z" transform="translate(0 -291.445)" fill="#9775f9"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="about-item-title">
                                        <div>+ <span class="counting"> 80 </span></div>
                                        <div> {{ __('messages.pages of knowledge from the ebook') }} </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="about-item style-2">
                                    <div class="about-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="42.102" viewBox="0 0 41.215 42.102">
                                            <g id="dollar_1_" data-name="dollar (1)" transform="translate(-1.947 -1.504)">
                                                <g id="Group_1988" data-name="Group 1988">
                                                    <g id="Group_2003" data-name="Group 2003">
                                                        <g id="win" transform="translate(1.922 1.504)">
                                                            <path id="Path_5670" data-name="Path 5670" d="M.025,39.3l.546,1.228,19.584-8.12,3.412.409L24.8,36.574l-1.638,1.57A1.967,1.967,0,0,0,22.68,40.4l.682,1.706L34.69,37.666l-.614-1.638a1.929,1.929,0,0,0-1.91-1.3H29.913L28.685,31.8l3-1.5a2.051,2.051,0,0,0,1.024-2.525l-3.889-10.44A2.1,2.1,0,0,0,26.16,16.1a.067.067,0,0,0-.068.068L23.226,17.4l-.409-1.024,1.57-1.842a8.03,8.03,0,0,0,1.979-4.367l1.979-2.388a3.584,3.584,0,0,0-.478-5.05,5.711,5.711,0,0,0-.819-.546,3.391,3.391,0,0,0-2.32-.2l-.2-.614A1.973,1.973,0,0,0,21.93.136L7.531,5.322A2,2,0,0,0,6.3,7.915v.068l.341.887a3.781,3.781,0,0,0-1.979,4.64A3.881,3.881,0,0,0,7.8,16.035l3.207.341a8.886,8.886,0,0,0,4.435,1.706l2.252.2.409,1.024a2.032,2.032,0,0,0-.955,1.365L16.675,23,.025,29.751l.478,1.3,9.553-3.821,2.32,6.96Zm32.685-2.866.137.409-8.735,3.48-.2-.409a.946.946,0,0,1,.137-.75l2.32-2.184,2.934-.955h2.729a.685.685,0,0,1,.682.409Zm-4.3-1.638-2.457.819-.887-2.593a1.517,1.517,0,0,0,1.092-.2l1.16-.546ZM26.569,17.2a.677.677,0,0,1,.887.341L28,18.969l-3.344,1.092.409,1.3,3.344-1.092.819,2.184-3.207,1.092.409,1.3,3.275-1.092.819,2.183-3.139,1.024.409,1.3L31,27.158l.341.887a.6.6,0,0,1-.341.819l-5.391,2.661a.865.865,0,0,1-.409.068l-4.64-.546L18.04,23.473l.478-2.525a.722.722,0,0,1,.409-.478ZM26.5,3.411a2.261,2.261,0,0,1,1.16,2.934,2.391,2.391,0,0,1-.341.546L26.5,7.915a10.2,10.2,0,0,0-.409-1.979L25.2,3.275a2.727,2.727,0,0,1,1.3.136ZM6.03,13.169a2.351,2.351,0,0,1,1.16-2.934l.955,2.32a9.886,9.886,0,0,0,1.365,2.32l-1.433-.137A2.282,2.282,0,0,1,6.03,13.169Zm9.69,3.616a7.457,7.457,0,0,1-6.278-4.708l-1.774-4.5a.677.677,0,0,1,.341-.887L22.407,1.5a.753.753,0,0,1,.546,0,.7.7,0,0,1,.341.409l1.5,4.5a7.5,7.5,0,0,1-1.433,7.233L21.247,16.1l.614,1.638L19.4,18.764l-.682-1.706ZM11.353,26.68l1.569-.614,1.706,5.186,1.3-.409L14.151,25.52l2.729-1.092L19.2,31.32l-5.527,2.32Zm0,0" fill="#55dffc"/>
                                                            <path id="Path_5671" data-name="Path 5671" d="M33.734,11.941v.682H35.1v-.682a3.379,3.379,0,0,1,3.412-3.412V7.164A3.379,3.379,0,0,1,35.1,3.752V3.07H33.734v.682a3.378,3.378,0,0,1-3.412,3.412V8.529A3.379,3.379,0,0,1,33.734,11.941Zm.682-5.732a4.7,4.7,0,0,0,1.638,1.638,4.706,4.706,0,0,0-1.638,1.638,4.706,4.706,0,0,0-1.638-1.638A4.7,4.7,0,0,0,34.417,6.209Zm0,0" fill="#55dffc"/>
                                                            <path id="Path_5672" data-name="Path 5672" d="M3.71,25.588v.682H5.075v-.682a3.379,3.379,0,0,1,3.412-3.412V20.812A3.379,3.379,0,0,1,5.075,17.4v-.682H3.71V17.4A3.378,3.378,0,0,1,.3,20.812v1.365A3.379,3.379,0,0,1,3.71,25.588Zm.682-5.732A4.7,4.7,0,0,0,6.03,21.494a4.706,4.706,0,0,0-1.638,1.638,4.706,4.706,0,0,0-1.638-1.638,4.7,4.7,0,0,0,1.638-1.638Zm0,0" fill="#55dffc"/>
                                                            <path id="Path_5673" data-name="Path 5673" d="M37.829,17.4v-.682H36.464V17.4a3.378,3.378,0,0,1-3.412,3.412v1.365a3.379,3.379,0,0,1,3.412,3.412v.682h1.365v-.682a3.379,3.379,0,0,1,3.412-3.412V20.812A3.379,3.379,0,0,1,37.829,17.4Zm-.682,5.732a4.706,4.706,0,0,0-1.638-1.638,4.7,4.7,0,0,0,1.638-1.638,4.7,4.7,0,0,0,1.638,1.638A4.706,4.706,0,0,0,37.146,23.132Zm0,0" fill="#55dffc"/>
                                                            <path id="Path_5674" data-name="Path 5674" d="M20.292,12.146l.955.955c3.753-3.753.273-9.485.068-9.69l-1.16.751c.068,0,3.139,4.981.137,7.984Zm0,0" fill="#55dffc"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="about-item-title">
                                        <div>+ <span class="counting">36 </span></div>
                                        <div> {{ __('messages.highlighted ai tools') }} </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="about-item style-3">
                                    <div class="about-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="43.305" viewBox="0 0 56.915 43.305">
                                            <g id="icon_and_text_2" data-name="icon and text 2" transform="translate(0 -43.774)">
                                                <path id="Path_3476" data-name="Path 3476" d="M55.024,18.621,32.337,7.538a9.292,9.292,0,0,0-7.237,0L1.891,18.621A2.8,2.8,0,0,0,0,21.1c0,.587.261,1.63,1.891,2.477l1.891.913V34.92A3.194,3.194,0,0,0,1.76,37.854a3.237,3.237,0,0,0,1.956,2.934L.782,50.11H9L6.063,40.787A3.159,3.159,0,0,0,6,34.92V25.6l3.455,1.7v13.56a1.052,1.052,0,0,0,.2.587A23.677,23.677,0,0,0,28.425,50.11a23.543,23.543,0,0,0,18.711-8.671,1.052,1.052,0,0,0,.2-.587v-13.5l7.693-3.781A2.8,2.8,0,0,0,56.915,21.1,2.914,2.914,0,0,0,55.024,18.621ZM45.245,40.527a21.8,21.8,0,0,1-16.82,7.563A21.8,21.8,0,0,1,11.6,40.527V28.2l13.5,6.454a8.792,8.792,0,0,0,3.586.717,7.939,7.939,0,0,0,3.651-.782L45.245,28.27Zm8.866-18.776L46.288,25.6a.749.749,0,0,0-.717.391L31.424,32.834a7.238,7.238,0,0,1-5.476,0L8.54,24.489l20.015-2.347a1.015,1.015,0,0,0-.2-2.021L5.15,22.859,2.8,21.751a1.315,1.315,0,0,1-.717-.587c0-.065.13-.326.717-.587L26.013,9.429a6.735,6.735,0,0,1,2.673-.522,6.608,6.608,0,0,1,2.738.522L54.112,20.512c.587.261.717.522.717.652A1.793,1.793,0,0,1,54.112,21.751Z" transform="translate(0 36.97)" fill="#f67362"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="about-item-title">
                                        <div>+ <span class="counting"> 1,000 </span></div>
                                        <div> {{ __('messages.active readers') }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 text-md-center mx-md-auto"><img class="img-fluid float-right float-md-none" src="{{ asset('assets/images/information.png') }}" alt="Information book"/></div>
                </div>
                <!-- End .row  -->
            </div>
            <!-- End .container  -->
        </section>
        <!-- End #banner2  -->
        <!--
        Author
        =============================================
        -->
        <section class="author bg-gray" id="author">
            <div class="container">
                <div class="row align-items-center h-100">
                    <div class="col-12 col-md-12 col-lg-6 text-md-center mx-md-auto"><img class="img-fluid float-right float-md-none mb-30" src="{{ asset('assets/images/cover/author.png') }}" alt="Author"/></div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="heading mb-50">
                            <h2 class="heading-title"> {{ __('messages.about us') }} </h2>
                            <p class="heading-desc">
                                {{ __('messages.about_us_section') }}
                            </p>
                        </div>
                        <div class="author-education">
                            <h3> {{ __('messages.company goals') }} </h3>
                            <div class="education-list">
                                <div class="row">
                                    <div class="col">
                                        <div class="education-item style-1">
                                            <div class="education-title"> {{ __('messages.plan for 2024') }} </div>
                                            <div class="education-period"> {{ __('messages.year 2024') }} </div>
                                            <div class="education-desc"> {{ __('messages.neural network development, using ai apis for projects and programming') }} </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="education-item style-2">
                                            <div class="education-title"> {{ __('messages.plan for 2025') }} </div>
                                            <div class="education-period"> {{ __('messages.year 2025') }} </div>
                                            <div class="education-desc"> {{ __('messages.deploy AI tools to customers businesses with the creation of an eBook') }} </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .row  -->
            </div>
            <!-- End .container  -->
        </section>
        <!-- End #banner2  -->
        <!-- Start Testimonials-->
        <section class="testimonials" id="testimonials">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <div class="heading text-center">
                            <h2 class="heading-title"> {{ __('messages.opinions') }} </h2>
                            <p class="heading-desc">
                                {{ __('messages.opinions_section') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="testimonial-panel style-1">
                            <div class="testimonial-body">
                                <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
                                <p class="text-justify">
                                    {{ __('messages.client_one') }}
                                </p>
                                <div class="testimonial-author">
                                    <div class="testimonial-info">
                                        <p> Marek M. </p><img class="testimonial-rating" src="{{ asset('assets/images/testimonials/5-stars.svg') }}" alt="5 Stars"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="testimonial-panel style-2">
                            <div class="testimonial-body">
                                <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
                                <p class="text-justify">
                                    {{ __('messages.client_two') }}
                                </p>
                                <div class="testimonial-author">
                                    <div class="testimonial-info">
                                        <p> Anna K. </p><img class="testimonial-rating" src="{{ asset('assets/images/testimonials/5-stars.svg') }}" alt="5 Stars"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="testimonial-panel style-3">
                            <div class="testimonial-body">
                                <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
                                <p class="text-justify">
                                    {{ __('messages.client_three') }}
                                </p>
                                <div class="testimonial-author">
                                    <div class="testimonial-info">
                                        <p> Tomasz S. </p><img class="testimonial-rating" src="{{ asset('assets/images/testimonials/5-stars.svg') }}" alt="5 Stars"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .container-->
        </section>
        <div class="pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
        <!--
        Pricing Table #1
        =============================================
        -->
        <section class="pricing pt-80" id="pricing">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <div class="heading text-center">
                            <h2 class="heading-title"> {{ __('messages.book price') }} </h2>
                            <p class="heading-desc">
                                {{ __('messages.price_section') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="pricing-holder">
                            <div class="pricing-panel active">
                                <!--  Pricing heading   -->
                                <div class="pricing-head">
                                    <div class="pricing-name"> {{ __('messages.fixed price') }} </div>
                                    <div class="currency"> {{ $price }} {{ $currency }} </div>
                                </div>
                                <!--  Pricing body-->
                                <div class="pricing-body">
                                    <ul class="pricing-list list-unstyled">
                                        <li> {{ __('messages.36 professional ai tools') }} </li>
                                        <li> {{ __('messages.ready-made prompts for ai') }} </li>
                                        <li> {{ __('messages.implementing ai into your business') }} </li>
                                        <li> {{ __('messages.about 90 pages of excellent knowledge') }} </li>
                                    </ul>
                                    <form action="{{ route('checkout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn--primary"> {{ __('messages.buy now') }} </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="accordion accordion-1" id="accordion01">
                            <div class="card style-1">
                                <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1" style="text-transform: uppercase;"> {{ __('messages.what do i find in the ebook about ai tools ?') }} </a></div>
                                <div class="collapse show" id="collapse01-1" data-parent="#accordion01">
                                    <div class="card-body text-justify">
                                        {{ __('messages.faq_one') }}
                                    </div>
                                </div>
                            </div>
                            <!-- Panel 02-->
                            <div class="card style-2">
                                <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2" style="text-transform: uppercase;"> {{ __('messages.is this ebook for me if i am not familiar with ai ?') }} </a></div>
                                <div class="collapse" id="collapse01-2" data-parent="#accordion01">
                                    <div class="card-body text-justify">
                                        {{ __('messages.faq_two') }}
                                    </div>
                                </div>
                            </div>
                            <!-- Panel 03-->
                            <div class="card style-4">
                                <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-3" style="text-transform: uppercase;"> {{ __('messages.in what industries can i use these tools ?') }} </a></div>
                                <div class="collapse" id="collapse01-3" data-parent="#accordion01">
                                    <div class="card-body text-justify">
                                        {{ __('messages.answer_three') }}
                                    </div>
                                </div>
                            </div>
                            <!-- Panel 04-->
                            <div class="card style-3">
                                <div class="card-heading"><a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-4" style="text-transform: uppercase;"> {{ __('messages.in the eBook, can i find translational prompts for ai tools ?') }} </a></div>
                                <div class="collapse" id="collapse01-4" data-parent="#accordion01">
                                    <div class="card-body text-justify">
                                        {{ __('messages.answer_four') }}
                                    </div>
                                </div>
                            </div>
                            <!-- End .row-->
                        </div>
                        <!-- End .Accordion-->
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .container-->
        </section>
        <!-- #pricing1 end  -->
        <!--
        CTA #1
        =============================================
        -->
        <section class="cta pt-0 pb-0" id="action">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="action-container">
                            <div class="bg-section"><img src="{{ asset('assets/images/background/bg-cta.png') }}" alt="background cta"/></div>
                            <div class="row align-items-center h-100">
                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="cta-cover"><img class="img-fluid" src="{{ asset('assets/images/cover/book-cover-2.png') }}" alt="book cover"/></div>
                                </div>
                                <div class="col-12 col-md-8 col-lg-8">
                                    <h3> {{ __('messages.do you want to buy an ebook ?') }} <Br> {{ __('messages.press the Buy eBook button.') }} </h3>
                                    <div class="form-action">
                                        <form action="{{ route('checkout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn--secondary"> {{ __('messages.buy ebook') }} </button>
                                        </form>
                                        <div class="subscribe-alert"></div>
                                    </div>
                                </div>
                                <!-- End .col-md-12-->
                            </div>
                            <!-- End .row-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container-->
        </section>
        <!-- End #cta-->
        <!--
        Footer #1
        =============================================
        -->

        <footer class="footer" id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <a class="logo navbar-brand pr-2" href="{{ url('/') }}">
                            <img class="logo logo-light h-10" src="{{ asset('assets/images/logo/white-logo.png') }}" alt="ebook Logo"/>
                        </a>
                        <h5 class="logo logo-light mt-4 text-white text-lg">ai36.pl</h5>
                        <div class="col-12 col-md-12 col-lg-7">
                            <ul class="list-unstyled footer-navigation">
                                <li class="nav-item active"><a class="nav-link" data-scroll="scrollTo" href="#hero"> Home </a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#feature"> {{ __('messages.why you should') }} </a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#about"> {{ __('messages.about the book') }} </a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#author"> {{ __('messages.about us') }}  </a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#testimonials"> {{ __('messages.opinions') }} </a></li>
                                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#pricing"> {{ __('messages.price') }} </a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-12 col-lg-2">
                            <div class="footer-social">
                                <ul class="list-unstyled">
                                    <li> <a href="https://www.linkedin.com/company/insitemedia"><i class="fab fa-linkedin"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <hr/>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 text--center">
                            <div class="footer-copyright"><span>2025 &copy; <b> InsiteMedia </b>. All rights reserved.</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container  -->
        </footer>
    </div>

@endsection
