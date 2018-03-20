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

<div class="cognito">
<script src="https://services.cognitoforms.com/s/Iw4-60aywUGAv10D2tU_hw"></script>
<script>Cognito.load("forms", { id: "1" });</script>
</div>

<!--end content-->
<?php
closeContent();
drawFooter();
?>
