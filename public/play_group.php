<?php
require 'functions.php';
require_once('../inc/config.php');
$page = "Play Group";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu("playGroup");
openContent($page);
?>
<!--begin content-->

<img class='pageImg' src='photos/play_group.jpg' />
<span class='red' style='font-size:12px'>The Art Farm does not offer make-up classes for Play Group</span>
<span class='subtitle1 gray1'>2 Year-Old Independent Play Group<br />
Monday, Tuesday, Wednesday, or Thursday 9:30am-11:30am</span>
<span class='gray1'>Spring 1 day/week <span class='size12 gray2'>$636</span> | 2 days/week <span class='size12 gray2'>$1,272</span></span><br />
<span class='gray1'>Summer 1 day/week <span class='size12 gray2'>$424</span> | 2 days/week <span class='size12 gray2'>$848</span></span><br />
<span class='gray1'>Fall 1 day/week <span class='size12 gray2'>$848</span> | 2 days/week <span class='size12 gray2'>$1,696</span></span><br />
<span class='gray1'>Winter 1 day/week <span class='size12 gray2'>$689</span> | 2 days/week <span class='size12 gray2'>$1,378</span></span><br />

<p class='pgraph'>All children joining the program must be 2 years old by the
beginning of the enrolled semester. Our warm, cozy atmosphere and our nurturing
staff will help your child to play independently and relax. And best of all, our
animals will get their attention. All of this combined will allow your child to
feel safe and get ready to play on their own with our teachers. Our Play Group
is designed to encourage independence, help develop social skills, and promote
interaction among the children in the group.  this class is closed at eight
2-year-olds and two teachers. Our program is based on creative play, and lets
children explore and enjoy our classroom with toys, puzzles, and blocks, as well
as enjoy the parachute and familiar songs in our music room. They will also get
a chance to create masterpieces during art, have a healthy snack and best of all,
cuddle with our animals.</p>

<p class='gray1'>All children joining the program must be 2 years old by the first day of the semester.</p>
<p class='gray1'>All parents and caregivers must remain on premises.</p>
<p class='gray1'>Enrolled families will be given priority registration for the next semester.</p>
<p class='gray1'>This is a non-refundable program once registered.</p>
<p class='gray1'>Class is based on rolling admissions.</p>

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
