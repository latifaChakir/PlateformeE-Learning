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

            <form id="employeeForm" method="post" action="{{ route('quizzes.update', $quiz->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title">Add Quiz</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control custom-select" id="course" name="course"
                            placeholder="choose a course">
                            @foreach($courses as $cours)
                            <option value="{{ $cours->id }}" @if($cours->id == $quiz->cours_id) selected @endif>
                                {{ $cours->title }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" name="title" class="form-control custom-select" placeholder="Quiz title" value="{{ $quiz->title }}"></input>
                    </div>
                    <div class="form-group mt-3">
                        <input type="number" name="qst_numbers" class="form-control custom-select" placeholder="Total number of questions " value="{{ $quiz->qst_numbers }}"></input>
                    </div>
                    <div class="form-group mt-3">
                        <input type="number" name="mark_right" class="form-control custom-select" placeholder="enter mark on right answer" value="{{ $quiz->mark_right }}"></input>

                    </div>
                    <div class="form-group mt-3">
                        <input type="number" name="mark_wrong" class="form-control custom-select" placeholder="enter mark on wrong answer" value="{{ $quiz->mark_wrong }}"></input>

                    </div>
                  
                    <div class="buttons justify-content-end">
                        <a href="/quizzes"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"></a>
                        <input type="submit" class="btn btn-default" value="Save">
                    </div>
                </div>
            </form>

        </div>
    @endsection
