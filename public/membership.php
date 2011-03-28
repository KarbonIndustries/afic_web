<?php
require 'functions.php';
$page = "Membership";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu();
openContent($page, "membership");
?>
<!--begin content-->

<span class="size18 blue2 bold block marginB10">Take advantage of the farm all year for $295 per family!</span>
<span class="rust bold block">Membership Benefits</span>
<ul class="bulletList1 rust">
	<li><span class="gray1">$50 discount towards each class registration</span></li>
	<li><span class="gray1">$25 waived registration fee</span></li>
	<li><span class="gray1">$50 off birthday parties</span></li>
	<li><span class="gray1">15% off at our toy store</span></li>
	<li><span class="gray1">$100 off summer camp registration at The Art Farm in The City</span></li>
	<li><span class="gray1">50% off Open House</span></li>
        <li><span class="gray1">$5 Mornings on the Farm passes</span></li>
	<li><span class="gray1">$100 off pre-school registration</span></li>
	<li><span class="gray1">10 "Bring a Friend" passes to Open House, classes or farm time</span></li>
	<li><span class="gray1">The Art Farm animal t-shirt</span></li>
	<li><span class="gray1">Complimentary use of our indoor farm</span> <a class="rust" href="part_time_pet.php#visitingHours">(see visiting hours)</a></li>
	<li><span class="gray1">Priority registration at the Bridgehampton camp</span></li>
</ul>

<!--end content-->
<?php
closeContent();
drawFooter();
?>