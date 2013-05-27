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


<!-- ================ -->
<!-- = FARM FOODIES = -->
<!-- ================ -->

<span class="title2 blue2">Farm Foodies Cooking Class</span>

<span class="subtitle1 gray1">After-school/weekend program<br />Saturday 9am - 10am | 2-8 years<br />
	<a class="rust mouseCursor" onclick="window.open('mini_chef_schedule.php','mcSchedule','width=400,height=275,left=100,top=100,scrollbars=yes');">View Cooking Schedule</a><br />
	<span class="size12 gray2">Drop In: $40 | Winter: $456 | Spring: $456 | Summer: $304 | Fall: $570</span><br />
</span>

<p class="pgraph">Farm Fresh and Seasonal! Finally your child can enjoy a cooking class where they learn about the basics of cooking and the importance of fresh ingredients as well. Please join Chef Sylvie in smelling mint, shaping brioche, peeling rhubarb, cutting cookies and tasting new fresh fruits and vegetables. Winter Spring Summer and Fall Chef Sylvie creates a seasonal organic menu from around the globe. Your kids will embark on a cooking and sensory adventure while developing their taste buds for food fresh from the farm.</p>

<div id="" class="floatR clearB">
	<a id="btn1R" class="" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&RF=3709104&mode=0">
	<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register Now!</div><div class="btn1RL"><span class="invisible">.</span></div>
	</a>
</div>

<!--end content-->
<?php
closeContent();
drawFooter();
?>