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
<div class="floatL marginR5"><a href="press/child.pdf"><img src="press/child_thumb.jpg" /></a><div class="pressTitle">Child</div></div>
<div class="floatL marginR5"><a href="press/ny_family.pdf"><img src="press/ny_family_thumb.jpg" /></a><div class="pressTitle">New York Family</div></div>
<div class="floatL marginR5"><a href="press/time_out_ny.pdf"><img src="press/time_out_ny_thumb.jpg" /></a><div class="pressTitle">Time Out New York</div></div>
<div class="floatL"><a href="press/ny.pdf"><img src="press/ny_thumb.jpg" /></a><div class="pressTitle">New York Magazine</div></div>
</div>
<div id="pressRow2" class="floatL marginT20">
<div class="floatL marginR5"><a href="press/parent_guide.pdf"><img src="press/parent_guide_thumb.jpg" /></a><div class="pressTitle">Parent Guide</div></div>
<div class="floatL marginR5"><a href="press/w.pdf"><img src="press/w_thumb.jpg" /></a><div class="pressTitle">W</div></div>
<div class="floatL marginR5"><a href="press/instyle.pdf"><img src="press/instyle_thumb.jpg" /></a><div class="pressTitle">InStyle</div></div>
<div class="floatL"><a href="press/gotham.pdf"><img src="press/gotham_thumb.jpg" /></a><div class="pressTitle">Gotham</div></div>
</div>


<!--end content-->
<?php
closeContent();
drawFooter();
?>