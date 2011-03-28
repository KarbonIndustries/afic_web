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
<span class="subtitle1 gray1">Gentle Separation Program<br />
2 years<br />Monday- Thursday 9:30am-11:30am (Winter, Spring, Fall)<br />
Monday/Wednesday 2:30pm-4:30pm (Summer)</span>
<span class="gray1">1 day/week </span><span class="size12 gray2">Winter: $600 | Spring: $600 | Summer: $400 | Fall: $750</span><br />
<span class="gray1">2 days/week </span><span class="size12 gray2">Winter: $1,200 | Spring: $1,200 | Summer: $800 | Fall: $1,500</span>

<p class="pgraph">Our warm, cozy atmosphere and our nurturing staff will help your child to separate and relax. And best of all, our animals will get their attention. All of this combined will allow your child to feel safe and get ready to separate. Our Play Group is designed to encourage independence through separation, help develop social skills, and promote interaction among the children in the group. Our program is based on creative play, and lets children explore and enjoy our preschool classroom with toys, puzzles, and blocks, as well as enjoy the parachute and familiar songs in our music room. They will also get a chance to create masterpieces during art, have a healthy snack and best of all, cuddle with our animals.</p>

<div id="" class="floatR clearB">
	<a id="btn1R" class="" href="register.php?d=playGroup">
	<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
	</a>
</div>

<!--end content-->
<?php
closeContent();
drawFooter();
?>