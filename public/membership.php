<?php
require 'functions.php';
$page = "Membership";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu('membership');
openContent($page, "membership");
?>
<!--begin content-->
<style type="text/css">
.style1 {font-family: Arial, Helvetica, sans-serif}
.style12 {font-family: Georgia, "Times New Roman", Times, serif}
.style18 {	color: #FF9900;
	font-weight: bold;
	font-size: 18px;
}
.style38 {	font-size: 13px;
	color: #666666;
	font-family: Arial, Helvetica, sans-serif;
}
.style42 {	font-size: 13px;
	font-family: Arial, Helvetica, sans-serif;
}
.style43 {color: #666666}
.style44 {color: #FFFFFF}
.style46 {	color: #CC3C2A;
	font-weight: bold;
	font-size: 18px;
}
.style47 {font-size: 10px}
.style48 {font-size: 12px}
</style>
<table width="685" height="624" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="902" valign="top"><p><img src="images/member_header.jpg" alt="" width="685" height="192" align="top" /><br />
    </p>
      <table width="682" height="181" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="325" valign="top"><div align="left">
            <p class="style1"><span class="style46">The <span class="style12">Friendly</span> Farmer Club </span><br />
              <span class="style43">Family Membership $295.00</span></p>
            <ul>
              <li class="style38">Complementary use of our indoor farm <br />
                <span class="style47"><em>Monday - Thursday 11:30 am - 4:30 pm</em><br />
                  <em>Friday 9 am - 1 pm </em></span></li>
              <li class="style38">Complementary Mornings on The Farm Visits <br />
                <span class="style47"><em>Saturday &amp; Sunday 8 am - 10 am (excludes basket of food)</em></span><br />
              </li>
              <span class="style44"></span>
              <li class="style38">$25 registration fee waived<br />
              </li>
              <li class="style38">$50 discount on every full semester of classes<br />
              </li>
              <li class="style38">$50 off birthday parties <em>Excludes <span class="style47">&ldquo;On the Moove&rdquo; parties</span></em><br />
              </li>
              <li class="style38">$50 off a June or Summer Camp season <br />
                <span class="style47"><em>One discount per child, for either June or Summer Camp.</em></span> <br />
              </li>
              <li class="style38">10% off toy store purchases<br />
              </li>
              <li class="style38">15% off all Drop-in Programs<br />
              </li>
              <li class="style38">5 &ldquo;Bring a Friend&rdquo; passes to visit the farm or <br />
                drop-in programs. Drop off programs are excluded.<br />
              </li>
              <li class="style38">Art Farm t-shirt for each child in the household<br />
              </li>
              <li class="style38">Discounts at local businesses:<br />
                <span class="style48">Mama Mia Pizza (A plain slice and soda for $2.25)<br />
                  Pip&rsquo;s Place ($5.00 off a birthday cake and a <br />
                  free cookie with the purchase of coffee)<br />
                  Eli&rsquo;s Vinegar Factory (20% off all in-store purchases)<br />
                  Edge Gym Facility - Free one week membership giving you access to locker room, 2 floors of equipment, and classes. (Yoga,Spinning etc)</span><br />
              </li>
            </ul>
          </div></td>
          <td width="340" valign="top"><p class="style1"><span class="style18">The <span class="style12">Elite</span> Farmer Club </span><br />
            <span class="style43">Family Membership $525.00</span></p>
            <ul class="style42">
              <li class="style43">Complementary use of our indoor farm <br />
                <span class="style47"><em>Monday - Thursday 11:30 am - 4:30 pm</em><br />
                  <em>Friday 9 am - 1 pm </em></span><br />
              </li>
              <li class="style43"> Complementary Mornings on The Farm Visits <br />
                <span class="style47"><em>Saturday &amp; Sunday 8 am - 10 am <br />
                  (excludes basket of food)</em></span></li>
              <li class="style43"> <strong>Exclusive Elite Member Petting Zoo Hour</strong><br />
                <span class="style47"><em>Saturday &amp; Sunday 10am-11am</em></span><br />
              </li>
              <li class="style43">$25 registration fee waived<br />
              </li>
              <li class="style43">$50 discount on every full semester of classes <br />
              </li>
              <li class="style43"><strong>$75 off birthday parties</strong> <span class="style47"><em>Excludes &ldquo;On the Moove&rdquo; parties</em></span><br />
              </li>
              <li class="style43"><strong>$75 off a June or Summer Camp season </strong><br />
                <span class="style47"><em>One discount per child, for either June or Summer Camp.</em></span><br />
              </li>
              <li class="style43"><strong>15% off toy store purchases</strong><br />
              </li>
              <li class="style43"><strong>20% off all Drop-in Programs </strong><br />
              </li>
              <li class="style43"><strong>10 &ldquo;Bring a Friend&rdquo;</strong> passes to visit the farm or <br />
                drop-in programs. Drop off programs are excluded.<br />
              </li>
              <li class="style43">Art Farm t-shirt for each child in household<br />
              </li>
              <li class="style43"><strong>Complementary Summer Camp Photobook </strong><br />
              </li>
              <li class="style43">Discounts at local businesses:<br />
                <span class="style48">Mama Mia Pizza (A plain slice and soda for $2.25)<br />
                  Pip&rsquo;s Place ($5.00 off a birthday cake and a <br />
                  free cookie with the purchase of coffee)<br />
                  Eli&rsquo;s Vinegar Factory (20% off all in-store purchases)<br />
                  Edge Gym Facility - Free one week membership giving you access to locker room, 2 floors of equipment, and classes.(Yoga,Spinning etc)</span></li>
            </ul></td>
        </tr>
      </table></td>
  </tr>
</table>

<p><a href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=1482102&location=455804"><img src="images/af_mbutton.jpg" alt="" width="179" height="47" border="0" align="top" /></a></p>

<!--end content-->
<?php
closeContent();
drawFooter();
?>
