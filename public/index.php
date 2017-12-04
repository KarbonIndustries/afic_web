<?php
require 'functions.php';
$page = "Home";
openHeader();
openSwfObjCode();
embedFlash("flash/slideshow700370.swf","slideshow1",700,370);
embedFlash("flash/slideshow530180.swf","slideshow2",530,180);
closeSwfObjCode();
closeHeader();
drawMainMenu("home");
drawHomePanel();
drawActivitiesMenu();
?>
<!--begin content-->
  
<div id="homeContent">
  <div id="mainLeft" class="">
    <span class="size20 bold blue1 block padB5">Welcome!</span>
    <p class="pgraph">The Art Farm is a nature-focused children's educational
    center offering a break from city life with art, music, and cooking-themed
    classes, playtime, drop-ins, birthday parties, and camps that your whole
    family will love!</p>

    <p class="pgraph">Home to New York City's only indoor petting zoo, The Art
    Farm is a unique space to meet and interact with animals from bearded
    dragons to chinchillas and chickens! All of The Art Farm's programs include
    time in our indoor petting zoo. Our philosophy encourages a childhood
    relationship with the natural world while engaging children in care and
    compassion of all living creatures.</p>

    <div id="slideshow2" class=""></div>
    <!-- <img class="block marginT30" src="images/tmp.png" width="530" height="180"/> -->
  </div>
  <div id="mainRight" class="">
    <span class="heading1">Featured</span>
    <div id="featured">
      <img src="photos/featured/featured_motf_120728.jpg" />
      <span class="size14 bold blue2 block padB5">Mornings on The Farm</span>
      <span class="smallCopy">
        Where else in New York City can you begin your day on the farm? With a
        basket full of hay and goodies&hellip;<br />
        <a class="blue2 bold size11" href="weekend_programs.php">Learn more</a>
      </span>
    </div>
    <div id="featured">
      <img src="photos/featured/featured_camp_classes_150923.jpg" />
      <span class="size14 bold green1 block padB5">
        Classes
      </span>
      <span class="smallCopy">
        Join us for a one-of-a-kind class in music, animals, art, cooking, and
        more! Adult and Me classes ages 14 months - 3 years and after-school
        programs up to 8 years.<br />
        <a class="green1 bold size11" href="classes.php">Learn more</a>
      </span>
    </div>
  </div>
</div>

<!--end of content-->
<?php
drawFooter();
?>
