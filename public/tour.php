<?php
require 'functions.php';
$page = "Farm Tour";
openHeader($page);
closeHeader();
drawMainMenu();
drawActivitiesMenu();
openContent($page, "tour");
?>
<!--begin content-->

<script type="text/javascript">
var captions = new Array(
	"",
	"Welcome to our eco-friendly farm in the city. Please enjoy your tour through our facility.",
	"",
	"Lobby, Toy Store",
	"Music Room, Party Room",
	"Pre-school and Play Group Room",
	"Party Room - You have the whole facility when you celebrate a birthday at The Art Farm.",
	"Indoor Petting Zoo",
	"Looking forward to seeing you soon!");
for(var i = 1;i <= 8;i++)
{
	document.write('<span class="block marginB20 gray2">' + captions[i] + '</span>');
	if(i < 8)
	{
		document.write('<img class="block marginB5" src="photos/tour/tour_photo_' + i + '.jpg" />');
	}
}
</script>
<!--end content-->
<?php
closeContent();
drawFooter();
?>