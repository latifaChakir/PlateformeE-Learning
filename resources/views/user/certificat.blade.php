@extends('layouts.app')

@section('content')
  <!-- /asset/plugins CSS STYLE -->
  <!-- Bootstrap -->

  <div class="container mt-5">
<section class="news section">
	<div class="container">
		<div class="row mt-30">
			<div class="col-lg-4 col-md-10 mx-auto">
				<div class="sidebar">
					<!-- Search Widget -->
					<div class="widget search p-0">
						<div class="input-group">
						    <input type="text" class="form-control main m-0" id="search"  placeholder="Search...">
						    <span class="input-group-addon"><i class="fa fa-search"></i></span>
					    </div>
					</div>
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">Categories</h5>
						<ul class="category-list m-0 p-0">
                            @foreach ($categories as $category)
                            <li><a href="">{{ $category->name }}<span class="float-right"> <input type="radio" name="category" value="{{ $category->name }}"></span></a></li>
                            @endforeach

						</ul>
					</div>



				</div>
			</div>
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="block">
					<div class="row" id="searchResults">
                        @foreach ($coursePayment as $coursepayment)
                        <div class="col-md-6 col-sm-8 col-10 m-auto">
                            <div class="blog-post">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="/images/{{ $coursepayment->image_path }}" alt="post-image" class="img-fluid">
                                    </a>
                                </div>

                                <div class="post-content">
                                    <div class="post-title">
                                        <h2><a href="#">{{ $coursepayment->title }}</a></h2>
                                    </div>
                                    <div class="post-meta">
                                        <ul class="list-inline">

                                            <li class="list-inline-item">
                                                {{-- <i class="fa fa-ticket"></i> --}}
                                                <a href="/certificat/{{ $coursepayment->id }}">Join Now</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa fa-heart-o"></i>
                                                <a href="#">350</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa fa-comments-o"></i>
                                                <a href="#">30</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
					</div>

                    <nav>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="prev" id="prev-page">
                                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                    <span class="sr-only">prev</span>
                                </a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next" id="next-page">
                                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

				</div>
			</div>
		</div>
	</div>
</section>
</div>

  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="/asset/plugins/jquery/jquery.js"></script>
  <!-- Popper js -->
  <script src="/asset/plugins/popper/popper.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/asset/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Smooth Scroll -->
  <script src="/asset/plugins/smoothscroll/SmoothScroll.min.js"></script>
  <!-- Isotope -->
  <script src="/asset/plugins/isotope/mixitup.min.js"></script>
  <!-- Magnific Popup -->
  <script src="/asset/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="/asset/plugins/slick/slick.min.js"></script>
  <!-- SyoTimer -->
  <script src="/asset/plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script type="text/javascript" src="/asset/plugins/google-map/gmap.js"></script>


  <style>
    input[type="radio"]:checked {
        accent-color: #06BBCC;
        border: 1px solid #06BBCC !important;
    }
  </style>
@endsection
