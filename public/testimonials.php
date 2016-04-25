<?php
require_once('functions.php');
require_once('../inc/simple_html_dom.php');
$page = "Testimonials";
openHeader($page);
includeJs();
closeHeader();
drawMainMenu();
drawActivitiesMenu();
openContent($page,'testimonials');

$html         = file_get_html('http://my-testimonials.com/TheArtFarmin/3XR95');
$testimonials = $html->find('ul.testimonial-list li.testimonial-list-item');
?>

<!--begin content-->
<ul id='list__testimonials'>
<?php foreach($testimonials as $testimonial): ?>
  <li class='list_item__testimonials'>
    <h1 class='testimonial__name'><?= $testimonial->find('div.feedback-header-detail h4',0)->innertext ?></h1>
    <span class='testimonial__date'><?= $testimonial->find('div.feedback-header-detail p',0)->innertext ?></span>
    <p class='testimonial__content'><?= $testimonial->find('div.feedback-content p',0)->innertext ?></p>
  </li>
<?php endforeach; ?>
</ul>
<!--end content-->

<?php
closeContent();
drawFooter();
