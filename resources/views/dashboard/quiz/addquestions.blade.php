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
        <div class="">
            <form class="mx-3" name="form" action="/addquestionQuiz" method="POST">
                @csrf
                @for ($i = 0; $i < $qst_numbers; $i++)
                    <br/><b>Question number {{ $i + 1 }} :</b><br/>
                    <div class="form-group">
                        <input type="text" name="quiz_id" value="{{ $quiz_id }}" hidden>
                        <div class="col-md-12">
                            <textarea id="question{{ $i }}" rows="3" cols="5" name="questions[]" class="form-control custom-select" placeholder="Write question {{ $i + 1 }} here ... "></textarea>
                        </div>
                    </div>
                    @foreach(['a', 'b', 'c', 'd'] as $option)
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="option{{ $i }}{{ $option }}" name="options[{{ $i }}][{{ $option }}]" placeholder="Enter option {{ $option }} for question {{ $i + 1 }}"  class="form-control" type="text">
                            </div>
                        </div>
                    @endforeach
                    <br />
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="correctAnswer{{ $i }}">Correct Answer for Question {{ $i + 1 }}</label>
                        <div class="col-md-12">
                            <select id="correctAnswer{{ $i }}" name="correct_answers[]" class="form-control custom-select" placeholder="Choose correct answer for question {{ $i + 1 }}">
                                <option value="a">Option A</option>
                                <option value="b">Option B</option>
                                <option value="c">Option C</option>
                                <option value="d">Option D</option>
                            </select>
                        </div>
                    </div>
                    <br />
                @endfor
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary" />
                    </div>
                </div>
            </form>


        </div>
    @endsection
