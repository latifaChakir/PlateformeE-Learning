@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3 >HELO</h3>

        <h3 class="mt-5">All Exercices</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde modi, nobis itaque vel nam soluta molestiae
            quaerat, iste neque dolor architecto beatae nihil quae! Error nihil nobis sequi omnis quam!</p>
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_service_area">
                        <div class="row list-group-horizontal mt-3">
                            @foreach ($courses as $course)

                            <div class="col-md-4 mt-2">
                                <div class="jumbotron single_service wow fadeInLeft d-flex flex-column align-items-center justify-content-center">
                                    {{-- <p class="text-center">Start exercise</p> --}}
                                    <div class="s_service_text text-sm-center text-xs-center fs-5 fw-bold mb-4">
                                        Let's Start exercise of <strong>{{ $course->title }}</strong>
                                    </div>
                                    <div class="service_btn center" style="display: flex; gap:10px">
                                        <a href="/startExo/{{ $course->id }}" style="border-radius: 10px; padding: 20px 40px; background-color: #f0f0f0; border: 1px solid rgb(70, 70, 70);"
                                            class="btn btn-lg-square waves-effect waves-orange">Exos</a>

                                            <a href="/quiz/{{ $course->id }}" style="border-radius: 10px; padding: 20px 40px; background-color: #f0f0f0; border: 1px solid rgb(70, 70, 70);"
                                                class="btn btn-lg-square waves-effect waves-orange">Quiz</a>
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
@endsection

