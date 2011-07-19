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
	<span class="size12 gray2">Winter: $420 | Spring: $420 | Summer: $280 | Fall: $525</span></span>
	<p class="pgraph">Join us on an animal adventure as we jump with the frogs and hop with the bunnies and learn about a new animal every week. We start out groovin' to the guitar, bouncing with the balls and dancing with our friends as we sing along with all types of instruments. As we wait with anticipation to meet the star of the show, "The Animal of The Week", we play and learn with toys that are similar to our animal visitor and just before he comes we settle down for a story. Once our special animal appears we get to touch, enjoy, and hear all about him. Every other week we pull out the paint, glue, feathers, sand and more as we create an animal masterpeice of our own. This one-of-a-kind class isn't over until you meet all of our friends in our indoor petting zoo.</p>

	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=class">
			<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<div class="clearB">
	<span id="kcc" class="title2 blue2">Animal Care Class</span>
	<img class="padR10 padT10 padB10" src="photos/kcc.jpg" />
	<span class="subtitle1 gray1">After-school program<br />4-7 years<br />
	<a class="rust" href="schedule.php">View Schedule</a><br />
	<span class="size12 gray2">Winter: $420 | Spring: $320 | Summer: $280 | Fall: $525</span></span>
	<p class="pgraph">This one-of-a-kind after school program will give your child the rare opportunity to spend time with live animals and to develop the important science skills of observation, classification and communication.  Using a hands-on approach to learning, your child will participate in age appropriate science activities, stories, fun games and creative crafts. Every session will include actively caring for our friendly critters, up-close animal encounters and time to record observations.  Before it's time to go the students can read an animal themed book or just relax with a favorite creature on the Farm. This one of a kind experience will instill in your child the importance of care, respect and responsibility for all living creatures.</p>

	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=class">
			<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<div class="clearB">
	<span id="aam" class="title2 blue2">Art, Adventures and More</span>
	<img class="padR10 padT10 padB10" src="photos/aam.jpg" />
	<span class="subtitle1 gray1">After-school program <br />
	Tuesday: 3:30pm - 4:30pm | 4-12 years<br />
	<span class="size12 gray2">Drop In: $45 | Winter: $480 | Spring: $320 | Summer: $320 | Fall: $600</span></span>
    <p class="pgraph">Art, Adventures and More brings their art studio to The Art Farm. Children will learn techniques using acrylic paints, pastels, clay sculpting and other media. Classes will be led by two experienced artists who will educate through demonstrations and samples. Your child will be inspired and their imagination and creativity will flow. They will paint seascapes, underwater themes, landscapes, flora, and learn about the animals living in their natural habitats. There will also be an introduction to Master Artists of Impressionism, Expressionism, Contemporary Art, Caribbean Art and they will explore art across cultures. We connect the visual arts to other disciplines to interpret the world. Each child will take home their own "Masterpeice!"</p>
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=class">
			<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<div class="clearB">
	<a name="minichef" id="minichef"></a><img class="" src="images/mc_logo.png" /><span id="mc" class="title2 blue2">Mini Chef Cooking Class</span>
	<img class="padR10 padT10 padB10" src="photos/mc.jpg" />
	<br />
	<?= MINI_CHEF_MESSAGE_1 ?>
	<span class="subtitle1 gray1">After-school program<br />
	Thursday: 3:30pm - 4:30pm | 2-8 years mixed ages<br />
    Saturday: 9:00am - 10:00am | 2-8 years mixed ages<br />
	<br />
	<a class="rust mouseCursor" onclick="window.open('mini_chef_schedule.php','mcSchedule','width=400,height=280,left=100,top=100,scrollbars=yes');">View Cooking Schedule</a><br />
	<span class="size12 gray2">Drop In: $40 | Winter: $444 | Spring: $444 | Summer: $296 | Fall: $555</span></span>
	<p class="pgraph">Get ready to mix, measure and create as Mini Chef brings their "Culinary Playground" to The Art Farm. The popular children's cooking program, Mini Chef helps kids of all ages develop a love of cooking through cooking classes and birthday parties with age appropriate menus. It's all about learning about good nutrition and creating good food through the hands-on cooking activities. Creating local and global cuisine, Mini Chef's head chef, Sylvie Berger, brings children on a taste bud voyage and cooking adventure. Create, make, eat, enjoy!</p>
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=class">
			<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<!--end content-->
<?php
closeContent();
drawFooter();
?>