<?php
require_once('../inc/config.php');
require_once('functions.php');
$title = 'Camp';
$page = 'camp';
openHeader($title);
openSwfObjCode();
closeSwfObjCode();
closeHeader();
drawMainMenu();
drawActivitiesMenu("camp");
openContent($title, $page);

define('NEW_REG_MSG',"<p class='newRegNote'>The Art Farm has a new registration system this year. If you are a returning family please re-enter all of your information. We apologize for the inconvenience but are excited about the updated system.</p>");
?>
<!--begin content-->

<ul class='camp__toggle-list'>
  <li class='camp__toggle-list-item camp__toggle-list-item--selected' data-camp-id='summer'>Summer Camp</li>
</ul>

<div class='camp__section-container'>
  <section class='camp' data-camp-id='summer'>
  <?php include '../inc/camp/summer.php' ?>
  </section>
</div>

<!--end content-->
<?php
closeContent();
drawFooter();
?>
