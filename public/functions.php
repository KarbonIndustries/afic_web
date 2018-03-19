<?php
error_reporting(0);

require_once('../inc/config.php');

define("AF_LOGO_URL","/");
define("AF_HOME_URL",".");
define("AF_HAMPTONS_URL","http://www.theartfarms.org/af/");

$cache_buster_date = date(ymdHis);

# ==========
# = HEADER =
# ==========

function openHeader($title)
{
  global $cache_buster_date;

  if(is_string($title))
  {
      $title = ' :: ' . $title;
  }

  echo <<<HTML
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
  <title>The Art Farm in The City${title}</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="author" content="Shammel Lee" />
  <meta name="description" content="The Art Farm is a nature-focused children's educational center offering a break from city life with art, music, and cooking-themed classes, playtime, drop-ins, birthday parties, and camps that your whole family will love!" />
  <meta name="keywords" content="art farm,art farm in the city,the art farm,the art farm in the city,childrens classes,birthday parties,summer camp,upper east side,animals,mommy and me classes,field trips,preschool,pre-school,play time,playtime,weekend programs,weekends,play group,playgroup,petting zoo,nyc,outreach programs,childrens cooking classes,cooking classes,baking,toy store,after school classes" />
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="styles.css?v=${cache_buster_date}" type="text/css" />

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WWVLJGS');</script>
  <!-- End Google Tag Manager -->

  <meta name="google-site-verification" content="fEzbYWxbX34CcbRZJJmlLVaHlx4B_nt9-GB0XNjjbpA" />
HTML;

  if(INCLUDE_VEX_POPUP)
  {
    echo <<<HTML
    <link rel="stylesheet" href="css/vex.css" />
    <link rel="stylesheet" href="css/vex-theme-default.css" />
HTML;
  }

  echo <<<HTML
  <script type="text/javascript">
    function getIEVersion()
    {
      var agent = navigator.userAgent;
      var ie = "MSIE ";
      var offset = agent.indexOf(ie);

      if(offset == -1)
      {
        return 0;
      }else
      {
        return parseFloat(agent.substring(offset + ie.length, agent.indexOf(";", offset + ie.length)));
      }
    }

    if(navigator.userAgent.indexOf("MSIE") >= 0 && getIEVersion() < 7)
    {
      alert("Your browser is out of date.\\nThis may cause the site to display improperly.\\nPlease upgrade to a newer version.\\n\\nRecommendations: Firefox, Safari, Chrome");
    }
  </script>

HTML;
}

function includeJs()
{
  echo '<script src="scripts/art_farm.js?v=' . date(ymdHis) . '" type="text/javascript"></script>';
}

function openSwfObjCode()
{
  echo '<script type="text/javascript" src="scripts/swfobject.js"></script>
  <script type="text/javascript">
    var flashvars = {};
    var params = {};
    var attributes = {};';
}

function embedFlash($flashPath, $id, $width, $height)
{
  echo 'swfobject.embedSWF("' . $flashPath . '", "' . $id . '", "' . $width . '", "' . $height . '", "9.0.0", "flash/expressInstall.swf", flashvars, params, attributes);';
}

function closeSwfObjCode()
{
  echo '</script>
  ';
}

function closeHeader()
{
  echo '</head>';
}

# =================
# = PAGE ELEMENTS =
# =================

function drawMainMenu($page)
{
  $home =   "homeUp";
  $hamptons = "hamptonsUp";
  $press =  "pressUp";
  $about =  "aboutUp";
  $contact =  "contactUp";

  switch($page)
  {
    case "home":
    $home = "homeOver";
    break;
    /*case "hamptons":
    $hamptons = "hamptonsOver";
    break;*/
    case "press":
    $press = "pressOver";
    break;
    case "about":
    $about = "aboutOver";
    break;
    case "contact":
    $contact = "contactOver";
    break;
    default:
    break;
  }

  echo '
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWVLJGS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="newsShell">
      <div class="news">
      </div>
    </div>
    <div id="outerShell" class="">
      <div id="header" class="">
        <div id="headerLeft" class="">
          <a href="' . AF_LOGO_URL . '"><img id="logo" class="block" src="images/artfarm_logo.svg" /></a>
        </div>
        <div id="headerRight" class="">
          <ul>
            <li><a class="' . $home . '" href="' . AF_HOME_URL . '">Home</a></li>
            <li><a class="' . $hamptons . '" href="'. AF_HAMPTONS_URL . '" target="_blank">Hamptons Location</a></li>
            <li><a class="' . $press . '" href="press.php">Press</a></li>
            <li><a class="' . $about . '" href="about.php">About Us</a></li>
            <li><a class="' . $contact . '" href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    <!--end of header-->
  ';
}

function drawActivitiesMenu($page)
{
  $membership         = "membershipUp";
  $classes            = "classesUp";
  $bDayParties        = "bDayPartiesUp";
  $preSchool          = "preSchoolUp";
  $playGroup          = "playGroupUp";
  $weekendPrograms    = "weekendProgramsUp";
  $camp               = "campUp";
  $dropIn             = "dropInUp";
  $outreachFieldTrips = "outreachFieldTripsUp";

  switch ($page)
  {
      case "membership":
      $membership = "membershipOver";
      break;
      case "classes":
      $classes = "classesOver";
      break;
      case "bDayParties":
      $bDayParties = "bDayPartiesOver";
      break;
      case "preSchool":
      $preSchool = "preSchoolOver";
      break;
      case "playGroup":
      $playGroup = "playGroupOver";
      break;
      case "weekendPrograms":
      $weekendPrograms = "weekendProgramsOver";
      break;
      case "camp":
      $camp = "campOver";
      break;
      case "dropIn":
      $dropIn = "dropInOver";
      break;
      case "outreachFieldTrips":
      $outreachFieldTrips = "outreachFieldTripsOver";
      break;
      default:
      break;
  }

    echo <<<HTML
    <div id='activitiesMenu' class=''>
    <ul class='menu-panel-page-list'>
      <li><a class='${membership} ' href='membership.php' title='Membership'>Membership</a></li>
      <li><a class='${classes} ' href='classes.php' title='Classes'>Classes</a></li>
      <li><a class='${bDayParties} ' href='bday_parties.php' title='Birthday Parties'>Birthday Parties</a></li>
      <li><a class='${preSchool} ' href='preschool.php' title='Pre-School'>Pre-School</a></li>
      <li><a class='${playGroup} ' href='twos_group.php' title="Two's Group">Two's Group</a></li>
      <li><a class='${weekendPrograms} ' href='weekend_programs.php' title='Weekend Programs'>Weekend<br />Programs</a></li>
      <li><a class='${camp} ' href='camp.php' title='Camp'>Camp</a></li>
      <li><a class='${dropIn} ' href='drop_in.php' title='Drop In'>Drop In</a></li>
      <li><a class='${outreachFieldTrips} ' href='outreach_field_trips.php' title='Outreach Field Trips'>Outreach<br />Field Trips</a></li>
    </ul>
  </div>
  <!--end of activities menu-->
HTML;
}

function drawHomePanel()
{
  echo <<<HTML
  <div class='menu-panel'>
    <ul class='menu-panel-page-list'>
      <li><a class='menu-panel-page-link mpUp' href='act_by_age.php'>Activities by Age</a></li>
      <li><a class='menu-panel-page-link mpUp' href='schedule.php'>Schedule</a></li>
      <li><a class='menu-panel-page-link mpUp' href='https://storecard.mercurypay.com/CardStudioExt/?bid=407500'>Gift Cards</a></li>
      <li><a class='menu-panel-page-link mpUp' href='tour.php'>Farm Tour</a></li>
      <li><a class='menu-panel-page-link mpUp' href='https://campscui.active.com/orgs/TheArtFarminTheCity'>Register Today!</a></li>
      <li><a class='menu-panel-page-link mpUp' href='testimonials.php'>Testimonials</a></li>
    </ul>
    <div class='menu-panel-info'>
      <span class='block'>The Art Farm NYC</span>
      <span class='size12'>419 E. 91st Street<br />
      New York, NY 10128<br />
      (between York &amp; 1st Ave.)<br />
      Phone: 212.410.3117<br /></span>
      <a class='white size12' href='mailto:frontdesk@theartfarms.org'>frontdesk@theartfarms.org</a>
    </div>
  </div>
  <!--end of panel-->

  <div id='slideshow1'>
    <a href='http://www.adobe.com/go/getflashplayer'>
      <img src='http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' />
    </a>
  </div>
  <!--end of panel slideshow-->
HTML;
}

function drawPanel($page)
{
  $actByAge     = 'mpUp';
  $schedule     = 'mpUp';
  $giftCards    = 'mpUp';
  $tour         = 'mpUp';
  $register     = 'mpUp';
  $testimonials = 'mpUp';

  switch ($page)
  {
    case 'actByAge':
    $actByAge = 'mpOver';
    break;
    case 'schedule':
    $schedule = 'mpOver';
    break;
    case 'giftCards':
    $giftCards = 'mpOver';
    break;
    case 'tour':
    $tour = 'mpOver';
    break;
    case 'register':
    $register = 'mpOver';
    break;
    case 'testimonials':
    $testimonials = 'mpOver';
    default:
    break;
  }

  echo <<<HTML
  <div class='menu-panel'>
    <ul class='menu-panel-page-list'>
      <li><a class='menu-panel-page-link ${actByAge}' href='act_by_age.php'>Activities by Age</a></li>
      <li><a class='menu-panel-page-link ${schedule}' href='schedule.php'>Schedule</a></li>
      <li><a class='menu-panel-page-link ${giftCards}' href='https://storecard.mercurypay.com/CardStudioExt/?bid=407500'>Gift Cards</a></li>
      <li><a class='menu-panel-page-link ${tour}' href='tour.php'>Farm Tour</a></li>
      <li><a class='menu-panel-page-link ${register}' href='https://campscui.active.com/orgs/TheArtFarminTheCity'>Register Today!</a></li>
      <li><a class='menu-panel-page-link ${testimonials}' href='testimonials.php'>Testimonials</a></li>
    </ul>

    <div class='menu-panel-info'>
      <span class='block'>The Art Farm NYC</span>
      <span class='size12'>419 E. 91st Street<br />
      New York, NY 10128<br />
      (between York &amp; 1st Ave.)<br />
      Phone: 212.410.3117<br /></span>
      <a class='white size12' href='mailto:frontdesk@theartfarms.org'>frontdesk@theartfarms.org</a>
    </div>
  </div>
  <!--end of panel-->
HTML;
}

function drawPreschoolPanel()
{
  $actByAge     = 'mpUp';
  $schedule     = 'mpUp';
  $membership   = 'mpUp';
  $tour         = 'mpUp';
  $register     = 'mpUp';
  $testimonials = 'mpUp';

  switch ($page)
  {
    case 'actByAge':
    $actByAge = 'mpOver';
    break;
    case 'schedule':
    $schedule = 'mpOver';
    break;
    case 'membership':
    $membership = 'mpOver';
    break;
    case 'tour':
    $tour = 'mpOver';
    break;
    case 'register':
    $register = 'mpOver';
    break;
    case 'testimonials':
    $testimonials = 'mpOver';
    default:
    break;
  }

  echo <<<HTML
  <div class='menu-panel'>
    <ul class='menu-panel-page-list'>
      <li><a class='menu-panel-page-link ${actByAge}' href='act_by_age.php'>Activities by Age</a></li>
      <li><a class='menu-panel-page-link ${schedule}' href='schedule.php'>Schedule</a></li>
      <li><a class='menu-panel-page-link ${membership}' href='membership.php'>Membership</a></li>
      <li><a class='menu-panel-page-link ${tour}' href='tour.php'>Farm Tour</a></li>
      <li><a class='menu-panel-page-link ${register}' href='https://campscui.active.com/orgs/TheArtFarminTheCity'>Register Today!</a></li>
      <li><a class='menu-panel-page-link ${testimonials}' href='testimonials.php'>Testimonials</a></li>
    </ul>

    <div class='menu-panel-info'>
      <div id='preschool-panel'>
        <h3 class='preschool-panel-heading
        preschool-panel-heading--main'>Now accepting applications
        for 2018 - 2019 school year!</h3>

        <ul class='preschool-panel-list preschool-panel-list--program'>
          <li class='preschool-panel-list-item preschool-panel-list-item--program'>
            <h4 class='preschool-panel-program-list-item-heading'>2's Program</h4>
            <p class='preschool-panel-program-list-item-paragraph'>Children born Jan. 2016 - Jul. 2016</p>
            <p class='preschool-panel-program-list-item-paragraph'>2 Day | T, TH | Half Day</p>
            <p class='preschool-panel-program-list-item-paragraph'>Tuition starting at $7,450</p>
          </li>

          <li class='preschool-panel-list-item preschool-panel-list-item--program'>
            <h4 class='preschool-panel-program-list-item-heading'>3's Program</h4>
            <p class='preschool-panel-program-list-item-paragraph'>Children born in 2015</p>
            <p class='preschool-panel-program-list-item-paragraph'>Half Day &amp; Full Day Options</p>
            <p class='preschool-panel-program-list-item-paragraph'>2 - 5 Day Options</p>
            <p class='preschool-panel-program-list-item-paragraph'>Tuition starting at $9,350</p>
          </li>

          <li class='preschool-panel-list-item preschool-panel-list-item--program'>
            <h4 class='preschool-panel-program-list-item-heading'>4's Program</h4>
            <p class='preschool-panel-program-list-item-paragraph'>Children born in 2014</p>
            <p class='preschool-panel-program-list-item-paragraph'>5 Day Afternoon Program</p>
            <p class='preschool-panel-program-list-item-paragraph'>Tuition is $12,000</p>
          </li>
        </ul>
      </div>

      <p class='preschool-panel-paragraph bold'>For an application or to
      schedule a tour, please email: <a class='preschool-panel-link'
      href='mailto:frontdesk@theartfarms.org'>FrontDesk@TheArtFarms.org</a></p>

      <p class='preschool-panel-paragraph bold'>Check out what is going oni in
      our classroom&hellip;</p>

      <ul class='preschool-panel-list'>
        <li class='preschool-panel-list-item'><a class='preschool-panel-link'
        href='http://mailchi.mp/theartfarms.org/summer-camp-newsletter-week-253121%C2%A0'>October
        2017 Newsletter</a></li>
      </ul>

      <hr class='preschool-panel-rule preschool-panel-rule--horizontal'>

      <span class='block'>The Art Farm NYC</span>
      <span class='size12'>419 E. 91st Street<br />
      New York, NY 10128<br />
      (between York &amp; 1st Ave.)<br />
      Phone: 212.410.3117<br /></span>
      <a class='white size12' href='mailto:frontdesk@theartfarms.org'>frontdesk@theartfarms.org</a>
    </div>
  </div>
  <!--end of panel-->
HTML;
}

# ===========
# = CONTENT =
# ===========

function openContent($title, $page)
{
  drawPanel($page);

  echo <<<HTML
  <main id="content" class="" data-page-id="${page}">
HTML;

  if(is_string($title))
  {
    echo '
    <span class="title1">' . $title . '</span>
    ';
  }
}

function openPreschoolContent($title, $page)
{
  drawPreschoolPanel($page);
  echo '
  <div id="content" class="">
  ';

  if (is_string($title))
  {
    echo '
    <span class="title1">' . $title . '</span>
    ';
  }
}

function closeContent()
{
  echo <<<HTML
  </main>
  <!--end of content-->
HTML;
}

function drawFooter()
{
  global $cache_buster_date;

  $_year                        = date(Y);
  $_author_url                  = AUTHOR_URL;
  $_google_analytics_account_id = GOOGLE_ANALYTICS_ACCOUNT_ID;

  echo <<<HTML
    </div style="position:relative">
    <!--end of outerShell-->
    <div id="footer">
      <div id="footerBox" class="clearfix">

        <div id="press">
          <h3>Check out our recent press&hellip;</h3>
          <ul>
            <li><a href="http://www.travelmag.com/articles/things-to-do-in-upper-east-side/" target="_blank">TravelMag</a></li>
            <li><a href="http://www.mommynearest.com/articles/spotlight-on-the-art-farm-in-the-city" target="_blank">Mommy Nearest</a></li>
            <li><a href="http://pix11.com/2014/05/16/its-a-g-thing-the-art-farm-in-the-city-lets-kids-befriend-animals/#axzz32NPqwivD" target="_blank">PIX 11</a></li>
            <li><a href="press/ny_post.pdf" target="_blank">New York Post</a></li>
            <li><a href="http://digital.modernluxury.com/publication/?i=240584&ver=html5&p=59#{"page":59,"issue_id":240584}" target="_blank">Manhattan Magazine</a></li>
            <li><a href="press.php">View all press</a></li>
          </ul>
        </div>

        <div id="emailSignUp">
          <!-- Begin MailChimp Signup Form -->
          <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
          <div id="mc_embed_signup">
          <form action="//theartfarms.us6.list-manage.com/subscribe/post?u=1cd721e945cbd26b9264e9189&amp;id=1b69ae14d8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <label for="mce-EMAIL">Subscribe to our mailing list&hellip;</label>
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_1cd721e945cbd26b9264e9189_1b69ae14d8" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </form>
          </div>

          <!--End mc_embed_signup-->
        </div>
      </div>

      <span class="block floatL padT5">&#169; ${_year}, The Art Farm. All rights reserved.</span>
      <div id="secondaryLinks" class="floatR clearfix">
        <ul class="">
          <li><a class="padT5" href="http://www.facebook.com/pages/New-York-NY/Art-Farm-in-the-City/160406469093/" target="_blank"><img src="images/fb_icon.png" /></a></li>
          <li><a class="padT5" href="http://twitter.com/TheArtFarmNYC/" target="_blank"><img src="images/twit_icon.png" /></a></li>
          <li><a class="hoverRust padT5" href="contact.php">Contact Us</a></li>
          <li><a class="hoverRust padT5" href="sitemap.php">Sitemap</a></li>
          <li><a class="hoverRust padT5" href="http://www.victoriajacksonphoto.com/" rel="nofollow" target="_blank">Photos &copy; Victoria Jackson Photography</a></li>
        </ul>
        <a class="authorHover marginL5 pad5" href="${_author_url}" rel="nofollow" target="_blank">&#160;Site by <span class="bold">Shammel Lee</span>&#160;</a>
      </div>
    </div>
    <!--end of footer-->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '${_google_analytics_account_id}']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
      })();
    </script>

    <div style="display:none">
      <div id="modal_content">
        <div class="modal__header">
          <h1 class="modal__title">Give an alternative to toys this holiday season!</h1>
          <p class="subhead">Give a gift that inspires <strong>confidence, compassion, &amp; creativity</strong>.</p>
        </div>

        <div class="modal__body_shell">
            <a class="modal__cta modal__cta--single" href="https://storecard.mercurypay.com/CardStudioExt/?bid=407500">Buy an Art Farm gift card now!</a>
        </div>
      </div>
    </div>
    <script src="scripts/js.cookie.js"></script>
    <script src="scripts/jquery-1.11.3.min.js"></script>
HTML;

  if(INCLUDE_VEX_POPUP)
  {
    echo <<<HTML
    <script src="scripts/vex.combined.min.js"></script>
HTML;
  }

  echo <<<HTML
    <script src="scripts/af.js?v=${cache_buster_date}"></script>
  </body>
  </html>
HTML;
}

function drawChoose()
{
  echo '
  <table class="high325" cellspacing="0" cellpadding="0" align="center"><tr><td>
    <table class="" cellSpacing="0" cellPadding="10" align="center">
      <tr><td>
        <div id="" class="">
          <a id="btn1L" class="" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&RF=3709104&mode=0" target="_blank">
          <div class="btn1LL"><span class="invisible">.</span></div><div class="btn1LC">&#187; Classes</div><div class="btn1LR"><span class="invisible">.</span></div>
          </a>
        </div>
      </td></tr>
      <tr><td>
        <div id="" class="">
          <a id="btn1L" class="" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&RF=11809479&mode=0" target="_blank">
          <div class="btn1LL"><span class="invisible">.</span></div><div class="btn1LC">&#187; Holiday Camp</div><div class="btn1LR"><span class="invisible">.</span></div>
          </a>
        </div>
      </td></tr>
      <tr><td>
        <div id="" class="">
          <a id="btn1L" class="" href="https://campscui.active.com/orgs/TheArtFarminTheCity" target="_blank">
          <div class="btn1LL"><span class="invisible">.</span></div><div class="btn1LC">&#187; Summer Camp</div><div class="btn1LR"><span class="invisible">.</span></div>
          </a>
        </div>
      </td></tr>
      <tr><td>
        <div id="" class="">
          <a id="btn1L" class="" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&RF=8909284&mode=0" target="_blank">
          <div class="btn1LL"><span class="invisible">.</span></div><div class="btn1LC">&#187; June Camp</div><div class="btn1LR"><span class="invisible">.</span></div>
          </a>
        </div>
      </td></tr>
      <tr><td>
        <div id="" class="">
          <a id="btn1L" class="" target="_blank" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&RF=8909197&mode=0">
          <div class="btn1LL"><span class="invisible">.</span></div><div class="btn1LC">&#187; Drop In</div><div class="btn1LR"><span class="invisible">.</span></div>
          </a>
        </div>
      </td></tr>
      <!--
      <tr><td>
        <div id="" class="">
          <a id="btn1L" class="" href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=6007595&RF=3709104&mode=0" target="_blank">
          <div class="btn1LL"><span class="invisible">.</span></div><div class="btn1LC">&#187; Two\'s Group</div><div class="btn1LR"><span class="invisible">.</span></div>
          </a>
        </div>
      </td></tr>
      -->
    </table>
  </td></tr></table>
  ';
}

# =========
# = FORMS =
# =========

function drawClassForm()
{
  echo '
  <div class="floatR">
    <script type="text/javascript">
    drawIcon("data/af_class_form.pdf", "download", "rust mouseCursor", "floatL", "Download printable version", "floatL marginT5 size14", false, "", "");
    </script>
  </div>

  <div id="formContainer" class="clearB">
    <form method="post" action="form_processor.php?f=class" name="reg">
      <!--childSection-->
      <div id="childSection" class="">
        <div id="" class="floatL">
          <label for="tf_childFirstName" class="label1"><span id="child" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Child</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_childFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_childFirstName" name="childFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_childLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_childLastName" name="childLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
          <div id=="""" class="floatL padT10">
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Month of Birth</span></label>
              <select id="dd_birthMonth" name="birthMonth" class="floatL clearL">
                <option value="" selected="selected">Select a month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthMonth"];
                  var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                  for(var m = 1;m <= months.length;m++)
                  {
                    monthChooser.options[m] = new Option(months[m - 1], months[m - 1]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Day of Birth</span></label>
              <select id="dd_birthDay" name="birthDay" class="floatL clearL">
                <option value="" selected="selected">Select a day</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthDay"];
                  for(var m = 1;m <= 31;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Year of Birth</span></label>
              <select id="dd_birthYear" name="birthYear" class="floatL clearL">
                <option value="" selected="selected">Select a year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["birthYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 10;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year - y).toString(), year - y);
                  }
                </script>
              </select>
            </div>
          </div>
          <div id="" class="floatL clearL wide522 padT10">
            <div id="" class="floatL clearL marginR14">
              <label class="floatL size15"><span class="label2">Age</span></label>
              <select id="dd_age" name="age" class="floatL clearL">
                <option value="" selected="selected">Select an age</option>
                <option value="6 - 12 Months">6 - 12 Months</option>
                <option value="13 Months">13 months</option>
                <option value="14 Months">14 months</option>
                <option value="15 Months">15 months</option>
                <option value="16 Months">16 months</option>
                <option value="17 Months">17 months</option>
                <option value="18 Months">18 months</option>
                <option value="18-24 Months">18-24 months</option>
                <option value="2 years">2 years</option>
                <option value="2&#189; years">2&#189; years</option>
                <option value="3 years">3 years</option>
                <option value=">4 years">4 years</option>
                <option value="5 years">5 years</option>
                <option value="6 years">6 years</option>
                <option value="7 years">7 years</option>
                <option value="8 years">8 years</option>
                <option value="9 years">9 years</option>
                <option value="10 years">10 years</option>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Gender</span></label>
              <select id="dd_gender" name="gender" class="floatL clearL">
                <option value="" selected="selected">Select a gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of child section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--parent section-->
      <div id="parentSection" class="">
        <div id="" class="floatL">
          <label for="tf_parentFirstName" class="label1"><span id="parent" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Guardian</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_parentFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_parentFirstName" name="parentFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_parentLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_parentLastName" name="parentLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of parent section-->
      <!--contactSection-->
      <div id="contactSection" class="">
        <div id="" class="floatL">
          <label for="tf_address" class="label1"><span id="contact" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Contact</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <label for="tf_address" class="block size15 marginB5"><span class="label2">Address</span></label>
            <input id="tf_address" name="address" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';"/>
          </div>
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_city" class="block size15 marginB5"><span class="label2">City</span></label>
              <input id="tf_city" name="city" class="floatL wide259" type="text" value="" onfocus="this.className = \'focusBorder floatL wide259\';" onblur="this.className = \'floatL wide259\';" onkeypress="return cityOnly(event);"/>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">State</span></label>
              <select id="dd_state" name="state" class="floatL clearL wide142 marginT10">
                <option value="" selected="selected">Select a state</option>
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York">New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="Washington">Washington</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
              </select>
            </div>
            <!--end of states-->
            <div class="floatL">
              <label for="tf_zip" class="block size15 marginB5"><span class="label2">Zip</span></label>
              <input id="tf_zip" name="zip" class="floatL wide65" type="text" value="" maxLength="5" onfocus="this.className = \'focusBorder floatL wide65\';" onblur="this.className = \'floatL wide65\';" onkeypress="return numbersOnly(event);"/>
            </div>
            <!--end of zip-->
          </div>
          <!--end of row-->

          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_homePhone" class="block size15 marginB5"><span class="label2">Home Phone</span></label>
              <input id="tf_homePhone" name="homePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_mobilePhone" class="block size15 marginB5"><span class="label2">Mobile Phone</span></label>
              <input id="tf_mobilePhone" name="mobilePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_fax" class="block size15 marginB5"><span class="label2">Fax</span></label>
              <input id="tf_fax" name="fax" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_emergencyContact" class="block size15 marginB5"><span class="label2">Emergency Phone</span></label>
              <input id="tf_emergencyContact" name="emergencyContact" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL">
              <label for="tf_email" class="block size15 marginB5"><span class="label2">Email Address</span></label>
              <input id="tf_email" name="email" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';" onkeypress="return emailOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </div>
      <!--end of contact section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--classSection-->
      <div id="classSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="class" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR"></span></label>
        </div>
        <div class="floatL wide522 padT2">
          <span class="rust">Limited class offerings during the summer.<br />Please see <a class="blue2" href="schedule.php#summer">summer schedule</a> before registering.</span>
        </div>
      </div>
      <div id="classSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="class" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Class</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_class" name="className" class="floatL clearL wide220" onchange="updateClassDays(this);">
              <option value="" selected="selected">Select a class</option>
              <option value="Rock, Smocks and Animals">Rock, Smocks and Animals</option>
              <option value="Animal Care Class">Animal Care Class</option>
              <option value="Art, Adventures and More">Art, Adventures and More</option>
              <option value="Mini Chef">Mini Chef</option>
            </select>
          </div>
          <div class="floatL marginR14">
            <select id="dd_day" name="classDay" class="floatL" onchange="updateClassTimes(this);">
              <option value="" selected="selected">Select a day</option>
            </select>
          </div>
          <div class="floatL">
            <select id="dd_time" name="classTime" class="floatL wide150">
              <option value="" selected="selected">Select a time</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of classSection-->
      <!--semesterSection-->
      <div id="semesterSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="semester" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Semester</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_semester" name="classSemester" class="floatL clearL wide150" onchange="updateClassWeeks(this);updateClassDropInDate(this);clearPriceOptions();">
              <option value="" selected="selected">Select a semester</option>
            </select>
          </div>
          <div class="floatL marginR14">
            <select id="dd_classMonth" name="classMonth" class="floatL wide150" onchange="">
              <option value="" selected="selected">Select a month</option>
            </select>
          </div>
          <div class="floatL">
            <select id="dd_classDate" name="classDate" class="floatL wide150">
              <option value="" selected="selected">Select a date</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of semesterSection-->
      <!--startWeekSection-->
      <div id="startWeekSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="startWeek" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Start Week</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_startWeek" name="classWeek" class="floatL clearL wide220" onchange="clearPriceOptions();">
              <option value="" selected="selected">Select a week (optional)</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of startWeekSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--regFeeSection-->
      <div id="regFeeSection" class="">
        <div id="" class="floatL">
          <label class="label1"><span id="1stTimer" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">1st Timer?</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="label2">Is this your first time registering? (A $25 registration fee applies)</div>
            <div class="marginT5 floatL">
              <input id="rb_register_yes" name="firstTimeRegistering" class="" type="radio" value="yes" onclick="clearMembershipConfirm();"/>
              <label class="marginR15 size18" for="rb_register_yes">Yes</label>
              <input id="rb_register_no" name="firstTimeRegistering" class="" type="radio" value="no" onclick="clearMembershipConfirm();"/>
              <label class="size18" for="rb_register_no">No</label>
            </div>
          </div>
        </div>
      </div>
      <!--end of regFeeSection-->
      <!--memberFeeSection-->
      <div id="membershipFeeSection" class="">
        <div id="" class="floatL">
          <label class="label1"><span id="membership" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Member?</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="label2">Would you like to become a member? (An annual $295 membership fee applies)
              <script type="text/javascript">
              drawIcon("membership.php", "info", "", "marginB-8", "", "", false, "Click for membership benefits!","_blank");
              </script>
              <br />If you are a current member discounts will be applied after form submission.
            </div>
            <div class="marginT5 floatL">
              <input id="rb_membership_yes" name="membership" class="" type="radio" value="yes" onclick="clearConfirm();updateTotal();"/>
              <label class="marginR15 size18" for="rb_membership_yes">Yes</label>
              <input id="rb_membership_no" name="membership" class="" type="radio" value="no" onclick="clearConfirm();updateTotal();"/>
              <label class="size18" for="rb_membership_no">No</label>
            </div>
          </div>
        </div>
      </div>
      <!--end of memberFeeSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--paymentSection-->
      <div id="paymentSection" class="">
        <div id="" class="floatL">
          <label for="tf_cardNumber" class="label1"><span id="payment" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Payment</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
          <div class="label2 marginB10"><span class="blue2">Note: </span>If you have a coupon code and are not registering for a membership, you do not need to fill in your payment information. Simply enter your coupon code below.</div>
            <div class="floatL marginR14">
              <label for="tf_cardNumber" class="block size15 marginB5"><span class="label2">Card #</span></label>
              <input id="tf_cardNumber" name="cardNumber" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return creditOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_cidcvv" class="block size15 marginB5"><span class="label2">CID/CVV #</span></label>
              <input id="tf_cidcvv" name="cidcvv" class="floatL wide50" type="text" value="" maxLength="4" onfocus="this.className = \'focusBorder floatL wide50\';" onblur="this.className = \'floatL wide50\';" onkeypress="return numbersOnly(event);"/>
            </div>
          </div>
          <div id="" class="floatL clearL padT10 wide522">
            <div class="floatL marginR14">
              <select id="dd_cardType" name="cardType" class="floatL clearL">
                <option value="" selected="selected">Card Type</option>
                <script type="text/javascript">
                  var cardChooser = document.reg.elements["cardType"];
                  var cards = new Array("Visa", "MasterCard", "AmEx");
                  for(var c = 0;c < cards.length;c++)
                  {
                    cardChooser.options[c + 1] = new Option(cards[c], cards[c]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <select id="dd_expMonth" name="expMonth" class="floatL clearL">
                <option value="" selected="selected">Exp. Month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["expMonth"];
                  for(var m = 1;m <= 12;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <select id="dd_expYear" name="expYear" class="floatL clearL">
                <option value="" selected="selected">Exp. Year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["expYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 14;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year + y).toString(), year + y);
                  }
                </script>
              </select>
            </div>
          </div>
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_couponCode" class="block size15 marginB5"><span class="label2">Coupon Code</span></label>
              <input id="tf_couponCode" name="couponCode" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';updateTotal();"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of paymentSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--confirmSection-->
      <div id="confirmSection" class="">
        <div id="" class="floatL">
          <label for="tf_confirmFirstName" class="label1"><span id="confirm" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Confirm</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div id="" class="floatL gray2">
              <input id="cb_confirm" class="marginL0 marginR5" type="checkbox" name="confirm" value=""/>
              <label for="cb_confirm">Agree to</label> <a class="blue2 mouseCursor" title="Click for class registration terms" onclick="window.open(\'terms.php#class\',\'terms\',\'width=400,height=500,left=100,top=100,scrollbars\');">terms & conditions</a>
            </div>
          </div>
          <div class="floatL clearL wide522 padT10">
            <div class="floatL marginR14">
              <label for="tf_confirmFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_confirmFirstName" name="confirmFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_confirmLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_confirmLastName" name="confirmLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of confirmSection-->
      <div class="formSeparator2 marginT10 marginB10"></div>
      <!--submitSection-->
      <div id="submitSection" class="">
        <div id="total" class="floatL">
          <label class="label1"><span class="floatL"></span><span class="floatR size20 bold blue2">Total</span></label>
        </div>
        <div id="" class="floatL">
          <div id="totalPrice" class="floatL padT10">$ 0</div>
        </div>
        <div id="" class="floatR">
          <a id="btn1R" class="" onclick="validateForm();">
          <div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Submit Registration!</div><div class="btn1RL"><span class="invisible">.</span></div>
          </a>
        </div>
        <div class="fullWidth clearB padL140 padT15 marginT15 gray2 size12">
          If you would like to register another child please submit an additional form. <br />A 10% sibling discount will be applied on your second registration after submission.
        </div>
      </div>
      <!--end of submit section-->
    </form>
    <!--end of form-->
    <script type="text/javascript">document.reg.reset();</script>
  </div>
  <!--end of formContainer-->
  ';
}

function drawSummerCampForm()
{
  echo '
  <div class="floatR">
    <script type="text/javascript">
    drawIcon("data/af_medical_form.pdf", "download", "rust mouseCursor", "floatL", "Download medical form", "floatL marginT5 size14", false, "","");
    </script>
  </div>
  <div class="floatR marginR10">
    <script type="text/javascript">
    drawIcon("data/af_camp_form.pdf", "download", "rust mouseCursor", "floatL", "Download printable version", "floatL marginT5 size14", false, "","");
    </script>
  </div>

  <div id="formContainer" class="clearB">
    <form method="post" action="form_processor.php?f=summerCamp" name="reg">
      <!--childSection-->
      <div id="childSection" class="">
        <div id="" class="floatL">
          <label for="tf_childFirstName" class="label1"><span id="child" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Child</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_childFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_childFirstName" name="childFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_childLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_childLastName" name="childLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
          <div id=="""" class="floatL padT10">
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Month of Birth</span></label>
              <select id="dd_birthMonth" name="birthMonth" class="floatL clearL">
                <option value="" selected="selected">Select a month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthMonth"];
                  var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                  for(var m = 1;m <= months.length;m++)
                  {
                    monthChooser.options[m] = new Option(months[m - 1], months[m - 1]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Day of Birth</span></label>
              <select id="dd_birthDay" name="birthDay" class="floatL clearL">
                <option value="" selected="selected">Select a day</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthDay"];
                  for(var m = 1;m <= 31;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Year of Birth</span></label>
              <select id="dd_birthYear" name="birthYear" class="floatL clearL">
                <option value="" selected="selected">Select a year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["birthYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 10;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year - y).toString(), year - y);
                  }
                </script>
              </select>
            </div>
          </div>
          <div id="" class="floatL clearL wide522 padT10">
            <div id="" class="floatL clearL marginR14">
              <label class="floatL size15"><span class="label2">Age</span></label>
              <select id="dd_age" name="age" class="floatL clearL">
                <option value="" selected="selected">Select an age</option>
                <option value="6 - 12 Months">6 - 12 Months</option>
                <option value="13 Months">13 months</option>
                <option value="14 Months">14 months</option>
                <option value="15 Months">15 months</option>
                <option value="16 Months">16 months</option>
                <option value="17 Months">17 months</option>
                <option value="18 Months">18 months</option>
                <option value="18-24 Months">18-24 months</option>
                <option value="2 years">2 years</option>
                <option value="2&#189; years">2&#189; years</option>
                <option value="3 years">3 years</option>
                <option value=">4 years">4 years</option>
                <option value="5 years">5 years</option>
                <option value="6 years">6 years</option>
                <option value="7 years">7 years</option>
                <option value="8 years">8 years</option>
                <option value="9 years">9 years</option>
                <option value="10 years">10 years</option>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Gender</span></label>
              <select id="dd_gender" name="gender" class="floatL clearL">
                <option value="" selected="selected">Select a gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of child section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--parent section-->
      <div id="parentSection" class="">
        <div id="" class="floatL">
          <label for="tf_parentFirstName" class="label1"><span id="parent" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Guardian</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_parentFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_parentFirstName" name="parentFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_parentLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_parentLastName" name="parentLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of parent section-->
      <!--contactSection-->
      <div id="contactSection" class="">
        <div id="" class="floatL">
          <label for="tf_address" class="label1"><span id="contact" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Contact</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <label for="tf_address" class="block size15 marginB5"><span class="label2">Address</span></label>
            <input id="tf_address" name="address" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';"/>
          </div>
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_city" class="block size15 marginB5"><span class="label2">City</span></label>
              <input id="tf_city" name="city" class="floatL wide259" type="text" value="" onfocus="this.className = \'focusBorder floatL wide259\';" onblur="this.className = \'floatL wide259\';" onkeypress="return cityOnly(event);"/>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">State</span></label>
              <select id="dd_state" name="state" class="floatL clearL wide142 marginT10">
                <option value="" selected="selected">Select a state</option>
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York">New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="Washington">Washington</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
              </select>
            </div>
            <!--end of states-->
            <div class="floatL">
              <label for="tf_zip" class="block size15 marginB5"><span class="label2">Zip</span></label>
              <input id="tf_zip" name="zip" class="floatL wide65" type="text" value="" maxLength="5" onfocus="this.className = \'focusBorder floatL wide65\';" onblur="this.className = \'floatL wide65\';" onkeypress="return numbersOnly(event);"/>
            </div>
            <!--end of zip-->
          </div>
          <!--end of row-->

          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_homePhone" class="block size15 marginB5"><span class="label2">Home Phone</span></label>
              <input id="tf_homePhone" name="homePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_mobilePhone" class="block size15 marginB5"><span class="label2">Mobile Phone</span></label>
              <input id="tf_mobilePhone" name="mobilePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_fax" class="block size15 marginB5"><span class="label2">Fax</span></label>
              <input id="tf_fax" name="fax" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_emergencyContact" class="block size15 marginB5"><span class="label2">Emergency Phone</span></label>
              <input id="tf_emergencyContact" name="emergencyContact" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL">
              <label for="tf_email" class="block size15 marginB5"><span class="label2">Email Address</span></label>
              <input id="tf_email" name="email" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';" onkeypress="return emailOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </div>
      <!--end of contact section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--safetySection-->
      <div id="safetySection" class="">
        <div id="" class="floatL">
          <label for="tf_drFirstName" class="label1"><span id="safety" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Safety</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="floatL marginR14">
              <label for="tf_drFirstName" class="block size15 marginB5"><span class="label2">Doctor\'s First Name</span></label>
              <input id="tf_drFirstName" name="drFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_drLastName" class="block size15 marginB5"><span class="label2">Doctor\'s Last Name</span></label>
              <input id="tf_drLastName" name="drLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10 wide522">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_drPhone" class="block size15 marginB5"><span class="label2">Doctor\'s Phone</span></label>
              <input id="tf_drPhone" name="drPhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_insuranceCoverage" class="block size15 marginB5"><span class="label2">Insurance Coverage</span></label>
              <input id="tf_insuranceCoverage" name="insuranceCoverage" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
            <div class="floatL">
              <label for="tf_policyNumber" class="block size15 marginB5"><span class="label2">Insurance Policy #</span></label>
              <input id="tf_policyNumber" name="policyNumber" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_alternateGuardian" class="block size15 marginB5"><span class="label2">Alternate Guardian</span></label>
              <input id="tf_alternateGuardian" name="alternateGuardian" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
            <div class="floatL">
              <label for="tf_allergies" class="block size15 marginB5"><span class="label2">Allergies</span></label>
              <input id="tf_allergies" name="allergies" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </div>
      <!--end of safety section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--campGroupSection-->
      <div id="campGroupSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="campGroup" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Group</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_campGroup" name="campGroup" class="floatL clearL wide240" onchange="updateCampDays(this);clearPriceOptions2();">
              <option value="" selected="selected">Select a group</option>
              <option value="Half Day Hamsters">Half Day Hamsters: 3 - 4 years</option>
              <option value="Full Day Froggies">Full Day Froggies: 4 - 5 years</option>
              <option value="Full Day Geckos">Full Day Geckos: 6 - 8 years</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of campGroupSection-->
      <!--week1Section-->
      <div id="week1Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week1" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 1</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week1" name="week1" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week1Section-->
      <!--week2Section-->
      <div id="week2Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week2" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 2</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week2" name="week2" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week2Section-->
      <!--week3Section-->
      <div id="week3Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week3" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 3</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week3" name="week3" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week3Section-->
      <!--week4Section-->
      <div id="week4Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week4" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 4</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week4" name="week4" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week4Section-->
      <!--week5Section-->
      <div id="week5Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week5" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 5</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week5" name="week5" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week5Section-->
      <!--week6Section-->
      <div id="week6Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week6" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 6</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week6" name="week6" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week6Section-->
      <!--week7Section-->
      <div id="week7Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week7" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 7</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week7" name="week7" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week7Section-->
      <!--week8Section-->
      <div id="week8Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week8" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 8</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week8" name="week8" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week8Section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--memberFeeSection-->
      <div id="membershipFeeSection" class="">
        <div id="" class="floatL">
          <label class="label1"><span id="membership" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Member?</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="label2">Would you like to become a member? (An annual $295 membership fee applies)
              <script type="text/javascript">
              drawIcon("membership.php", "info", "", "marginB-8", "", "", false, "Click for membership benefits!","_blank");
              </script>
              <br />If you are a current member discounts will be applied after form submission.
            </div>
            <div class="marginT5 floatL">
              <input id="rb_membership_yes" name="membership" class="" type="radio" value="yes" onclick="clearConfirm();updateCampTotal();"/>
              <label class="marginR15 size18" for="rb_membership_yes">Yes</label>
              <input id="rb_membership_no" name="membership" class="" type="radio" value="no" onclick="clearConfirm();updateCampTotal();"/>
              <label class="size18" for="rb_membership_no">No</label>
            </div>
          </div>
        </div>
      </div>
      <!--end of memberFeeSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--paymentSection-->
      <div id="paymentSection" class="">
        <div id="" class="floatL">
          <label for="tf_cardNumber" class="label1"><span id="payment" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Payment</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_cardNumber" class="block size15 marginB5"><span class="label2">Card #</span></label>
              <input id="tf_cardNumber" name="cardNumber" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return creditOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_cidcvv" class="block size15 marginB5"><span class="label2">CID/CVV #</span></label>
              <input id="tf_cidcvv" name="cidcvv" class="floatL wide50" type="text" value="" maxLength="4" onfocus="this.className = \'focusBorder floatL wide50\';" onblur="this.className = \'floatL wide50\';" onkeypress="return numbersOnly(event);"/>
            </div>
          </div>
          <div id="" class="floatL clearL padT10 wide522">
            <div class="floatL marginR14">
              <select id="dd_cardType" name="cardType" class="floatL clearL">
                <option value="" selected="selected">Card Type</option>
                <script type="text/javascript">
                  var cardChooser = document.reg.elements["cardType"];
                  var cards = new Array("Visa", "MasterCard", "AmEx");
                  for(var c = 0;c < cards.length;c++)
                  {
                    cardChooser.options[c + 1] = new Option(cards[c], cards[c]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <select id="dd_expMonth" name="expMonth" class="floatL clearL">
                <option value="" selected="selected">Exp. Month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["expMonth"];
                  for(var m = 1;m <= 12;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <select id="dd_expYear" name="expYear" class="floatL clearL">
                <option value="" selected="selected">Exp. Year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["expYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 14;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year + y).toString(), year + y);
                  }
                </script>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of paymentSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--confirmSection-->
      <div id="confirmSection" class="">
        <div id="" class="floatL">
          <label for="tf_confirmFirstName" class="label1"><span id="confirm" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Confirm</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div id="" class="floatL gray2">
              <input id="cb_confirm" class="marginL0 marginR5" type="checkbox" name="confirm" value=""/>
              <label for="cb_confirm">Agree to</label> <a class="blue2 mouseCursor" title="Click for camp registration terms" onclick="window.open(\'terms.php#camp\',\'terms\',\'width=400,height=500,left=100,top=100,scrollbars\');">terms & conditions</a>
            </div>
          </div>
          <div class="floatL clearL wide522 padT10">
            <div class="floatL marginR14">
              <label for="tf_confirmFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_confirmFirstName" name="confirmFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_confirmLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_confirmLastName" name="confirmLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of confirmSection-->
      <div class="formSeparator2 marginT10 marginB10"></div>
      <!--submitSection-->
      <div id="submitSection" class="">
        <div id="total" class="floatL">
          <label class="label1"><span class="floatL"></span><span class="floatR size20 bold blue2">Total</span></label>
        </div>
        <div id="" class="floatL">
          <div id="totalPrice" class="floatL padT10">$ 0</div>
        </div>
        <div id="" class="floatR">
          <a id="btn1R" class="" onclick="validateCampForm();">
          <div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Submit Registration!</div><div class="btn1RL"><span class="invisible">.</span></div>
          </a>
        </div>
        <div class="fullWidth clearB padL140 padT15 marginT15 gray2 size12">
          If you would like to register another child please submit an additional form. <br />A 10% sibling discount will be applied on your second registration after submission.
        </div>
      </div>
      <!--end of submit section-->
    </form>
    <!--end of form-->
    <script type="text/javascript">document.reg.reset();</script>
  </div>
  <!--end of formContainer-->
  ';
}

function drawHolidayCampForm()
{
  echo '
  <div class="floatR">
    <script type="text/javascript">
    drawIcon("data/af_medical_form.pdf", "download", "rust mouseCursor", "floatL", "Download medical form", "floatL marginT5 size14", false, "","");
    </script>
  </div>
  <div class="floatR marginR10">
    <script type="text/javascript">
    drawIcon("data/af_holiday_camp_form.pdf", "download", "rust mouseCursor", "floatL", "Download printable version", "floatL marginT5 size14", false, "","");
    </script>
  </div>

  <div id="formContainer" class="clearB">
    <form method="post" action="form_processor.php?f=holidayCamp" name="reg">
      <!--childSection-->
      <div id="childSection" class="">
        <div id="" class="floatL">
          <label for="tf_childFirstName" class="label1"><span id="child" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Child</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_childFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_childFirstName" name="childFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_childLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_childLastName" name="childLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
          <div id=="""" class="floatL padT10">
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Month of Birth</span></label>
              <select id="dd_birthMonth" name="birthMonth" class="floatL clearL">
                <option value="" selected="selected">Select a month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthMonth"];
                  var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                  for(var m = 1;m <= months.length;m++)
                  {
                    monthChooser.options[m] = new Option(months[m - 1], months[m - 1]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Day of Birth</span></label>
              <select id="dd_birthDay" name="birthDay" class="floatL clearL">
                <option value="" selected="selected">Select a day</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthDay"];
                  for(var m = 1;m <= 31;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Year of Birth</span></label>
              <select id="dd_birthYear" name="birthYear" class="floatL clearL">
                <option value="" selected="selected">Select a year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["birthYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 10;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year - y).toString(), year - y);
                  }
                </script>
              </select>
            </div>
          </div>
          <div id="" class="floatL clearL wide522 padT10">
            <div id="" class="floatL clearL marginR14">
              <label class="floatL size15"><span class="label2">Age</span></label>
              <select id="dd_age" name="age" class="floatL clearL">
                <option value="" selected="selected">Select an age</option>
                <option value="6 - 12 Months">6 - 12 Months</option>
                <option value="13 Months">13 months</option>
                <option value="14 Months">14 months</option>
                <option value="15 Months">15 months</option>
                <option value="16 Months">16 months</option>
                <option value="17 Months">17 months</option>
                <option value="18 Months">18 months</option>
                <option value="18-24 Months">18-24 months</option>
                <option value="2 years">2 years</option>
                <option value="2&#189; years">2&#189; years</option>
                <option value="3 years">3 years</option>
                <option value=">4 years">4 years</option>
                <option value="5 years">5 years</option>
                <option value="6 years">6 years</option>
                <option value="7 years">7 years</option>
                <option value="8 years">8 years</option>
                <option value="9 years">9 years</option>
                <option value="10 years">10 years</option>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Gender</span></label>
              <select id="dd_gender" name="gender" class="floatL clearL">
                <option value="" selected="selected">Select a gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of child section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--parent section-->
      <div id="parentSection" class="">
        <div id="" class="floatL">
          <label for="tf_parentFirstName" class="label1"><span id="parent" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Guardian</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_parentFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_parentFirstName" name="parentFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_parentLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_parentLastName" name="parentLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of parent section-->
      <!--contactSection-->
      <div id="contactSection" class="">
        <div id="" class="floatL">
          <label for="tf_address" class="label1"><span id="contact" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Contact</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <label for="tf_address" class="block size15 marginB5"><span class="label2">Address</span></label>
            <input id="tf_address" name="address" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';"/>
          </div>
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_city" class="block size15 marginB5"><span class="label2">City</span></label>
              <input id="tf_city" name="city" class="floatL wide259" type="text" value="" onfocus="this.className = \'focusBorder floatL wide259\';" onblur="this.className = \'floatL wide259\';" onkeypress="return cityOnly(event);"/>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">State</span></label>
              <select id="dd_state" name="state" class="floatL clearL wide142 marginT10">
                <option value="" selected="selected">Select a state</option>
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York">New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="Washington">Washington</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
              </select>
            </div>
            <!--end of states-->
            <div class="floatL">
              <label for="tf_zip" class="block size15 marginB5"><span class="label2">Zip</span></label>
              <input id="tf_zip" name="zip" class="floatL wide65" type="text" value="" maxLength="5" onfocus="this.className = \'focusBorder floatL wide65\';" onblur="this.className = \'floatL wide65\';" onkeypress="return numbersOnly(event);"/>
            </div>
            <!--end of zip-->
          </div>
          <!--end of row-->

          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_homePhone" class="block size15 marginB5"><span class="label2">Home Phone</span></label>
              <input id="tf_homePhone" name="homePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_mobilePhone" class="block size15 marginB5"><span class="label2">Mobile Phone</span></label>
              <input id="tf_mobilePhone" name="mobilePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_fax" class="block size15 marginB5"><span class="label2">Fax</span></label>
              <input id="tf_fax" name="fax" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_emergencyContact" class="block size15 marginB5"><span class="label2">Emergency Phone</span></label>
              <input id="tf_emergencyContact" name="emergencyContact" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL">
              <label for="tf_email" class="block size15 marginB5"><span class="label2">Email Address</span></label>
              <input id="tf_email" name="email" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';" onkeypress="return emailOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </div>
      <!--end of contact section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--safetySection-->
      <div id="safetySection" class="">
        <div id="" class="floatL">
          <label for="tf_drFirstName" class="label1"><span id="safety" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Safety</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="floatL marginR14">
              <label for="tf_drFirstName" class="block size15 marginB5"><span class="label2">Doctor\'s First Name</span></label>
              <input id="tf_drFirstName" name="drFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_drLastName" class="block size15 marginB5"><span class="label2">Doctor\'s Last Name</span></label>
              <input id="tf_drLastName" name="drLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10 wide522">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_drPhone" class="block size15 marginB5"><span class="label2">Doctor\'s Phone</span></label>
              <input id="tf_drPhone" name="drPhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_insuranceCoverage" class="block size15 marginB5"><span class="label2">Insurance Coverage</span></label>
              <input id="tf_insuranceCoverage" name="insuranceCoverage" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
            <div class="floatL">
              <label for="tf_policyNumber" class="block size15 marginB5"><span class="label2">Insurance Policy #</span></label>
              <input id="tf_policyNumber" name="policyNumber" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_alternateGuardian" class="block size15 marginB5"><span class="label2">Alternate Guardian</span></label>
              <input id="tf_alternateGuardian" name="alternateGuardian" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
            <div class="floatL">
              <label for="tf_allergies" class="block size15 marginB5"><span class="label2">Allergies</span></label>
              <input id="tf_allergies" name="allergies" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </div>
      <!--end of safety section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--holidayCampGroupSection-->
      <div id="holidayCampGroupSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="holidayCampGroup" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Group</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_holidayCampGroup" name="holidayCampGroup" class="floatL clearL wide220" onchange="updateHolidayCampDays(this);clearPriceOptions2();">
              <option value="" selected="selected">Select a group</option>
              <option value="Snowflakes">Snowflakes: 3 - 4 years</option>
              <option value="Peppermints">Peppermints: 4 - 5 years</option>
              <option value="Gingerbreads">Gingerbreads: 6 - 8 years</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of holidayCampGroupSection-->
      <!--day1Section-->
      <div id="day1Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="day1" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Day 1</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_day1" name="day1" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select day</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of day1Section-->
      <!--day2Section-->
      <div id="day2Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="day2" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Day 2</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_day2" name="day2" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select day</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of day2Section-->
      <!--day3Section-->
      <div id="day3Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="day3" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Day 3</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_day3" name="day3" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select day</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of day3Section-->
      <!--day4Section-->
      <div id="day4Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="day4" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Day 4</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_day4" name="day4" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select day</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of day4Section-->
      <!--day5Section-->
      <div id="day5Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="day5" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Day 5</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_day5" name="day5" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select day</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of day5Section-->
      <!--day6Section-->
      <div id="day6Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="day6" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Day 6</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_day6" name="day6" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select day</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of day6Section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--memberFeeSection-->
      <div id="membershipFeeSection" class="">
        <div id="" class="floatL">
          <label class="label1"><span id="membership" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Member?</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="label2">Would you like to become a member? (An annual $295 membership fee applies)
              <script type="text/javascript">
              drawIcon("membership.php", "info", "", "marginB-8", "", "", false, "Click for membership benefits!","_blank");
              </script>
              <br />If you are a current member discounts will be applied after form submission.
            </div>
            <div class="marginT5 floatL">
              <input id="rb_membership_yes" name="membership" class="" type="radio" value="yes" onclick="clearConfirm();updateHolidayCampTotal();"/>
              <label class="marginR15 size18" for="rb_membership_yes">Yes</label>
              <input id="rb_membership_no" name="membership" class="" type="radio" value="no" onclick="clearConfirm();updateHolidayCampTotal();"/>
              <label class="size18" for="rb_membership_no">No</label>
            </div>
          </div>
        </div>
      </div>
      <!--end of memberFeeSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--paymentSection-->
      <div id="paymentSection" class="">
        <div id="" class="floatL">
          <label for="tf_cardNumber" class="label1"><span id="payment" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Payment</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_cardNumber" class="block size15 marginB5"><span class="label2">Card #</span></label>
              <input id="tf_cardNumber" name="cardNumber" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return creditOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_cidcvv" class="block size15 marginB5"><span class="label2">CID/CVV #</span></label>
              <input id="tf_cidcvv" name="cidcvv" class="floatL wide50" type="text" value="" maxLength="4" onfocus="this.className = \'focusBorder floatL wide50\';" onblur="this.className = \'floatL wide50\';" onkeypress="return numbersOnly(event);"/>
            </div>
          </div>
          <div id="" class="floatL clearL padT10 wide522">
            <div class="floatL marginR14">
              <select id="dd_cardType" name="cardType" class="floatL clearL">
                <option value="" selected="selected">Card Type</option>
                <script type="text/javascript">
                  var cardChooser = document.reg.elements["cardType"];
                  var cards = new Array("Visa", "MasterCard", "AmEx");
                  for(var c = 0;c < cards.length;c++)
                  {
                    cardChooser.options[c + 1] = new Option(cards[c], cards[c]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <select id="dd_expMonth" name="expMonth" class="floatL clearL">
                <option value="" selected="selected">Exp. Month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["expMonth"];
                  for(var m = 1;m <= 12;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <select id="dd_expYear" name="expYear" class="floatL clearL">
                <option value="" selected="selected">Exp. Year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["expYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 14;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year + y).toString(), year + y);
                  }
                </script>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of paymentSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--confirmSection-->
      <div id="confirmSection" class="">
        <div id="" class="floatL">
          <label for="tf_confirmFirstName" class="label1"><span id="confirm" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Confirm</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div id="" class="floatL gray2">
              <input id="cb_confirm" class="marginL0 marginR5" type="checkbox" name="confirm" value=""/>
              <label for="cb_confirm">Agree to</label> <a class="blue2 mouseCursor" title="Click for holiday camp registration terms" onclick="window.open(\'terms.php#holidayCamp\',\'terms\',\'width=400,height=500,left=100,top=100,scrollbars\');">terms & conditions</a>
            </div>
          </div>
          <div class="floatL clearL wide522 padT10">
            <div class="floatL marginR14">
              <label for="tf_confirmFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_confirmFirstName" name="confirmFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_confirmLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_confirmLastName" name="confirmLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of confirmSection-->
      <div class="formSeparator2 marginT10 marginB10"></div>
      <!--submitSection-->
      <div id="submitSection" class="">
        <div id="total" class="floatL">
          <label class="label1"><span class="floatL"></span><span class="floatR size20 bold blue2">Total</span></label>
        </div>
        <div id="" class="floatL">
          <div id="totalPrice" class="floatL padT10">$ 0</div>
        </div>
        <div id="" class="floatR">
          <a id="btn1R" class="" onclick="validateHolidayCampForm();">
          <div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Submit Registration!</div><div class="btn1RL"><span class="invisible">.</span></div>
          </a>
        </div>
        <div class="fullWidth clearB padL140 padT15 marginT15 gray2 size12">
          If you would like to register another child please submit an additional form. <br />A 10% sibling discount will be applied on your second registration after submission.
        </div>
      </div>
      <!--end of submit section-->
    </form>
    <!--end of form-->
    <script type="text/javascript">document.reg.reset();</script>
  </div>
  <!--end of formContainer-->
  <script type="text/javascript" charset="utf-8">
    document.reg.childFirstName.focus();
  </script>
  ';
}

function drawJuneCampForm()
{
  echo '
  <div class="floatR">
    <script type="text/javascript">
    drawIcon("data/af_medical_form.pdf", "download", "rust mouseCursor", "floatL", "Download medical form", "floatL marginT5 size14", false, "","");
    </script>
  </div>
  <div class="floatR marginR10">
    <script type="text/javascript">
    drawIcon("data/af_june_camp_form.pdf", "download", "rust mouseCursor", "floatL", "Download printable version", "floatL marginT5 size14", false, "","");
    </script>
  </div>

  <div id="formContainer" class="clearB">
    <form method="post" action="form_processor.php?f=juneCamp" name="reg">
      <!--childSection-->
      <div id="childSection" class="">
        <div id="" class="floatL">
          <label for="tf_childFirstName" class="label1"><span id="child" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Child</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_childFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_childFirstName" name="childFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_childLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_childLastName" name="childLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
          <div id=="""" class="floatL padT10">
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Month of Birth</span></label>
              <select id="dd_birthMonth" name="birthMonth" class="floatL clearL">
                <option value="" selected="selected">Select a month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthMonth"];
                  var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                  for(var m = 1;m <= months.length;m++)
                  {
                    monthChooser.options[m] = new Option(months[m - 1], months[m - 1]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Day of Birth</span></label>
              <select id="dd_birthDay" name="birthDay" class="floatL clearL">
                <option value="" selected="selected">Select a day</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthDay"];
                  for(var m = 1;m <= 31;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Year of Birth</span></label>
              <select id="dd_birthYear" name="birthYear" class="floatL clearL">
                <option value="" selected="selected">Select a year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["birthYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 10;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year - y).toString(), year - y);
                  }
                </script>
              </select>
            </div>
          </div>
          <div id="" class="floatL clearL wide522 padT10">
            <div id="" class="floatL clearL marginR14">
              <label class="floatL size15"><span class="label2">Age</span></label>
              <select id="dd_age" name="age" class="floatL clearL">
                <option value="" selected="selected">Select an age</option>
                <option value="6 - 12 Months">6 - 12 Months</option>
                <option value="13 Months">13 months</option>
                <option value="14 Months">14 months</option>
                <option value="15 Months">15 months</option>
                <option value="16 Months">16 months</option>
                <option value="17 Months">17 months</option>
                <option value="18 Months">18 months</option>
                <option value="18-24 Months">18-24 months</option>
                <option value="2 years">2 years</option>
                <option value="2&#189; years">2&#189; years</option>
                <option value="3 years">3 years</option>
                <option value=">4 years">4 years</option>
                <option value="5 years">5 years</option>
                <option value="6 years">6 years</option>
                <option value="7 years">7 years</option>
                <option value="8 years">8 years</option>
                <option value="9 years">9 years</option>
                <option value="10 years">10 years</option>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Gender</span></label>
              <select id="dd_gender" name="gender" class="floatL clearL">
                <option value="" selected="selected">Select a gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of child section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--parent section-->
      <div id="parentSection" class="">
        <div id="" class="floatL">
          <label for="tf_parentFirstName" class="label1"><span id="parent" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Guardian</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_parentFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_parentFirstName" name="parentFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_parentLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_parentLastName" name="parentLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of parent section-->
      <!--contactSection-->
      <div id="contactSection" class="">
        <div id="" class="floatL">
          <label for="tf_address" class="label1"><span id="contact" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Contact</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <label for="tf_address" class="block size15 marginB5"><span class="label2">Address</span></label>
            <input id="tf_address" name="address" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';"/>
          </div>
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_city" class="block size15 marginB5"><span class="label2">City</span></label>
              <input id="tf_city" name="city" class="floatL wide259" type="text" value="" onfocus="this.className = \'focusBorder floatL wide259\';" onblur="this.className = \'floatL wide259\';" onkeypress="return cityOnly(event);"/>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">State</span></label>
              <select id="dd_state" name="state" class="floatL clearL wide142 marginT10">
                <option value="" selected="selected">Select a state</option>
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York">New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="Washington">Washington</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
              </select>
            </div>
            <!--end of states-->
            <div class="floatL">
              <label for="tf_zip" class="block size15 marginB5"><span class="label2">Zip</span></label>
              <input id="tf_zip" name="zip" class="floatL wide65" type="text" value="" maxLength="5" onfocus="this.className = \'focusBorder floatL wide65\';" onblur="this.className = \'floatL wide65\';" onkeypress="return numbersOnly(event);"/>
            </div>
            <!--end of zip-->
          </div>
          <!--end of row-->

          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_homePhone" class="block size15 marginB5"><span class="label2">Home Phone</span></label>
              <input id="tf_homePhone" name="homePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_mobilePhone" class="block size15 marginB5"><span class="label2">Mobile Phone</span></label>
              <input id="tf_mobilePhone" name="mobilePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_fax" class="block size15 marginB5"><span class="label2">Fax</span></label>
              <input id="tf_fax" name="fax" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_emergencyContact" class="block size15 marginB5"><span class="label2">Emergency Phone</span></label>
              <input id="tf_emergencyContact" name="emergencyContact" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL">
              <label for="tf_email" class="block size15 marginB5"><span class="label2">Email Address</span></label>
              <input id="tf_email" name="email" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';" onkeypress="return emailOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </div>
      <!--end of contact section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--safetySection-->
      <div id="safetySection" class="">
        <div id="" class="floatL">
          <label for="tf_drFirstName" class="label1"><span id="safety" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Safety</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="floatL marginR14">
              <label for="tf_drFirstName" class="block size15 marginB5"><span class="label2">Doctor\'s First Name</span></label>
              <input id="tf_drFirstName" name="drFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_drLastName" class="block size15 marginB5"><span class="label2">Doctor\'s Last Name</span></label>
              <input id="tf_drLastName" name="drLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10 wide522">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_drPhone" class="block size15 marginB5"><span class="label2">Doctor\'s Phone</span></label>
              <input id="tf_drPhone" name="drPhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_insuranceCoverage" class="block size15 marginB5"><span class="label2">Insurance Coverage</span></label>
              <input id="tf_insuranceCoverage" name="insuranceCoverage" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
            <div class="floatL">
              <label for="tf_policyNumber" class="block size15 marginB5"><span class="label2">Insurance Policy #</span></label>
              <input id="tf_policyNumber" name="policyNumber" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_alternateGuardian" class="block size15 marginB5"><span class="label2">Alternate Guardian</span></label>
              <input id="tf_alternateGuardian" name="alternateGuardian" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
            <div class="floatL">
              <label for="tf_allergies" class="block size15 marginB5"><span class="label2">Allergies</span></label>
              <input id="tf_allergies" name="allergies" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </div>
      <!--end of safety section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--campGroupSection-->
      <div id="campGroupSection" class="floatL">
      <!--<div id="" class="floatL">
          <label class="label1"><span id="campGroup" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Group</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_campGroup" name="campGroup" class="floatL clearL wide240" onchange="updateCampDays(this);clearPriceOptions2();">
              <option value="" selected="selected">Select a group</option>
              <option value="Half Day Hamsters">Half Day Hamsters: 3 - 4 years</option>
              <option value="Full Day Froggies">Full Day Froggies: 4 - 5 years</option>
              <option value="Full Day Geckos">Full Day Geckos: 6 - 8 years</option>
            </select>
          </div>
        </div>-->
      </div>
      <!--end of campGroupSection-->
      <!--week1Section-->
      <div id="week1Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week1" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 1</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week1" name="week1" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week1Section-->
      <!--week2Section-->
      <div id="week2Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week2" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 2</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week2" name="week2" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week2Section-->
      <!--week3Section-->
      <div id="week3Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week3" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 3</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week3" name="week3" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week3Section-->
      <!--week4Section-->
      <div id="week4Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week4" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 4</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week4" name="week4" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week4Section-->
      <!--week5Section-->
      <div id="week5Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="week5" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Week 5</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_week5" name="week5" class="floatL clearL wide220" onchange="clearPriceOptions2();">
              <option value="" selected="selected">Select days</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of week5Section-->
      <script type="text/javascript">
        updateJuneCampDays();
      </script>
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--memberFeeSection-->
      <div id="membershipFeeSection" class="">
        <div id="" class="floatL">
          <label class="label1"><span id="membership" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Member?</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="label2">Would you like to become a member? (An annual $295 membership fee applies)
              <script type="text/javascript">
              drawIcon("membership.php", "info", "", "marginB-8", "", "", false, "Click for membership benefits!","_blank");
              </script>
              <br />If you are a current member discounts will be applied after form submission.
            </div>
            <div class="marginT5 floatL">
              <input id="rb_membership_yes" name="membership" class="" type="radio" value="yes" onclick="clearConfirm();updateJuneCampTotal();"/>
              <label class="marginR15 size18" for="rb_membership_yes">Yes</label>
              <input id="rb_membership_no" name="membership" class="" type="radio" value="no" onclick="clearConfirm();updateJuneCampTotal();"/>
              <label class="size18" for="rb_membership_no">No</label>
            </div>
          </div>
        </div>
      </div>
      <!--end of memberFeeSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--paymentSection-->
      <div id="paymentSection" class="">
        <div id="" class="floatL">
          <label for="tf_cardNumber" class="label1"><span id="payment" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Payment</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_cardNumber" class="block size15 marginB5"><span class="label2">Card #</span></label>
              <input id="tf_cardNumber" name="cardNumber" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return creditOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_cidcvv" class="block size15 marginB5"><span class="label2">CID/CVV #</span></label>
              <input id="tf_cidcvv" name="cidcvv" class="floatL wide50" type="text" value="" maxLength="4" onfocus="this.className = \'focusBorder floatL wide50\';" onblur="this.className = \'floatL wide50\';" onkeypress="return numbersOnly(event);"/>
            </div>
          </div>
          <div id="" class="floatL clearL padT10 wide522">
            <div class="floatL marginR14">
              <select id="dd_cardType" name="cardType" class="floatL clearL">
                <option value="" selected="selected">Card Type</option>
                <script type="text/javascript">
                  var cardChooser = document.reg.elements["cardType"];
                  var cards = new Array("Visa", "MasterCard", "AmEx");
                  for(var c = 0;c < cards.length;c++)
                  {
                    cardChooser.options[c + 1] = new Option(cards[c], cards[c]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <select id="dd_expMonth" name="expMonth" class="floatL clearL">
                <option value="" selected="selected">Exp. Month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["expMonth"];
                  for(var m = 1;m <= 12;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <select id="dd_expYear" name="expYear" class="floatL clearL">
                <option value="" selected="selected">Exp. Year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["expYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 14;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year + y).toString(), year + y);
                  }
                </script>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of paymentSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--confirmSection-->
      <div id="confirmSection" class="">
        <div id="" class="floatL">
          <label for="tf_confirmFirstName" class="label1"><span id="confirm" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Confirm</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div id="" class="floatL gray2">
              <input id="cb_confirm" class="marginL0 marginR5" type="checkbox" name="confirm" value=""/>
              <label for="cb_confirm">Agree to</label> <a class="blue2 mouseCursor" title="Click for camp registration terms" onclick="window.open(\'terms.php#juneCamp\',\'terms\',\'width=400,height=500,left=100,top=100,scrollbars\');">terms & conditions</a>
            </div>
          </div>
          <div class="floatL clearL wide522 padT10">
            <div class="floatL marginR14">
              <label for="tf_confirmFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_confirmFirstName" name="confirmFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_confirmLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_confirmLastName" name="confirmLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of confirmSection-->
      <div class="formSeparator2 marginT10 marginB10"></div>
      <!--submitSection-->
      <div id="submitSection" class="">
        <div id="total" class="floatL">
          <label class="label1"><span class="floatL"></span><span class="floatR size20 bold blue2">Total</span></label>
        </div>
        <div id="" class="floatL">
          <div id="totalPrice" class="floatL padT10">$ 0</div>
        </div>
        <div id="" class="floatR">
          <a id="btn1R" class="" onclick="validateJuneCampForm();">
          <div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Submit Registration!</div><div class="btn1RL"><span class="invisible">.</span></div>
          </a>
        </div>
        <div class="fullWidth clearB padL140 padT15 marginT15 gray2 size12">
          If you would like to register another child please submit an additional form. <br />A 10% sibling discount will be applied on your second registration after submission.
        </div>
      </div>
      <!--end of submit section-->
    </form>
    <!--end of form-->
    <script type="text/javascript">document.reg.reset();</script>
  </div>
  <!--end of formContainer-->
  ';
}

function drawDropInForm()
{
  echo '
  <div class="floatR">
    <script type="text/javascript">
    drawIcon("data/af_class_form.pdf", "download", "rust mouseCursor", "floatL", "Download printable version", "floatL marginT5 size14", false, "","");
    </script>
  </div>

  <div id="formContainer" class="clearB">
    <form method="post" action="form_processor.php?f=dropIn" name="reg">
      <!--childSection-->
      <div id="childSection" class="">
        <div id="" class="floatL">
          <label for="tf_childFirstName" class="label1"><span id="child" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Child</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_childFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_childFirstName" name="childFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_childLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_childLastName" name="childLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
          <div id=="""" class="floatL padT10">
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Month of Birth</span></label>
              <select id="dd_birthMonth" name="birthMonth" class="floatL clearL">
                <option value="" selected="selected">Select a month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthMonth"];
                  var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                  for(var m = 1;m <= months.length;m++)
                  {
                    monthChooser.options[m] = new Option(months[m - 1], months[m - 1]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Day of Birth</span></label>
              <select id="dd_birthDay" name="birthDay" class="floatL clearL">
                <option value="" selected="selected">Select a day</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthDay"];
                  for(var m = 1;m <= 31;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Year of Birth</span></label>
              <select id="dd_birthYear" name="birthYear" class="floatL clearL">
                <option value="" selected="selected">Select a year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["birthYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 10;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year - y).toString(), year - y);
                  }
                </script>
              </select>
            </div>
          </div>
          <div id="" class="floatL clearL wide522 padT10">
            <div id="" class="floatL clearL marginR14">
              <label class="floatL size15"><span class="label2">Age</span></label>
              <select id="dd_age" name="age" class="floatL clearL">
                <option value="" selected="selected">Select an age</option>
                <option value="6 - 12 Months">6 - 12 Months</option>
                <option value="13 Months">13 months</option>
                <option value="14 Months">14 months</option>
                <option value="15 Months">15 months</option>
                <option value="16 Months">16 months</option>
                <option value="17 Months">17 months</option>
                <option value="18 Months">18 months</option>
                <option value="18-24 Months">18-24 months</option>
                <option value="2 years">2 years</option>
                <option value="2&#189; years">2&#189; years</option>
                <option value="3 years">3 years</option>
                <option value=">4 years">4 years</option>
                <option value="5 years">5 years</option>
                <option value="6 years">6 years</option>
                <option value="7 years">7 years</option>
                <option value="8 years">8 years</option>
                <option value="9 years">9 years</option>
                <option value="10 years">10 years</option>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Gender</span></label>
              <select id="dd_gender" name="gender" class="floatL clearL">
                <option value="" selected="selected">Select a gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of child section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--parent section-->
      <div id="parentSection" class="">
        <div id="" class="floatL">
          <label for="tf_parentFirstName" class="label1"><span id="parent" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Guardian</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_parentFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_parentFirstName" name="parentFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_parentLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_parentLastName" name="parentLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of parent section-->
      <!--contactSection-->
      <div id="contactSection" class="">
        <div id="" class="floatL">
          <label for="tf_address" class="label1"><span id="contact" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Contact</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <label for="tf_address" class="block size15 marginB5"><span class="label2">Address</span></label>
            <input id="tf_address" name="address" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';"/>
          </div>
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_city" class="block size15 marginB5"><span class="label2">City</span></label>
              <input id="tf_city" name="city" class="floatL wide259" type="text" value="" onfocus="this.className = \'focusBorder floatL wide259\';" onblur="this.className = \'floatL wide259\';" onkeypress="return cityOnly(event);"/>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">State</span></label>
              <select id="dd_state" name="state" class="floatL clearL wide142 marginT10">
                <option value="" selected="selected">Select a state</option>
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York">New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="Washington">Washington</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
              </select>
            </div>
            <!--end of states-->
            <div class="floatL">
              <label for="tf_zip" class="block size15 marginB5"><span class="label2">Zip</span></label>
              <input id="tf_zip" name="zip" class="floatL wide65" type="text" value="" maxLength="5" onfocus="this.className = \'focusBorder floatL wide65\';" onblur="this.className = \'floatL wide65\';" onkeypress="return numbersOnly(event);"/>
            </div>
            <!--end of zip-->
          </div>
          <!--end of row-->

          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_homePhone" class="block size15 marginB5"><span class="label2">Home Phone</span></label>
              <input id="tf_homePhone" name="homePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_mobilePhone" class="block size15 marginB5"><span class="label2">Mobile Phone</span></label>
              <input id="tf_mobilePhone" name="mobilePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_fax" class="block size15 marginB5"><span class="label2">Fax</span></label>
              <input id="tf_fax" name="fax" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_emergencyContact" class="block size15 marginB5"><span class="label2">Emergency Phone</span></label>
              <input id="tf_emergencyContact" name="emergencyContact" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL">
              <label for="tf_email" class="block size15 marginB5"><span class="label2">Email Address</span></label>
              <input id="tf_email" name="email" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';" onkeypress="return emailOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </div>
      <!--end of contact section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--playTimeSection-->
      <div id="playTimeSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1sml"><span id="playTime" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Play Time</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_ptPackage" name="ptPackage" class="floatL clearL" onchange="updatePlayTimeOptions(this);clearPriceOptions2();">
              <option value="" selected="selected">Select a package</option>
              <option value ="None">None</option>
              <option value ="Special Events drop in">Special Events drop in</option>
              <option value ="Special Events drop off">Special Events drop off</option>
              <option value ="Daily">Daily</option>
              <option value ="Daily (enrolled)">Daily (enrolled)</option>
              <option value ="Daily drop off">Daily drop off</option>
              <option value ="Daily drop off (enrolled)">Daily drop off (enrolled)</option>
              <option value ="Weekly">Weekly</option>
              <option value ="Weekly (enrolled)">Weekly (enrolled)</option>
              <option value ="Weekly drop off">Weekly drop off</option>
              <option value ="Weekly drop off (enrolled)">Weekly drop off (enrolled)</option>
              <option value ="Monthly">Monthly</option>
              <option value ="Monthly (enrolled)">Monthly (enrolled)</option>
              <option value ="Monthly drop off">Monthly drop off</option>
              <option value ="Monthly drop off (enrolled)">Monthly drop off (enrolled)</option>
            </select>
          </div>
        </div>
      </div>
      <div id="" class="floatL">
        <div id="" class="floatL">
          <label class="label1sml"><span class="floatR">Start Date</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_ptDay" name="ptDay" class="floatL wide150">
              <option value="" selected="selected">Select a day</option>
            </select>
          </div>
          <div class="floatL marginR14">
            <select id="dd_ptMonth" name="ptMonth" class="floatL wide150" onchange="">
              <option value="" selected="selected">Select a month</option>
            </select>
          </div>
          <div class="floatL">
            <select id="dd_ptDay" name="ptDate" class="floatL wide150">
              <option value="" selected="selected">Select a date</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of playTimeSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--openHouseSection-->
      <div id="openHouseSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1sml"><span id="openHouse" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Open House</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_ohPass" name="ohPass" class="floatL clearL" onchange="updateOpenHouseOptions(this);clearPriceOptions2();">
              <option value="" selected="selected">Select a pass</option>
              <option value ="None">None</option>
              <option value ="1 Visit">1 Visit</option>
              <option value ="1 Visit (enrolled)">1 Visit (enrolled)</option>
              <option value ="5 Visit">5 Visit</option>
              <option value ="10 Visit">10 Visit</option>
              <option value ="20 Visit">20 Visit</option>
            </select>
          </div>
          <div class="floatL wide522 padT2">
            <div class="floatL marginR14">
              <select id="dd_ohDay" name="ohDay" class="floatL clearL wide150" onchange="">
                <option value="" selected="selected">Select a day</option>
              </select>
            </div>
            <div class="floatL">
              <select id="dd_ohMonth" name="ohMonth" class="floatL wide150" onchange="">
                <option value="" selected="selected">Select a month</option>
              </select>
            </div>
          </div>
          <div class="floatL wide522 padT2">
            <div class="floatL">
              <select id="dd_ohSemester" name="ohSemester" class="floatL clearL wide150" onchange="clearPriceOptions2();">
                <option value="" selected="selected">Select a semester</option>
              </select>
            </div>
            <div class="floatL gray2 size12 pad10">
              (Passes expire by semester. <a class="rust normal" href="schedule.php" target="_blank">see schedule</a>)
            </div>
          </div>
        </div>
      </div>
      <!--end of openHouseSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--motfSection-->
      <div id="motfSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1sml"><span id="motf" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR alignR">Mornings on<br />The Farm</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_motfVisits" name="motfVisits" class="floatL clearL" onchange="updateMotfOpitons(this);clearPriceOptions2();">
              <option value="" selected="selected">Select a pass</option>
              <option value ="None">None</option>
              <option value ="1 Visit">1 Visit</option>
              <option value ="10 Visit">10 Visit</option>
            </select>
          </div>
          <div class="floatL wide522 padT2">
            <div class="floatL marginR14">
              <select id="dd_motfDay" name="motfDay" class="floatL clearL wide150" onchange="">
                <option value="" selected="selected">Select a day</option>
              </select>
            </div>
            <div class="floatL">
              <select id="dd_motfMonth" name="motfMonth" class="floatL wide150" onchange="">
                <option value="" selected="selected">Select a month</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of motfSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--memberFeeSection-->
      <div id="membershipFeeSection" class="">
        <div id="" class="floatL">
          <label class="label1"><span id="membership" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Member?</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="label2">Would you like to become a member? (An annual $295 membership fee applies)
              <script type="text/javascript">
              drawIcon("membership.php", "info", "", "marginB-8", "", "", false, "Click for membership benefits!","_blank");
              </script>
              <br />If you are a current member discounts will be applied after form submission.
            </div>
            <div class="marginT5 floatL">
              <input id="rb_membership_yes" name="membership" class="" type="radio" value="yes" onclick="clearConfirm();updateDropInTotal();"/>
              <label class="marginR15 size18" for="rb_membership_yes">Yes</label>
              <input id="rb_membership_no" name="membership" class="" type="radio" value="no" onclick="clearConfirm();updateDropInTotal();"/>
              <label class="size18" for="rb_membership_no">No</label>
            </div>
          </div>
        </div>
      </div>
      <!--end of memberFeeSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--paymentSection-->
      <div id="paymentSection" class="">
        <div id="" class="floatL">
          <label for="tf_cardNumber" class="label1"><span id="payment" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Payment</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_cardNumber" class="block size15 marginB5"><span class="label2">Card #</span></label>
              <input id="tf_cardNumber" name="cardNumber" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return creditOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_cidcvv" class="block size15 marginB5"><span class="label2">CID/CVV #</span></label>
              <input id="tf_cidcvv" name="cidcvv" class="floatL wide50" type="text" value="" maxLength="4" onfocus="this.className = \'focusBorder floatL wide50\';" onblur="this.className = \'floatL wide50\';" onkeypress="return numbersOnly(event);"/>
            </div>
          </div>
          <div id="" class="floatL clearL padT10 wide522">
            <div class="floatL marginR14">
              <select id="dd_cardType" name="cardType" class="floatL clearL">
                <option value="" selected="selected">Card Type</option>
                <script type="text/javascript">
                  var cardChooser = document.reg.elements["cardType"];
                  var cards = new Array("Visa", "MasterCard", "AmEx");
                  for(var c = 0;c < cards.length;c++)
                  {
                    cardChooser.options[c + 1] = new Option(cards[c], cards[c]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <select id="dd_expMonth" name="expMonth" class="floatL clearL">
                <option value="" selected="selected">Exp. Month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["expMonth"];
                  for(var m = 1;m <= 12;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <select id="dd_expYear" name="expYear" class="floatL clearL">
                <option value="" selected="selected">Exp. Year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["expYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 14;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year + y).toString(), year + y);
                  }
                </script>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of paymentSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--confirmSection-->
      <div id="confirmSection" class="">
        <div id="" class="floatL">
          <label for="tf_confirmFirstName" class="label1"><span id="confirm" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Confirm</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div id="" class="floatL gray2">
              <input id="cb_confirm" class="marginL0 marginR5" type="checkbox" name="confirm" value=""/>
              <label for="cb_confirm">Agree to</label> <a class="blue2 mouseCursor" title="Click for class registration terms" onclick="window.open(\'terms.php#dropIn\',\'terms\',\'width=400,height=500,left=100,top=100,scrollbars\');">terms & conditions</a>
            </div>
          </div>
          <div class="floatL clearL wide522 padT10">
            <div class="floatL marginR14">
              <label for="tf_confirmFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_confirmFirstName" name="confirmFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_confirmLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_confirmLastName" name="confirmLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of confirmSection-->
      <div class="formSeparator2 marginT10 marginB10"></div>
      <!--submitSection-->
      <div id="submitSection" class="">
        <div id="total" class="floatL">
          <label class="label1"><span class="floatL"></span><span class="floatR size20 bold blue2">Total</span></label>
        </div>
        <div id="" class="floatL">
          <div id="totalPrice" class="floatL padT10">$ 0</div>
        </div>
        <div id="" class="floatR">
          <a id="btn1R" class="" onclick="validateDropInForm();">
          <div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Submit Registration!</div><div class="btn1RL"><span class="invisible">.</span></div>
          </a>
        </div>
        <div class="fullWidth clearB padL140 padT15 marginT15 gray2 size12">
          If you would like to register another child please submit an additional form. <br />A 10% sibling discount will be applied on your second registration after submission.
        </div>
      </div>
      <!--end of submit section-->
    </form>
    <!--end of form-->
    <script type="text/javascript">document.reg.reset();</script>
  </div>
  <!--end of formContainer-->
  ';
}

function drawPlayGroupForm()
{
  echo '
  <div class="floatR marginR10">
    <script type="text/javascript">
    drawIcon("data/af_class_form.pdf", "download", "rust mouseCursor", "floatL", "Download printable version", "floatL marginT5 size14", false, "","");
    </script>
  </div>

  <div id="formContainer" class="clearB">
    <form method="post" action="form_processor.php?f=playGroup" name="reg">
      <!--childSection-->
      <div id="childSection" class="">
        <div id="" class="floatL">
          <label for="tf_childFirstName" class="label1"><span id="child" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Child</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_childFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_childFirstName" name="childFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_childLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_childLastName" name="childLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
          <div id=="""" class="floatL padT10">
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Month of Birth</span></label>
              <select id="dd_birthMonth" name="birthMonth" class="floatL clearL">
                <option value="" selected="selected">Select a month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthMonth"];
                  var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                  for(var m = 1;m <= months.length;m++)
                  {
                    monthChooser.options[m] = new Option(months[m - 1], months[m - 1]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">Day of Birth</span></label>
              <select id="dd_birthDay" name="birthDay" class="floatL clearL">
                <option value="" selected="selected">Select a day</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["birthDay"];
                  for(var m = 1;m <= 31;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Year of Birth</span></label>
              <select id="dd_birthYear" name="birthYear" class="floatL clearL">
                <option value="" selected="selected">Select a year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["birthYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 10;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year - y).toString(), year - y);
                  }
                </script>
              </select>
            </div>
          </div>
          <div id="" class="floatL clearL wide522 padT10">
            <div id="" class="floatL clearL marginR14">
              <label class="floatL size15"><span class="label2">Age</span></label>
              <select id="dd_age" name="age" class="floatL clearL">
                <option value="" selected="selected">Select an age</option>
                <option value="6 - 12 Months">6 - 12 Months</option>
                <option value="13 Months">13 months</option>
                <option value="14 Months">14 months</option>
                <option value="15 Months">15 months</option>
                <option value="16 Months">16 months</option>
                <option value="17 Months">17 months</option>
                <option value="18 Months">18 months</option>
                <option value="18-24 Months">18-24 months</option>
                <option value="2 years">2 years</option>
                <option value="2&#189; years">2&#189; years</option>
                <option value="3 years">3 years</option>
                <option value=">4 years">4 years</option>
                <option value="5 years">5 years</option>
                <option value="6 years">6 years</option>
                <option value="7 years">7 years</option>
                <option value="8 years">8 years</option>
                <option value="9 years">9 years</option>
                <option value="10 years">10 years</option>
              </select>
            </div>
            <div id="" class="floatL">
              <label class="floatL size15"><span class="label2">Gender</span></label>
              <select id="dd_gender" name="gender" class="floatL clearL">
                <option value="" selected="selected">Select a gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of child section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--parent section-->
      <div id="parentSection" class="">
        <div id="" class="floatL">
          <label for="tf_parentFirstName" class="label1"><span id="parent" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Guardian</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_parentFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_parentFirstName" name="parentFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_parentLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_parentLastName" name="parentLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of parent section-->
      <!--contactSection-->
      <div id="contactSection" class="">
        <div id="" class="floatL">
          <label for="tf_address" class="label1"><span id="contact" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Contact</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <label for="tf_address" class="block size15 marginB5"><span class="label2">Address</span></label>
            <input id="tf_address" name="address" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';"/>
          </div>
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_city" class="block size15 marginB5"><span class="label2">City</span></label>
              <input id="tf_city" name="city" class="floatL wide259" type="text" value="" onfocus="this.className = \'focusBorder floatL wide259\';" onblur="this.className = \'floatL wide259\';" onkeypress="return cityOnly(event);"/>
            </div>
            <div class="floatL marginR14">
              <label class="floatL size15"><span class="label2">State</span></label>
              <select id="dd_state" name="state" class="floatL clearL wide142 marginT10">
                <option value="" selected="selected">Select a state</option>
                <option value="Alabama">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Arizona">Arizona</option>
                <option value="Arkansas">Arkansas</option>
                <option value="California">California</option>
                <option value="Colorado">Colorado</option>
                <option value="Connecticut">Connecticut</option>
                <option value="Delaware">Delaware</option>
                <option value="Florida">Florida</option>
                <option value="Georgia">Georgia</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Idaho">Idaho</option>
                <option value="Illinois">Illinois</option>
                <option value="Indiana">Indiana</option>
                <option value="Iowa">Iowa</option>
                <option value="Kansas">Kansas</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Louisiana">Louisiana</option>
                <option value="Maine">Maine</option>
                <option value="Maryland">Maryland</option>
                <option value="Massachusetts">Massachusetts</option>
                <option value="Michigan">Michigan</option>
                <option value="Minnesota">Minnesota</option>
                <option value="Mississippi">Mississippi</option>
                <option value="Missouri">Missouri</option>
                <option value="Montana">Montana</option>
                <option value="Nebraska">Nebraska</option>
                <option value="Nevada">Nevada</option>
                <option value="New Hampshire">New Hampshire</option>
                <option value="New Jersey">New Jersey</option>
                <option value="New Mexico">New Mexico</option>
                <option value="New York">New York</option>
                <option value="North Carolina">North Carolina</option>
                <option value="North Dakota">North Dakota</option>
                <option value="Ohio">Ohio</option>
                <option value="Oklahoma">Oklahoma</option>
                <option value="Oregon">Oregon</option>
                <option value="Pennsylvania">Pennsylvania</option>
                <option value="Rhode Island">Rhode Island</option>
                <option value="South Carolina">South Carolina</option>
                <option value="South Dakota">South Dakota</option>
                <option value="Tennessee">Tennessee</option>
                <option value="Texas">Texas</option>
                <option value="Utah">Utah</option>
                <option value="Vermont">Vermont</option>
                <option value="Virginia">Virginia</option>
                <option value="Washington">Washington</option>
                <option value="West Virginia">West Virginia</option>
                <option value="Wisconsin">Wisconsin</option>
                <option value="Wyoming">Wyoming</option>
              </select>
            </div>
            <!--end of states-->
            <div class="floatL">
              <label for="tf_zip" class="block size15 marginB5"><span class="label2">Zip</span></label>
              <input id="tf_zip" name="zip" class="floatL wide65" type="text" value="" maxLength="5" onfocus="this.className = \'focusBorder floatL wide65\';" onblur="this.className = \'floatL wide65\';" onkeypress="return numbersOnly(event);"/>
            </div>
            <!--end of zip-->
          </div>
          <!--end of row-->

          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_homePhone" class="block size15 marginB5"><span class="label2">Home Phone</span></label>
              <input id="tf_homePhone" name="homePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_mobilePhone" class="block size15 marginB5"><span class="label2">Mobile Phone</span></label>
              <input id="tf_mobilePhone" name="mobilePhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_fax" class="block size15 marginB5"><span class="label2">Fax</span></label>
              <input id="tf_fax" name="fax" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
            <div id="" class="floatL">
              <label for="tf_emergencyContact" class="block size15 marginB5"><span class="label2">Emergency Phone</span></label>
              <input id="tf_emergencyContact" name="emergencyContact" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL">
              <label for="tf_email" class="block size15 marginB5"><span class="label2">Email Address</span></label>
              <input id="tf_email" name="email" class="floatL wide506" type="text" value="" onfocus="this.className = \'focusBorder floatL wide506\';" onblur="this.className = \'floatL wide506\';" onkeypress="return emailOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </div>
      <!--end of contact section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--safetySection-->
      <div id="safetySection" class="">
        <div id="" class="floatL">
          <label for="tf_drFirstName" class="label1"><span id="safety" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Safety</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="floatL marginR14">
              <label for="tf_drFirstName" class="block size15 marginB5"><span class="label2">Doctor\'s First Name</span></label>
              <input id="tf_drFirstName" name="drFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_drLastName" class="block size15 marginB5"><span class="label2">Doctor\'s Last Name</span></label>
              <input id="tf_drLastName" name="drLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10 wide522">
            <div id="" class="floatL clearL marginR14">
              <label for="tf_drPhone" class="block size15 marginB5"><span class="label2">Doctor\'s Phone</span></label>
              <input id="tf_drPhone" name="drPhone" class="floatL wide160" type="text" value="" maxLength="16" onfocus="this.className = \'focusBorder floatL wide160\';" onblur="this.className = \'floatL wide160\';" onkeypress="return phoneOnly(event);"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_insuranceCoverage" class="block size15 marginB5"><span class="label2">Insurance Coverage</span></label>
              <input id="tf_insuranceCoverage" name="insuranceCoverage" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
            <div class="floatL">
              <label for="tf_policyNumber" class="block size15 marginB5"><span class="label2">Insurance Policy #</span></label>
              <input id="tf_policyNumber" name="policyNumber" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
          </div>
          <!--end of row-->
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_alternateGuardian" class="block size15 marginB5"><span class="label2">Alternate Guardian</span></label>
              <input id="tf_alternateGuardian" name="alternateGuardian" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
            <div class="floatL">
              <label for="tf_allergies" class="block size15 marginB5"><span class="label2">Allergies</span></label>
              <input id="tf_allergies" name="allergies" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';"/>
            </div>
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </div>
      <!--end of safety section-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--groupSection-->
      <div id="groupSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="group" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR"></span></label>
        </div>
        <div class="floatL wide522 padT2">
          <span class="rust">Limited class offerings during the summer.<br />Please see <a class="blue2" href="schedule.php#summer">summer schedule</a> before registering.</span>
        </div>
      </div>
      <div id="groupSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="group" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Group</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_group" name="group" class="floatL clearL wide220" onchange="updatePlayGroupSemesters();clearPriceOptions();">
              <option value="" selected="selected">Select a group</option>
              <option value="1 day/week">1 day/week</option>
              <option value="2 days/week">2 days/week</option>
              <option value="1 day/week (Summer)">1 day/week (Summer)</option>
              <option value="2 days/week (Summer)">2 days/week (Summer)</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of groupSection-->
      <!--day1Section-->
      <div id="day1Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="day1" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Day 1</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_day1" name="day1" class="floatL clearL wide220" onchange="">
              <option value="" selected="selected">Select 1st day</option>
              <option value="Monday">Monday</option>
              <option value="Tuesday">Tuesday</option>
              <option value="Wednesday">Wednesday</option>
              <option value="Thursday">Thursday</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of day1Section-->
      <!--day2Section-->
      <div id="day2Section" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="day2" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Day 2</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_day2" name="day2" class="floatL clearL wide220" onchange="">
              <option value="" selected="selected">Select 2nd day</option>
              <option value="N/A">N/A</option>
              <option value="Monday">Monday</option>
              <option value="Tuesday">Tuesday</option>
              <option value="Wednesday">Wednesday</option>
              <option value="Thursday">Thursday</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of day2Section-->
      <!--semesterSection-->
      <div id="semesterSection" class="floatL">
        <div id="" class="floatL">
          <label class="label1"><span id="semester" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Semester</span></label>
        </div>
        <div class="floatL wide522 padT2">
          <div class="floatL marginR14">
            <select id="dd_semester" name="semester" class="floatL clearL wide220" onchange="clearPriceOptions();">
              <option value="" selected="selected">Select a semester</option>
            </select>
          </div>
        </div>
      </div>
      <!--end of semesterSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--regFeeSection-->
      <div id="regFeeSection" class="">
        <div id="" class="floatL">
          <label class="label1"><span id="1stTimer" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">1st Timer?</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="label2">Is this your first time registering? (A $25 registration fee applies)</div>
            <div class="marginT5 floatL">
              <input id="rb_register_yes" name="firstTimeRegistering" class="" type="radio" value="yes" onclick="clearMembershipConfirm();"/>
              <label class="marginR15 size18" for="rb_register_yes">Yes</label>
              <input id="rb_register_no" name="firstTimeRegistering" class="" type="radio" value="no" onclick="clearMembershipConfirm();"/>
              <label class="size18" for="rb_register_no">No</label>
            </div>
          </div>
        </div>
      </div>
      <!--end of regFeeSection-->
      <!--memberFeeSection-->
      <div id="membershipFeeSection" class="">
        <div id="" class="floatL">
          <label class="label1"><span id="membership" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Member?</span></label>
        </div>
        <div class="floatL wide522 padT10">
          <div class="floatL">
            <div class="label2">Would you like to become a member? (An annual $295 membership fee applies)
              <script type="text/javascript">
              drawIcon("membership.php", "info", "", "marginB-8", "", "", false, "Click for membership benefits!","_blank");
              </script>
              <br />If you are a current member discounts will be applied after form submission.
            </div>
            <div class="marginT5 floatL">
              <input id="rb_membership_yes" name="membership" class="" type="radio" value="yes" onclick="clearConfirm();updatePlayGroupTotal();"/>
              <label class="marginR15 size18" for="rb_membership_yes">Yes</label>
              <input id="rb_membership_no" name="membership" class="" type="radio" value="no" onclick="clearConfirm();updatePlayGroupTotal();"/>
              <label class="size18" for="rb_membership_no">No</label>
            </div>
          </div>
        </div>
      </div>
      <!--end of memberFeeSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--paymentSection-->
      <div id="paymentSection" class="">
        <div id="" class="floatL">
          <label for="tf_cardNumber" class="label1"><span id="payment" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Payment</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div class="floatL marginR14">
              <label for="tf_cardNumber" class="block size15 marginB5"><span class="label2">Card #</span></label>
              <input id="tf_cardNumber" name="cardNumber" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return creditOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_cidcvv" class="block size15 marginB5"><span class="label2">CID/CVV #</span></label>
              <input id="tf_cidcvv" name="cidcvv" class="floatL wide50" type="text" value="" maxLength="4" onfocus="this.className = \'focusBorder floatL wide50\';" onblur="this.className = \'floatL wide50\';" onkeypress="return numbersOnly(event);"/>
            </div>
          </div>
          <div id="" class="floatL clearL padT10 wide522">
            <div class="floatL marginR14">
              <select id="dd_cardType" name="cardType" class="floatL clearL">
                <option value="" selected="selected">Card Type</option>
                <script type="text/javascript">
                  var cardChooser = document.reg.elements["cardType"];
                  var cards = new Array("Visa", "MasterCard", "AmEx");
                  for(var c = 0;c < cards.length;c++)
                  {
                    cardChooser.options[c + 1] = new Option(cards[c], cards[c]);
                  }
                </script>
              </select>
            </div>
            <div class="floatL marginR14">
              <select id="dd_expMonth" name="expMonth" class="floatL clearL">
                <option value="" selected="selected">Exp. Month</option>
                <script type="text/javascript">
                  var monthChooser = document.reg.elements["expMonth"];
                  for(var m = 1;m <= 12;m++)
                  {
                    if(m < 10)
                    {
                      monthChooser.options[m] = new Option("0" + m.toString(), "0" + m);
                    }else
                    {
                      monthChooser.options[m] = new Option(m.toString(), m);
                    }
                  }
                </script>
              </select>
            </div>
            <div id="" class="floatL">
              <select id="dd_expYear" name="expYear" class="floatL clearL">
                <option value="" selected="selected">Exp. Year</option>
                <script type="text/javascript">
                  var yearChooser = document.reg.elements["expYear"];
                  var date = new Date();
                  var year = date.getUTCFullYear();
                  var years = 14;
                  for(var y = 0;y <= years;y++)
                  {
                    yearChooser.options[y + 1] = new Option((year + y).toString(), year + y);
                  }
                </script>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--end of paymentSection-->
      <div class="formSeparator1 marginT10 marginB10"></div>
      <!--confirmSection-->
      <div id="confirmSection" class="">
        <div id="" class="floatL">
          <label for="tf_confirmFirstName" class="label1"><span id="confirm" class="errorBoxHide floatL"><span class="invisible">.</span></span><span class="floatR">Confirm</span></label>
        </div>
        <div id="" class="floatL wide522">
          <div class="floatL padT10">
            <div id="" class="floatL gray2">
              <input id="cb_confirm" class="marginL0 marginR5" type="checkbox" name="confirm" value=""/>
              <label for="cb_confirm">Agree to</label> <a class="blue2 mouseCursor" title="Click for play group registration terms" onclick="window.open(\'terms.php#playGroup\',\'terms\',\'width=400,height=500,left=100,top=100,scrollbars\');">terms & conditions</a>
            </div>
          </div>
          <div class="floatL clearL wide522 padT10">
            <div class="floatL marginR14">
              <label for="tf_confirmFirstName" class="block size15 marginB5"><span class="label2">First Name</span></label>
              <input id="tf_confirmFirstName" name="confirmFirstName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
            <div class="floatL">
              <label for="tf_confirmLastName" class="block size15 marginB5"><span class="label2">Last Name</span></label>
              <input id="tf_confirmLastName" name="confirmLastName" class="floatL nameField1" type="text" value="" onfocus="this.className = \'focusBorder floatL nameField1\';" onblur="this.className = \'floatL nameField1\';" onkeypress="return lettersOnly(event);"/>
            </div>
          </div>
        </div>
      </div>
      <!--end of confirmSection-->
      <div class="formSeparator2 marginT10 marginB10"></div>
      <!--submitSection-->
      <div id="submitSection" class="">
        <div id="total" class="floatL">
          <label class="label1"><span class="floatL"></span><span class="floatR size20 bold blue2">Total</span></label>
        </div>
        <div id="" class="floatL">
          <div id="totalPrice" class="floatL padT10">$ 0</div>
        </div>
        <div id="" class="floatR">
          <a id="btn1R" class="" onclick="validatePlayGroupForm();">
          <div class="btn1RR"><span class="invisible">.</span></div><div class="btn1RC">&#187; Submit Registration!</div><div class="btn1RL"><span class="invisible">.</span></div>
          </a>
        </div>
        <div class="fullWidth clearB padL140 padT15 marginT15 gray2 size12">
          If you would like to register another child please submit an additional form. <br />A 10% sibling discount will be applied on your second registration after submission.
        </div>
      </div>
      <!--end of submit section-->
    </form>
    <!--end of form-->
    <script type="text/javascript">document.reg.reset();</script>
  </div>
  <!--end of formContainer-->
  ';
}
?>
