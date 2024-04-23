@extends('layouts.dashboard')
@section('content')
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 ">
                <div class="d-flex justify-content-between">
                    <h6 class="text-white text-capitalize ps-3">Edit Course</h6>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <form id="employeeForm" method="post" action="{{ route('exercice.update', $exercice->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title">Edit Exercice</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control custom-select" id="course" name="course"
                            placeholder="choose a course">
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}" @if ($course->id == $exercice->chapter->course->id) selected @endif>
                                    {{ $course->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="chapter">Sélectionnez le chapitre :</label>
                        <select name="chapter" id="chapter" class="form-control custom-select">
                            <!-- Options-->
                        </select>
                    </div>
                    <div class="mb-3 mx-3">
                        <label class="form-label">Exerice Title</label>
                        <input type="text" class="form-control task-desc" name="title" value="{{ $exercice->title }}">

                    </div>
                    <div class="form-group">
                        <label for="question">Question :</label>
                        <textarea id="summernote" name="question" id="question" class="form-control custom-select">{{ $exercice->question_text }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="question">Answer :</label>
                        <textarea name="answer" id="answer" class="form-control custom-select">{{ $exercice->answer }}</textarea>
                    </div>

                    <div class="buttons justify-content-end">
                        <a href="/exercice"><input type="button" class="btn btn-default" data-dismiss="modal"
                                value="Cancel"></a>
                        <input type="submit" class="btn btn-default" value="Save">
                    </div>
                </div>
            </form>
        </div>
    @endsection



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // console.log('hello world');

            var defaultCourseId = $('#course').find('option').eq(0).val();

            loadChapters(defaultCourseId);
            $('#course').change(function() {
                var courseId = $(this).val();
                $('#chapter').empty();
                loadChapters(courseId);
            });

            function loadChapters(courseId) {
                $.get('/chapters', {
                    course_id: courseId
                }, function(data) {
                    $.each(data, function(index, chapter) {
                        $('#chapter').append('<option value="' + chapter.id + '" >' + chapter
                            .title +
                            '</option>');
                    });
                });
            }
        });
    </script>
