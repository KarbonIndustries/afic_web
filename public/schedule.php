<?php
require 'functions.php';
$page = "Schedule";
openHeader($page);
includeJs();
closeHeader();
drawMainMenu();
drawActivitiesMenu();
openContent($page, "schedule");
$curYear  = 2014;
$nextYear = $curYear + 1;
?>
<!--begin content-->

<div class="floatL fullWidth">
  <!--<a class="rust" href="#summer">Click for summer schedule</a>-->
  <div class="floatR marginB15">
  <script type="text/javascript">
    drawIcon("data/af_class_schedule.pdf", "download", "rust mouseCursor", "floatL", "Download printable version", "floatL marginT5 size14", false, "");
  </script>
  </div>
  <div id="scheduleSemesterDates" class="clearB grayBorderB1 padB10 alignC">
    <span class="blue2 bold marginL10">Winter 2018 Semester</span> <span class="gray2">Jan 8<sup>th</sup> - Mar 31<sup>st</sup></span><br />
    <span class="blue2 bold marginL10">Spring 2018 Semester</span> <span class="gray2">Apr 2<sup>nd</sup> - Jun 23<sup>rd</sup></span><br />
    <span class="blue2 bold marginL10">Summer 2018 Semester</span> <span class="gray2">Jun 25<sup>th</sup> - Aug 17<sup>th</sup></span><br />
    <span class="blue2 bold marginL10">Fall 2018 Semester</span> <span class="gray2">Sept 4<sup>th</sup> - Dec 22<sup>nd</sup></span>
  </div>
</div>

<div id="scheduleShell" class="marginB35">
  <div id="scheduleDay" class="">
<!-- ========== -->
<!-- = MONDAY = -->
<!-- ========== -->
    <div class="scheduleDayTitle">Monday</div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classRSA">
        Rock, Smocks &amp; Animals
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">
          (1 - 4 years)<br />
          9:30am - 10:30am<br />
        </div>
        <div id="scheduleClassTime">
          (2 - 3 years)<br />
          10:30am - 11:30am<br />
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classFarmFriends">
        Farm Friends
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">18m - 2&frac12; years<br />
          9:30am - 11:00am
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classWPT">
        Play Time
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">Drop In<br />6 months+<br />
          12:30pm - 3:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classBP">
        Birthday Parties
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">4:30pm - 6:30pm</div>
      </div>
    </div>
  </div>
  <!--end of day-->

  <div id="scheduleDay" class="">
<!-- =========== -->
<!-- = TUESDAY = -->
<!-- =========== -->
    <div class="scheduleDayTitle">Tuesday</div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classRSA">
        Rock, Smocks &amp; Animals
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">1 - 4 years<br />
          9:30am - 10:30am
        </div>
        <div id="scheduleClassTime">14 - 24 months<br />
          10:30am - 11:30am
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classFarmFriends">
        Farm Friends
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">18m - 2&frac12; years<br />
          9:30am - 11:00am
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classPG">
        Two's Group
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">2 years<br />
          9:30am - 11:45am<br />
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classWPT">
        Play Time
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">Drop In<br />6 months+<br />
          12:30pm - 3:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classRSA">
        Rock, Smocks &amp; Animals
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">1 - 4 years<br />
          3:30pm - 4:30pm
        </div>
        <div id="scheduleClassTime">Summer only</div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classACC">
        Animal Care Class
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">4 - 6 years<br />
          3:30pm - 4:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classMM">
        Mini Masterpieces
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">4 - 8 years<br />
          3:30pm - 4:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classBP">
        Birthday Parties
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">4:30pm - 6:30pm</div>
      </div>
    </div>
  </div>
  <!--end of day-->

  <div id="scheduleDay" class="">
<!-- ============= -->
<!-- = WEDNESDAY = -->
<!-- ============= -->
    <div class="scheduleDayTitle">Wednesday</div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classRSA">
        Rock, Smocks &amp; Animals
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">1 - 4 years<br />
          9:30am - 10:30am
        </div>
        <div id="scheduleClassTime">2 - 3 years<br />
          10:30am - 11:30am
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classAFBK">
        Art for Busy Kids
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">2 - 6 years<br />
          9:30am - 10:30am
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classWPT">
        Play Time
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">Drop In<br />6 months+<br />
          12:30pm - 3:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classAFBK">
        Art for Busy Kids
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">2 - 6 years<br />
          3:30pm - 4:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classRSA">
        Rock, Smocks &amp; Animals
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">1 - 4 years<br />
          3:30pm - 4:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classACC">
        Animal Care Class
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">5 - 7 years<br />
          3:30pm - 4:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classBP">
        Birthday Parties
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">4:30pm - 6:30pm</div>
      </div>
    </div>
  </div>
  <!--end of day-->

  <div id="scheduleDay" class="">
<!-- ============ -->
<!-- = THURSDAY = -->
<!-- ============ -->
    <div class="scheduleDayTitle">Thursday</div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classRSA">
        Rock, Smocks &amp; Animals
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">14 - 24 months<br />
          9:30am - 10:30am
        </div>
        <div id="scheduleClassTime">2 - 3 years<br />
          10:30am - 11:30am
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classFarmFriends">
        Farm Friends
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">18m - 2&frac12; years<br />
          9:30am - 11:00am
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classPG">
        Two's Group
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">2 years<br />
          9:30am - 11:45am<br />
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classFHS">
        Homeschool Science Class
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">6 - 8 years<br />
          11:30am - 12:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classWPT">
        Play Time
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">Drop In<br />6 months+<br />
          12:30pm - 3:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classRSA">
        Rock, Smocks &amp; Animals
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">1 - 4 years<br />
          3:30pm - 4:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classFF">
        Farm Foodies
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">2 - 8 years<br />
          11:30am - 12:30pm
        </div>
        <div id="scheduleClassTime">2 - 8 years<br />
          3:30pm - 4:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classACC">
        Animal Care Class
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">4 - 6 years<br />
          3:30pm - 4:30pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classBP">
        Birthday Parties
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">4:30pm - 6:30pm</div>
      </div>
    </div>
  </div>
  <!--end of day-->

  <div id="scheduleDay" class="">
<!-- ========== -->
<!-- = FRIDAY = -->
<!-- ========== -->
    <div class="scheduleDayTitle">Friday</div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classMT">
        Fun Fridays
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">18 months+<br />
          9:30am - 12:00pm
        </div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classBP">
        Birthday Parties
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">1:30pm - 3:30pm</div>
        <div id="scheduleClassTime">4:30pm - 6:30pm</div>
      </div>
    </div>
  </div>
  <!--end of day-->

  <div id="scheduleDay" class="">
<!-- =================== -->
<!-- = SATURDAY/SUNDAY = -->
<!-- =================== -->
    <div class="scheduleDayTitle">Sat/Sun</div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classMOTF">
        Mornings on<br />The Farm
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">All Ages<br />Saturday/Sunday<br />8:00am - 10:00am</div>
      </div>
    </div>
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classFF">
        Farm Foodies
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">Saturday<br />2 - 8 years<br />
          9:00am - 10:00am<br />
        </div>
      </div>
    </div>
    <!-- <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classAT">
        Animal Tales
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">Saturday<br />3 - 5 years<br />
          9:30am - 10:30am<br />
        </div>
      </div>
    </div> -->
    <div id="scheduleClass">
      <div id="scheduleClassTitle" class="classBP">
        Birthday Parties
      </div>
      <div id="scheduleClassInfo" class="">
        <div id="scheduleClassTime">Saturday/Sunday<br />10:30am - 12:30pm</div>
        <div id="scheduleClassTime">Saturday/Sunday<br />1:30pm - 3:30pm</div>
        <div id="scheduleClassTime">Saturday/Sunday<br />4:30pm - 6:30pm</div>
      </div>
    </div>
  </div>
  <!--end of day-->
</div>
<!--end of spring fall schedule shell-->


<!--end content-->
<?php
closeContent();
drawFooter();
?>
