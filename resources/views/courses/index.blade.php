@extends('layouts.app')

@section('content')
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTCFC3S" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>

  <div id="subtopnav" onmousedown="startscrolling_subtopnav(event)" onmousemove="scrolling_subtopnav(event)"
    onmouseup="endscrolling_subtopnav(event)" onclick="return pellessii(event)">
    <div id="scroll_left_btn" class="w3-hide-medium w3-hide-small">
      <span onmousedown="scrollmenow(-1)" onmouseup="stopscrollmenow()"
        onmouseout="stopscrollmenow()">&nbsp;&nbsp;&nbsp;&#10094;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    </div>
    <div id="menubtn_container">
      <span>

        <a href='javascript:void(0);' class='topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button ga-nav'
          style="line-height:1.1;padding-top:8px!important;padding-bottom:8px!important;" onclick='open_menu()'
          title='Menu'></a>

      </span>
    </div>
    <a href="default.html" class="ga-nav subtopnav_firstitem" title="HTML Tutorial">HTML</a>
    <a href="../css/default.html" class="ga-nav" title="CSS Tutorial">CSS</a>
    <a href="../js/default.html" class="ga-nav" title="JavaScript Tutorial">JAVASCRIPT</a>
    <a href="javascript:void(0)" style="width:50px;visibility:hidden;"></a>
    <div id="btn_container_subtopnav">
      <div id="scroll_right_btn" class="w3-hide-medium w3-hide-small">
        <span onmousedown="scrollmenow(1)" onmouseup="stopscrollmenow()"
          onmouseout="stopscrollmenow()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#10095;&nbsp;&nbsp;&nbsp;</span>
      </div>
    </div>
  </div>



  <div class='w3-sidebar w3-collapse' id='sidenav'>
    <div id='leftmenuinner'>
      <div id='leftmenuinnerinner'>
        <!--  <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
        <h2 class="left"><span class="left_h2">HTML</span> Tutorial</h2>
        <a target="_top" href="default.html">HTML HOME</a>
        <a target="_top" href="html_intro.html">HTML Introduction</a>
        <a target="_top" href="html_editors.html">HTML Editors</a>
        <a target="_top" href="html_basic.html">HTML Basic</a>
        <a target="_top" href="html_elements.html">HTML Elements</a>
        <a target="_top" href="html_attributes.html">HTML Attributes</a>
        <a target="_top" href="html_headings.html">HTML Headings</a>
        <a target="_top" href="html_paragraphs.html">HTML Paragraphs</a>
        <a target="_top" href="html_styles.html">HTML Styles</a>
        <a target="_top" href="html_formatting.html">HTML Formatting</a>
        <a target="_top" href="html_quotation_elements.html">HTML Quotations</a>
        <a target="_top" href="html_comments.html">HTML Comments</a>
        <a target="_top" href="html_colors.html">HTML Colors</a>
        <div class="tut_overview">
          <a target="_top" href="html_colors.html">Colors</a>
          <a target="_top" href="html_colors_rgb.html">RGB</a>
          <a target="_top" href="html_colors_hex.html">HEX</a>
          <a target="_top" href="html_colors_hsl.html">HSL</a>
        </div>
        <a target="_top" href="html_css.html">HTML CSS</a>
        <a target="_top" href="html_links.html">HTML Links</a>
        <div class="tut_overview">
          <a target="_top" href="html_links.html">Links</a>
          <a target="_top" href="html_links_colors.html">Link Colors</a>
          <a target="_top" href="html_links_bookmarks.html">Link Bookmarks</a>
        </div>
        <a target="_top" href="html_images.html">HTML Images</a>
        <div class="tut_overview">
          <a target="_top" href="html_images.html">Images</a>
          <a target="_top" href="html_images_imagemap.html">Image Map</a>
          <a target="_top" href="html_images_background.html">Background Images</a>
          <a target="_top" href="html_images_picture.html">The Picture Element</a>
        </div>
        <a target="_top" href="html_favicon.html">HTML Favicon</a>
        <a target="_top" href="html_page_title.html">HTML Page Title</a>
        <a target="_top" href="html_tables.html">HTML Tables</a>
        <div class="tut_overview">
          <a target="_top" href="html_tables.html">HTML Tables</a>
          <a target="_top" href="html_table_borders.html">Table Borders</a>
          <a target="_top" href="html_table_sizes.html">Table Sizes</a>
          <a target="_top" href="html_table_headers.html">Table Headers</a>
          <a target="_top" href="html_table_padding_spacing.html">Padding &amp; Spacing</a>
          <a target="_top" href="html_table_colspan_rowspan.html">Colspan &amp; Rowspan</a>
          <a target="_top" href="html_table_styling.html">Table Styling</a>
          <a target="_top" href="html_table_colgroup.html">Table Colgroup</a>
        </div>
        <a target="_top" href="html_lists.html">HTML Lists</a>
        <div class="tut_overview">
          <a target="_top" href="html_lists.html">Lists</a>
          <a target="_top" href="html_lists_unordered.html">Unordered Lists</a>
          <a target="_top" href="html_lists_ordered.html">Ordered Lists</a>
          <a target="_top" href="html_lists_other.html">Other Lists</a>
        </div>
        <a target="_top" href="html_blocks.html">HTML Block &amp; Inline</a>
        <a target="_top" href="html_div.html">HTML Div</a>
        <a target="_top" href="html_classes.html">HTML Classes</a>
        <a target="_top" href="html_id.html">HTML Id</a>
        <a target="_top" href="html_iframe.html">HTML Iframes</a>


        <br><br>
      </div>
    </div>
  </div>
  <div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>

    <div class='w3-row w3-white'>

      <div class='w3-col l10 m12' id='main'>
        <div id='mainLeaderboard' style='overflow:hidden;'>
          <!-- MainLeaderboard-->

          <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
          <div id="adngin-main_leaderboard-0"></div>
          <!-- adspace leaderboard -->

        </div>

        <h1>HTML<span class="color_h1"> Tutorial</span></h1>


        <div class="w3-panel w3-info intro">
          <p>HTML is the standard markup language for Web pages.</p>
          <p>With HTML you can create your own Website.</p>
          <p>HTML is easy to learn - You will enjoy it!</p>
        </div>
        <hr>

        <h2>Easy Learning with HTML &quot;Try it Yourself&quot;</h2>
        <p>With our &quot;Try it Yourself&quot; editor, you can edit the HTML code and view the
          result:</p>

        <div class="w3-example">
          <h3>Example</h3>
          <div class="w3-code notranslate htmlHigh">
            &lt;!DOCTYPE html&gt;<br>
            &lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;Page Title&lt;/title&gt;<br>
            &lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;h1&gt;This is a Heading&lt;/h1&gt;<br>&lt;p&gt;This is a
            paragraph.&lt;/p&gt;<br><br>
            &lt;/body&gt;<br>&lt;/html&gt;
          </div>
          <a class="w3-btn w3-margin-bottom" href="tryitfb35.html?filename=tryhtml_default" target="_blank">Try it
            Yourself &raquo;</a>
        </div>
        <p><strong>Click on the &quot;Try it Yourself&quot; button to see how it works.</strong></p>
        <hr>

        <h2>HTML Examples</h2>
        <p>In this HTML tutorial, you will find more than 200 examples. With our online
          &quot;Try it Yourself&quot; editor, you can edit and test each example yourself!</p>
        <p><a href="html_examples.html" class="ws-btn ws-grey ws-hover-black">Go to HTML Examples!</a></p>
        <hr>
        <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
          <!-- MidContent -->
          <!-- <p class="adtext">Advertisement</p> -->

          <div id="adngin-mid_content-0"></div>

        </div>
        <hr>
        <h2>HTML Exercises</h2>
        <p>This HTML tutorial also contains nearly 100 HTML exercises.</p>
        <form autocomplete="off" id="w3-exerciseform"
          action="https://www.w3schools.com/html/exercise.asp?filename=exercise_html_attributes1" method="post"
          target="_blank">
          <h2>Test Yourself With Exercises</h2>
          <div class="exercisewindow">
            <h2>Exercise:</h2>
            <p>Add a "tooltip" to the paragraph below with the text "About W3Schools".</p>
            <div class="exerciseprecontainer">
              &lt;p <input name="ex1" maxlength="5" style="width: 54px;">="About W3Schools"&gt;W3Schools is a web
              developer's site.&lt;/p&gt;
            </div>
            <br>
            <button type="submit" class="w3-btn w3-margin-bottom">Submit Answer &raquo;</button>
            <p><a target="_blank" href="exercise4b52.html?filename=exercise_html_attributes1">Start the Exercise</a></p>
          </div>
        </form>
        <hr>
        <h2>HTML Quiz Test</h2>
        <p>Test your HTML skills with our HTML Quiz!</p>
        <p><a href="html_quiz.html" class="ws-btn w3-blue">Start HTML Quiz!</a></p>
        <hr>
        <style>
          #img_mylearning {
            max-width: 100%;
          }
        </style>
        <h2>My Learning</h2>

        <p>Track your progress with the free "My Learning" program here at W3Schools.</p>
        <p>Log in to your account, and start earning points!</p>
        <p>This is an optional feature. You can study at W3Schools without using My Learning.</p>

      </div>
    </div>

  </div>
  @endsection
