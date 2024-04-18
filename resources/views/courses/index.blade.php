@extends('layouts.app')

@section('content')

<div class="next"><button class="afficheExo" id="course-aside"
    style="display: none; background-color:#fff; border:none"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;❯&nbsp;&nbsp;&nbsp;</span></button>
</div>
    <div class='w3-sidebar w3-collapse' id='sidenav'>
        <div id='leftmenuinner'>
            <div id='leftmenuinnerinner'>
                <h2 class="left"><span class="left_h2">{{ $course->title }}</span> Tutorial</h2>
                @foreach ($chapters as $chapter)
                <a target="_top" href="/content/{{ $course->id }}/{{ $chapter->id }}">{{ $chapter->title }}</a>
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
                <h1>{{ $course->title }}<span class="color_h1"> Tutorial</span></h1>
                <div class="w3-panel w3-info intro" style="background-color: #bdcbd3 !important;">
                   {{ $course->description }}
                </div>
                <hr>

            </div>
        </div>

    </div>
    <style>
        @media (max-width: 990px) {
            .next button {
                display: block !important;
                margin-top: 100px !important;
            }

            #main {
                margin-top: 5px !important;
            }

            #sidenav {
                display: none;
            }

            #leftmenuinner {
                padding-top: 10px !important;
            }
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btn = document.getElementById('course-aside');
            const aside = document.getElementById('sidenav');

            btn.addEventListener('click', function() {
                if (aside.style.display === "none" || aside.style.display === "") {
                    aside.style.display = "block";
                } else {
                    aside.style.display = "none";
                }
            });
        });
    </script>

@endsection
