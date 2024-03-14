@extends('layouts.app')

@section('content')


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
                @foreach ($courseContent as $content)
                <h3 style="margin-left: 20px">{{ $content->title }}</h3>
                <div style="margin-left: 20px !important;">
                    {!! $content->content !!}
                </div>

                 @endforeach
                <hr>

            </div>
        </div>

    </div>
@endsection
