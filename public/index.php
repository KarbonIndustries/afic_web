<?php
require 'functions.php';
$page = "Home";
openHeader();
openSwfObjCode();
embedFlash("flash/slideshow700370.swf","slideshow1",700,370);
embedFlash("flash/slideshow530180.swf","slideshow2",530,180);
closeSwfObjCode();
closeHeader();
drawMainMenu("home");
drawHomePanel();
drawActivitiesMenu();
?>
<!--begin content-->
	
<div id="homeContent">
	<div id="mainLeft" class="">
		<span class="size20 bold blue1 block padB5">Welcome!</span>
		<p class="pgraph">We are an eco-friendly and organic facility which teaches your children about nature, animals and how to better care for our planet. We also teach your children about responsibility through caring, loving and being in the company of animals. Our magical, USDA licensed, indoor petting zoo has a wide variety of animals including bunnies, chinchillas, guinea pigs, lizards, turtles, birds, tropical fish and more.  You might even spot pigs, chickens, goats and sheep sometime!</p>
		<p class="pgraph">One of the unique features, and a special part of our programs, is our desire to share and our belief in the importance of giving back and showing compassion.  Whether you join camp or preschool, take classes, book a party or buy a toy, you help a child in need.  We donate a percentage of the annual Art Farm in The City profits to Mari's Children, our non-profit organization, which helps children all over the world.  One of our foundations of The Art Farm is "Paying it Forward." Would you like to help us do that?</p>
		<div id="slideshow2" class=""></div>
		<!-- <img class="block marginT30" src="images/tmp.png" width="530" height="180"/> -->
	</div>
	<div id="mainRight" class="">
		<span class="heading1">Featured</span>
		<div id="featured">
			<img src="photos/featured/featured_camp_110324.jpg" />
			<span class="size14 bold blue2 block padB5">June &amp; Summer Camp</span>
			<span class="smallCopy">Join us down on the farm for the summer in one of our camp programs. Ages 3-7, soccer, swimming, cooking, outdoor play, live animal interaction and more!</span>
			<br />
			<a class="blue2 bold size11" href="camp.php">Learn more</a>
		</div>
		<div id="featured">
			<img src="photos/1KidPlaytime.jpg" />
			<span class="size14 bold green1 block padB5">Play Time!</span>
			<span class="smallCopy">Come and play all afternoon or just for an hour. All ages can drop in for animal time, arts & crafts and creative play in our playroom.</span>
			<br />
			<a class="green1 bold size11" href="drop_in.php">Learn more</a>
		</div>
	</div>
</div>

<!--end of content-->
<?php
drawFooter();
?>