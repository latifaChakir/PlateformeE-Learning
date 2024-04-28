@extends('layouts.dashboard')
@section('content')
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 ">
                <div class="d-flex justify-content-between">
                    <h6 class="text-white text-capitalize ps-3">QUIZZES </h6>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pb-2">

            <form id="employeeForm" method="post" action="{{ route('quizzes.store') }}">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add Quiz</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control custom-select" id="course" name="course"
                            placeholder="choose a course">
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" name="title" class="form-control custom-select" placeholder="Quiz title "></input>
                    </div>
                    <div class="form-group mt-3">
                        <input type="number" name="qst_numbers" class="form-control custom-select" placeholder="Total number of questions "></input>
                    </div>
                    <div class="form-group mt-3">
                        <input type="number" name="mark_right" class="form-control custom-select" placeholder="enter mark on right answer"></input>

                    </div>
                    <div class="form-group mt-3">
                        <input type="number" name="mark_wrong" class="form-control custom-select" placeholder="enter mark on wrong answer"></input>

                    </div>
                  
                    <div class="buttons justify-content-end">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-default" value="Save">
                    </div>
                </div>
            </form>

        </div>
    @endsection
