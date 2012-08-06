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
			<img src="photos/featured/featured_motf_120728.jpg" />
			<span class="size14 bold blue2 block padB5">Mornings on The Farm</span>
			<span class="smallCopy">Where else in New York City can you begin your day on the farm? With a basket full of hay and goodies&hellip;</span>
			<br />
			<a class="blue2 bold size11" href="weekend_programs.php">Learn more</a>
		</div>
		<div id="featured">
			<img src="photos/featured/featured_fall_classes_120728.jpg" />
			<span class="size14 bold green1 block padB5">Fall Classes</span>
			<span class="smallCopy">Come join us this fall for clases and programs for ages 1 - 8. Adult &amp; Me, Afterschool, Cooking Drop Ins and more!</span>
			<br />
			<a class="green1 bold size11" href="classes.php">Learn more</a>
		</div>
	</div>
</div>

<!--end of content-->
<?php
drawFooter();
?>
<!--
	For the picture can you use either the picture of the little girl petting the tortoise under the animal care description or the little girl holding the guinea pig under the Rock Smocks and Animals Class on the classes page.
	What ever one visibly looks and fits better.
-->