<?php
require_once('../inc/config.php');
require 'functions.php';
$page = "Camp";
openHeader($page);
openSwfObjCode();
closeSwfObjCode();
closeHeader();
drawMainMenu();
drawActivitiesMenu("camp");
openContent($page);

define('NEW_REG_MSG',"<p class='newRegNote'>The Art Farm has a new registration system this year. If you are a returning family please re-enter all of your information. We apologize for the inconvenience but are excited about the updated system.</p>");
?>
<!--begin content-->

<?php
include '../inc/camp/columbus.php';
?>

<!--end content-->
<?php
closeContent();
drawFooter();
?>
