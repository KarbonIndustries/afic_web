<?php
require 'functions.php';
$page = "Sitemap";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu();
openContent($page);
?>
<!--begin content-->

<ol id="sitemapList" class="">
	<li class=""><a class="" href="index.php">Home</a></li>
	<li class=""><a class="" href="http://www.theartfarms.org/af/" target="_blank">Hamptons Location</a></li>
	<li class=""><a class="" href="press.php">Press</a></li>
	<li class=""><a class="" href="about.php">About Us</a></li>
	<li class=""><a class="" href="contact.php">Contact Us</a></li>
	<li class=""><a class="" href="act_by_age.php">Activities by Age</a></li>
	<li class=""><a class="" href="schedule.php">Schedule</a></li>
		<ul>
			<li class="size12"><a class="" href="data/af_class_schedule.pdf">Download Printable Schedule</a></li>
		</ul>
	<li class=""><a class="" href="membership.php">Membership</a></li>
	<li class=""><a class="" href="tour.php">Farm Tour</a></li>
	<li class=""><a class="" href='https://campscui.active.com/orgs/TheArtFarminTheCity'>Register Today!</a></li>
	<li class=""><a class="" href="classes.php">Classes</a></li>
		<ul class="">
			<li class=""><a class="" href="classes.php#rsa">Rock, Smocks and Animals</a></li>
			<li class=""><a class="" href="classes.php#kcc">Kids Critter Club</a></li>
			<li class=""><a class="" href="classes.php#kaa">Kids at Art</a></li>
			<li class=""><a class="" href="classes.php#aam">Art, Adventures and More</a></li>
			<li class=""><a class="" href="classes.php#mc">Mini Chef</a></li>
		</ul>
	<li class=""><a class="" href="bday_parties.php">Birthday Parties</a></li>
	<li class=""><a class="" href="preschool.php">Pre-School</a></li>
	<li class=""><a class="" href="play_group.php">Play Group</a></li>
	<li class=""><a class="" href="weekend_programs.php">Weekend Programs</a></li>
	<li class=""><a class="" href="camp.php">Camp</a></li>
	<li class=""><a class="" href="drop_in.php">Drop In</a></li>
	<li class=""><a class="" href="outreach_field_trips.php">Outreach & Field Trips</a></li>
</ol>

<!--end content-->
<?php
closeContent();
drawFooter();
?>