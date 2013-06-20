<?php
require_once('functions.php');
require_once('../inc/config.php');
$page = "Drop In";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu("dropIn");
openContent($page);
?>
<!--begin content-->

<img class="pageImg" src="photos/drop_in.jpg" />

<div class="clearB">
	<span id="oh" class="block bold size18 blue2">Summer Hours on The Farm</span>
	<span class="subtitle1 gray1">1+ years<br />
		Jun 24th - Aug 16th<br />
		Monday - Thursday 12:00pm - 2:00pm<br />
		Drop In No Reservation<br />
		<span class="size12 gray2">1 visit: $12</span>
	</span>

	<p class="pgraph">Come in from the hot sun into our cool indoor petting zoo. Our magical, USDA licensed, indoor petting zoo has a wide variety of animals including bunnies, chinchillas, guinea pigs, lizards, turtles, birds, tropical fish and more. An Art Farm employee is happy to show you our animals so you can have time to hold, pet and enjoy.</p>
</div>

<div class="formSeparator1 marginB10 marginT10 clearB"></div>

<div class="clearB">
	<span id="wpt" class="block bold size18 blue2">Play Time Package</span>
	<span class="red" style="font-size:12px;">This program will end June 13th and will resume on September 3rd.</span>
	<!--
	<span class="red" style="font-size:12px;">We will not be offering <strong>Drop Off</strong> during the week of March 25 - 29 due to our <a class='blue2' href='camp.php'>Spring Break Camp</a>.</span><br />
	<span class="red" style="font-size:12px;">We will be offering our regular drop in with adult during this week.</span>
	-->
	<span class="subtitle1 gray1">
		6 months+<br />
		Monday - Thursday | 12:30pm - 3:30pm<br />
	</span>
	<p class="pgraph">Come and play all afternoon or just for an hour. All ages can drop in for animal time, arts &amp; crafts and creative play in our playroom. You can pay by the day or save and buy the semester value package. All children must be accompanied by an adult.</p>

	<p class='pgraph'>
		$20 per child daily or buy the Fall semester value package for $550(valid September - December, Monday - Thursday)<br />
		Siblings receive 10% off<br />
		Each child must have their own playtime package
	</p>
	<!--<p class="pgraph">*Art Farm members receive 20% off current client package</p>-->

	<div id="" class="floatR clearB">
		<a id="btn1R" class="" target="_blank" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&RF=8909197&mode=0">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Pay Now!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<div class="formSeparator1 marginB10 marginT10 clearB"></div>

<div class="clearB">
	<span id="oh" class="block bold size18 blue2">Fun Fridays</span>
	<span class="red" style="font-size:12px;">Program ends June 21st and will resume September 6th</span>
<!--
	<span class="red" style="font-size:12px;">We will not be offering our <strong>Open House</strong> program on Friday, March 29 due to our <a class='blue2' href='camp.php'>Spring Break Camp</a>.</span>
-->
	<span class="subtitle1 gray1">All ages <span class="size12">(Drop Off optional for 2+ years)</span><br />
		Friday 9:30am - 12:00pm<br />
		<a class="rust mouseCursor" onclick="window.open('open_house_schedule.php','ohSchedule','width=400,height=135,left=100,top=100');">View Schedule</a>
	</span>
	<span class="blue2 size13 block">One-Time Visit <span class="size12 normal gray2">(with or without caregiver) $45 | $30 for children currently registered in a class</span></span>
	<span class="blue2 size13 block">Value Passes (per semester) <span class="size12 normal gray2">5 visit: $200 | 10 visit: $350 | 20 visit: $600</span></span>
	<span class="subtitle1 gray1 size12">Value passes may only be shared with siblings</span>
	<span class="red" style="font-size:12px;">Reservations required 24 hours in advance for Drop Off</span>

	<p class="pgraph">Drop by during these 2&#189; hours for baking, arts/crafts, music, singing and plenty of cuddling time with the animals. To see the animals you must arrive between 9:30am and 10:00am.  The farm closes at 10:15am.<br />
		Drop Off is available but fills quickly. Priority goes to children enrolled in our programs.<br />
		Drop Off must be reserved, drop ins with adult always welcome without reservation.
	</p>
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" target="_blank" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&RF=8909197&mode=0">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Pay Now!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<div class="formSeparator1 marginB10 marginT10 clearB"></div>

<div class="clearB">
	<span id="motf" class="block bold size18 blue2">Mornings on The Farm</span>
	<span class="red" style="font-size:12px;">We will be closed 4th of July weekend.</span>
	<span class="subtitle1 gray1">1+ years<br />
		Year-round program<br />
		Saturday/Sunday 8am - 10am
	</span>
	<span class="size12 gray2">1 visit: $15 | Adults: $5 | Members: $5</span>

	<p class="pgraph">Where else in New York City can you begin your day on the farm?  With a basket full of hay and goodies, you and your children can spend the morning feeding and snuggling animals right here in our indoor farm on the Upper East Side.</p>
</div>

<div class="formSeparator1 marginB10 marginT10 clearB"></div>

<div class="clearB">
	<span id="mc" class="block bold size18 blue2">Farm Foodies Cooking Class</span>
	<span class="subtitle1 rust">
	<span class="subtitle1 gray1">After-school/weekend program<br />
		Monday 3:30pm - 4:30pm | 2 - 8 years mixed ages<br />
		Thursday 3:30pm - 4:30pm | 2 - 8 years mixed ages<br />
		Saturday 9am - 10am | 2 - 8 years<br />
	</span>
	<span class='red size12'>Only the Thursday class is offered during Summer. Regular schedule resumes after September 3rd.</span><br />
	<a class="rust mouseCursor" onclick="window.open('mini_chef_schedule.php','mcSchedule','width=400,height=275,left=100,top=100,scrollbars=yes');">View Cooking Schedule</a><br />
	<span class="size12 gray2">Drop In: $40 | Winter: $444 | Spring: $444 | Fall: $555</span><br />

	<p class="pgraph">Farm Fresh and Seasonal! Finally your child can enjoy a cooking class where they learn about the basics of cooking and the importance of fresh ingredients as well. Please join Chef Sylvie in smelling mint, shaping brioche, peeling rhubarb, cutting cookies and tasting new fresh fruits and vegetables. Winter Spring Summer and Fall Chef Sylvie creates a seasonal organic menu from around the globe. Your kids will embark on a cooking and sensory adventure while developing their taste buds for food fresh from the farm.</p>

	<div id="" class="floatR clearB">
		<a id="btn1R" class="" target="_blank" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&RF=8909197&mode=0">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register Now!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<!--end content-->
<?php
closeContent();
drawFooter();
?>