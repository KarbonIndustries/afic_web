<?php
require_once('functions.php');
require_once('../inc/config.php');
$page = "Weekend Programs";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu("weekendPrograms");
openContent($page);
?>
<!--begin content-->

<img class="pageImg" src="photos/weekend_programs.jpg" />

<!-- ======================== -->
<!-- = MORNINGS ON THE FARM = -->
<!-- ======================== -->

<span class="title2 blue2">Mornings on The Farm<br /></span>
<span class="subtitle1 gray1">1+ years<br />
Saturday/Sunday 8am-10am</span>
<span class="size12 gray2">1 visit: $15 | Adults: $5 | Members: $5</span>

<p class="pgraph">Where else in New York City can you begin your day on the farm?  With a basket full of hay and goodies, you and your children can spend the morning feeding and snuggling animals right here at our indoor farm on the Upper East Side.</p>


<!-- ============= -->
<!-- = MINI CHEF = -->
<!-- ============= -->

<img class="" src="images/mc_logo.png" /><span class="title2 blue2">Mini Chef Cooking Class</span>

<span class="subtitle1 gray1">After-school/weekend program<br />Saturday 9am - 10am | 2-8 years<br />
	<a class="rust mouseCursor" onclick="window.open('mini_chef_schedule.php','mcSchedule','width=400,height=275,left=100,top=100,scrollbars=yes');">View Cooking Schedule</a><br />
	<span class="size12 gray2">Drop In: $40 | Winter: $444 | Spring: $444 | Fall: $555</span><br />
</span>

<p class="pgraph">Get ready to mix, measure and create as Mini Chef brings their "Culinary Playground" to The Art Farm. The popular children's cooking program, Mini Chef helps kids of all ages develop a love of cooking through cooking classes and birthday parties with age appropriate menus. It's all about learning about good nutrition and creating good food through the hands-on cooking activities. Creating local and global cuisine, Mini Chef's head chef, Sylvie Berger, brings children on a taste bud voyage and cooking adventure. Create, make, eat, enjoy!</p>

<div id="" class="floatR clearB">
	<a id="btn1R" class="" href="register.php?d=class">
	<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register Now!</div><div class="btn1RL"><span class="invisible">.</span></div>
	</a>
</div>

<!--end content-->
<?php
closeContent();
drawFooter();
?>