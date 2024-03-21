@extends('layouts.dashboard')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
    @endif
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 ">
                            <div class="d-flex justify-content-between">
                                <h6 class="text-white text-capitalize ps-3">Exercices table</h6>
                                <a href="#addModal" data-toggle="modal"><i
                                        class="material-icons text-white me-3">&#xE147;</i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2 pb-3">
                        <div class="table-responsive p-2">
                            <table class="table align-items-center mb-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Cours</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Chapitre</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Question</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Answer</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exercices as $exercice)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $exercice->chapter->course->title }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-sm text-secondary mb-0">
                                                            {{ $exercice->chapter->title }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-sm text-secondary mb-0">
                                                            {{ $exercice->question_text }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-sm text-secondary mb-0">{{ $exercice->answer }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="buttons">
                                                    <a class="btn btn-primary" href="{{route('exercice.edit',$exercice->id)}}">Edit</a>
                                                    <form action="{{route('exercice.destroy',$exercice->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="addModal" class="modal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form id="employeeForm" method="post" action="{{ route('exercice.store') }}">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Add Exercice</h4>
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
                            <div class="form-group">
                                <label for="chapter">Sélectionnez le chapitre :</label>
                                <select name="chapter" id="chapter" class="form-control custom-select">
                                    <!-- Options-->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="question">Title :</label>
                                <input  name="title"  class="form-control custom-select"></input>
                            </div>
                            <div class="form-group">
                                <label for="question">Question :</label>
                                <textarea id="summernote" name="question" id="question" class="form-control custom-select"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="question">Answer :</label>
                                <textarea name="answer" id="answer" class="form-control custom-select"></textarea>
                            </div>

                            <div class="buttons justify-content-end">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-default" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log('hello world');

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
                        $('#chapter').append('<option value="' + chapter.id + '">' + chapter.title +
                            '</option>');
                    });
                });
            }
        });
    </script>
