<?php
require 'functions.php';
$page = "Press";
openHeader($page);
echo '<script src="scripts/art_farm.js?v=' . date(ymdHis) . '" type="text/javascript"></script>';
closeHeader();
drawMainMenu("press");
drawActivitiesMenu();
openContent($page);
?>
<!--begin content-->

<div id="pressRow1" class="floatL">
	<div class="floatL marginR5"><a href="http://www.mommynearest.com/articles/spotlight-on-the-art-farm-in-the-city"><img src="press/mommy_nearest_150724.jpg" /></a><div class="pressTitle">Mommy Nearest</div></div>
	<div class="floatL marginR5"><a href="http://lowermanhattan.macaronikid.com/article/741215/the-art-farm-in-the-city"><img src="press/macaroni_kid_thumb.png" /></a><div class="pressTitle">Macaroni Kid</div></div>
	<div class="floatL marginR5"><a href="http://www.mamalovenyc.com/weekly-picks/mamalove-nyc-fave-play-the-art-farm-in-the-city"><img src="press/mama_love_nyc_thumb.png" /></a><div class="pressTitle">Mama Love NYC</div></div>
	<div class="floatL marginR5"><a href="http://pix11.com/2014/05/16/its-a-g-thing-the-art-farm-in-the-city-lets-kids-befriend-animals/#axzz32NPqwivD"><img src="press/pix_11.jpg" /></a><div class="pressTitle">PIX 11</div></div>
</div>
<div id="pressRow2" class="floatL marginT20">
	<div class="floatL marginR5"><a href="press/child.pdf"><img src="press/child_thumb.jpg" /></a><div class="pressTitle">Child</div></div>
	<div class="floatL marginR5"><a href="press/ny_family.pdf"><img src="press/ny_family_thumb.jpg" /></a><div class="pressTitle">New York Family</div></div>
	<div class="floatL"><a href="press/time_out_ny.pdf"><img src="press/time_out_ny_thumb.jpg" /></a><div class="pressTitle">Time Out New York</div></div>
	<div class="floatL marginR5"><a href="press/ny.pdf"><img src="press/ny_thumb.jpg" /></a><div class="pressTitle">New York Magazine</div></div>
</div>
<div id="pressRow2" class="floatL marginT20">
	<div class="floatL marginR5"><a href="press/parent_guide.pdf"><img src="press/parent_guide_thumb.jpg" /></a><div class="pressTitle">Parent Guide</div></div>
	<div class="floatL marginR5"><a href="press/w.pdf"><img src="press/w_thumb.jpg" /></a><div class="pressTitle">W</div></div>
	<div class="floatL"><a href="press/instyle.pdf"><img src="press/instyle_thumb.jpg" /></a><div class="pressTitle">InStyle</div></div>
	<div class="floatL marginR5"><a href="press/gotham.pdf"><img src="press/gotham_thumb.jpg" /></a><div class="pressTitle">Gotham</div></div>
</div>


<!--end content-->
<?php
closeContent();
drawFooter();
?>
