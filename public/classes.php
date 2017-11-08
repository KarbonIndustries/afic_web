<?php
require_once('../inc/config.php');
require_once('functions.php');
$page = "Classes";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu("classes");
openContent($page);
?>
<!--begin content-->

<div class='clearB'>
  <img src='images/new_for_2017.png' />
  <span id='rsa' class='title2'>&nbsp;</span>
  <span id='rsa' class='title2 alignC'>Semester Class Benefits</span>
  <table width='100%'>
    <tr class='size16'>
      <td align='right' width='30%' class='bold blue2'>5 Free Passes</td>
      <td class='gray2'>to our Drop In Play Time <span class='size12'>(M-Th 12:30pm-3:30pm)</span></td>
    </tr>
    <tr class='size16'>
      <td align='right' width='30%' class='bold blue2'>$50 off</td>
      <td class='gray2'>an Art Farm birthday party <span class='size12'>(valid for 1 year)</span></td>
    </tr>
    <tr class='size16'>
      <td align='right' width='30%' class='bold blue2'>10% off</td>
      <td class='gray2'>our toy store <span class='size12'>(valid during enrolled semester)</span></td>
    </tr>
  </table>
  </span>

  <div class='clearB high60'></div>
</div>


<!-- ============================= -->
<!-- = ROCK, SMOCKS, AND ANIMALS = -->
<!-- ============================= -->
<div class='clearB'>
  <img class='padR10 padT10 padB10' src='photos/rock_smocks_animals.jpg' />
  <span id='rsa' class='title2 blue2'>Rock, Smocks, and Animals</span>
  <span class='subtitle1 gray1'>Adult Participation | Music, Art and Animals<br />
    14-24 months | 1-4 years mixed ages | 2-3 years<br />
    <span class='size12 gray2'>Winter: $384 | Spring: $384</span>
    <span class='classCTA01'>Book Your Free Trial Today</span><br />
    <a class='rust' href='schedule.php'>View Schedule</a><br />
  </span>
  <p class='pgraph'>Join us on an animal adventure as we jump with the frogs and hop with the bunnies and learn about a new animal every week. We start out groovin' to the guitar, bouncing with the balls and dancing with our friends as we sing along with all types of instruments. As we wait with anticipation to meet the star of the show, "The Animal of The Week", we play and learn with toys that are similar to our animal visitor and just before he comes we settle down for a story. Once our special animal appears we get to touch, enjoy, and hear all about him. Every other week we pull out the paint, glue, feathers, sand and more as we create an animal masterpiece of our own. This one-of-a-kind class isn't over until you meet all of our friends in our indoor petting zoo.</p>

  <h3 class='register_heading'>Choose a semester to register now!</h3>
  <a id='' class='register_btn register_btn__winter' href='<?=WINTER_REGISTRATION_URL?>' target='_blank'>Winter</a>
  <a id='' class='register_btn register_btn__spring' href='<?=SPRING_REGISTRATION_URL?>' target='_blank'>Spring</a>
  <a id='' class='register_btn register_btn__summer' href='<?=SUMMER_REGISTRATION_URL?>' target='_blank'>Summer</a>
  <a id='' class='register_btn register_btn__fall' href='<?=FALL_REGISTRATION_URL?>' target='_blank'>Fall</a>

  <div class='clearB high60'></div>
</div>


<!-- ================ -->
<!-- = FARM FRIENDS = -->
<!-- ================ -->
<div class='clearB'>
  <img class='padR10 padT10 padB10' src='photos/farm_friends.jpg' />
  <span id='rsa' class='title2 blue2'>Farm Friends</span>
  <span class='subtitle1 gray1'>90-minute Adult and Me pre-school prep class<br />
    9:30am - 11:00am | 18 months to 2&frac12; years<br />
    <span class='size12 gray2'>Winter: $480 | Spring: $480</span>
  </span>
  <p class='pgraph'>Is your child ready for a longer class? Our Farm Friends, hour
  and a half class is the perfect program to engage your child in more play. We will
  introduce school concepts such as transitioning to other classrooms and activities,
  all with you, or your caregiver's support. This program will start in our main
  classroom giving your child many options such as play dough, puzzles, creative
  play with our kid's kitchen, trains, sensory activities and more. We will then
  gather for a small circle time to sing songs and say hello to our friends. Then
  it will be time for a healthy organic snack and a story. Before we venture to
  the petting zoo to see the animals, we will create an art project. Our program
  will end with meeting a new animal every week and free time in our petting zoo.</p>

  <h3 class='register_heading'>Choose a semester to register now!</h3>
  <a id="" class='register_btn register_btn__winter' href='<?=WINTER_REGISTRATION_URL?>' target='_blank'>Winter</a>
  <a id="" class='register_btn register_btn__spring' href='<?=SPRING_REGISTRATION_URL?>' target='_blank'>Spring</a>
  <a id="" class='register_btn register_btn__summer' href='<?=SUMMER_REGISTRATION_URL?>' target='_blank'>Summer</a>
  <a id="" class='register_btn register_btn__fall' href='<?=FALL_REGISTRATION_URL?>' target='_blank'>Fall</a>

  <div class='clearB high60'></div>
</div>


<!-- ===================== -->
<!-- = ART FOR BUSY KIDS = -->
<!-- ===================== -->
<div class='clearB'>
  <img class='padR10 padT10 padB10' src='images/afbk_logo.png' />
  <span id='rsa' class='title2 blue2'>Art for Busy Kids</span>
  <span class='subtitle1 gray1'>
    Wednesday | 2-6 years<br />
    9:30am - 10:30am | 3:30pm - 4:30pm<br />
  </span>
  <span class='size12 gray2'>Winter: $384 | Spring: $384</span>

  <p class='pgraph'>
    Join us for exploration and play through art. We will begin with open art
    time where the children will be invited to explore painting with different
    mediums and objects on a large piece of paper with their class. We will
    explore painting with bubble wrap, dragging small cars through paint and
    more. Then we will move onto a story which will help get our creativity
    flowing for our next project. Every week we will create a masterpiece using
    many different materials. Whether we paint on canvas, or create with
    recycled materials, everyone is sure to have fun creating art that will
    revolve around story book characters, the alphabet and the world around us.
    Children must attend with a caregiver and the older the child is, the more
    independent they can be. Before this hour class is through, it's time to
    visit all the animals in our petting zoo.
  </p>

  <h3 class='register_heading'>Choose a semester to register now!</h3>
  <a id='' class='register_btn register_btn__winter' href='<?=WINTER_REGISTRATION_URL?>' target='_blank'>Winter</a>
  <a id='' class='register_btn register_btn__spring' href='<?=SPRING_REGISTRATION_URL?>' target='_blank'>Spring</a>
  <a id='' class='register_btn register_btn__summer' href='<?=SUMMER_REGISTRATION_URL?>' target='_blank'>Summer</a>
  <a id='' class='register_btn register_btn__fall' href='<?=FALL_REGISTRATION_URL?>' target='_blank'>Fall</a>

  <div class="clearB high60"></div>
</div>


<!-- ===================== -->
<!-- = ANIMAL CARE CLASS = -->
<!-- ===================== -->
<div class="clearB">
  <img class="padR10 padT10 padB10" src="photos/animal_care.jpg" />
  <span id="acc" class="title2 blue2">Animal Care Class</span>
    <span class="subtitle1 gray1">After-school program<br />4-7 years<br />
    <span class="size12 gray2">Winter: $384 | Spring: $384</span>
    <span class='classCTA01'>Book Your Free Trial Today</span><br />
    <a class="rust" href="schedule.php">View Schedule</a><br />
  </span>
  <p class='pgraph'>This one-of-a-kind after school program will give your child
  the rare opportunity to spend time with live animals and to develop the important
  science skills of observation, classification and communication.  Using a hands-on
  approach to learning, your child will participate in age appropriate science
  activities, stories, fun games and creative crafts. Every session will include
  actively caring for our friendly critters, up-close animal encounters and time
  to record observations.  Before it's time to go the students can read an animal
  themed book or just relax with a favorite creature on the Farm. This one of a
  kind experience will instill in your child the importance of care, respect and
  responsibility for all living creatures.</p>

  <h3 class='register_heading'>Choose a semester to register now!</h3>
  <a id='' class='register_btn register_btn__winter' href='<?=WINTER_REGISTRATION_URL?>' target='_blank'>Winter</a>
  <a id='' class='register_btn register_btn__spring' href='<?=SPRING_REGISTRATION_URL?>' target='_blank'>Spring</a>
  <a id='' class='register_btn register_btn__summer' href='<?=SUMMER_REGISTRATION_URL?>' target='_blank'>Summer</a>
  <a id='' class='register_btn register_btn__fall' href='<?=FALL_REGISTRATION_URL?>' target='_blank'>Fall</a>

  <div class='clearB high60'></div>
</div>


<!-- ===================== -->
<!-- = MINI MASTERPIECES = -->
<!-- ===================== -->
<div class="clearB">
  <img class="padR10 padT10 padB10" src="photos/mini_masterpieces.jpg" />
  <span id="acc" class="title2 blue2">Mini Masterpieces</span>
  <span class="subtitle1 gray1">After-school program<br />
  <span class="subtitle1 gray1">Tuesday: 3:30pm - 4:30pm | 4-8 years<br />
  <span class="size12 gray2">Winter: $384 | Spring: $384</span></span>
  <p class='pgraph'>In this unique art class, students will focus on a different
  famous artist every week. We will explore their techniques and masterpieces before
  we create our own. Children will be introduced to different mediums such as acrylic
  paint, watercolors, chalk, and more! We will introduce and review the process
  of the famous artist we are focusing on as we encourage the children to create
  their own pieces of art.</p>

  <h3 class='register_heading'>Choose a semester to register now!</h3>
  <a id='' class='register_btn register_btn__winter' href='<?=WINTER_REGISTRATION_URL?>' target='_blank'>Winter</a>
  <a id='' class='register_btn register_btn__spring' href='<?=SPRING_REGISTRATION_URL?>' target='_blank'>Spring</a>
  <a id='' class='register_btn register_btn__summer' href='<?=SUMMER_REGISTRATION_URL?>' target='_blank'>Summer</a>
  <a id='' class='register_btn register_btn__fall' href='<?=FALL_REGISTRATION_URL?>' target='_blank'>Fall</a>
  <a id='' class='register_btn register_btn--now' href='https://theartfarmnyc.mypaysimple.com/s/the-art-farm-in-the-city' target='_blank'>Buy One Class</a>
</div>

<div class="clearB high60"></div>


<!-- ============================== -->
<!-- = FARM FOODIES COOKING CLASS = -->
<!-- ============================== -->
<div class='clearB'>
  <img class='padR10 padT10 padB10' src='photos/farm_foodies.jpg' />
  <span id="ff" class='title2 blue2'>Farm Foodies Cooking Class</span>
  <span class='subtitle1 gray1'>After-school program<br />
    Thursday: 11:30am - 12:30pm | 2-8 years mixed ages<br />
    Thursday: 3:30pm - 4:30pm | 2-8 years mixed ages<br />
      Saturday: 9:00am - 10:00am | 2-8 years mixed ages<br />
    <a class='rust mouseCursor' onclick='window.open("mini_chef_schedule.php","mcSchedule","width=480,height=400,left=100,top=100,scrollbars=yes");'>View Cooking Schedule</a><br />
    <span class='size12 gray2'>Drop In: $40 | Winter: $420 | Spring: $420</span><br />
  </span>
  <p class='pgraph'>Farm Fresh and Seasonal! Finally your child can enjoy a cooking
  class where they learn about the basics of cooking and the importance of fresh
  ingredients as well. Please join Chef Sylvie in smelling mint, shaping brioche,
  peeling rhubarb, cutting cookies and tasting new fresh fruits and vegetables.
  Winter Spring Summer and Fall Chef Sylvie creates a seasonal organic menu from
  around the globe. Your kids will embark on a cooking and sensory adventure
  while developing their taste buds for food fresh from the farm.</p>

  <h3 class='register_heading'>Choose a semester to register now!</h3>
  <a id='' class='register_btn register_btn__winter' href='<?=WINTER_REGISTRATION_URL?>' target='_blank'>Winter</a>
  <a id='' class='register_btn register_btn__spring' href='<?=SPRING_REGISTRATION_URL?>' target='_blank'>Spring</a>
  <a id='' class='register_btn register_btn__summer' href='<?=SUMMER_REGISTRATION_URL?>' target='_blank'>Summer</a>
  <a id='' class='register_btn register_btn__fall' href='<?=FALL_REGISTRATION_URL?>' target='_blank'>Fall</a>
  <a id='' class='register_btn register_btn--now' href='https://theartfarmnyc.mypaysimple.com/s/the-art-farm-in-the-city' target='_blank'>Buy One Class</a>
</div>

<div class='clearB high60'></div>


<!-- ============== -->
<!-- = HOMESCHOOL = -->
<!-- ============== -->
<div class='clearB'>
  <img class='padR10 padT10 padB10' src='photos/fall_homeschool_2014.jpg' />
  <span id='ff' class='title2 blue2'>Home School Fall 2017</span>
  <span class='subtitle1 gray1'>
    Thursday: 11:30am - 12:30pm | 5 - 8 years<br />
    September 28<sup>th</sup> - December 21<sup>st</sup><br />
    <span class ='size12 gray2'>12-week semester: $300</span><br />
    Class not running on Thanksgiving
  </span>
  <p class='pgraph'>
    Give your child the opportunity to spend time with live animals and to
    develop the important science skills of observation, classification, and
    communication. Children will be encouraged to make observations, ask
    questions, and use their sense of wonder about the natural world while
    exploring ways to be kind and respectful towards animals and their
    environment.
  </p>

  <p class='pgraph'>
    Each week we will take an in-depth look into animal habitats and animal
    classification through animal skulls, x-rays and footprints. During the
    class we will focus on animal husbandry including weighing and measuring
    animals. The children will also learn animal handling skills and create
    enrichment toys which they will share with our animals.
  </p>

  <div class='clearB high20'></div>

  <a id='' class='register_btn register_btn--now'
    href='https://campscui.active.com/orgs/TheArtFarminTheCity#/selectSessions/2117602'
    target='_blank'>Register Now!</a>

  <div class='clearB high30'></div>
</div>


<!--end content-->
<?php
closeContent();
drawFooter();
?>
