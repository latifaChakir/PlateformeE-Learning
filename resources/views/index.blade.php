@extends('layouts.app')

@section('content')
    {{-- <div id="app"></div> --}}
    <header>

    </header>
    <div class='w3-main w3-light-grey' id='belowtopnav'>

        <div class='w3-row w3-white'>

            <div class='w3-col l12 m12'>
                <div class="back w3-center herosection" id="app">

                </div>

                {{-- <div id="app"></div> --}}
                <!-- Service Start -->


                <div class="container-xxl py-5 mt-5">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item text-center pt-3">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"
                                            style="font-size: 3rem !important"></i>
                                        <h5 class="mb-3">Skilled Instructors</h5>
                                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item text-center pt-3">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-globe text-primary mb-4"
                                            style="font-size: 3rem !important"></i>
                                        <h5 class="mb-3">Online Classes</h5>
                                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="service-item text-center pt-3">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-home text-primary mb-4"
                                            style="font-size: 3rem !important"></i>
                                        <h5 class="mb-3">Home Projects</h5>
                                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="service-item text-center pt-3">
                                    <div class="p-4">
                                        <i class="fa fa-3x fa-book-open text-primary mb-4"
                                            style="font-size: 3rem !important"></i>
                                        <h5 class="mb-3">Book Library</h5>
                                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service End -->


                <!-- About Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                                <div class="position-relative h-100">
                                    <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                                        style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                                <h1 class="mb-4">Welcome to UniCode</h1>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                    amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                                    magna dolore erat amet</p>
                                <div class="row gy-2 gx-4 mb-4">
                                    <div class="col-sm-6">
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled
                                            Instructors</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International
                                            Certificate</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled
                                            Instructors</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International
                                            Certificate</p>
                                    </div>
                                </div>
                                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->


                <!-- Categories Start -->
                <div class="container-xxl py-5 category">
                    <div class="container">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                            <h1 class="mb-5">Courses Categories</h1>
                        </div>
                        <div class="row g-4 justify-content-center">
                            @foreach ($categories as $category)
                                <div class="col-lg-3 col-md-3 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                                    <a class="position-relative d-block overflow-hidden" href="">
                                        <img class="img-fluid" src="/images/{{ $category->image_path }}" alt="">
                                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                            style="margin: 1px;">
                                            <h5 class="m-0">{{ $category->name }}</h5>
                                            <small class="text-primary">49 Courses</small>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Categories Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="section-title bg-white text-center text-primary px-3">Free Courses</h6>
                            <h1 class="mb-5">Popular Courses</h1>
                        </div>
                        <div class="row g-4 justify-content-center">
                            @foreach ($courses as $course)
                                <div class="col-lg-3  col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="course-item bg-light">
                                        <div class="position-relative overflow-hidden">
                                            <img class="img-fluid" src="/images/{{ $course->image_path }}"
                                                alt="">
                                            <div
                                                class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                                <a href="#"
                                                    class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 pb-0">

                                            <h5 class="mb-4">{{ $course->title }}</h5>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                                            <small class="flex-fill text-center py-2"><i
                                                    class="fa fa-user text-primary me-2"></i>30 Students</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <!-- Courses Start -->
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="section-title bg-white text-center text-primary px-3"> Courses With Certificate</h6>
                            <h1 class="mb-5">Popular Courses</h1>
                        </div>
                        <div class="row g-4 justify-content-center">
                            @foreach ($coursePayment as $course)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="course-item bg-light">
                                        <div class="position-relative overflow-hidden">
                                            <img class="img-fluid" src="/images/{{ $course->image_path }}"
                                                alt="">
                                            <div
                                                class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                                <a href="#"
                                                    class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 pb-0">
                                            <h3 class="mb-0">${{ $course->price }}</h3>
                                            <div class="mb-3">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small>(123)</small>
                                            </div>
                                            <h5 class="mb-4">{{ $course->title }}</h5>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                                            <small class="flex-fill text-center py-2"><i
                                                    class="fa fa-user text-primary me-2"></i>30 Students</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- Courses End -->

            </div>
        @endsection
