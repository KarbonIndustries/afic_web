<?php
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

<a class='title2 blue2 bold' href='#summer_camp'>Jump to Summer Camp</a>

<div class="clearB high20"></div>

<img src='images/winter_camp_header.jpg'/>
<div class="marginT20 clearB">&nbsp;</div>

<div class="clearB"></div>

<!-- =========== -->
<!-- WINTER CAMP -->
<!-- =========== -->
<div class="clearB">
  <span id="winter_camp" class="title2 blue2 clearB">Winter Camps 2017</span>
  <span class="subtitle1 gray1">Presidents Day &amp; Winter Break Camp February 20<sup>th</sup> - 24<sup>th</sup></span>
  <span class="size12 gray2">Ages 3-8 years</span><br />
  <span class="size12 gray2">Join us for one day or for everyday!</span><br /><br />

  <span class="title2 blue2 clearB">Activities for all ages include</span>
  <p class="pgraph">
    Live animal science lessons where the children can meet and pet new animals
    every day, arts &amp; crafts, cooking with our amazing chef, live rockin'
    music with guitar and singin, science projects, games, and special events!
  </p>

  <p class="pgraph">
    The Art Farm will be partnering with The Iken Science Academy and the camp
    will be hosted at their school at 351 East 74<sup>th</sup> Street between 1<sup>st</sup> Avenue
    &amp; 2<sup>nd</sup> Avenue.
  </p>

  <div class="clearB">
    <span id="halfDay" class="size20 bold clearB" style='color:#FF3333'>Half Day Group</span>
    <span class="subtitle1 gray1">MLK Day Jan 16<sup>th</sup></span>
    <span class="subtitle1 gray1">Presidents Day &amp; Winter Break February 20<sup>th</sup> - 24<sup>th</sup></span>
    <span class="subtitle1 gray1">(Register for on day or all of them)</span>
    <span class="size12 gray2">9am - 12:00pm | 3-4 years | $75/day</span><br />
    <span class="size12 gray2">Early Drop Off 8:30am - 9:00am | $15/day</span><br /><br />

    <p class="pgraph">
      We offer a half-day camp with a warm, nurturing program. Children spend
      time learning about holding and caring for our animals. They create art
      masterpieces, bake goodies, and sing their favorite songs to live guitar.
      Lots of play, fun, and games to celebrate winter break. We will provide a
      snack for your child and if your child is not fully potty-trained, please
      send him or her in pull-ups. We close the group at 15 children with 3
      qualified teachers. Children must be 3 years old to join the group.
    </p>

    <div class="clearB high20"></div>

    <a class="register_btn register_btn__now" href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=1784502" target="_blank">Register Now!</a>
  </div>

  <div class="separator"></div>

  <div class="clearB">
    <span id="fullDay" class="size20 bold" style='color:#FF3333'>Full Day Groups</span>
    <span class="subtitle1 gray1">MLK Day Jan 16<sup>th</sup></span>
    <span class="subtitle1 gray1">Presidents Day &amp; Winter Break February 20<sup>th</sup> - 24<sup>th</sup></span>
    <span class="subtitle1 gray1">(Register for on day or all of them)</span>
    <span class="subtitle1 gray1">9am - 3pm | 4-5 or 6-8 years | $125/day</span>
    <span class="size12 gray2">$575 for full week of Winter Break Camp February 20<sup>th</sup> - 24<sup>th</sup></span><br />
    <span class="size12 gray2">(Discount is only available for full week at time of full week registration)</span><br />
    <span class="size12 gray2">Early Drop Off 8:30am - 9:00am | $15/day</span><br />
    <span class="size12 gray2">Extended Day 3:00pm - 5pm | $30/day</span><br /><br />

    <p class="pgraph">
      Our full-day campers participate in music, art, cooking, science, nature,
      games, and live science animal lessons where the children will meet and
      pet new animals every day. The children will engage in many age-
      appropriate activities with lots of laughter and fun as we all celebrate
      winter break. Please send your child to camp with a lunch that is nut-
      free since we are a nut-free facility. We will provide the children with
      a snack before the end of the day. We close each group at 15 children
      with 3 qualified teachers.
    </p>

    <div class="clearB high20"></div>

    <a class="register_btn register_btn__now" href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=1784502" target="_blank">Register Now!</a>
  </div>
</div>

<div class="marginT20 clearB">&nbsp;</div>


<!-- ===================== -->
<!-- = COLUMBUS DAY CAMP = -->
<!-- ===================== -->
<!--
<div class="clearB">
  <span id="halfDay" class="title2 blue2 clearB">Columbus Day Camp</span>
  <span class="subtitle1 gray1">Monday, October 10th</span>
    <span class="size12 gray2">
      Full Day 9am-3pm | 4-8 years $125/day<br />
      Half Day 9am-12pm | 3-4 years $75/day<br />
    </span><br /><br />

    <p class="pgraph">
      In 1492 Columbus sailed the ocean blue. The Art Farm camp is offering
      lots of activities for your children to do. Music, art, cooking, live
      animal science lessons, outdoor play and more. Children will be split up
      into age-appropriate groups.
    </p>

    <p class='pgraph'>
      The Art Farm will be partnering with The Iken Science Academy and the
      camp will be hosted at their school at 351 E. 74th St. between 1st Ave.
      &amp; 2nd Ave.
    </p>

  <div class="floatR clearB">
    <a id="btn1R" class="" href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=1636101">
    <div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Register!</div><div class="btn1RL"><span class="invisible">.</span></div>
    </a>
  </div>
</div>

<div class="marginT20 clearB">&nbsp;</div>
-->


<!-- ================ -->
<!-- = HOLIDAY CAMP = -->
<!-- ================ -->

<!--
<span class="title2 blue2 clearB marginT20">Holiday Camp <?= date('Y')?></span>
<span class="subtitle1 gray1">December 19 - 23 and 27 - 30</span>
<span class="subtitle1 gray1">Join us for 1 day or all 9 days.</span>
<br />
<span class="bold subtitle1 gray1">Activities for all ages include</span>
<p class='pgraph'>
  Live animal science lessons where the children can meet and pet new animals
  every day, arts &amp; crafts, cooking with our amazing chef, live rockin'
  music with guitar and singing, science projects, games, and special events!
</p>

<p class='pgraph'>
  The Art Farm will be partnering with The Iken Science Academy and the camp
  will be hosted at their school at 351 East 74th Street between 1st Avenue and
  2nd Avenue.
</p>

<div class="clearB">
  <span id="halfDay" class="title2 rust clearB">Half Day Snowflakes Group</span>
  <span class="subtitle1 gray1">
    <span>AM Session | 9:00am - 12:00pm | 3-4 years</span><br />
    <span>PM Session | 12:30pm - 3:30pm | 3-4 years</span><br />
    <span class='bold'>Early Bird Price: $70 per day until December 1st</span><br />
    <span class='bold'>Regular Price: $75 per day</span><br />
    <span>Early Drop Off 8:30am - 9:00am: $15/day</span><br />
    <span>Extended Day for afternoons 3:30pm - 5:00pm: $30/day</span>
  </span><br />

  <p class="pgraph">
    We offer a half day camp with a warm nurturing program. Children spend time
    learning about holding and caring for our animals. They create art
    masterpieces, bake goodies, and sing their favorite songs to live guitar.
    Lots of play fun and games to celebrate winter break. We will provide a
    snack for your child and if your child is not fully potty trained, please
    send him or her in pull-ups. We close the group at 15 children with 3
    qualified teachers. Children must be 3 years old to join the group.
  </p>

  <div class="floatR clearB">
    <a id="btn1R" class=""
      href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=1667202">
      <div class="btn1RR"><span class="invisible">.</span></div>
      <div class="btn1RC">&#187; Register!</div>
      <div class="btn1RL"><span class="invisible">.</span></div>
    </a>
  </div>
</div>

<div class="clearB">
  <span id="halfDay" class="title2 rust clearB">Full Day Peppermints Group</span>
  <span class="subtitle1 gray1"><span>9:00am - 3:00pm | 4 - 5 years</span><br />
  <span id="halfDay" class="title2 rust clearB">Full Day Gingerbreads Group</span>
  <span class="subtitle1 gray1"><span>9:00am - 3:00pm | 5 - 8 years</span><br />
  <span class='bold'>Early Bird Price: $110 per day until December 1st</span><br />
  <span class='bold'>Regular Price: $125 per day</span><br />
  <span>Early Drop Off 8:30am - 9:00am: $15/day</span><br />
  <span>Extended Day 3:00pm - 5pm $30/day.</span></span><br />

  <p class="pgraph">
    Our Full day campers participate in music, art, cooking, science, nature,
    games, and live science animal lessons where the children will meet and pet
    new animals every day. The children will engage in many age-appropriate
    activities with lots of laughter and fun as we all celebrate winter break.
    Please send your child to camp with a lunch that is nut-free since we are
    a nut-free facility. We will provide the children with a snack before the
    end of the day. We close each group at 15 children with 3 qualified
    teachers.
  </p>

  <div class="floatR clearB">
    <a id="btn1R" class=""
      href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=1667202">
      <div class="btn1RR"><span class="invisible">.</span></div>
      <div class="btn1RC">&#187; Register!</div>
      <div class="btn1RL"><span class="invisible">.</span></div>
    </a>
  </div>
</div>
<div class="clearB marginT15" style="float:left"></div>

<div class="formSeparator1 marginB10 marginT10 clearB"></div>
<div class="clearB high30"></div>

<span id="rsa" class="red title2 alignC">
  Summer Camp Registration Begins January 15th<br />
  <span class='size12'>The Art Farm Summer Camp will be located at The Trevor Day School East 95th
  St.</span>
</span>

<div class="clearB high30"></div>
<div class="clearB high30"></div>
-->

<div id='summer_camp' class="separator"></div>

<img src='photos/summer_camp/gym.jpg' />

<div class='clearB high20'></div>

<!-- =============== -->
<!-- = SUMMER CAMP = -->
<!-- =============== -->

<h1 class='alignC margin0' style='color:#FF3333'>
  The Art Farm in The City Summer Camp</span>
</h1>

<h2 class='alignC marginT0' style='color:#B9C9DA;font-weight:normal'>
  <span class='bold' style='color:#548FCF'>at Trevor Day School</span><span
  class='italic' style='color:#3FBB67'>, East Campus</span>
</h2>

<h2 class='alignC marginT0' style='color:#548FCF;font-weight:normal'>
  June 26<sup>th</sup> - August 18<sup>th</sup>, 2017
</h2>

<p class='alignC size16 blue2' style='width:440px;margin:auto'>
  For a second year, we are excited to offer our summer camp program in the
  state-of-the-art facilities of Trevor Day School East Campus on
  95<sup>th</sup> St between 1<sup>st</sup> and 2<sup>nd</sup> Ave.
  Registration is done on a per-week basis. You may register for 1 week of camp
  or for all 8.
</p>

<div class='clearB high20'></div>

<p class="pgraph">
  The Art Farm will be offering a full-day and half-day camp experience for
  ages 3-9 years old. All children will get hands-on experience learning about
  our live animals. Full-day groups will take walking trips to our indoor
  petting zoo several times per week and our half-day campers will receive
  complimentary play time passes to visit The Art Farm with their family during
  the week after camp. All campers will garden and enjoy outdoor activities on
  the terrace every day. Every camper will enjoy cooking with us as we introduce
  our farm-to-table lessons that coincide with our gardening. Full-day campers
  will swim at the 92<sup>nd</sup> St. Y and all groups will participate in
  many physical activities including indoor soccer, kick ball, wiffle ball,
  gaga, and more physical games. All of our art and special events will revolve
  around our <a class='blue2 bold' href='#weekly_themes'>weekly themes</a>
</p>

<p class='pgraph'>
  <span class='bold'>Our <a class='blue2' href='#weekly_themes'>weekly themes</a>
  include:</span> Superheroes, Storybook Land, Hall of Fame, Exotic Animals,
  Tropical Excursion, Under The Big Top, S'more Fun and more.
</p>

<p class='pgraph'>
  You may pack a nut-free lunch or purchase one. We are offering lunch through
  Red Rabbit, a healthy organic nut-free school/camp lunch program. Hot meals
  are offered for all groups for $7/day including juice or milk. Groups are
  based on 18 children with 3 teachers and one CIT. We offer a 10% sibling
  discount.
</p>

<p class='clearB'>
  <a class='bold blue2' href='data/red_rabbit_sample_menu.pdf'>View Red Rabbit Sample Menu</a>
</p>

<img src='photos/summer_camp/pool.jpg' />

<div class='clearB high20'></div>

<img style='display:block;float:left;margin-right:8px' src='photos/summer_camp/1225.jpg' />
<img style='display:block;float:left;margin-right:8px' src='photos/summer_camp/1660.jpg' />
<img style='display:block;float:left' src='photos/summer_camp/0062.jpg' />

<div class='clearB high20'></div>

<div class="clearB">
  <span id="halfDay" class="size20 bold clearB" style='color:#FF3333'>Hamsters Half Day Camp</span>
  <span class="subtitle1 gray1">9am - 12:30pm | 3-4 years</span>
  <span class="size20 bold clearB" style='color:#FF3333'>Fishies Half Day Camp</span>
  <span class="subtitle1 gray1">10am - 1pm | 3-4 years</span>

  <div class='clearB high20'></div>

  <span class="size12 gray2">Mon - Fri: $550 | Mon, Wed, Fri: $385 | Tues, Thurs: $275</span><br />
  <span class="size12 gray2">Early Drop Off 8:30am - 9:00am | $15/day</span><br />

  <div class='clearB high20'></div>

  <p class="pgraph">
    We offer a half-day camp with a warm, nurturing program so that separation
    is easy. Children will have animal science lessons and up-close encounters
    with our live animals daily. They will create art masterpieces, garden,
    cook in the kitchen, and will enjoy playing musical instruments in music
    with guitar and singing. Every day, our campers will get fresh air outside
    on the terrace, play parachute games, water play, and more. They will also
    have indoor soccer, yoga, and physical games. Every week, the children will
    participate in a weekly theme event which takes place on Tuesdays and
    Wednesdays, so all campers can enjoy the fun. Please pack a nut-free lunch
    for your child or buy one through our lunch program. Our half-day campers
    will remain on the grounds of the Trevor Day facility during camp. Half-day
    campers will receive complimentary passes to our afternoon drop-in at The
    Art Farm for petting zoo, art and play room. Passes will be granted for the
    equal amount of days they are attending camp and they must be used within
    the enrolled summer.
  </p>

  <div class="clearB high20"></div>

  <a
    class="register_btn register_btn__now"
    href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=1779002&location=707901"
    target="_blank">
    Register Now!
  </a>
</div>

<div class="separator"></div>

<img style='display:block;float:left;margin-right:8px' src='photos/summer_camp/0225.jpg' />
<img style='display:block;float:left;margin-right:8px' src='photos/summer_camp/1379.jpg' />
<img style='display:block;float:left' src='photos/summer_camp/0113.jpg' />

<div class='clearB high20'></div>

<div class="clearB">
  <span id="fullDay" class="size20 bold" style='color:#FF3333'>Froggies</span>
  <span class="subtitle1 gray1">9am - 3pm | 4 years</span>

  <div class='clearB high20'></div>

  <span class="size12 gray2">Mon - Fri: $685 | Mon, Wed, Fri: $525 | Tues, Thurs: $385</span><br />
  <span class="size12 gray2">Early Drop Off 8:30am - 9:00am | $15/day</span><br />
  <span class="size12 gray2">Extended Day 3:00pm - 5pm | $40/day</span><br />

  <div class='clearB high20'></div>

  <p class="pgraph">
    Our Full-Day Froggies group is a great segue into our full-day camp. Our
    teachers are very sweet and nurturing to help ease those entering a
    full-day experience for the first time. They will participate in music,
    art, cooking, animal care, science, nature, and more. Campers will also
    play sports every day. If your child is enrolled in our camp for 5 days,
    then your child will have 2 days of swimming at the 92<sup>nd</sup> St Y
    and the other 3 days will be a combination of sports including indoor
    soccer, yoga, dance, and physical games. If your child is enrolled in 2 or
    3 days of camp, then your child will have one day of swimming and the other
    days, they will have other included sports. During swim, the children will
    receive swim lessons instructed by Red Cross-trained life guards. Your
    child can be a beginner in the pool or a pro. Children will also garden on
    the terrace this summer, which we will inncorporate into into our cooking
    lessons. Our Froggies group will take a walk to visit our indoor petting
    zoo at The Art Farm several times during the week. Every week, we will
    focus on a different theme and the children will enjoy special theme
    presentations on Tuesdays and Wednesdays so everyone is included in the
    fun. Please pack a nut-free lunch for your child or buy one through our
    lunch program. All campers will receive a healthy snack including fresh
    fruit at the end of the day before pick up.
  </p>

  <div class="clearB high20"></div>

  <a
    class="register_btn register_btn__now"
    href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=1779002&location=707901"
    target="_blank">
    Register Now!
  </a>
</div>

<div class="separator"></div>

<img style='display:block;float:left;margin-right:8px' src='photos/summer_camp/0123.jpg' />
<img style='display:block;float:left;margin-right:8px' src='photos/summer_camp/0976.jpg' />
<img style='display:block;float:left' src='photos/summer_camp/sergio.jpg' />

<div class='clearB high20'></div>

<div class="clearB">
  <span class="size20 bold" style='color:#FF3333'>Parrots, Geckos, &amp; Chinchillas</span>
  <span class="subtitle1 gray1">9am - 3pm | Parrots: 5 years | Geckos: 6 years | Chinchillas: 7-9 years</span>

  <div class='clearB high20'></div>

  <span class="size12 gray2">Mon - Fri: $685 | Mon, Wed, Fri: $525 | Tues, Thurs: $385</span><br />
  <span class="size12 gray2">Early Drop Off 8:30am - 9:00am: $15/day</span><br />
  <span class="size12 gray2">Extended Day 3:00pm - 5pm $40/day</span><br />

  <div class='clearB high20'></div>

  <p class="pgraph">
    Our full-day campers in these groups will be separated into their own age
    groups. The programming will be applied to the skill level they can
    age-appropriately handle. They will participate in music, art, cooking,
    animal care, science, nature, and more. Campers will also play sports every
    day. If your child is enrolled in our camp for 5 days, then your child will
    have 2 days of swimming at the 92<sup>nd</sup> St Y and the other 3 days
    will be a combination of sports including indoor soccer, yoga, dance, and
    physical games. If your child is enrolled in 2 or 3 days of camp, then your
    child will have one day of swimming and the other days they will have other
    included sports. During swim, the children will receive swim lessons
    instructed by Red Cross-trained life guards. Your child can be a beginner
    in the pool or a pro. Children will also garden on the terrace this summer
    and we will incorporate it into our cooking lessons. Our full-day groups
    will take a walk to visit our indoor petting zoo at The Art Farm several
    times during the week. Children ages 5-9 will participate in electives
    twice a week where they can customize their day and choose from
    jewelry-making, scrapbooking, woodworking, drama, sports, and digital
    photography. Every week, we will focus on a different theme and the
    children will enjoy special theme presentations on Tuesdays and Wednesdays
    so everyone is included in the fun. Please pack a nut-free lunch for your
    child or buy one through our lunch program. All campers will receive a
    healthy snack including fresh fruit at the end of the day before pick up.
  </p>

  <div class="clearB high20"></div>

  <a
    class="register_btn register_btn__now"
    href="https://campscui.active.com/orgs/TheArtFarminTheCity?season=1779002&location=707901"
    target="_blank">
    Register Now!
  </a>
</div>

<div class="separator"></div>

<h2 id='weekly_themes'>Summer Camp Weekly Themes</h2>

<h3 style='margin-bottom:0'>
  <span class='blue2'>Week 1:</span> Big Apple and The Red, White, and Blue <span style='font-weight:normal;font-size:0.8em'>(June 26<sup>th</sup> - June 30<sup>th</sup>)</span>
</h3>
<p class='pgraph'>
  We will explore what makes our city and country unique and finish off with a
  patriotic birthday party bash!
</p>

<h3 style='margin-bottom:0'>
  <span class='blue2'>Week 2:</span> S'more Fun <span style='font-weight:normal;font-size:0.8em'>(July 5<sup>th</sup> - July 7<sup>th</sup>) <i>No camp July 3<sup>rd</sup> and 4<sup>th</sup></i></span>
</h3>
<p class='pgraph'>
  Help us transform our camp into a campsite with tents, campfires and more!
  The children will feel like they have escaped the city while they sing songs
  under the stars.
</p>

<h3 style='margin-bottom:0'>
<span class='blue2'>Week 3:</span> Superheroes <span style='font-weight:normal;font-size:0.8em'>(July 10<sup>th</sup> - 14<sup>th</sup>)</span>
</h3>
<p class='pgraph'>
  Crash! Boom! Bang! Watch our super powers fly during this week of
  action-packed fun.
</p>

<h3 style='margin-bottom:0'>
  <span class='blue2'>Week 4:</span> Under The Big Top <span style='font-weight:normal;font-size:0.8em'>(July 17<sup>th</sup> - 21<sup>st</sup>)</span>
</h3>
<p class='pgraph'>
  Come one, come all! Join The Art Farm for a week of silliness and fun,
  including carnival games and more!
</p>

<h3 style='margin-bottom:0'>
  <span class='blue2'>Week 5:</span> Tropical Excursion <span style='font-weight:normal;font-size:0.8em'>(July 24<sup>th</sup> - 28<sup>th</sup>)</span>
</h3>
<p class='pgraph'>
  Join us for an adventure as we visit tropical destinations, which include
  luaus, grass skirts, Hawaiian dancers and more.
</p>

<h3 style='margin-bottom:0'>
  <span class='blue2'>Week 6:</span> Storybook Land <span style='font-weight:normal;font-size:0.8em'>(July 31<sup>st</sup> - August 4<sup>th</sup>)</span>
</h3>
<p class='pgraph'>
  Join in the fun with pirates, princesses, knights, fairies, castles, and
  dragons. Even The Cat in The Hat might stop by. Help us make majestic
  memories.
</p>

<h3 style='margin-bottom:0'>
  <span class='blue2'>Week 7:</span> Hall of Fame <span style='font-weight:normal;font-size:0.8em'>(August 7<sup>th</sup> - 11<sup>th</sup>)</span>
</h3>
<p class='pgraph'>
  Your child will join our Hall of Fame as we focus on all the best in music,
  sports, and film.
</p>

<h3 style='margin-bottom:0'>
  <span class='blue2'>Week 8:</span> Exotic Animals <span style='font-weight:normal;font-size:0.8em'>(August 14<sup>th</sup> - 18<sup>th</sup>)</span>
</h3>
<p class='pgraph'>
  Grab your binoculars and join us as we set out on an expedition through the
  safari! Snakes, alligators, hedgehogs, and other exotic creatures will visit!
</p>

<img src='photos/summer_camp/0043.jpg' />

<div class='clearB high20'></div>
<div class="marginT20 clearB">&nbsp;</div>


<!--end content-->
<?php
closeContent();
drawFooter();
?>
