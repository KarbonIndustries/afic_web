<?php
require_once('functions.php');
require_once('../inc/config.php');
$page = "Classes";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu("classes");
openContent($page);
?>
<!--begin content-->
<div class="clearB">
	<span id="rsa" class="title2 blue2">Rock, Smocks and Animals</span>
	<img class="padR10 padT10 padB10" src="photos/rsa_1.jpg" /><img class="padR10 padT10 padB10" src="photos/rsa_2.jpg" /><img class="padR10 padT10 padB10" src="photos/rsa_3.jpg" />
	<span class="subtitle1 gray1">Adult Participation | Music, Art and Animals<br />14-24 months | 1-4 years mixed ages | 2-3 years<br />
	<a class="rust" href="schedule.php">View Schedule</a><br />
	<span class="size12 gray2">Winter: $444 | Spring: $444 | Summer: $296 | Fall: $592</span></span>
	<p class="pgraph">Join us on an animal adventure as we jump with the frogs and hop with the bunnies and learn about a new animal every week. We start out groovin' to the guitar, bouncing with the balls and dancing with our friends as we sing along with all types of instruments. As we wait with anticipation to meet the star of the show, "The Animal of The Week", we play and learn with toys that are similar to our animal visitor and just before he comes we settle down for a story. Once our special animal appears we get to touch, enjoy, and hear all about him. Every other week we pull out the paint, glue, feathers, sand and more as we create an animal masterpeice of our own. This one-of-a-kind class isn't over until you meet all of our friends in our indoor petting zoo.</p>

	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&amp;RF=3709104&amp;mode=0" target="_blank">
			<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register Now!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>

<!-- ============================ -->
<!-- = ORIGINAL REGISTER BUTTON = -->
<!-- ============================ -->
<!--
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=class">
			<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
-->
</div>

<div class="clearB">
	<span id="kcc" class="title2 blue2">Animal Care Class</span>
	<img class="padR10 padT10 padB10" src="photos/kcc.jpg" />
	<span class="subtitle1 gray1">After-school program<br />4-7 years<br />
	<a class="rust" href="schedule.php">View Schedule</a><br />
	<span class="size12 gray2">Winter: $444 | Spring: $444 | Summer: $296 | Fall: $592</span></span>
	<p class="pgraph">This one-of-a-kind after school program will give your child the rare opportunity to spend time with live animals and to develop the important science skills of observation, classification and communication.  Using a hands-on approach to learning, your child will participate in age appropriate science activities, stories, fun games and creative crafts. Every session will include actively caring for our friendly critters, up-close animal encounters and time to record observations.  Before it's time to go the students can read an animal themed book or just relax with a favorite creature on the Farm. This one of a kind experience will instill in your child the importance of care, respect and responsibility for all living creatures.</p>

	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&amp;RF=3709104&amp;mode=0" target="_blank">
			<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register Now!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>

<!-- ============================ -->
<!-- = ORIGINAL REGISTER BUTTON = -->
<!-- ============================ -->
<!--
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=class">
			<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
-->
</div>

<div class="clearB">
	<a name="minichef" id="minichef"></a><span id="mc" class="title2 blue2">Farm Foodies Cooking Class</span>
	<img class="padR10 padT10 padB10" src="photos/mc.jpg" />
	<br />
	<span class="subtitle1 gray1">After-school program<br />
		Monday: 3:30pm - 4:30pm | 2-8 years mixed ages<br />
		Thursday: 3:30pm - 4:30pm | 2-8 years mixed ages<br />
	    Saturday: 9:00am - 10:00am | 2-8 years mixed ages<br />
		<a class="rust mouseCursor" onclick="window.open('mini_chef_schedule.php','mcSchedule','width=480,height=400,left=100,top=100,scrollbars=yes');">View Cooking Schedule</a><br />
		<span class="size12 gray2">Drop In: $40 | Winter: $456 | Spring: $456 | Summer: $304 | Fall: $608</span><br />
	</span>
	<p class="pgraph">Farm Fresh and Seasonal! Finally your child can enjoy a cooking class where they learn about the basics of cooking and the importance of fresh ingredients as well. Please join Chef Sylvie in smelling mint, shaping brioche, peeling rhubarb, cutting cookies and tasting new fresh fruits and vegetables. Winter Spring Summer and Fall Chef Sylvie creates a seasonal organic menu from around the globe. Your kids will embark on a cooking and sensory adventure while developing their taste buds for food fresh from the farm.</p>

	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&amp;RF=3709104&amp;mode=0" target="_blank">
			<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register Now!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>

<!-- ============================ -->
<!-- = ORIGINAL REGISTER BUTTON = -->
<!-- ============================ -->
<!--
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=class">
			<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
-->
</div>

<!--end content-->
<?php
closeContent();
drawFooter();
?>