@extends('layouts.app')

@section('content')
    <div class='w3-sidebar w3-collapse' id='sidenav'>
        <div id='leftmenuinner'>
            <div id='leftmenuinnerinner'>
                <h2 class="left"><span class="left_h2">{{ $course->title }}</span> Tutorial</h2>
                @foreach ($chapters as $key => $chapter)
                    <div>
                        <a href="#" class="chapter-toggle active" id="chapter{{ $key }}"
                            style="padding-top: 5px">
                            {{ $chapter->title }}
                        </a>
                        <div class="exercises " id="exercises{{ $key }}" style="display: none;">
                            @foreach ($chapter->questions as $exercise)
                                <a href="/contentexo/{{ $exercise->id }}" class="exercise-title ">
                                    {{ $exercise->title }}
                                </a>
                            @endforeach
                        </div>
                    </div>
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
                {{-- @foreach ($courseContent as $content) --}}
                <h3 style="margin-left: 20px">title</h3>
                <div style="margin-left: 20px !important;">
                    {{-- {!! $content->content !!} --}}
                </div>

                {{-- @endforeach --}}
                <hr>

            </div>
        </div>

    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   document.addEventListener("DOMContentLoaded", function() {
    var exercises = document.querySelectorAll(".exercises");
    for (var i = 1; i < exercises.length; i++) {
        exercises[i].style.display = "none";
    }

    var firstChapterExercises = document.querySelector(".chapter-toggle:first-of-type + .exercises");
    firstChapterExercises.style.display = "block";

    var chapterToggles = document.querySelectorAll(".chapter-toggle");
    chapterToggles.forEach(function(chapterToggle) {
        chapterToggle.addEventListener("click", function() {
            var exercises = this.nextElementSibling;
            if (exercises.style.display === "none") {
                exercises.style.display = "block";
            } else {
                exercises.style.display = "none";
            }
        });
    });
});

</script>



