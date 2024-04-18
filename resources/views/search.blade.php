<div id="subtopnav" onmousedown="startscrolling_subtopnav(event)" onmousemove="scrolling_subtopnav(event)"
        onmouseup="endscrolling_subtopnav(event)" onclick="return pellessii(event)">
        <div id="scroll_left_btn" class="w3-hide-medium w3-hide-small">
            <span onmousedown="scrollmenow(-1)" onmouseup="stopscrollmenow()"
                onmouseout="stopscrollmenow()">&nbsp;&nbsp;&nbsp;&#10094;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </div>
        <div id="menubtn_container">
            <span>

                <a href='javascript:void(0);'
                    class='topnav-icons fa fa-menu w3-hide-large w3-hide-medium w3-hide-small w3-left w3-bar-item w3-button ga-nav'
                    style="line-height:1.1;padding-top:3px!important;" onclick='open_menu()' title='Menu'></a>

            </span>
        </div>
        @foreach ($courses as $course)
            <a href="/courses/{{ $course->id }}" class="ga-nav subtopnav_firstitem"
                title="HTML Tutorial">{{ $course->title }}</a>
        @endforeach

        <a href="javascript:void(0)" style="width:50px;visibility:hidden;"></a>
        <div id="btn_container_subtopnav">
            <div id="scroll_right_btn" class="w3-hide-medium w3-hide-small">
                <span onmousedown="scrollmenow(1)" onmouseup="stopscrollmenow()"
                    onmouseout="stopscrollmenow()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#10095;&nbsp;&nbsp;&nbsp;</span>
            </div>
        </div>
    </div>
