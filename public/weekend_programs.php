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

<img class='pageImg' src='photos/weekend_programs.jpg' />

<!-- ======================== -->
<!-- = MORNINGS ON THE FARM = -->
<!-- ======================== -->
<span class='title2 blue2'>Mornings on The Farm</span>
<span class='subtitle1 gray1'>1+ years<br />
	Year-round program<br />
	Saturday/Sunday 8am - 10am
</span>
<span class='size12 gray2'>1 visit - Children: $15 | Adults: $5 | Members: $5</span>

<p class='pgraph'>Where else in New York City can you begin your day on the farm?  With a basket full of hay and goodies, you and your children can spend the morning feeding and snuggling animals right here at our indoor farm on the Upper East Side.</p>

<!-- ================ -->
<!-- = FARM FOODIES = -->
<!-- ================ -->
<span class='title2 blue2'>Farm Foodies Cooking Class</span>
<!--
<span class='red' style='font-size:12px;'>No Saturday classes June 27th - September 5th</span>
-->
<span class='subtitle1 gray1'>After-school/weekend program<br />Saturday 9am - 10am | 2-8 years<br />
	<a class='rust mouseCursor' onclick='window.open("mini_chef_schedule.php","mcSchedule","width=400,height=275,left=100,top=100,scrollbars=yes");'>View Cooking Schedule</a><br />
	<span class='size12 gray2'>Drop In: $40 | Winter: $418 | Spring: $468 | Summer: $304 | Fall: $585</span><br />
</span>

<p class='pgraph'>Farm Fresh and Seasonal! Finally your child can enjoy a cooking class where they learn about the basics of cooking and the importance of fresh ingredients as well. Please join Chef Sylvie in smelling mint, shaping brioche, peeling rhubarb, cutting cookies and tasting new fresh fruits and vegetables. Winter Spring Summer and Fall Chef Sylvie creates a seasonal organic menu from around the globe. Your kids will embark on a cooking and sensory adventure while developing their taste buds for food fresh from the farm.</p>

<h3 class='register_heading'>Choose a semester to register now!</h3>
<a id='' class='register_btn register_btn__winter' href='<?=WINTER_REGISTRATION_URL?>' target='_blank'>Winter</a>
<a id='' class='register_btn register_btn__spring' href='<?=SPRING_REGISTRATION_URL?>' target='_blank'>Spring</a>
<a id='' class='register_btn register_btn__summer' href='<?=SUMMER_REGISTRATION_URL?>' target='_blank'>Summer</a>
<a id='' class='register_btn register_btn__fall' href='<?=FALL_REGISTRATION_URL?>' target='_blank'>Fall</a>

<div class='clearB high60'></div>

<!-- ================ -->
<!-- = ANIMAL TALES = -->
<!-- ================ -->
<!-- <div class='clearB'>
	<span id='rsa' class='title2 blue2'>Animal Tales</span>
	<span class='subtitle1 gray1'>8 week course | 3-5 years<br />
		Saturday: 9:30am - 10:30am<br />
	<span class='size12 gray2'>Oct. 5 - Nov. 23: $240</span></span>
	<p class='pgraph'>Fun on the farm is what this program is all about! Animal Tales gives you and your family a chance to get to know our friendly animals in a new way. Each week, you will participate in interactive stories, explore with discovery kits, and have up close encounters while you uncover mysteries of the animal kingdom. The fun continues as we stroll through our unique indoor petting zoo so you can say good morning to your favorite animal friends. Other activities include making toys for the animals, scavenger hunts, or playing eye spy as we instill the love of learning about the natural world. We look forward to teaching you and your family about the importance of being kind to all living creatures through Animal Tales!</p>

	<div id='' class='floatR clearB'>
		<a id='btn1R' class='' href='https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&amp;RF=3709104&amp;mode=0' target='_blank'>
			<div class='btn1RR'><span class='invisible'>.</span></div><div class='btn1RC'>&#187; Register Now!</div><div class='btn1RL'><span class='invisible'>.</span></div>
		</a>
	</div>
</div> -->

<!--end content-->
<?php
closeContent();
drawFooter();
?>
