<?php
require 'functions.php';
$page = "Contact Us";
openHeader($page);
closeHeader();
drawMainMenu("contact");
drawActivitiesMenu();
openContent($page);
?>
<!--begin content-->

<div class="gray2 marginB15">
<div id="" class="size16 bold blue2">General Inquiries</div>
<span class="bold rust">Phone: </span>(212) 410-3117<br />
For general inquiries, you can email the front desk<br /><a class="rust" href="mailto:frontdesk@theartfarms.org">frontdesk@theartfarms.org</a>
</div>

<div class="gray2 marginB15">
<div id="" class="size16 bold blue2">Birthday Parties/Events</div>
For questions or concerns regarding parties, you can email Christina Fotoglou<br /><a class="rust" href="mailto:christina@theartfarms.org">christina@theartfarms.org</a>
</div>

<div class="gray2 marginB15">
<div id="" class="size16 bold blue2">Animal Outreach</div>
For questions or concerns regarding animal outreach for birthday parties, schools, libraries, scouts or any group programs, you can email Gabby Sachs<br /><a class="rust" href="mailto:gabby@theartfarms.org">gabby@theartfarms.org</a>
</div>

<div class="gray2 marginB15">
<div id="" class="size16 bold blue2">The Art Farm in The City Director</div>
To speak with the director, you can email Valentina Van Hise<br /><a class="rust" href="mailto:val@theartfarms.org">val@theartfarms.org</a>
</div>

<div class="gray2">
<div id="" class="size16 bold blue2">The Art Farm - Bridgehampton, NY</div>
<span class="bold rust">Phone: </span>(631) 537-1634<br />
For information on the Hamptons program, you can email them directly<br /><a class="rust" href="mailto:info@theartfarms.org">info@theartfarms.org</a>
</div>

<!--end content-->
<?php
closeContent();
drawFooter();
?>