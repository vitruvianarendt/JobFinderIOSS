@extends('layouts.app')
@section('content')
    <body>
    <div class="container">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="wrapper">
                            <div class="row no-gutters">
                                <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch p-md-4">
                                    <div class="contact-wrap w-100 p-md-5">
                                        <div class="jumbotron">
                                            <h1 class="display-4 mb-5">About Us</h1>
                                            <p class="lead">The job search application is designed to make the process of finding employment easier and more efficient. Users can create a profile, upload their resume, and search for job postings that match their skills and experience. The app uses advanced algorithms to match job seekers with relevant job openings and provides a platform for employers to post job listings and search for qualified candidates. </p>
                                            <hr class="my-4">
                                            <p class="lead">Additionally, the app offers tools for tracking job applications and receiving notifications when new job listings become available. With a user-friendly interface and comprehensive database of job opportunities, this job search application is the ultimate resource for anyone looking to find their next job. <br> Moreover, the app can allow talent hunters to post job listings and reach a large pool of potential candidates.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                    <div class="info-wrap w-100 p-md-5 p-4" style="background-color: #00B074;">
                                        <h2 class="text-white mb-5">JobFinder</h2>
                                        <img src="{{ url('images/about.jpg') }}"
                                             width="100%" class="center mt-4 mb-5">

                                        <div class="dbox w-100 d-flex align-items-start mt-5">
                                            <div class="icon d-flex align-items-center justify-content-center" style="margin-right: 1.1em;">
                                                <div class="container">
                                                    <span class="fa fa-map-marker"></span>
                                                </div>
                                            </div>
                                            <div class="text pl-3">
                                                <p class="text-white">Skopje, North Macedonia</p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center" style="margin-right: 1.1em;">
                                                <div class="container">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                            </div>
                                            <div class="text pl-3">
                                                <p class="text-white">+389 77 111 222</p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center" style="margin-right: 1.1em;">
                                                <div class="container">
                                                    <span class="fa fa-paper-plane"></span>
                                                </div>
                                            </div>
                                            <div class="text pl-3">
                                                <p class="text-white">jobfinderIOSS@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </body>
@endsection
