<?php
require_once 'functions.php';
$data = $_POST;
foreach($data as $i => $value)
{
	$data[$i] = stripslashes($data[$i]);
}
$mailerName = 'The Art Farm in The City'; //vanity email name
$mailerAddress = 'noreply@theartfarms.org'; //server domain
$afDomain = 'http://www.theartfarms.org/afic/'; //url for logo link
$afLogo = 'http://www.theartfarms.org/afic/images/artfarm_logo.png'; //logo url

$afEmail = 'frontdesk@theartfarms.org'; //who the data gets sent to
$afEmail2 = 'artfarminthecityregs@gmail.com'; //who the data gets sent to
$to;
$subject;
$message;
$registrantEmail;
$registrantSubject;
$registrantMessage;
$header = 'From: ' . $mailerName . ' <' . $mailerAddress . '>' . "\r\n";
$header .= 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$rType;

switch($_GET['f'])
{
	case 'class':
	$rType = 'class';
	processClassForm();
	break;
	case 'holidayCamp':
	$rType = 'holiday camp';
	processHolidayCampForm();
	break;
	case 'summerCamp':
	$rType = 'summer camp';
	processSummerCampForm();
	break;
	case 'juneCamp':
	$rType = 'june camp';
	processJuneCampForm();
	break;
	case 'dropIn':
	$rType = 'drop in';
	processDropInForm();
	break;
	case 'playGroup':
	$rType = 'play group';
	processPlayGroupForm();
	break;
	default:
	break;
}

function processClassForm()
{
	global	$data, $afEmail, $to, $subject, $message, $rType, $registrantEmail, $registrantSubject, $registrantMessage;
	
	// ==================
	// = art farm email =
	// ==================
	$to = $afEmail;
	$subject = 'New ' . ucwords($rType) . ' registration for ' . ucfirst($data['childFirstName']) . ' ' . ucfirst($data['childLastName']) . '!';
	
	infoStart1();
	
	newRow('','','&nbsp;');
	newRow('Class','Title',$data['className']);
	newRow('','Day',$data['classDay']);
	newRow('','Time',$data['classTime']);
	newRow('','Semester',$data['classSemester']);
	newRow('','Month',$data['classMonth']);
	newRow('','Date',$data['classDate']);
	$startWeek = ($data['classWeek'] == "0") ? "N/A" : $data['classWeek'];
	newRow('','Starting Week',$startWeek);
	// newRow('','Starting Week',$data['classWeek']);
	newRow('','','&nbsp;');
	
	infoEnd1();
	
	// ====================
	// = registrant email =
	// ====================
	$registrantEmail = $data['email'];
	$registrantSubject = ucwords($rType) . ' Registration Confirmation';
	$registrantMessage = msgHead2();
	openTable();
	newRow2('Child','Name',ucfirst($data['childFirstName']) . ' ' . ucFirst($data['childLastName']));
	newRow2('','','&nbsp;');
	newRow2('Class','Title',$data['className']);
	newRow2('','Day',$data['classDay']);
	newRow2('','Time',$data['classTime']);
	newRow2('','Semester',$data['classSemester']);
	newRow2('','Month',$data['classMonth']);
	newRow2('','Date',$data['classDate']);
	newRow2('','Starting Week',$startWeek);
	// newRow2('','Starting Week',$data['classWeek']);
	newRow2('','','&nbsp;');
	newRow2('Payment','Card Type',ucfirst($data['cardType']));
	newRow2('','Card Expiration',$data['expMonth'] . '/' . $data['expYear']);
	newRow2('','','&nbsp;');
	newRow2('Confirmation','Approved by',ucfirst($data['confirmFirstName']) . ' ' . ucfirst($data['confirmLastName']));
	newRow2('','','&nbsp;');
	newRow2('TOTAL','','$ ' . $data['total']);
	$registrantMessage.= msgFoot();
}

function processHolidayCampForm()
{
	global	$data, $afEmail, $to, $subject, $message, $rType, $registrantEmail, $registrantSubject, $registrantMessage;
	
	// ==================
	// = art farm email =
	// ==================
	$to = $afEmail;
	$subject = 'New ' . ucwords($rType) . ' registration for ' . ucfirst($data['childFirstName']) . ' ' . ucfirst($data['childLastName']) . '!';
	
	infoStart1();
	
	newRow('','','&nbsp;');
	newRow('Safety','Doctor',$data['drFirstName'] . ' ' . $data['drLastName']);
	newRow('','Doctor\'s Phone',$data['drPhone']);
	newRow('','Insurance',$data['insuranceCoverage'] . ' -- Policy # ' . $data['policyNumber']);
	newRow('','Alternate Guardian',$data['alternateGuardian']);
	newRow('','Allergies',$data['allergies']);
	newRow('','','&nbsp');
	newRow('Camp','Group',$data['holidayCampGroup']);
	newRow('','Day 1',$data['day1']);
	newRow('','Day 2',$data['day2']);
	newRow('','Day 3',$data['day3']);
	newRow('','Day 4',$data['day4']);
	newRow('','Day 5',$data['day5']);
	newRow('','Day 6',$data['day6']);
	newRow('','','&nbsp;');
	
	infoEnd2();
	
	// ====================
	// = registrant email =
	// ====================
	$registrantEmail = $data['email'];
	$registrantSubject = ucwords($rType) . ' Registration Confirmation';
	$registrantMessage = msgHead2();
	openTable();
	newRow2('Child','Name',ucfirst($data['childFirstName']) . ' ' . ucFirst($data['childLastName']));
	newRow2('','','&nbsp;');
	newRow2('Camp','Group',$data['holidayCampGroup']);
	newRow2('','Day 1',$data['day1']);
	newRow2('','Day 2',$data['day2']);
	newRow2('','Day 3',$data['day3']);
	newRow2('','Day 4',$data['day4']);
	newRow2('','Day 5',$data['day5']);
	newRow2('','Day 6',$data['day6']);
	newRow2('','','&nbsp;');
	newRow2('Payment','Card Type',ucfirst($data['cardType']));
	newRow2('','Card Expiration',$data['expMonth'] . '/' . $data['expYear']);
	newRow2('','','&nbsp;');
	newRow2('Confirmation','Approved by',ucfirst($data['confirmFirstName']) . ' ' . ucfirst($data['confirmLastName']));
	newRow2('','','&nbsp;');
	newRow2('TOTAL','','$ ' . $data['total']);
	$registrantMessage.= msgFoot();
}

function processSummerCampForm()
{
	global	$data, $afEmail, $to, $subject, $message, $rType, $registrantEmail, $registrantSubject, $registrantMessage;
	
	// ==================
	// = art farm email =
	// ==================
	$to = $afEmail;
	$subject = 'New ' . ucwords($rType) . ' registration for ' . ucfirst($data['childFirstName']) . ' ' . ucfirst($data['childLastName']) . '!';
	
	infoStart1();
	
	newRow('','','&nbsp;');
	newRow('Safety','Doctor',$data['drFirstName'] . ' ' . $data['drLastName']);
	newRow('','Doctor\'s Phone',$data['drPhone']);
	newRow('','Insurance',$data['insuranceCoverage'] . ' -- Policy # ' . $data['policyNumber']);
	newRow('','Alternate Guardian',$data['alternateGuardian']);
	newRow('','Allergies',$data['allergies']);
	newRow('','','&nbsp');
	newRow('Camp','Group',$data['campGroup']);
	newRow('','Week 1',$data['week1']);
	newRow('','Week 2',$data['week2']);
	newRow('','Week 3',$data['week3']);
	newRow('','Week 4',$data['week4']);
	newRow('','Week 5',$data['week5']);
	newRow('','Week 6',$data['week6']);
	newRow('','Week 7',$data['week7']);
	newRow('','Week 8',$data['week8']);
	newRow('','','&nbsp;');
	
	infoEnd2();
	
	// ====================
	// = registrant email =
	// ====================
	$registrantEmail = $data['email'];
	$registrantSubject = ucwords($rType) . ' Registration Confirmation';
	$registrantMessage = msgHead2();
	openTable();
	newRow2('Child','Name',ucfirst($data['childFirstName']) . ' ' . ucFirst($data['childLastName']));
	newRow2('','','&nbsp;');
	newRow2('Camp','Group',$data['campGroup']);
	newRow2('','Week 1',$data['week1']);
	newRow2('','Week 2',$data['week2']);
	newRow2('','Week 3',$data['week3']);
	newRow2('','Week 4',$data['week4']);
	newRow2('','Week 5',$data['week5']);
	newRow2('','Week 6',$data['week6']);
	newRow2('','Week 7',$data['week7']);
	newRow2('','Week 8',$data['week8']);
	newRow2('','','&nbsp;');
	newRow2('Payment','Card Type',ucfirst($data['cardType']));
	newRow2('','Card Expiration',$data['expMonth'] . '/' . $data['expYear']);
	newRow2('','','&nbsp;');
	newRow2('Confirmation','Approved by',ucfirst($data['confirmFirstName']) . ' ' . ucfirst($data['confirmLastName']));
	newRow2('','','&nbsp;');
	newRow2('TOTAL','','$ ' . $data['total']);
	$registrantMessage.= msgFoot();
}

function processJuneCampForm()
{
	global	$data, $afEmail, $to, $subject, $message, $rType, $registrantEmail, $registrantSubject, $registrantMessage;
	
	// ==================
	// = art farm email =
	// ==================
	$to = $afEmail;
	$subject = 'New ' . ucwords($rType) . ' registration for ' . ucfirst($data['childFirstName']) . ' ' . ucfirst($data['childLastName']) . '!';
	
	infoStart1();
	
	newRow('','','&nbsp;');
	newRow('Safety','Doctor',$data['drFirstName'] . ' ' . $data['drLastName']);
	newRow('','Doctor\'s Phone',$data['drPhone']);
	newRow('','Insurance',$data['insuranceCoverage'] . ' -- Policy # ' . $data['policyNumber']);
	newRow('','Alternate Guardian',$data['alternateGuardian']);
	newRow('','Allergies',$data['allergies']);
	newRow('','','&nbsp');
	// newRow('Camp','Group',$data['campGroup']);
	newRow('','Week 1',$data['week1']);
	newRow('','Week 2',$data['week2']);
	newRow('','Week 3',$data['week3']);
	newRow('','Week 4',$data['week4']);
	newRow('','Week 5',$data['week5']);
/*
	newRow('','Week 6',$data['week6']);
	newRow('','Week 7',$data['week7']);
	newRow('','Week 8',$data['week8']);
*/
	newRow('','','&nbsp;');
	
	infoEnd2();
	
	// ====================
	// = registrant email =
	// ====================
	$registrantEmail = $data['email'];
	$registrantSubject = ucwords($rType) . ' Registration Confirmation';
	$registrantMessage = msgHead2();
	openTable();
	newRow2('Child','Name',ucfirst($data['childFirstName']) . ' ' . ucFirst($data['childLastName']));
	newRow2('','','&nbsp;');
	// newRow2('Camp','Group',$data['campGroup']);
	newRow2('','Week 1',$data['week1']);
	newRow2('','Week 2',$data['week2']);
	newRow2('','Week 3',$data['week3']);
	newRow2('','Week 4',$data['week4']);
	newRow2('','Week 5',$data['week5']);
/*
	newRow2('','Week 6',$data['week6']);
	newRow2('','Week 7',$data['week7']);
	newRow2('','Week 8',$data['week8']);
*/
	newRow2('','','&nbsp;');
	newRow2('Payment','Card Type',ucfirst($data['cardType']));
	newRow2('','Card Expiration',$data['expMonth'] . '/' . $data['expYear']);
	newRow2('','','&nbsp;');
	newRow2('Confirmation','Approved by',ucfirst($data['confirmFirstName']) . ' ' . ucfirst($data['confirmLastName']));
	newRow2('','','&nbsp;');
	newRow2('TOTAL','','$ ' . $data['total']);
	$registrantMessage.= msgFoot();
}

function processDropInForm()
{
	global	$data, $afEmail, $to, $subject, $message, $rType, $registrantEmail, $registrantSubject, $registrantMessage;
	
	// ==================
	// = art farm email =
	// ==================
	$to = $afEmail;
	$subject = 'New ' . ucwords($rType) . ' registration for ' . ucfirst($data['childFirstName']) . ' ' . ucfirst($data['childLastName']) . '!';
	
	infoStart1();
	
	newRow('','','&nbsp;');
	if($data['ptPackage'] != 'None')
	{
		newRow('Play Time','Package',$data['ptPackage']);
		newRow('','Start Date',$data['ptDay'] . ', ' . $data['ptMonth'] . ' ' . $data['ptDate']);
	}
	if($data['ohPass'] != 'None')
	{
		newRow('Open House','Pass',$data['ohPass']);
		newRow('','Day',$data['ohDay']);
		newRow('','Month',$data['ohMonth']);
		newRow('','Semester',$data['ohSemester']);
	}
	if($data['motfVisits'] != 'None')
	{
		newRow('Mornings on The Farm','Visits',$data['motfVisits']);
		newRow('','Day',$data['motfDay']);
		newRow('','Month',$data['motfMonth']);
	}
	newRow('','','&nbsp;');
	
	infoEnd2();
	
	// ====================
	// = registrant email =
	// ====================
	$registrantEmail = $data['email'];
	$registrantSubject = ucwords($rType) . ' Registration Confirmation';
	$registrantMessage = msgHead2();
	openTable();
	newRow2('Child','Name',ucfirst($data['childFirstName']) . ' ' . ucFirst($data['childLastName']));
	newRow2('','','&nbsp;');
	if($data['ptPackage'] != 'None')
	{
		newRow2('Play Time','Package',$data['ptPackage']);
		newRow2('','Start Date',$data['ptDay'] . ', ' . $data['ptMonth'] . ' ' . $data['ptDate']);
	}
	if($data['ohPass'] != 'None')
	{
		newRow2('Open House','Pass',$data['ohPass']);
		newRow2('','Day',$data['ohDay']);
		newRow2('','Month',$data['ohMonth']);
		newRow2('','Semester',$data['ohSemester']);
	}
	if($data['motfVisits'] != 'None')
	{
		newRow2('Mornings on The Farm','Pass',$data['motfVisits']);
		newRow2('','Day',$data['motfDay']);
		newRow2('','Month',$data['motfMonth']);
	}
	newRow2('','','&nbsp;');
	newRow2('Payment','Card Type',ucfirst($data['cardType']));
	newRow2('','Card Expiration',$data['expMonth'] . '/' . $data['expYear']);
	newRow2('','','&nbsp;');
	newRow2('Confirmation','Approved by',ucfirst($data['confirmFirstName']) . ' ' . ucfirst($data['confirmLastName']));
	newRow2('','','&nbsp;');
	newRow2('TOTAL','','$ ' . $data['total']);
	$registrantMessage.= msgFoot();
}

function processPlayGroupForm()
{
	global	$data, $afEmail, $to, $subject, $message, $rType, $registrantEmail, $registrantSubject, $registrantMessage;
	
	// ==================
	// = art farm email =
	// ==================
	$to = $afEmail;
	$subject = 'New ' . ucwords($rType) . ' registration for ' . ucfirst($data['childFirstName']) . ' ' . ucfirst($data['childLastName']) . '!';
	
	infoStart1();
	
	newRow('','','&nbsp;');
	newRow('Safety','Doctor',$data['drFirstName'] . ' ' . $data['drLastName']);
	newRow('','Doctor\'s Phone',$data['drPhone']);
	newRow('','Insurance',$data['insuranceCoverage'] . ' -- Policy # ' . $data['policyNumber']);
	newRow('','Alternate Guardian',$data['alternateGuardian']);
	newRow('','Allergies',$data['allergies']);
	newRow('','','&nbsp');
	newRow('Play Group','Option',$data['group']);
	if($data['day2'] != '')
	{
		newRow('','Day 1',$data['day1']);
		newRow('','Day 2',$data['day2']);	
	}else
	{
		newRow('','Day',$data['day1']);
	}
	newRow('','Semester',$data['semester']);
	newRow('','','&nbsp;');
	
	infoEnd1();
	
	// ====================
	// = registrant email =
	// ====================
	$registrantEmail = $data['email'];
	$registrantSubject = ucwords($rType) . ' Registration Confirmation';
	$registrantMessage = msgHead2();
	openTable();
	newRow2('Child','Name',ucfirst($data['childFirstName']) . ' ' . ucFirst($data['childLastName']));
	newRow2('','','&nbsp;');
	newRow2('Play Group','Option',$data['group']);
	if($data['day2'] != '')
	{
		newRow2('','Day 1',$data['day1']);
		newRow2('','Day 2',$data['day2']);	
	}else
	{
		newRow2('','Day',$data['day1']);
	}
	newRow2('','Semester',$data['semester']);
	newRow2('','','&nbsp;');
	newRow2('Payment','Card Type',ucfirst($data['cardType']));
	newRow2('','Card Expiration',$data['expMonth'] . '/' . $data['expYear']);
	newRow2('','','&nbsp;');
	newRow2('Confirmation','Approved by',ucfirst($data['confirmFirstName']) . ' ' . ucfirst($data['confirmLastName']));
	newRow2('','','&nbsp;');
	newRow2('TOTAL','','$ ' . $data['total']);
	$registrantMessage.= msgFoot();
}

function msgHead()
{
	global $afDomain, $afLogo, $rType;
	return '
	<body style="margin:0px;padding:10px;outline:none;background:#CCCCCC;font:12px Arial;color:#606060;">
		<table style="background:#FFFFFF;-moz-border-radius: 10px;-webkit-border-radius: 10px;border: 1px solid #CCCCCC; width: 700px;" border="0" cellspacing="0" cellpadding="0" align="center">
			<thead>
				<tr>
					<td style="padding:5px;">
						<a style="outline:none;text-decoration:none;border:none;" href="' . $afDomain . '" target="_blank"><img style="border:none;" src="' . $afLogo . '" /></a>
					</td>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td style="padding:5px;text-align:right;padding-right:10px;">
						<a style="color:#AAAAAA;font-size:12px;text-decoration:none;outline:none" href="' . AUTHOR_URL . '" target="_blank">Email by ' . AUTHOR . '</a>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td>
						<table style="width:100%;" border="0" cellspacing="0" cellpadding="0">
							<tr style="background:#326BBC;color:#FFFFFF;">
								<td style="padding:5px 15px;font-size:18px;font-weight:bold;">You\'ve got a new ' . $rType . ' registration!</td>
								<td style="padding:5px 15px;font-size:14px;text-align:right;">' . date('l, F j, Y') . '</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style="">
						<table style="margin:15px;" border="0" cellspacing="0" cellpadding="">
	';
}

function msgHead2()
{
	global $afDomain, $afLogo, $rType;
	return '
	<body style="margin:0px;padding:10px;outline:none;background:#CCCCCC;font:12px Arial;color:#606060;">
		<table style="background:#FFFFFF;-moz-border-radius: 10px;-webkit-border-radius: 10px;border: 1px solid #CCCCCC; width: 700px;" border="0" cellspacing="0" cellpadding="0" align="center">
			<thead>
				<tr>
					<td style="padding:5px;">
						<a style="outline:none;text-decoration:none;border:none;" href="' . $afDomain . '" target="_blank"><img style="border:none;" src="' . $afLogo . '" /></a>
					</td>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td style="padding:5px;text-align:right;padding-right:10px;">
						<a style="color:#AAAAAA;font-size:12px;text-decoration:none;outline:none" href="' . AUTHOR_URL . '" target="_blank">Email by ' . AUTHOR . '</a>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td>
						<table style="width:100%;" border="0" cellspacing="0" cellpadding="0">
							<tr style="background:#326BBC;color:#FFFFFF;">
								<td style="padding:5px 15px;font-size:18px;font-weight:bold;">Here\'s your ' . $rType . ' registration confirmation!</td>
								<td style="padding:5px 15px;font-size:14px;text-align:right;">' . date('l, F j, Y') . '</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style="">
	';
}

function openTable()
{
	global $registrantMessage;
	$registrantMessage.= '
	<table style="margin:15px;" border="0" cellspacing="0" cellpadding="">
	';
}

function msgFoot()
{
	return '
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</body>
	';
}

function newRow($section,$label,$value)
{
	global $message;
	$message.= '<tr style="">
					<td style="color:#326BBC;font-size:16px;font-weight:bold;text-align:right;padding-right:10px;" valign="baseline">' . $section . '</td>
					<td style="text-align:right;color:#DB4A28;padding-right:10px;" valign="baseline">' . $label . '</td>
					<td valign="baseline">' . $value . '</td>
				</tr>';
}

function newRow2($section,$label,$value)
{
	global $registrantMessage;
	$registrantMessage.= '<tr style="">
					<td style="color:#326BBC;font-size:16px;font-weight:bold;text-align:right;padding-right:10px;" valign="baseline">' . $section . '</td>
					<td style="text-align:right;color:#DB4A28;padding-right:10px;" valign="baseline">' . $label . '</td>
					<td valign="baseline">' . $value . '</td>
				</tr>';
}

function infoStart1()
{
	global $data, $message;
		$message = msgHead();
		newRow('Child','Name',ucfirst($data['childFirstName']) . ' ' . ucFirst($data['childLastName']));
		newRow('','DOB',$data['birthMonth'] . ' ' . $data['birthDay'] . ', ' . $data['birthYear']);
		newRow('','Age',$data['age']);
		newRow('','Gender',$data['gender']);
		newRow(' ',' ','&nbsp;');
		newRow('Parent','Name',$data['parentFirstName'] . ' ' . $data['parentLastName']);
		newRow(' ',' ','&nbsp;');
		newRow('Contact','Address',$data['address'] . '<br />' . $data['city'] . ', ' . $data['state'] . ' ' . $data['zip']);
		newRow('','Home Phone',$data['homePhone']);
		newRow('','Mobile Phone',$data['mobilePhone']);
		newRow('','Fax',$data['fax']);
		newRow('','Emergency Contact',$data['emergencyContact']);
		newRow('','Email',$data['email']);
}

function infoEnd1()
{
	global $data, $message;
	newRow('Extras','1st Time Registering',ucfirst($data['firstTimeRegistering']));
	newRow('','Membership',ucfirst($data['membership']));
	newRow('','','&nbsp;');
	newRow('Payment','Card Type',ucfirst($data['cardType']));
	newRow('','Card #',$data['cardNumber']);
	newRow('','CID/CVV #',$data['cidcvv']);
	newRow('','Card Expiration',$data['expMonth'] . '/' . $data['expYear']);
	newRow('','Coupon Code',strtoupper($data['couponCode']));
	newRow('','','&nbsp;');
	newRow('Confirmation','Name',ucfirst($data['confirmFirstName']) . ' ' . ucfirst($data['confirmLastName']));
	newRow('','','&nbsp;');
	newRow('TOTAL','=>','$ ' . $data['total']);
	$message.= msgFoot();
}

function infoEnd2()
{
	global $data, $message;
	newRow('Extras','Membership',ucfirst($data['membership']));
	newRow('','','&nbsp;');
	newRow('Payment','Card Type',ucfirst($data['cardType']));
	newRow('','Card #',$data['cardNumber']);
	newRow('','CID/CVV #',$data['cidcvv']);
	newRow('','Card Expiration',$data['expMonth'] . '/' . $data['expYear']);
	newRow('','','&nbsp;');
	newRow('Confirmation','Name',ucfirst($data['confirmFirstName']) . ' ' . ucfirst($data['confirmLastName']));
	newRow('','','&nbsp;');
	newRow('TOTAL','=>','$ ' . $data['total']);
	$message.= msgFoot();
}

if($data['childFirstName'] != '')
{
	if(mail($to, $subject, $message, $header) && mail($afEmail2, $subject, $message, $header) && mail($registrantEmail, $registrantSubject, $registrantMessage, $header))
	{
		header("Location: register.php?d=success");
	}else
	{
		header("Location: register.php?d=fail");
	}
}
?>
