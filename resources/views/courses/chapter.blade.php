@extends('layouts.app')

@section('content')
    <div class='w3-sidebar w3-collapse' id='sidenav'>
        <div id='leftmenuinner'>
            <div id='leftmenuinnerinner'>
                <h2 class="left"><span class="left_h2">{{ $course->title }}</span> Tutorial</h2>
                @foreach ($chapters as $chapter)
                    <a target="_top" href="/content/{{ $course->id }}/{{ $chapter->id }}">
                        {{ $chapter->title }}
                        @foreach ($progressions as $progression)
                            @if ($progression->chapter_id === $chapter->id && $progression->status === 'termine')
                                <i class="fa fa-check-circle"></i>
                            @endif
                        @endforeach
                    </a>
                @endforeach




                <br><br>
            </div>

        </div>
    </div>
    <div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>

        <div class='w3-row w3-white'>

            <div class='w3-col l10 m12' id='main'>
                <div id='mainLeaderboard' style='overflow:hidden;'>
                    <div id="adngin-main_leaderboard-0"></div>
                </div>
                @foreach ($courseContent as $content)
                    <h3 style="margin-left: 20px">{{ $content->title }}</h3>
                    <div style="margin-left: 20px !important;">
                        {!! $content->content !!}
                    </div>
                    @if ($course->price != 0)
                        @foreach ($exercices as $exercice)
                            <div class='w3-main w3-light-grey' style='margin-left:40px;' id="results">
                                <div class='w3-row w3-white'>
                                    <div class='w3-col l10 m12'>
                                        <div style='overflow:hidden;'>
                                            <h3>{{ $exercice->title }}</h3>
                                            <p style="margin-left: 20px">{{ $exercice->question_text }}</p>
                                            <div id="assignmentcontainer">
                                                <form action="/submitAnswerforCoursPay" method="post">
                                                    @csrf
                                                    <input type="number" name="id" value="{{ $exercice->id }}" hidden>
                                                    <input type="hidden" name="course_id"
                                                        value="{{ $exercice->chapter->course_id }}">
                                                    <input type="hidden" name="chapter_id"
                                                        value="{{ $exercice->chapter_id }}">
                                                    <label for="">Your Answer :</label>
                                                    <div class="form-group">
                                                        <textarea id="summernote" name="answer" style="margin-top: 30px !important; width: 500px; height: 100px;"></textarea>
                                                    </div>
                                                    <button type="submit" class="w3-bar-item w3-btn"
                                                        style="background-color: #075985 !important; color: #FFF !important;border-radius: 10px;">Submit</button>
                                                </form>
                                            </div>
                                            <hr>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
                <hr>


            </div>
        </div>

    </div>

    <style>
        .fa-check-circle {
            color: green;
        }
    </style>
@endsection
