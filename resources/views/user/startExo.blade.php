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
                                <a href="#" class="exercise-title" data-exercise-id="{{ $exercise->id }}">
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
    <div id="results">
        <!-- Contenu de la réponse -->
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





