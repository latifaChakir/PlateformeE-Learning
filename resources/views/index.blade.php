<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Unicode Online Web Tutorials</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preload" href="lib/fonts/fontawesome8deb.woff2?14663396" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="lib/fonts/source-code-pro-v14-latin-regular.woff2" as="font" type="font/woff2"
        crossorigin>
    <link rel="stylesheet" href="/lib/topnav/main5ab0.css?v=1.0.30">
    <link rel="stylesheet" href="/lib/w3schools32f700.css?v=1.0.1">
    <link rel="stylesheet" href="/lib/style.css">


</head>

<body style="font-family: 'Source Sans Pro', sans-serif;">
    <div id="tnb-search-suggestions"></div>

    <div id="top-nav-bar" class="classic">
        <div id="pagetop" class="w3-bar notranslate w3-white">
            <a id="w3-logo" href="index.html" class="w3-bar-item w3-button w3-hover-none w3-left ga-top ga-top-w3home"
                title="Home" style="width: 75px" aria-label="Home link">
                <img src="/images/logo.png" style="position: relative; z-index: 1; width: 50px !important" aria-hidden="true">
            </a>

            <nav class="tnb-desktop-nav w3-bar-item">
                <a class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-tut-and-ref"
                    href="javascript:void(0)" onclick="TopNavBar.openNavItem('tutorials')" id="navbtn_tutorials"
                    title="Tutorials and References" role="button">
                    Tutorials
                    <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
                    <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
                </a>

                <a class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 ga-top ga-top-exc-and-quz"
                    href="javascript:void(0)" onclick="TopNavBar.openNavItem('exercises')" id="navbtn_exercises"
                    title="Exercises and Quizzes" role="button">
                    Exercises
                    <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
                    <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
                </a>

                <a class="tnb-nav-btn w3-bar-item w3-button barex bar-item-hover w3-padding-16 tnb-paid-service ga-top ga-top-cert-and-course"
                    href="javascript:void(0)" onclick="TopNavBar.openNavItem('certified')" id="navbtn_certified"
                    title="Certificates" role="button">
                    Certificates
                    <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
                    <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
                </a>


            </nav>

            <a class="tnb-menu-btn w3-bar-item w3-button bar-item-hover w3-padding-16 ga-top ga-top-menu"
                href="javascript:void(0)" onclick="TopNavBar.openMenu()" title="Menu" aria-label="Menu" role="button">
                Menu
                <i class="fa fa-caret-down" style="font-size: 15px" aria-hidden="true"></i>
                <i class="fa fa-caret-up" style="display: none; font-size: 15px" aria-hidden="true"></i>
            </a>

            <div id="tnb-google-search-container" class="w3-bar-item">
                <div id="tnb-google-search-inner-container">
                    <label for="tnb-google-search-input" class="tnb-soft-hide">
                        Search field
                    </label>

                    <input id="tnb-google-search-input" type="text" placeholder="Search..." autocomplete="off"
                        onkeydown="TopNavBar.googleSearchAttachKeyPressHandler(event)" aria-label="Search field"
                        oninput="TopNavBar.searchWithSuggestions(this)" onfocus="TopNavBar.searchWithSuggestions(this)"
                        onblur="TopNavBar.searchFieldLostFocus(event)" />

                    <div id="tnb-google-search-submit-btn" class="tnb-button-light" role="button"
                        aria-label="Button to search" onclick="TopNavBar.googleSearchSubmit()">
                        <svg id="tnb-google-search-icon" viewBox="0 0 17 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.8153 10.3439C12.6061 9.2673 13.0732 7.9382 13.0732 6.5C13.0732 2.91015 10.163 0 6.57318 0C2.98333 0 0.0731812 2.91015 0.0731812 6.5C0.0731812 10.0899 2.98333 13 6.57318 13C8.01176 13 9.3412 12.5327 10.4179 11.7415L10.4171 11.7422C10.4466 11.7822 10.4794 11.8204 10.5156 11.8566L14.3661 15.7071C14.7566 16.0976 15.3898 16.0976 15.7803 15.7071C16.1708 15.3166 16.1708 14.6834 15.7803 14.2929L11.9298 10.4424C11.8936 10.4062 11.8553 10.3734 11.8153 10.3439ZM12.0732 6.5C12.0732 9.53757 9.61075 12 6.57318 12C3.53561 12 1.07318 9.53757 1.07318 6.5C1.07318 3.46243 3.53561 1 6.57318 1C9.61075 1 12.0732 3.46243 12.0732 6.5Z"
                                fill="black"></path>
                        </svg>
                    </div>
                </div>

                <div id="tnb-google-search-mobile-action-btns">
                    <div id="tnb-google-search-mobile-show" class="tnb-button"
                        onclick="TopNavBar.googleSearchShowMobileContainer()" aria-label="Button to open search field"
                        role="button">
                        <svg viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.8153 10.3439C12.6061 9.2673 13.0732 7.9382 13.0732 6.5C13.0732 2.91015 10.163 0 6.57318 0C2.98333 0 0.0731812 2.91015 0.0731812 6.5C0.0731812 10.0899 2.98333 13 6.57318 13C8.01176 13 9.3412 12.5327 10.4179 11.7415L10.4171 11.7422C10.4466 11.7822 10.4794 11.8204 10.5156 11.8566L14.3661 15.7071C14.7566 16.0976 15.3898 16.0976 15.7803 15.7071C16.1708 15.3166 16.1708 14.6834 15.7803 14.2929L11.9298 10.4424C11.8936 10.4062 11.8553 10.3734 11.8153 10.3439ZM12.0732 6.5C12.0732 9.53757 9.61075 12 6.57318 12C3.53561 12 1.07318 9.53757 1.07318 6.5C1.07318 3.46243 3.53561 1 6.57318 1C9.61075 1 12.0732 3.46243 12.0732 6.5Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>

                    <div id="tnb-google-search-mobile-close" class="tnb-button"
                        onclick="TopNavBar.googleSearchHideMobileContainer()" role="button"
                        aria-label="Close search field">
                        <i>&times;</i>
                    </div>
                </div>
            </div>

            <div id="tnb-dark-mode-toggle-wrapper" class="w3-bar-item">
                <a id="tnb-dark-mode-toggle-btn" href="javascript:void(0);"
                    class="tnb-button fa ga-nav ga-dark-mode-toggle" onclick="TopNavBar.toggleUserPreferredTheme()"
                    role="button" title="Toggle light/dark mode" aria-label="Toggle light/dark mode">
                    <i>&#xe80b;</i>
                </a>
            </div>

            <div class="tnb-right-section">
                <!-- < user-anonymous -->
                <a href=""
                    class="user-anonymous tnb-login-btn w3-btn bar-item-hover w3-right ws-light-green ga-top ga-top-login"
                    style="background-color: #B0C4D1 !important;" title="Login to your account"
                    aria-label="Login to your account">
                    Log in
                </a>
                <a href=""
                    class="user-anonymous tnb-login-btn w3-bar-item w3-btn  bar-item-hover w3-right ws-light-green ga-top ga-top-login"
                    style="background-color: #075985 !important; color: #FFF !important;" title="Login to your account"
                    aria-label="Login to your account">
                    Sign Up
                </a>

                <!-- < user-authenticated -->
                <a href="https://profile.w3schools.com/log-in?redirect_url=https%3A%2F%2Fmy-learning.w3schools.com"
                    class="user-authenticated user-profile-btn w3-alt-btn w3-hide ga-top ga-top-profile"
                    title="Your W3Schools Profile" aria-label="Your W3Schools Profile">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 2048 2048"
                        class="user-profile-icon" aria-label="Your W3Schools Profile Icon">
                        <path
                            d="M 843.500 1148.155 C 837.450 1148.515, 823.050 1149.334, 811.500 1149.975 C 742.799 1153.788, 704.251 1162.996, 635.391 1192.044 C 517.544 1241.756, 398.992 1352.262, 337.200 1470 C 251.831 1632.658, 253.457 1816.879, 340.500 1843.982 C 351.574 1847.431, 1696.426 1847.431, 1707.500 1843.982 C 1794.543 1816.879, 1796.169 1632.658, 1710.800 1470 C 1649.008 1352.262, 1530.456 1241.756, 1412.609 1192.044 C 1344.588 1163.350, 1305.224 1153.854, 1238.500 1150.039 C 1190.330 1147.286, 1196.307 1147.328, 1097 1149.035 C 1039.984 1150.015, 1010.205 1150.008, 950 1149.003 C 851.731 1147.362, 856.213 1147.398, 843.500 1148.155"
                            stroke="none" fill="#2a93fb" fill-rule="evenodd" />
                        <path
                            d="M 1008 194.584 C 1006.075 194.809, 999.325 195.476, 993 196.064 C 927.768 202.134, 845.423 233.043, 786 273.762 C 691.987 338.184, 622.881 442.165, 601.082 552 C 588.496 615.414, 592.917 705.245, 611.329 760.230 C 643.220 855.469, 694.977 930.136, 763.195 979.321 C 810.333 1013.308, 839.747 1026.645, 913.697 1047.562 C 1010.275 1074.879, 1108.934 1065.290, 1221 1017.694 C 1259.787 1001.221, 1307.818 965.858, 1339.852 930.191 C 1460.375 795.998, 1488.781 609.032, 1412.581 451.500 C 1350.098 322.327, 1240.457 235.724, 1097.500 202.624 C 1072.356 196.802, 1025.206 192.566, 1008 194.584"
                            stroke="none" fill="#0aaa8a" fill-rule="evenodd" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="user-progress"
                        aria-label="Your W3Schools Profile Progress">
                        <path class="user-progress-circle1" fill="none"
                            d="M 25.99650934151373 15.00000030461742 A 20 20 0 1 0 26 15"></path>
                        <path class="user-progress-circle2" fill="none" d="M 26 15 A 20 20 0 0 0 26 15"></path>
                    </svg>

                    <span class="user-progress-star">&#x2605;</span>

                    <span class="user-progress-point">+1</span>
                </a>

                <a href="https://my-learning.w3schools.com/"
                    class="user-authenticated tnb-dashboard-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-dashboard"
                    title="Your W3Schools Dashboard" aria-label="Your W3Schools Dashboard">
                    My W3Schools
                </a>

                <a target="_blank" href="https://campus.w3schools.com/collections/course-catalog"
                    class="user-authenticated tnb-certificates-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-certificates"
                    title="W3Schools Certificates" aria-label="W3Schools Certificates">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" aria-hidden="true">
                        <path
                            d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"
                            fill="currentColor" />
                    </svg>
                    Get Certified
                </a>

                <a href="https://spaces.w3schools.com/space/"
                    class="user-authenticated tnb-spaces-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-spaces"
                    title="Go to Your W3Schools Space" aria-label="Go to Your W3Schools Space">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" aria-hidden="true">
                        <path
                            d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"
                            fill="currentColor" />
                    </svg>
                    Spaces
                </a>

                <a href="pathfinder/pathfinder_talent.html"
                    class="user-authenticated tnb-jobs-btn w3-bar-item w3-button w3-hide w3-right w3-white ga-top ga-top-jobs"
                    title="Find Your Next Job or Hire with W3Schools Pathfinder"
                    aria-label="Find Your Next Job or Hire with W3Schools Pathfinder">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" aria-hidden="true">
                        <path
                            d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96h64c35.3 0 64 28.7 64 64V280 416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V280 160c0-35.3 28.7-64 64-64h64zM48 304V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V304H320v16c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V304H48zm144-48H320 464V160c0-8.8-7.2-16-16-16H360 152 64c-8.8 0-16 7.2-16 16v96H192z"
                            fill="currentColor" />
                    </svg>
                    Jobs
                </a>
            </div>
        </div>
        <div id="dropdown-nav-outer-wrapper">
            <div id="dropdown-nav-inner-wrapper">
                <nav id="nav_tutorials" class="dropdown-nav w3-hide-small navex" tabindex="-1"
                    aria-label="Menu for tutorials">
                    <div class="w3-content menu-content">
                        <div id="tutorials_list" class="w3-row-padding w3-bar-block">
                            <div class="nav-heading-container w3-container">
                                <div class="nav-heading-container-title">
                                    <h2 style="color: #fff4a3"><b>Tutorials</b></h2>
                                </div>
                                <br />
                            </div>
                        </div>

                        <div class="w3-button tnb-close-nav-btn w3-round" tabindex="0"
                            onclick="TopNavBar.closeNavItem('tutorials')"
                            onkeydown="TopNavBar.mouseHandler(event, this, 'tutorials')" role="button"
                            aria-label="Close navigation">
                            <span>&times;</span>
                        </div>
                </nav>

                <nav id="nav_exercises" class="dropdown-nav w3-hide-small navex" tabindex="-1"
                    aria-label="Exercises menu">
                    <div class="w3-content menu-content">
                        <div id="exercises_list" class="w3-row-padding w3-bar-block">
                            <div class="nav-heading-container w3-container">
                                <div class="nav-heading-container-title">
                                    <h2 style="color: #fff4a3"><b>Exercises</b></h2>
                                </div>
                                <div data-section="exercises" class="filter-input-wrapper">
                                    <div class="filter-input-inner-wrapper">
                                        <label for="filter-exercises-input" class="tnb-soft-hide">
                                            Excercises filter input
                                        </label>
                                        <input id="filter-exercises-input" type="text" class="filter-input"
                                            placeholder="Filter..." aria-label="Exercises filter bar" />

                                        <div class="filter-clear-btn tnb-button-dark-v2" role="button"
                                            aria-label="Filter clear button">
                                            <span>&times;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br />
                    </div>

                    <div class="w3-button tnb-close-nav-btn w3-round" tabindex="0"
                        onclick="TopNavBar.closeNavItem('exercises')"
                        onkeydown="TopNavBar.mouseHandler(event, this, 'exercises')" role="button"
                        aria-label="Close navigation">
                        <span>&times;</span>
                    </div>
                </nav>

                <nav id="nav_certified" class="dropdown-nav w3-hide-small navex" tabindex="-1"
                    aria-label="Certification menu">
                    <div class="w3-content menu-content">
                        <div id="certified_list" class="w3-row-padding w3-bar-block">
                            <div class="nav-heading-container w3-container">
                                <div class="nav-heading-container-title">
                                    <h2 style="color: #fff4a3"><b>Certificates</b></h2>
                                </div>
                                <div data-section="certificates" class="filter-input-wrapper">
                                    <div class="filter-input-inner-wrapper">
                                        <label for="filter-certified-input" class="tnb-soft-hide">
                                            Filter field for certifications
                                        </label>
                                        <input id="filter-certified-input" type="text" class="filter-input"
                                            placeholder="Filter..." aria-label="Certificate filter bar" />

                                        <div class="filter-clear-btn tnb-button-dark-v2" role="button"
                                            aria-label="Filter clear button">
                                            <span>&times;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>

                    <div class="w3-button tnb-close-nav-btn w3-round" tabindex="0"
                        onclick="TopNavBar.closeNavItem('certified')"
                        onkeydown="TopNavBar.mouseHandler(event, this, 'certified')" role="button"
                        aria-label="Close navigation">
                        <span>&times;</span>
                    </div>
                </nav>


            </div>
        </div>

        <div id="googleSearch">
            <div class="gcse-search"></div>
        </div>
    </div>

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
   
</body>

</html>