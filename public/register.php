<?php
require_once 'functions.php';
switch($_GET['d'])
{
	case "choose":
	$page = "Register";
	break;
	case "class":
	$page = "Class Registration";
	break;
	case "summerCamp":
	$page = "Summer Camp Registration";
	break;
	case "holidayCamp":
	$page = "Holiday Camp Registration";
	break;
	case "juneCamp":
	$page = "June Camp Registration";
	break;
	case "dropIn":
	$page = "Drop In Registration";
	break;
	case "playGroup":
	$page = "Play Group Registration";
	break;
	default:
	$page = "Register";
	break;
}
openHeader($page);
includeJs();
closeHeader();
drawMainMenu();
drawActivitiesMenu();
openContent($page, "register");
?>
<!--begin content-->

<?php
switch($_GET['d'])
{
	case "choose":
	drawChoose();
	break;
	case "class":
	drawClassForm();
	break;
	case "summerCamp":
	drawSummerCampForm();
	break;
	case "holidayCamp":
	drawHolidayCampForm();
	break;
	case "juneCamp":
	drawJuneCampForm();
	break;
	case "dropIn":
	drawDropInForm();
	break;
	case "playGroup":
	drawPlayGroupForm();
	break;
	case "success":
	drawSuccess();
	break;
	case "fail":
	drawFailure();
	break;
	default:
	drawChoose();
	break;
}
?>

<!--end content-->
<?php
closeContent();
drawFooter();

function drawSuccess()
{
	echo '
	<table class="high170 fullWidth" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<div class="size20 bold blue2 alignC">Thanks for registering!<br />
				You\'ll receive a confirmation email shortly.</div>
			</td>
		</tr>
	</table>
	';
}

function drawFailure()
{
	echo '
	<table class="high170 fullWidth" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<div class="size20 bold rust alignC">An error occured while trying to process your registration.<br />
				Please try registering again.</div>
			</td>
		</tr>
	</table>
	';
}
?>