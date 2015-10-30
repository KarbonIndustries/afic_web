<?php
require 'functions.php';
$page = "Play Group";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu("playGroup");
openContent($page);
?>
<!--begin content-->

<img class="pageImg" src="photos/play_group.jpg" />
<span class="red" style="font-size:12px">The Art Farm does not offer make-up classes for Play Group</span>
<span class="subtitle1 gray1">Gentle Separation Program<br />
2 years<br />
Monday-Thursday 9:30am-11:30am (Winter, Spring, Fall)<br />
Monday/Wednesday 2:30pm-4:30pm (Summer)</span>
<span class="gray1">1 day/week </span><span class="size12 gray2">Winter: $684 | Spring: $636 | Summer: $425 | Fall: $855</span><br />
<span class="gray1">2 days/week </span><span class="size12 gray2">Winter: $1,368 | Spring: $1,272 | Summer: $850 | Fall: $1,710</span><br />
<span class='gray1'>After registration, Play Group is a non-refundable program.</span>

<p class="pgraph">Our warm, cozy atmosphere and our nurturing staff will help your child to separate and relax. And best of all, our animals will get their attention. All of this combined will allow your child to feel safe and get ready to separate. Our Play Group is designed to encourage independence through separation, help develop social skills, and promote interaction among the children in the group. This class is closed at eight 2 year olds and two teachers. Our program is based on creative play, and lets children explore and enjoy our preschool classroom with toys, puzzles, and blocks, as well as enjoy the parachute and familiar songs in our music room. They will also get a chance to create masterpieces during art, have a healthy snack and best of all, cuddle with our animals.</p>

<h3 class='register_heading'>Choose a semester to register now!</h3>
<a id="" class="register_btn register_btn__winter" href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=1202501&location=455804" target="_blank">Winter</a>
<a id="" class="register_btn register_btn__summer" href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=979504" target="_blank">Summer</a>
<a id="" class="register_btn register_btn__fall" href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=986404" target="_blank">Fall</a>

<div class="clearB high60"></div>

<?php
closeContent();
drawFooter();
?>
