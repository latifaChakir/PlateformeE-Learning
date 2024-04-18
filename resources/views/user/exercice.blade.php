@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3>Let's Practice!</h3>
        <div class="exo">
            <h3 class="mt-4 mb-3">All Exercices</h3>
            <input class="mt-4" type="text" placeholder="Type here ..." id="searchExo"
                style="
                padding: 5px 40px 5px 15px;
                border: 1px solid rgba(0, 0, 0, 0.25) !important;
                border-radius: 25px;
                width: 50%; height: 40%;
            ">
        </div>

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde modi, nobis itaque vel nam soluta molestiae
            quaerat, iste neque dolor architecto beatae nihil quae! Error nihil nobis sequi omnis quam!</p>
        <div class="row">
            <div class="col-sm-12">
                <div class="main_service_area">
                    <div class="row mt-3" id="afficheExerices">
                        @foreach ($courses as $course)
                            <div class="col-md-3 mt-2">
                                <div class="card course_card">
                                    <a href="courses/{{ $course->id }}"><img src="/images/{{ $course->image_path }}"
                                            class="card-img-top" alt="{{ $course->title }}"></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Let's practice <strong>{{ $course->title }}</strong></h5>
                                        <div class="service_btn center">
                                            <a href="/startExo/{{ $course->id }}"
                                                class="btn waves-effect waves-orange btn-exo"
                                                style="border-radius: 20px; background-color: #f0f0f0;">Exercices</a>
                                            <a href="/quiz/{{ $course->id }}"
                                                class="btn waves-effect waves-orange btn-quiz"
                                                style="border-radius: 20px; background-color: #f0f0f0;">Quiz</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



    </div>

    </div>
    @include('layouts.footer')
    <style>
        .service_btn a {
            display: none;
        }

        .course_card:hover .service_btn a {
            display: inline-block;
        }

        .exo{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        @media (max-width: 770px) {
            .exo {
                flex-wrap: wrap !important;
                flex-direction: column !important;
                margin-bottom: 20px;
            }
        }
    </style>
@endsection
