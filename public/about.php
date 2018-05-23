<?php
require 'functions.php';
$page = "About Us";
openHeader($page);
closeHeader();
drawMainMenu("about");
drawActivitiesMenu();
openContent($page);
?>
<!--begin content-->

<img src='photos/about/hantke_family.jpg' alt='Hantke Family'>

<div class="clearB high20"></div>

<p class="pgraph">In 2002, The Art Farm NYC was founded on the Upper East Side
in Manhattan. Valentina is a founder and has been the Executive Director for
the past 16 years. She continuously creates and innovates new programs
year-round. Valentina has a degree in Music Education and has either created or
had a strong hand in all of The Art Farm NYC's original curriculum created by
The Art Farm's amazing team who have degrees in Early Childhood, Animal
Sciences and experiences that range from The Bronx Zoo to the NYC Board of
Education. Valentina resides in New Jersey with her husband and three
children.</p>

<p class='pgraph italic'>"It has been such a joy to create The Art Farm NYC and to grow
along with the families that have participated in our programs over the past
sixteen years. I look forward to meeting you and your children and making
wonderful memories." - Valentina Hantke</p>

<!--end content-->
<?php
closeContent();
drawFooter();
?>
