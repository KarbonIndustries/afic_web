<?php
require 'functions.php';
require_once('../inc/config.php');
$page = "Two's Group";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu("playGroup");
openContent($page);
?>
<!--begin content-->

<img class='pageImg' src='photos/twos_group.jpg' />
<span class='red' style='font-size:12px'>The Art Farm does not offer make-up classes for Two's Group</span>
<p class='subtitle1 bold gray1'>2 Year-Old Separation Two's Group</p>

<span class='bold gray1'>Two's Summer Camp</span><br />
<span class='gray1'>June 27<sup>th</sup> - August 17<sup>th</sup></span><br />
<span class='gray1'>Tuesday and/or Thursday 9:30am - 11:45am</span><br />
<span class='gray1'>Summer 1day/week $480 | 2 days/week $960</span>

<div class='clearB high20'></div>

<span class='bold gray1'>School Year</span><br />
<span class='gray1'>September 5<sup>th</sup> - December 21<sup>st</sup></span><br />
<span class='gray1'>Fall Tuesday and/or Thursday 9:30am - 11:45am</span><br />
<span class='gray1'>Fall 1day/week $960 | 2 days/week $1,920</span>

<div class='clearB high20'></div>

<p class='pgraph'>
  Is your child two years old and ready to separate and play on their own? Then
  this will be the program for you. Our warm, cozy atmosphere and our nurturing
  staff will help your child to separate and best of all, our animals will get
  their attention. All of this combined will allow your child to feel safe and
  get ready to play on their own with our teachers. Our Two's Play Group is
  designed to encourage independence, help develop social skills, and promote
  interaction among the children in their class.
</p>

<p class='pgraph'>
  Our program is based on creative play, and lets children explore and enjoy
  our classroom with toys, puzzles, and blocks, and participate in a small
  circle time lead by our teachers. The children will also enjoy the parachute
  and familiar songs in our music room. They will also get a chance to create
  masterpieces during art, have a healthy snack and best of all, cuddle with
  our animals.
</p>

<p class='pgraph'>
  During our Summer months in our Summer Two's Camp, the children will do
  indoor water play in Play Time and our curriculum will focus on Summer
  themes. During the Fall and school year semesters, the children's curriculum
  will focus on a seasonal calendar.
</p>

<p class='gray1'>
  All children joining the program must be 2 years old by the first day of the
  semester.
</p>

<p class='gray1'>
  Enrolled families will be given priority registration for the next semester.
</p>

<p class='gray1'>This is a non-refundable program once registered.</p>

<p class='gray1'>
  The Art Farm does not offer make-up classes for this class.
</p>

<h3 class='register_heading'>Choose a semester to register now!</h3>
<a id='' class='register_btn register_btn__winter' href='<?=WINTER_REGISTRATION_URL?>' target='_blank'>Winter</a>
<a id='' class='register_btn register_btn__spring' href='<?=SPRING_REGISTRATION_URL?>' target='_blank'>Spring</a>
<a id='' class='register_btn register_btn__summer' href='<?=SUMMER_REGISTRATION_URL?>' target='_blank'>Summer</a>
<a id='' class='register_btn register_btn__fall' href='<?=FALL_REGISTRATION_URL?>' target='_blank'>Fall</a>

<div class='clearB high60'></div>

<?php
closeContent();
drawFooter();
?>
