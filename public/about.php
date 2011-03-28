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

<p class="pgraph">In the summer of 1999, Valentina Van Hise met Mari Linnman, the founder of The Art Farm in the Hamptons, when she came to work there as a toddler music teacher.  Valentina brought with her a bachelor's degree in music education and her unique talents as a music teacher.</p>

<p class="pgraph">In 2002, Mari and Valentina decided to open The Art Farm in The City, on the Upper East Side in Manhattan. For the past <?php echo date(Y) - 2002 ?> years, Valentina has been the director and works along with Mari to create innovative new programs. Initially The Art Farm in The City began offering Mommy & Me classes and birthday parties and has now expanded to a pre-school, gentle separation Play Group, summer camp, after school classes and drop in Play Time and Open House for children ages 6 months to 8 years.
Mari and Valentina are proud mothers and enjoy working in a child-friendly environment.</p>

<p class="pQuote">"It has been such a joy to create The Art Farm in The City and to grow along with the families that have participated in our programs over the past several years. I look forward to meeting you and your children." -Valentina Van Hise</p>

<!--end content-->
<?php
closeContent();
drawFooter();
?>