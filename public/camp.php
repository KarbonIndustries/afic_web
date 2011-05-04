<?php
require_once('functions.php');
require_once('../inc/config.php');
$page = "Camp";
openHeader($page);
openSwfObjCode();
embedFlash("flash/slideshow685400.swf", "slideshow3", 685, 400);
closeSwfObjCode();
closeHeader();
drawMainMenu();
drawActivitiesMenu("camp");
openContent($page);
?>
<!--begin content-->

<div id="slideshow3">

</div>


<div class="clearB">
<!--
<span class="title2 blue clearB marginT20">Holiday Camp 2010</span>
<span class="rust size16 italic">Spend your winter break with us!<br /><br/></span>

<div class="clearB">
<span class="title2 green1">Activities</span>
<span id="list1">
<ul class="gray1 size16 marginT5">
	<li>Live Music</li>
	<li>Cooking</li>
	<li>Arts & Crafts</li>
	<li>Animal Care</li>
<li>Science</li>
<li>Games</li>
	<li>Special events every day!</li>
</span>
</div>
	
<a name="summerChart"/>
<table id="" class="fullWidth marginB20 marginT15" cellpadding="0" cellspacing="1">
	<tr class="">
		<td class="wide130 blueBg2 white bold size13 pad5">
			Day 1<br />
			<span class="size12 normal">December 20th</span>
		</td>
		<td class="gray1 size12 pad5" valign="top">
			<strong>Monday:</strong> Spanish Music Party w/ Bilingual Birdies </td>
  </tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Day 2<br />
			<span class="size12 normal">December 21st</span>
		</td>
		<td valign="top" class="gray1 size12 pad5">
			<strong>Tuesday: </strong>Play Me a Story a Musical Story Experience </td>
  </tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Day 3<br />
			<span class="size12 normal">December 22nd</span>
		</td>
		<td class="gray1 size12 pad5" valign="top">
			<strong>Wednesday:</strong> Art Adventures and More Holiday Art Workshop </td>
  </tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Day 4<br />
			<span class="size12 normal">December 28th</span>
		</td>
		<td class="gray1 size12 pad5" valign="top">
			<strong>Tuesday:</strong> Josh Rand Magical Entertainment</td>
	</tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Day 5<br />
			<span class="size12 normal">December 29th</span>
		</td>
		<td class="gray1 size12 pad5" valign="top">
			<strong>Wednesday:</strong> Art w/ RePlayground - Recycled Holiday Art </td>
  </tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Day 6<br />
			<span class="size12 normal">December 30th</span>
		</td>
		<td class="gray1 size12 pad5" valign="top">
			<strong>Thursday:</strong> Miss Pinkie's Silly  Magic Show</td>
  </tr>
	
</table>
-->



<div class="clearB">
	<span class="title2 blue2">June Camp 2011</span>
	<?= CHECK_AVAILABILITY_MESSAGE_1 ?>
	<span class="subtitle1 gray1">May 23 - June 24(no camp Memorial Day)<br />
	9:30am - 12:30pm | 3-5 years<br />
	<span class="size12 gray2">Mon - Fri: $350 | Mon, Wed, Fri: $225 | Tues, Thurs: $150<br />
	Tuition is calculated by the number of weeks your child is enrolled</span></span>
	<p class="pgraph">Our June camp is a pre-summer camp experience. It is a time for your children to play outside, learn about our animals, create art and enjoy cooking. It is the perfect transition between school and summer camp.<br /><br /><span class="rust">Please see weekly themes below.</span></p>
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=juneCamp">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>
<a name="juneChart"/>
<table id="" class="fullWidth marginB20 marginT15 clearB" cellpadding="0" cellspacing="1">
	<tr class="">
		<td class="wide130 blueBg2 white bold size13 pad5">
			Week 1<br />
			<span class="size12 normal">May 23th - 27th</span>
		</td>
		<td class="gray1 size12 pad5" valign="middle">
			<strong>Nature Week</strong> 
		</td>
	</tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 2<br />
			<span class="size12 normal">May 31st - June 3rd (No Camp Memorial Day)</span>
		</td>
		<td class="gray1 size12 pad5" valign="middle">
			<strong>Safari Week</strong> 
		</td>
	</tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 3<br />
			<span class="size12 normal">June 6th - 10th</span>
		</td>
		<td class="gray1 size12 pad5" valign="middle">
			<strong>Fairytale Week</strong> 
		</td>
	</tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 4<br />
			<span class="size12 normal">June 13th - 17th</span>
		</td>
		<td class="gray1 size12 pad5" valign="middle">
			<strong>Beach Week</strong> 
		</td>
	</tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 5<br />
			<span class="size12 normal">June 20th - 24th</span>
		</td>
		<td class="gray1 size12 pad5" valign="middle">
			<strong>Artists Week</strong> 
		</td>
	</tr>
</table>




<span class="title2 black clearB marginT20">Summer Camp 2011</span>
<span class="rust size16 italic">Enjoy your city summer on our country farm!<br /><br /></span>

<p class="pgraph">Our indoor eco-friendly facility offers a full day and half day camp experience for children ages 3 to 8. All children get hands on experience learning about and caring for our live animals in our award winning petting zoo. It's time for them to coo with the birds and hop with the bunnies.</p>

<p class="pgraph">Camp activies include animal science/care, cooking,  crazy science experiments, nature, music, drama and outdoor play at our local parks and playgrounds, Asphalt Green and Carl Schurz Park.  All campers play outdoors every day. They have soccer twice a week with Super Soccer Stars and our full day campers swim at The 92nd St Y.</p>

 <p class="pgraph">Every week we focus on a different theme. All children get to experience our theme entertainers and our full day campers get to go on excursions which relate to our themes. Our art projects and many of our activies revolve around our weekly themes making camp a different experience every week.</p>

<div class="wide420 yellowBg1 size12 rust pad5 marginR10 marginB20 floatL">
<strong class="size16 block padB5">General Summer Camp Information:</strong>
<span id="list1">
	<ul>
		<li>Summer Camp Dates: June 27th - August 19th, 2011</li>
		<li>Please pack a lunch or purchase one at camp</li>
		<li>We are a nut-free facility, do not pack any nut products in your child's lunch</li>
		<li>Groups are based on 15 children + 3 teachers</li>
		<li>Swimming, field trips and martial arts are offered to full day campers only</li>
		<li>Tuition is calculated by the number of weeks your child is enrolled</li>
		<li>We offer a 10% sibling discount</li>
	</ul>
</span>
</div>

<img src="images/sss_logo.png" />





<!--
<div class="clearB">
	<span id="halfDay" class="title2 rust clearB">Half Day Snowflakes Group</span>
	<span class="subtitle1 gray1">9:30am - 12:30pm | 3-4 years<br />
	<span class="size12 gray2">1 day: $75 | 2 days: $65/day | 3 or more days: $55/day</span></span>
	<p class="pgraph"> We offer a half day camp with a warm nurturing program. Children spend time on the farm learning about and caring for our animals. They create art masterpieces, bake goodies, and sing their favorite songs to live guitar.  Every day the children get to participate in a special event. We will provide a snack for your child and if your child is not fully potty trained please send him or her in pull-ups. We close the group at 15 children with 3 qualified teachers. Children must be 3 years old to join the group. <it>Registration begins November 15th.</i></p>
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=holidayCamp">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>
<div class="clearB">
	<span id="halfDay" class="title2 rust clearB">Full Day Peppermints Group</span>
	<span class="subtitle1 gray1">9:30am - 3:30pm | 4-5 years<br />
	<span class="size12 gray2">1 day: $125 | 2 days: $100/day | 3 or more days: $90/day | Extended Day(9:30am - 5pm) available for $30.</span></span>
	<p class="pgraph">Our Full day campers participate in music, art, cooking, science, nature, games, animal care, yoga and much much more. Everyday there  will be a different special entertainer which will engage the children in fun, laughter and learning. Please send your child to camp with a lunch that is nut free since we are a nut free facility. We will provide the children with a snack before the end of the day.We close each group at 15 children with 3 qualified teachers.<i> Registration begins November 15th.</i> </p>
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=holidayCamp">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>
<div class="clearB">
	<span id="halfDay" class="title2 rust clearB">Full Day Gingerbreads Group</span>
	<span class="subtitle1 gray1">9:30am - 3:30pm | 6-8 years<br />
	<span class="size12 gray2">1 day: $125 | 2 days: $100/day | 3 or more days: $90/day | Extended Day(9:30am - 5pm) available for $30.</span></span>
	<p class="pgraph">Our Full day campers participate in music, art, cooking, science, nature, games, animal care, yoga and much much more. Everyday there  will be a different special entertainer which will engage the children in fun, laughter and learning. Please send your child to camp with a lunch that is nut free since we are a nut free facility. We will provide the children with a snack before the end of the day.We close each group at 15 children with 3 qualified teachers. <i>Registration begins November 15th. </i> </p>
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=holidayCamp">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>
-->



<div class="clearB">
	<span id="halfDay" class="title2 blue2 clearB">Half Day Hamsters Group</span>
	<?= CHECK_AVAILABILITY_MESSAGE_1 ?>
	<span class="subtitle1 gray1">9am - 12:30pm | 3-4 years<br />
	<span class="size12 gray2">Mon - Fri: $500 | Mon, Wed, Fri: $375 | Tues, Thurs: $250</span></span>
	<p class="pgraph">We offer  a half day camp with a warm nurturing program so that separation is easy. Children spend time on the farm learning about and caring for our animals. They create art masterpieces, bake goodies, sing their favorite songs and play soccer with Super Soccer Stars. The children go outside every day. Twice a week they participate in soccer at Carl Schurz Park and when they are not playing soccer they  go to the outdoor playground at Asphalt Green. Every week the children get to participate in a weekly theme event which takes place on Tuesdays and Wednesdays so all children get to enjoy the fun.  Please pack a lunch for your child and if your child is not fully potty trained please send him or her in pull-ups. <a class="rust" href="#summerChart">view schedule</a></p>
	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=summerCamp">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<div class="clearB">
	<span id="fullDay" class="title2 blue2">Full Day Froggies Group</span>
	<?= CHECK_AVAILABILITY_MESSAGE_1 ?>
	<span class="subtitle1 gray1">9am - 3pm | 4-5 years<br />
	<span class="size12 gray2">Mon - Fri: $625 | Mon, Wed, Fri: $500 | Tues, Thurs: $375</span></span>
	<p class="pgraph">Our full day campers participate in music, art, cooking, animal care, science, nature and outdoor play. They also play sports every day. Twice a week they play soccer at Carl Schurz Park instructed by Super Soccer Stars. They also swim twice a week at the 92nd Street Y, where they receive swim lessons instructed by the Red Cross trained lifeguards. Your child can be a beginner in the pool or a pro. The swim teachers will assess the children and teach lessons appropriately. On Wednesdays the children have field day in Carl Schurz Park. Every week we focus on a different theme. The children enjoy special theme presentations and they will also get a chance to venture out on field trips throughout the summer. <a class="rust" href="#summerChart">view schedule</a></p>


	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=summerCamp">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>

<div class="clearB">
	<span class="title2 blue2">Full Day Geckos Group</span>
	<?= CHECK_AVAILABILITY_MESSAGE_1 ?>
	<span class="subtitle1 gray1">9am - 3pm | 5-7 years<br />
	<span class="size12 gray2">Mon - Fri: $625 | Mon, Wed, Fri: $500 | Tues, Thurs: $375</span></span>
	<p class="pgraph">Our full day campers participate in music, art, cooking, animal care, science, nature and outdoor play. They also play sports every day. As the campers grow older we like to encourage independence through picking out what activities they want to participate in. Therefore, we give our Geckos group a chance to create their own schedule. The Geckos participate in electives twice a week where they get to customize their day. They can choose from jewelry making, digital photography, computer, wood working, dance, drama, animal science, sports and karaoke. Twice a week they play soccer at Carl Schurz Park instructed by Super Soccer Stars. They also swim twice a week at the 92nd Street Y, where they receive swim lessons instructed by the Red Cross trained lifeguards. Your child can be a beginner in the pool or a pro. The swim teachers will assess the children and teach lessons appropriately.  On Wednesdays the children have field day in Carl Schurz Park where they play relay races and outdoor games. Every week we focus on a different theme.  The children enjoy special theme presentations and they will also get a chance to venture out on field trips throughout the summer. <a class="rust" href="#summerChart">view schedule</a></p>


	<div id="" class="floatR clearB">
		<a id="btn1R" class="" href="register.php?d=summerCamp">
		<div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
		</a>
	</div>
</div>
<a name="summerChart"/>
<table id="" class="fullWidth marginB20 marginT15" cellpadding="0" cellspacing="1">
	<tr class="">
		<td class="wide130 blueBg2 white bold size13 pad5">
			Week 1<br />
			<span class="size12 normal">June 27th - July 1st</span></td>
		<td valign="top" class="gray1 size12 pad5">
			<strong>New York City Week:</strong> Different presenters native to New York City will share their careers with our campers  and our full day will campers  will go on a  field trip to a local attraction.</td>
  </tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 2<br />
			<span class="size12 normal">July 5th - 8th</span></td>
		<td valign="top" class="gray1 size12 pad5">
			<strong>Exotic Animal Week:</strong> Presentations on snakes, lizards, and many other exotic creatures.</td>
  </tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 3<br />
			<span class="size12 normal">July 11th - 15th</span></td>
		<td valign="top" class="gray1 size12 pad5">
			<strong>Green Week:</strong> Eco-friendly living, recyclable art projects and learning about nature and how to preserve it.</td>
	</tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 4<br />
			<span class="size12 normal">July 18th - 22nd</span></td>
		<td valign="top" class="gray1 size12 pad5">
			<strong>Wild Wild West Week:</strong> We will visit the west with cowboys and lasso in new experiences like line dancing.</td>
	</tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 5<br />
			<span class="size12 normal">July 25th - 29th</span></td>
		<td valign="top" class="gray1 size12 pad5">
			<strong>Wild Water Week:</strong> Water games in the park, sprinklers, learn about animals that live in the water, learn how to preserve our natural waters,  paint with water and more.</td>
	</tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 6<br />
			<span class="size12 normal">August 1st- 5th</span></td>
		<td valign="top" class="gray1 size12 pad5">
			<strong>Circus Mania Week:</strong> Face painters, balloon animals & magicians.</td>
	</tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 7<br />
			<span class="size12 normal">August 8th - 12th</span></td>
		<td valign="top" class="gray1 size12 pad5">
			<strong>Farm Animal Week:</strong> Ducks, goats, sheep and more will come for a visit.</td>
	</tr>
	<tr class="">
		<td class="blueBg2 white bold size13 pad5">
			Week 8<br />
			<span class="size12 normal">August 15th - 19th</span></td>
		<td class="gray1 size12 pad5" valign="top">
			<strong>Science and Nature Week:</strong> We will explore the wild outdoors on nature  walks and create science experiments with Mad Scientists.</td>
	</tr>
</table>

<span class="title2 green1">Activities</span>
<span id="list1">
<ul class="gray1 size13 marginT5">
	<li>Animal Care/Science</li>
	<li>Cooking</li>
	<li>Music & Drama</li>
	<li>Arts & Crafts</li>
	<li>Outdoor Play Time</li>
	<li>Soccer with Super Soccer Stars</li>
	<li>Swimming</li>
	<li>Science Experiments</li>
	<li>Nature</li>
	<li>Special Weekly Theme Entertainers</li>
	<li>Field Trips</li>
	<li>Martial Arts</li>
	<li>more...</li>
</ul>
</span>

<!--end content-->
<?php
closeContent();
drawFooter();
?>