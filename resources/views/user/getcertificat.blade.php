@extends('layouts.app')

@section('content')
  <!-- /asset/plugins CSS STYLE -->
  <!-- Bootstrap -->

  <div class="container mt-5">
    <section class="section pricing">
        @if ($message = Session::get('status'))
        <div class="alert alert-success" role="alert">
        {{$message}}
        </div>
       @endif
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Get <span class="alternate">Certicate</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Item -->
                    <div class="pricing-item">
                        <div class="pricing-heading">
                            <!-- Title -->
                            <div class="title">
                                <h6>Starter</h6>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <h2>{{ $course->price }}<span>dh</span></h2>
                                <p>/Course</p>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <!-- Feature List -->
                            <ul class="feature-list m-0 p-0">
                                <li><p><span class="fa fa-check-circle available"></span>1 Comfortable Seats</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Free Lunch and Coffee</p></li>
                                <li><p><span class="fa fa-times-circle unavailable"></span>Certificate</p></li>
                                <li><p><span class="fa fa-times-circle unavailable"></span>Easy Access</p></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <!-- Pricing Item -->
                    <div class="pricing-item featured">
                        <div class="pricing-heading">
                            <!-- Title -->
                            <div class="title">
                                <h6>Standard</h6>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <h2>Book a course<span></span></h2>
                                <p>/Course</p>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <!-- Feature List -->
                            <div class="section-title">
                                <p>Click the button below to pay for your course.</p>
                            </div>
                                    <div class="pricing-footer text-center">
                                        <a href="/checkout/{{ $course->id }}" class="btn btn-transparent-md">Pay Now</a>
                                    </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
  </div>
@endsection
