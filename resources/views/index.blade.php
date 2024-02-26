@extends('layouts.app')

@section('content')

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
        <a href="html/default.html" class="ga-nav subtopnav_firstitem" title="HTML Tutorial">HTML</a>
        <a href="css/default.html" class="ga-nav" title="CSS Tutorial">CSS</a>
        <a href="js/default.html" class="ga-nav" title="JavaScript Tutorial">JAVASCRIPT</a>

        <a href="javascript:void(0)" style="width:50px;visibility:hidden;"></a>
        <div id="btn_container_subtopnav">
            <div id="scroll_right_btn" class="w3-hide-medium w3-hide-small">
                <span onmousedown="scrollmenow(1)" onmouseup="stopscrollmenow()"
                    onmouseout="stopscrollmenow()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#10095;&nbsp;&nbsp;&nbsp;</span>
            </div>
        </div>
    </div>
    <div class='w3-main w3-light-grey' id='belowtopnav'>

        <div class='w3-row w3-white'>

            <div class='w3-col l12 m12' id='main'>

                <div class="ws-black w3-center herosection">
                    <div class="w3-content learntocodecontent" style="xmax-width:1400px">
                        <h1 class="learntocodeh1">From Zero to Code Hero</h1>
                        <h3 class="learntocodeh3">
                            <i class="fa fa-logo w3-hide"
                                style="color:#FFC0C7!important;margin-right:20px;z-index:1;font-size:36px!important;vertical-align:bottom"></i>
                            A Step-by-Step Guide to Learning Programming
                        </h3>
                        <br>
                        <form class="example" action="https://www.w3schools.com/action_page.php"
                            style="margin:auto;max-width:350px">
                            <input type="text" placeholder="Search our tutorials ..." id="search2" class="ga-fp"
                                autocomplete="off" onkeydown="key_pressed_in_search(event)"
                                oninput="find_search_results(this)" onfocus="find_search_results(this)">
                            <button type="button" id="learntocode_searchbtn" onclick="click_learntocode_search_btn()"><i
                                    id="learntocode_searchicon" class="fa fa-search ga-fp"></i></button>
                            <div id="listofsearchresults">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w3-row w3-padding-32 " style="margin-top:-10px;">
                    <h2 class="w3-center">Get Started with These Free Courses</h2>

                </div>

                <div class="w3-row w3-padding-32 ws-black">
                    <div class="w3-content" style="xmax-width:1400px">
                        <div class="w3-col l6 w3-center" style="padding:3%">
                            <h1 style="font-size:70px;font-weight:700;margin-bottom:18px!important">JavaScript</h1>
                            <p style="font-size:19px">The language for programming web pages</p>
                            <a href="js/default.html" class="w3-button ga-fp w3-block tut-button">Learn
                                JavaScript</a><br>
                            <a href="jsref/default.html" class="w3-button ga-fp w3-block ref-button">JavaScript
                                Reference</a><br>
                            <a href="https://shop.w3schools.com/collections/certifications/products/javascript-certificate"
                                target="_blank" class="w3-button ga-fp w3-block ws-pink ref-button ws-pink-hover"
                                title="Add JavaScript Certification">Get Certified</a><br>
                        </div>
                        <div class="w3-col l6" style="padding:3%">
                            <div class="w3-hide-small w3-card-2 grey-color w3-round" style="padding:16px;">
                                <h3>JavaScript Example:</h3>
                                <div class="w3-code notranslate green-border">
                                    <div class="htmlHigh">
                                        &lt;button onclick=&quot;myFunction()&quot;&gt;Click Me!&lt;/button&gt;<br><br>
                                        &lt;script&gt;<br>
                                        function myFunction() {<br>
                                        &nbsp; let x = document.getElementById(&quot;demo&quot;);<br>
                                        &nbsp; x.style.fontSize = &quot;25px&quot;; <br>
                                        &nbsp; x.style.color = &quot;red&quot;; <br>}<br>
                                        &lt;/script&gt;
                                    </div>
                                </div>
                                <a href="js/tryit8004.html?filename=tryjs_default" target="_blank"
                                    class="w3-button ga-fp tryit-button">Try it Yourself</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w3-row w3-padding-32 ws-light-pink">
                    <div class="w3-content" style="xmax-width:1400px">
                        <div class="w3-col l6 w3-center" style="padding:3%">
                            <h1 style="font-weight:700">Python</h1>
                            <p style="font-size:19px">A popular programming language</p>
                            <a href="python/default.html" class="w3-button ga-fp w3-block tut-button">Learn
                                Python</a><br>
                            <a href="python/python_reference.html" class="w3-button ga-fp ref-button black-color">Python
                                Reference</a><br>
                            <a href="https://shop.w3schools.com/collections/certifications/products/python-certificate"
                                target="_blank" class="w3-button ga-fp w3-block ws-pink ref-button ws-pink-hover"
                                title="Add Python Certification">Get Certified</a><br>
                        </div>
                        <div class="w3-col l6" style="padding:3%">
                            <div class="w3-hide-small w3-card-2 grey-color w3-round" style="padding:16px;">
                                <h3>Python Example:</h3>
                                <div class="w3-code jsHigh notranslate green-border" style="height:210px">
                                    if 5 &gt; 2:<br>&nbsp; print("Five is greater than two!")
                                </div>
                                <a href="python/trypythone165.html?filename=demo_indentation" target="_blank"
                                    class="w3-button ga-fp tryit-button">Try it Yourself</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="w3-row w3-padding-64 ws-black">
                    <div style="max-width:1400px;margin:auto">
                        <div class="w3-col l6 w3-center" style="padding:2% 3%;">
                            <div class="w3-card-2 w3-round" style="color:black;background-color:#FFC0C7;padding:24px">
                                <h2 style="font-size:45px;font-weight:700">PHP</h2>
                                <div style="height:70px;">
                                    <h5 class="w3-text-dark-grey">A web server programming language</h5>
                                </div>
                                <a href="php/default.html"
                                    class="w3-button ga-fp tut-button black-color w3-margin-bottom">Learn PHP</a>
                            </div>

                        </div>
                        <div class="w3-col l6 w3-center" style="padding:2% 3%;">
                            <div class="w3-card-2 w3-round" style="background-color: #FFF4A3;color:black;padding:24px">
                                <h2 style="font-size:45px;font-weight:700">jQuery</h2>
                                <div style="height:70px;">
                                    <h5 class="w3-text-dark-grey">A JS library for developing web pages</h5>
                                </div>
                                <a href="jquery/default.html"
                                    class="w3-button ga-fp tut-button black-color w3-margin-bottom">Learn jQuery</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="footer" class="footer w3-container w3-white" style="border-top:0">
            <div class="w3-col l2 m12" id="right" style="display: none;">&nbsp;</div>
            <script>
                function secondSnigel() {};
            </script>

        </div>

        <div id="footerwrapper">
        </div>

    </div>
    @endsection
