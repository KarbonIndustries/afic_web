var icon = new Array();
icon["info"] = "images/info_icon.png";
icon["download"] = "images/download_icon.png";

var classes = new Object();

// ==========================
// = ROCK, SMOCKS & ANIMALS =
// ==========================
classes["Rock, Smocks and Animals"] = 
[{value1:"", text1:"Select a day", value2:"", text2:"Select a time", value3:"", text3:"Select a semester", text4:"Select a week (optional)", value4:"Full Semester",

semesters:[{semester:"Winter", value:420},{semester:"Spring", value:420},{semester:"Summer", value:280},{semester:"Fall", value:525}],

weeks:{
Winter:[{text:"Week 1: Jan 3 - Jan 7", value:1},{text:"Week 2: Jan 10 - Jan 14", value:2},{text:"Week 3: Jan 17 - Jan 21", value:3},{text:"Week 4: Jan 24 - Jan 28", value:4},{text:"Week 5: Jan 31 - Feb 4", value:5},{text:"Week 6: Feb 7 - Feb 11", value:6},{text:"Week 7: Feb 14 - Feb 18", value:7},{text:"Week 8: Feb 21 - Feb 25", value:8},{text:"Week 9: Feb 28 - Mar 4", value:9},{text:"Week 10: Mar 7 - Mar 11", value:10},{text:"Week 11: Mar 14 - Mar 18", value:11},{text:"Week 12: Mar 21 - Mar 25", value:12}], 
Spring:[{text:"Week 1: Mar 28 - Apr 1", value:1},{text:"Week 2: Apr 4 - Apr 8", value:2},{text:"Week 3: Apr 11 - Apr 15", value:3},{text:"Week 4: Apr 18 - Apr 22", value:4},{text:"Week 5: Apr 25 - Apr 29", value:5},{text:"Week 6: May 2 - May 6", value:6},{text:"Week 7: May 9 - May 13", value:7},{text:"Week 8: May 16 - May 20", value:8},{text:"Week 9: May 23 - May 27", value:9},{text:"Week 10: May 30 - Jun 3", value:10},{text:"Week 11: Jun 6 - Jun 10", value:11},{text:"Week 12: Jun 13 - Jun 17", value:12}],
Summer:[{text:"Week 1: Jun 28 - Jul 2", value:1},{text:"Week 2: Jul 5 - Jul 9", value:2},{text:"Week 3: Jul 12 - Jul 16", value:3},{text:"Week 4: Jul 19 - Jul 23", value:4},{text:"Week 5: Jul 26 - Jul 30", value:5},{text:"Week 6: Aug 2 - Aug 6", value:6},{text:"Week 7: Aug 9 - Aug 13", value:7},{text:"Week 8: Aug 16 - Aug 20", value:8}],
Fall:[{text:"Week 1: Sept 7 - Sept 11", value:1},{text:"Week 2: Sept 13 - Sept 18", value:2},{text:"Week 3: Sept 20 - Sept 25", value:3},{text:"Week 4: Sept 27 - Oct 2", value:4},{text:"Week 5: Oct 4 - Oct 9", value:5},{text:"Week 6: Oct 11 - Oct 16", value:6},{text:"Week 7: Oct 18 - Oct 23", value:7},{text:"Week 8: Oct 25 - Oct 30", value:8},{text:"Week 9: Nov 1 - Nov 6", value:9},{text:"Week 10: Nov 8 - Nov 13", value:10},{text:"Week 11: Nov 15 - Nov 20", value:11},{text:"Week 12: Nov 22 - Nov 27", value:12},{text:"Week 13: Nov 29 - Dec 4", value:13},{text:"Week 14: Dec 6 - Dec 11", value:14},{text:"Week 15: Dec 13 - Dec 18", value:15}],
'Drop In':[{text:"N/A", value:"0"}]}},
{value:"Monday", text:"Monday", times:["2:30pm - 3:30pm","3:30pm - 4:30pm"]},
{value:"Thursday", text:"Thursday", times:["2:30pm - 3:30pm","3:30pm - 4:30pm"]}];

// =====================
// = ANIMAL CARE CLASS =
// =====================
classes["Animal Care Class"] = 
[{value1:"", text1:"Select a day", value2:"", text2:"Select a time", value3:"", text3:"Select a semester", semesters:[{semester:"Winter", value:420},{semester:"Spring", value:420},{semester:"Summer", value:280},{semester:"Fall", value:525}]},
{value:"Tuesday", text:"Tuesday", times:["3:30pm - 4:30pm"]},
{value:"Wednesday", text:"Wednesday", times:["3:30pm - 4:30pm"]},
{value:"Thursday", text:"Thursday", times:["3:30pm - 4:30pm"]}];

// =============
// = MINI CHEF =
// =============
classes["Mini Chef"] = 
[{value1:"", text1:"Select a day", value2:"", text2:"Select a time", value3:"", text3:"Select a semester", semesters:[{semester:"Drop In", value:40}, {semester:"Winter", value:444},{semester:"Spring", value:444},{semester:"Summer", value:296},{semester:"Fall", value:555}]},
{value:"Thursday", text:"Thursday", times:["3:30pm - 4:30pm"]}];

// ============================
// = ART, ADVENTURES AND MORE =
// ============================
classes["Art, Adventures and More"] = 
[{value1:"", text1:"Select a day", value2:"", text2:"Select a time", value3:"", text3:"Select a semester", semesters:[{semester:"Drop In", value:45}, {semester:"Spring", value:400}, {semester:"Fall", value:600}]},
{value:"Tuesday", text:"Tuesday", times:["3:30pm - 4:30pm"]}];

var classDropInMonths = new Array();
classDropInMonths["Mini Chef"] = ["January","February","March","April","May","June","July","August","September","October","November","December"];
classDropInMonths["Art, Adventures and More"] = ["April","May","June"];

var camp = new Object();
camp["Half Day Hamsters"] = [{name:"Half Day Hamsters",time:"9:00am - 12:30pm",age:"3 - 4 years",days:[{day:"None", value:0},{day:"Mon - Fri", value:500},{day:"Mon, Wed, Fri", value:375},{day:"Tues, Thurs", value:250}]}];
camp["Full Day Froggies"] = [{name:"Full Day Froggies",time:"9:00am - 3:00pm",age:"4 - 5 years",days:[{day:"None", value:0},{day:"Mon - Fri", value:625},{day:"Mon, Wed, Fri", value:500},{day:"Tues, Thurs", value:375}]}];
camp["Full Day Geckos"] = [{name:"Full Day Geckos",time:"9:00am - 3:00pm",age:"6 - 8 years",days:[{day:"None", value:0},{day:"Mon - Fri", value:625},{day:"Mon, Wed, Fri", value:500},{day:"Tues, Thurs", value:375}]}];

var holidayCamp = new Object();
holidayCamp["Snowflakes"] = [{name:"Snowflakes",time:"9:30am - 12:30pm",age:"3 - 4 years",days:[{day:"None", value:0},{day:"Mon, Dec 20", value:75},{day:"Tues, Dec 21", value:75},{day:"Wed, Dec 22", value:75},{day:"Tues, Dec 28", value:75},{day:"Wed, Dec 29", value:75},{day:"Thurs, Dec 30", value:75}]}];
holidayCamp["Peppermints"] = [{name:"Peppermints",time:"9:30am - 3:30pm",age:"4 - 5 years",days:[{day:"None", value:0},{day:"Mon, Dec 20", value:125},{day:"Mon, Dec 20 Extended", value:155},{day:"Tues, Dec 21", value:125},{day:"Tues, Dec 21 Extended", value:155},{day:"Wed, Dec 22", value:125},{day:"Wed, Dec 22 Extended", value:155},{day:"Tues, Dec 28", value:125},{day:"Tues, Dec 28 Extended", value:155},{day:"Wed, Dec 29", value:125},{day:"Wed, Dec 29 Extended", value:155},{day:"Thurs, Dec 30", value:125},{day:"Thurs, Dec 30 Extended", value:155}]}];
holidayCamp["Gingerbreads"] = [{name:"Gingerbreads",time:"9:30am - 3:30pm",age:"6 - 8 years",days:[{day:"None", value:0},{day:"Mon, Dec 20", value:125},{day:"Mon, Dec 20 Extended", value:155},{day:"Tues, Dec 21", value:125},{day:"Tues, Dec 21 Extended", value:155},{day:"Wed, Dec 22", value:125},{day:"Wed, Dec 22 Extended", value:155},{day:"Tues, Dec 28", value:125},{day:"Tues, Dec 28 Extended", value:155},{day:"Wed, Dec 29", value:125},{day:"Wed, Dec 29 Extended", value:155},{day:"Thurs, Dec 30", value:125},{day:"Thurs, Dec 30 Extended", value:155}]}];

var juneCamp = new Object();
juneCamp = {days:[{day:"None", value:0},{day:"Mon - Fri", value:350},{day:"Mon, Wed, Fri",  value:225},{day:"Tues, Thurs", value:150}]};

var playGroup = new Array();
playGroup["1 day/week"] = {name:"1 day/week",semesters:[{semester:"Winter",value:600},{semester:"Spring",value:600},{semester:"Fall",value:750}]};
playGroup["2 days/week"] = {name:"2 days/week",semesters:[{semester:"Winter",value:1200},{semester:"Spring",value:1200},{semester:"Fall",value:1500}]};
playGroup["1 day/week (Summer)"] = {name:"1 day/week",semesters:[{semester:"Summer",value:400}]};
playGroup["2 days/week (Summer)"] = {name:"2 days/week",semesters:[{semester:"Summer",value:800}]};

var playTime = [];
playTime.days = ["Monday","Tuesday","Wednesday","Thursday"];
playTime.months = ["January","February","March","April","May","June","September","October","November","December"];
playTime.values = [0,0,20,50,20,20,40,40,65,45,95,80,200,145,360,250];

var openHouse = new Array();
openHouse["days"] = ["1st Friday","2nd Friday","3rd Friday","4th Friday","5th Friday"];
openHouse["months"] = ["January","February","March","April","May","June","September","October","November","December"];
openHouse["semesters"] = ["Winter","Spring","Fall"];
openHouse["values"] = [0,0,45,20,200,300,500];

var motf = new Array();
motf["days"] = ["1st Saturday","1st Sunday","2nd Saturday","2nd Sunday","3rd Saturday","3rd Sunday","4th Saturday","4th Sunday","5th Saturday","5th Sunday"];
motf["months"] = ["January","February","March","April","May","June","September","October","November","December"];
motf["values"] = [0,0,15,120];

var errors = new Array();

var coupons = new Object();
coupons.doodleDeals = 'AFDD10';

function updatePlayGroupSemesters()
{
	var elements = document.reg.elements;
	var groupSelector = elements['group'];
	var group = groupSelector.options[groupSelector.selectedIndex].value;
	var semesterSelector = elements['semester'];
	var groupDb = playGroup[group];
	if(group != "")
	{
		semesterSelector.options.length = 0;
		semesterSelector.options[0] = new Option("Select a semester", "", true, false);
		for(var s = 0;s < groupDb.semesters.length;s++)
		{
			semesterSelector.options[s + 1] = new Option(groupDb.semesters[s].semester,groupDb.semesters[s].semester);
		}
	}
}

/*
summer camp
jun28 - aug20 8wks
Week 1 Jun 28 - Jul 2
Week 2 Jul 5 - Jul 9
Week 3 Jul 12 - Jul 16
Week 4 Jul 19 - Jul 23
Week 5 Jul 26 - Jul 30
Week 6 Aug 2 - Aug 6
Week 7 Aug 9 - Aug 13
Week 8 Aug 16 - Aug 20
*/

// ==================
// = misc functions =
// ==================
function errorAt(ids, className)
{
	if(ids instanceof Array && ids.length > 0 && typeof className == "string")
	{
		for(var i = 0;i < ids.length;i++)
		{
			if(document.getElementById(ids[i]).className)
			{
				document.getElementById(ids[i]).className = className;
			}
		}
	}
}

function drawIcon(link, iconName, linkClass, iconClass, linkText, linkTextClass, placeBefore, title, target)
{
	if(target == ""){target = "_self";}
	if(iconName != "" && typeof iconName == "string" && icon[iconName])
	{
		document.write('<a class="' + linkClass + '" href="' + link + '" title="' + title + '" target="' + target + '">' + placeTextBefore(placeBefore,linkText,linkTextClass) + '<img class="' + iconClass + '" src="' + icon[iconName] + '"/>' + placeTextAfter(placeBefore,linkText,linkTextClass) + '</a>');
	}
}

function placeTextBefore(placeBefore, text, textClass)
{
	if(placeBefore)
	{
		return '<span class="' + textClass + '">' + text + '</span>';
	}else
	{
		return "";
	}
}

function placeTextAfter(placeBefore, text, textClass)
{
	if(!placeBefore)
	{
		return '<span class="' + textClass + '">' + text + '</span>';
	}else
	{
		return "";
	}
}

// ===================================
// = form element updating functions =
// ===================================
function updateClassDays(select)
{
	var dayChooser = document.reg.elements["classDay"];
	var timeChooser = document.reg.elements["classTime"];
	var selection = select.options[select.selectedIndex].value;
	var dayDb;
	if(selection != "")
	{
		dayDb = classes[selection];
	}else{
		dayDb = classes["Rock, Smocks and Animals"];
	}
	dayChooser.options.length = 0;
	timeChooser.options.length = 0;
	dayChooser.options[0] = new Option(dayDb[0].text1, dayDb[0].value1, true, false);
	timeChooser.options[0] = new Option(dayDb[0].text2, dayDb[0].value2, true, false);
	if(selection != "")
	{
		for(var i = 1;i < dayDb.length;i++)
		{
			dayChooser.options[i] = new Option(dayDb[i].text, dayDb[i].value);
		}
	}
	updateClassSemesters(select);
}

function updateClassTimes(select)
{
	var timeChooser = document.reg.elements["classTime"];
	var classSelect = document.reg.elements["className"];
	var classSelection = classSelect.options[classSelect.selectedIndex].value;
	var timeDb = classes[classSelection];
	timeChooser.options.length = 0;
	timeChooser.options[0] = new Option(timeDb[0].text2, timeDb[0].value2, true, false);
	var selectedDay = select.options[select.selectedIndex].value;
	if(selectedDay != "")
	{
		for(var i = 1;i < timeDb.length;i++)
		{
			if(timeDb[i].value == selectedDay)
			{
				for(var t = 0;t < timeDb[i].times.length;t++)
				{
					timeChooser.options[t + 1] = new Option(timeDb[i].times[t], timeDb[i].times[t]);
				}
			}
		}
	}
}

function updateClassSemesters(select)
{
	var semesterChooser = document.reg.elements["classSemester"];
	var selectedClass = select.options[select.selectedIndex].value;
	var semesterDb;
	if(selectedClass != "")
	{
		semesterDb = classes[selectedClass];
	}else
	{
		semesterDb = classes["Rock, Smocks and Animals"];
	}
	semesterChooser.options.length = 0;
	semesterChooser.options[0] = new Option(semesterDb[0].text3, semesterDb[0].value3, true, false);
	if(selectedClass != "")
	{
		for(var s = 0;s < semesterDb[0].semesters.length;s++)
		{
			semesterChooser.options[s + 1] = new Option(semesterDb[0].semesters[s].semester, semesterDb[0].semesters[s].semester);
		}
	}
	clearPriceOptions();
}

function updateClassWeeks(select)
{
	var selectedSemester = select.options[select.selectedIndex].text;
	var weekDb = classes["Rock, Smocks and Animals"][0];
	var weekChooser = document.reg.elements["classWeek"];
	weekChooser.options.length = 0;
	weekChooser.options[0] = new Option(weekDb.text4, weekDb.value4, true, false);
	if(selectedSemester != "")
	{
		if(selectedSemester == "Drop In")
		{
			weekChooser.options.length = 0;
			weekChooser.options[0] = new Option(weekDb.weeks[selectedSemester][0].text, weekDb.weeks[selectedSemester][0].value, true, false);
		}else
		{
			for(var w = 0;w < weekDb.weeks[selectedSemester].length;w++)
			{
				weekChooser.options[w + 1] = new Option(weekDb.weeks[selectedSemester][w].text, weekDb.weeks[selectedSemester][w].value);
			}
		}
	}
}

function updateClassDropInDate(element)
{
	var classSelector = document.reg.elements['className'];
	var className = classSelector[classSelector.selectedIndex].value;
	var option = element[element.selectedIndex].value;
	var db = classDropInMonths[className];
	var month = document.reg.elements['classMonth'];
	var date = document.reg.elements['classDate'];
	if(option == "Drop In")
	{
		month.options.length = date.options.length = 0;
		month.options[0] = new Option("Select a month", "", true, false);
		date.options[0] = new Option("Select a date", "", true, false);
		for(var m = 0;m < db.length;m++)
		{
			month.options[m + 1] = new Option(db[m],db[m]);
		}
		for(var d = 0;d < 31;d++)
		{
			date.options[d + 1] = new Option(d + 1, d + 1);
		}
	}else
	{
		month.options.length = date.options.length = 0;
		month.options[0] = new Option("N/A", "N/A", true, false);
		date.options[0] = new Option("N/A", "N/A", true, false);
	}
}

function updateCampDays(select)
{
	var group = select.options[select.selectedIndex].value;
	for(var w = 1;w <= 8;w++)
	{
		var week = "week" + w;
		var selector = document.reg.elements[week];
		selector.options.length = 0;
		selector.options[0] = new Option("Select days", "", true, false);
		for(var o = 0;o < camp[group][0].days.length;o++)
		{
			selector.options[o + 1] = new Option(camp[group][0].days[o].day, camp[group][0].days[o].day);
		}
	}
}

function updateHolidayCampDays(select)
{
	var group = select.options[select.selectedIndex].value;
	for(var d = 1,di = 1;d <= 6;d++)
	{
		var day = "day" + d;
		var selector = document.reg.elements[day];
		var step = (group == "Peppermints" || group == "Gingerbreads") ? 2 : 1;
		selector.options.length = 0;
		selector.options[0] = new Option("Select day", "", true, false);
		selector.options[1] = new Option("None","None");
		for(var p = 0;p < step;p++,di++)
		{
			selector.options[selector.options.length] = new Option(holidayCamp[group][0].days[di].day, holidayCamp[group][0].days[di].day);
		}
	}
}

function updateJuneCampDays()
{
	for(var w = 1;w <= 5;w++)
		{
			var week = "week" + w;
			var selector = document.reg.elements[week];
			selector.options.length = 0;
			selector.options[0] = new Option("Select days", "", true, false);
			for(var o = 0;o < juneCamp.days.length;o++)
			{
				selector.options[o + 1] = new Option(juneCamp.days[o].day, juneCamp.days[o].day);
			}
		}
}

function updatePlayTimeOptions(select)
{
	var elements = document.reg.elements;
	// var selection = select.options[select.selectedIndex].value;
	var days = playTime["days"];
	var months = playTime["months"];
	var ptMonth = elements['ptMonth'];
	var ptDay = elements['ptDay'];
	var ptDate = elements['ptDate'];
	ptMonth.options.length = 0;
	ptDay.options.length = 0;
	ptDate.options.length = 0;
	if(select.selectedIndex == 0)
	{
		ptMonth.options[0] = new Option("Select a month","",true,false);
		ptDay.options[0] = new Option("Select a day","",true,false);
		ptDate.options[0] = new Option("Select a date","",true,false);
	}else if(select.selectedIndex == 1)
	{
		ptMonth.options[0] = new Option("N/A","N/A",true,false);
		ptDay.options[0] = new Option("N/A","N/A",true,false);
		ptDate.options[0] = new Option("N/A","N/A",true,false);
	}else
	{
		ptMonth.options[0] = new Option("Select a month","",true,false);
		ptDay.options[0] = new Option("Select a day","",true,false);
		ptDate.options[0] = new Option("Select a date","",true,false);
		for(var m = 0;m < months.length;m++)
		{
			ptMonth.options[m + 1] = new Option(months[m],months[m]);
		}
		for(var d = 0;d < days.length;d++)
		{
			ptDay.options[d + 1] = new Option(days[d],days[d]);
		}
		for(var t = 1;t <= 31;t++)
		{
			ptDate.options[t] = new Option(t,t);
		}
	}
}

function updateOpenHouseOptions(select)
{
	var elements = document.reg.elements;
	var index = select.selectedIndex;
	var ohDay = elements['ohDay'];
	var ohMonth = elements['ohMonth'];
	var ohSemester = elements['ohSemester'];
	var days = openHouse['days'];
	var months = openHouse['months'];
	var semesters = openHouse['semesters'];
	ohDay.options.length = 0;
	ohMonth.options.length = 0;
	ohSemester.options.length = 0;
	if(index == 0)
	{
		ohDay.options[0] = new Option("Select a day","",true,false);
		ohMonth.options[0] = new Option("Select a month","",true,false);
		ohSemester.options[0] = new Option("Select a semester","",true,false);
	}else if(index == 1)
	{
		ohDay.options[0] = new Option("N/A","N/A",true,false);
		ohMonth.options[0] = new Option("N/A","N/A",true,false);
		ohSemester.options[0] = new Option("N/A","N/A",true,false);
	}else if(index == 2 || index == 3)
	{
		ohDay.options[0] = new Option("Select a day","",true,false);
		ohMonth.options[0] = new Option("Select a month","",true,false);
		ohSemester.options[0] = new Option("N/A","N/A",true,false);
		for(var d = 0;d < days.length;d++)
		{
			ohDay.options[d + 1] = new Option(days[d],days[d]);
		}
		for(var m = 0;m < months.length;m++)
		{
			ohMonth.options[m + 1] = new Option(months[m],months[m]);
		}
	}else
	{
		ohDay.options[0] = new Option("N/A","N/A",true,false);
		ohMonth.options[0] = new Option("N/A","N/A",true,false);
		ohSemester.options[0] = new Option("Select a semester","",true,false);
		for(var s = 0;s < semesters.length;s++)
		{
			ohSemester.options[s + 1] = new Option(semesters[s],semesters[s]);
		}
	}
}

function updateMotfOpitons(select)
{
	var index = select.selectedIndex;
	var elements = document.reg.elements;
	var motfDay = elements['motfDay'];
	var motfMonth = elements['motfMonth'];
	var days = motf['days'];
	var months = motf['months'];
	motfDay.options.length = 0;
	motfMonth.options.length = 0;
	if(index == 0)
	{
		motfDay.options[0] = new Option("Select a day","",true,false);
		motfMonth.options[0] = new Option("Select a month","",true,false);
	}else if(index == 1)
	{
		motfDay.options[0] = new Option("N/A","N/A",true,false);
		motfMonth.options[0] = new Option("N/A","N/A",true,false);
	}else if(index == 2)
	{
		motfDay.options[0] = new Option("Select a day","",true,false);
		motfMonth.options[0] = new Option("Select a month","",true,false);
		for(var d = 0;d < days.length;d++)
		{
			motfDay.options[d + 1] = new Option(days[d],days[d]);
		}
		for(var m = 0;m < months.length;m++)
		{
			motfMonth.options[m + 1] = new Option(months[m],months[m]);
		}
	}else
	{
		motfDay.options[0] = new Option("N/A","N/A",true,false);
		motfMonth.options[0] = new Option("N/A","N/A",true,false);
	}
}

// ====================
// = form input restriction =
// ====================
function lettersOnly(e)
{
	// if no event was passed, set as "event"
	e = (e) ? e : event;
	//if browser supports charCode, set charCode to e.charCode, if it supports keyCode, set charCode to e.keyCode, if it supports which, set charCode to e.which 
	var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
	if(charCode == 8 || charCode == 9 || charCode == 37 || charCode == 39 || charCode == 16 || charCode == 17 || charCode == 8 || charCode == 9 || charCode == 32 || charCode == 39 || charCode == 45 || charCode == 46 || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
	{
		return true;
	}else
	{
		return false;
	}
}

function wordsOnly(e)
{
	// if no event was passed, set as "event"
	e = (e) ? e : event;
	//if browser supports charCode, set charCode to e.charCode, if it supports keyCode, set charCode to e.keyCode, if it supports which, set charCode to e.which 
	var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
	if(charCode == 8 || charCode == 9 || charCode == 37 || charCode == 39 || charCode == 16 || charCode == 17 || charCode == 32 || charCode == 46 || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
	{
		return true;
	}else
	{
		return false;
	}
}

function cityOnly(e)
{
	// if no event was passed, set as "event"
	e = (e) ? e : event;
	//if browser supports charCode, set charCode to e.charCode, if it supports keyCode, set charCode to e.keyCode, if it supports which, set charCode to e.which 
	var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
	if(charCode == 8 || charCode == 9 || charCode == 37 || charCode == 39 || charCode == 16 || charCode == 17 || charCode == 32 || charCode == 46 || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
	{
		return true;
	}else
	{
		return false;
	}
}

function numbersOnly(e)
{
	// if no event was passed, set as "event"
	e = (e) ? e : event;
	//if browser supports charCode, set charCode to e.charCode, if it supports keyCode, set charCode to e.keyCode, if it supports which, set charCode to e.which 
	var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
	if(charCode == 8 || charCode == 9 || charCode == 37 || charCode == 39 || charCode == 46 || (charCode > 47 && charCode < 58))
	{
		return true;
	}else
	{
		return false;
	}
}

function creditOnly(e)
{
	// if no event was passed, set as "event"
	e = (e) ? e : event;
	//if browser supports charCode, set charCode to e.charCode, if it supports keyCode, set charCode to e.keyCode, if it supports which, set charCode to e.which 
	var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
	if(charCode == 8 || charCode == 9 || charCode == 32 || charCode == 37 || charCode == 39 || charCode == 45 || charCode == 46 || (charCode > 47 && charCode < 58))
	{
		return true;
	}else
	{
		return false;
	}
}

function phoneOnly(e)
{
	// if no event was passed, set as "event"
	e = (e) ? e : event;
	//if browser supports charCode, set charCode to e.charCode, if it supports keyCode, set charCode to e.keyCode, if it supports which, set charCode to e.which 
	var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
	if(charCode == 8 || charCode == 9 || charCode == 37 || charCode == 39 || charCode == 32 || charCode == 40 || charCode == 41 || charCode == 43 || (charCode > 44 && charCode < 58))
	{
		return true;
	}else
	{
		return false;
	}
}

function emailOnly(e)
{
	// if no event was passed, set as "event"
	e = (e) ? e : event;
	//if browser supports charCode, set charCode to e.charCode, if it supports keyCode, set charCode to e.keyCode, if it supports which, set charCode to e.which 
	var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
	if(charCode == 8 || charCode == 9 || charCode == 37 || charCode == 39 || charCode == 64 || charCode == 45 || charCode == 46 || charCode == 95 || (charCode > 96 && charCode < 123) || (charCode > 47 && charCode < 58))
	{
		return true;
	}else
	{
		return false;
	}
}

// ===========================
// = form clearing functions =
// ===========================
function clearPriceOptions()
{
	document.getElementById('rb_register_yes').checked = document.getElementById('rb_register_no').checked = false;
	document.getElementById('rb_membership_yes').checked = document.getElementById('rb_membership_no').checked = false;
	document.getElementById('cb_confirm').checked = false;
	writeContent(document.getElementById("totalPrice"), "$ 0");
}

function clearPriceOptions2()
{
	document.getElementById('rb_membership_yes').checked = document.getElementById('rb_membership_no').checked = false;
	document.getElementById('cb_confirm').checked = false;
	writeContent(document.getElementById("totalPrice"), "$ 0");
}

function clearMembershipConfirm()
{
	document.getElementById('rb_membership_yes').checked = document.getElementById('rb_membership_no').checked = false;
	document.getElementById('cb_confirm').checked = false;
	writeContent(document.getElementById("totalPrice"), "$ 0");
}

function clearConfirm()
{
	document.getElementById('cb_confirm').checked = false;
}

function clearErrors()
{
	errorAt(errors,'errorBoxHide');
	errors.length = 0;
}

// ===============================
// = total calculating functions =
// ===============================
function getSemesterPrice(semester)
{
	var classChooser = document.reg.elements['className'];
	var semesterName = semester.options[semester.selectedIndex].text;
	var className = classChooser.options[classChooser.selectedIndex].value;
	var price;
	var semesters = classes[className][0].semesters;
	for(var w = 0;w < semesters.length;w++)
	{
		if(semesters[w].semester == semesterName)
		{
			price = semesters[w].value;
		}
	}
	return price;
}

function registrationFee()
{
	var isYes = document.getElementById('rb_register_yes').checked;
	var isNo = document.getElementById('rb_register_no').checked;
	var fee;
	if(isYes || isNo)
	{
		isYes ? fee = 25 : fee = 0;
		return fee;
	}else
	{
		fee = 0;
		return fee;
	}
}

function membershipFee()
{
	var isYes = document.getElementById('rb_membership_yes').checked;
	var isNo = document.getElementById('rb_membership_no').checked;
	var fee;
	if(isYes || isNo)
	{
		isYes ? fee = 295 : fee = 0;
		return fee;
	}else
	{
		fee = 0;
		return fee;
	}
}

function writeContent(element, value)
{
	if(value)
	{
		element.innerText ? element.innerText = value : element.textContent = value;
	}
}

function getContent(element)
{
	return element.innerText ? element.innerText : element.textContent;
}

function updateTotal()
{
	var inputs = document.reg.elements;
	var select = inputs['classWeek'];
	var weekDb = classes["Rock, Smocks and Animals"][0];
 	var startWeek = parseInt(select.options[select.selectedIndex].value);
 	var semesterChooser = inputs["classSemester"];
 	var selectedSemester = semesterChooser.options[semesterChooser.selectedIndex].text;
 	var totalWeeks = weekDb.weeks[selectedSemester].length;
 	var semesterPrice = getSemesterPrice(semesterChooser);
 	var pricePerClass = semesterPrice / totalWeeks;
 	if(startWeek != "" && startWeek <= totalWeeks)
	{
		if(inputs['couponCode'] && validateCoupon(inputs['couponCode']))
		{
			writeContent(document.getElementById("totalPrice"), "$ " + (membershipFee()).toFixed(2));
		}else
		{
			writeContent(document.getElementById("totalPrice"), "$ " + (((totalWeeks - (startWeek - 1)) * pricePerClass) + registrationFee() + membershipFee()).toFixed(2));
		}
	}else
	{
		if(inputs['couponCode'] && validateCoupon(inputs['couponCode']))
		{
			writeContent(document.getElementById("totalPrice"), "$ " + (membershipFee()).toFixed(2));
		}else
		{
			writeContent(document.getElementById("totalPrice"), "$ " + (semesterPrice + registrationFee() + membershipFee()).toFixed(2));
		}
	}
}

function updateCampTotal()
{
	var form = document.reg.elements;
	var selector = form['campGroup'];
	var group = selector.options[selector.selectedIndex].value;
	var db = camp[group][0].days;
	var value = 0;
	if(group != "" && form['week1'].selectedIndex != 0 && form['week2'].selectedIndex != 0 && form['week3'].selectedIndex != 0 && form['week4'].selectedIndex != 0 && form['week5'].selectedIndex != 0 && form['week6'].selectedIndex != 0 && form['week7'].selectedIndex != 0 && form['week8'].selectedIndex != 0)
	{
		var total = 0;
		for(var w = 1;w <= 8;w++)
		{
			week = "week" + w;
			for(var v = 0;v < db.length;v++)
			{
				if(db[v].day == form[week].options[form[week].selectedIndex].value)
				{
					value+= db[v].value;
				}
			}
		}
		writeContent(document.getElementById("totalPrice"), "$ " + (value + membershipFee()).toFixed(2));
	}
}

function updateHolidayCampTotal()
{
	var form = document.reg.elements;
	var selector = form['holidayCampGroup'];
	if(group != "" && (form['day1'].selectedIndex != 0 || form['day2'].selectedIndex != 0 || form['day3'].selectedIndex != 0 || form['day4'].selectedIndex != 0 || form['day5'].selectedIndex != 0 || form['day6'].selectedIndex != 0))
	{
		var group = selector.options[selector.selectedIndex].value;
		var db = holidayCamp[group][0].days;
		var value = 0;
		var total = 0;
		var totalDays = 0;
		var D1 = (group == "Peppermints" || group == "Gingerbreads") ? 0 : 0;
		var D2 = (group == "Peppermints" || group == "Gingerbreads") ? 25 : 10;
		var D3 = (group == "Peppermints" || group == "Gingerbreads") ? 35 : 20;
		var dc = 0;
		for(var di = 1;di <= 6;di++)
		{
			day = "day" + di;
			form[day].selectedIndex > 1 ? totalDays++ : null;
		}
		dc = totalDays * (totalDays > 2 ? D3 : (totalDays == 2 ? D2 : D1));
		for(var d = 1;d <= 6;d++)
		{
			day = "day" + d;
			for(var v = 0;v < db.length;v++)
			{
				if(db[v].day == form[day].options[form[day].selectedIndex].value)
				{
					value += db[v].value;
				}
			}
		}
		value -= dc;
		writeContent(document.getElementById("totalPrice"), "$ " + (value + membershipFee()).toFixed(2));
	}
}

function updateJuneCampTotal()
{
	var form = document.reg.elements;
	var db = juneCamp.days;
	var value = 0;
	if(form['week1'].selectedIndex != 0 && form['week2'].selectedIndex != 0 && form['week3'].selectedIndex != 0 && form['week4'].selectedIndex != 0 && form['week5'].selectedIndex != 0)
	{
		var total = 0;
		for(var w = 1;w <= 5;w++)
		{
			week = "week" + w;
			for(var v = 0;v < db.length;v++)
			{
				if(db[v].day == form[week].options[form[week].selectedIndex].value)
				{
					value+= db[v].value;
				}
			}
		}
		writeContent(document.getElementById("totalPrice"), "$ " + (value + membershipFee()).toFixed(2));
	}
	// alert(form['week1'].selectedIndex);
}

function updatePlayGroupTotal()
{
	var form = document.reg.elements;
	var selector = form['group'];
	var group = selector.options[selector.selectedIndex].value;
	var db = playGroup[group].semesters;
	var value = 0;
	if(group != "" && form['semester'].selectedIndex != 0)
	{
		var total = 0;
		for(var v = 0;v < db.length;v++)
		{
			if(db[v].semester == form['semester'].options[form['semester'].selectedIndex].value)
			{
				value+= db[v].value;
			}
		}
		writeContent(document.getElementById("totalPrice"), "$ " + (value + registrationFee() + membershipFee()).toFixed(2));
	}
}

function updateDropInTotal()
{
	var elements = document.reg.elements;
	var total = 0;
 	if(elements['ptPackage'].selectedIndex > 1)
	{
		total+= playTime['values'][elements['ptPackage'].selectedIndex];
	}
	if(elements['ohPass'].selectedIndex > 1)
	{
		total+= openHouse['values'][elements['ohPass'].selectedIndex];
	}
	if(elements['motfVisits'].selectedIndex > 1)
	{
		total+= motf['values'][elements['motfVisits'].selectedIndex];
	}
	writeContent(document.getElementById("totalPrice"), "$ " + (total + membershipFee()).toFixed(2));
}

// ====================
// = form validation =
// ====================
function validateName(element)
{
	var re = /^[A-Z][A-z]+$|^[A-Z][A-z]*([\s\-'][A-z]{2,})$/;
	var string = element.value;
	var result = string.match(re);
	if(result)
	{
		return true;
	}else
	{
		return false;
	}
}

function validateAddress(element)
{
	var re = /^[-,\.A-z0-9]+([\s][-,\.A-z0-9&@\(\)]+){2,}$/;
	var string = element.value;
	var result = string.match(re);
	if(result)
	{
		return true;
	}else
	{
		return false;
	}
}

function validateCity(element)
{
	//var re = /^[A-Z]((\.?\s?([A-z]\.?)+){1,3})$/;
	//N.Y.C.
	//West
	var re = /^([A-Z]\.?){1,2}(((\s?[A-Z])?\.?)?([a-z]+)?){0,3}$/;
	var string = element.value;
	var result = string.match(re);
	if(result)
	{
		return true;
	}else
	{
		return false;
	}
}

function validateZip(element)
{
	var re = /\d{5}/;
	var string = element.value;
	var result = string.match(re);
	if(result)
	{
		return true;
	}else
	{
		return false;
	}
}

function validatePhone(element)
{
	var re = /([\(\+1\s]{1,4})?[\s]?([0-9]{2})?[\s]?\d{3}([-\s\.\)]{0,2})?\d{3}[-\s\.]?\d{4}$/;
	var string = element.value;
	var result = string.match(re);
	if(result)
	{
		return true;
	}else
	{
		return false;
	}
}

function validateOptionalPhone(element)
{
	if(element.value != "")
	{
		var re = /([\(\+1\s]{1,4})?[\s]?([0-9]{2})?[\s]?\d{3}([-\s\.\)]{0,2})?\d{3}[-\s\.]?\d{4}$/;
		var string = element.value;
		var result = string.match(re);
		if(result)
		{
			return true;
		}else
		{
			return false;
		}
	}else
	{
		return true;
	}
}

function validateEmail(element)
{
	var re = /^[-\w\.]+@([A-z0-9][-A-z0-9]+)+(\.[A-z0-9]{2,})*\.[A-z]{2,4}$/;
	var string = element.value;
	var result = string.match(re);
	if(result)
	{
		return true;
	}else
	{
		return false;
	}
}

function validateSelect(element)
{
	if(element.options[element.selectedIndex].value != "")
	{
		return true;
	}else
	{
		return false;
	}
}

function validateClassDropInDay()
{
	var semesterChooser = document.reg.elements['classSemester'];
	var semester = semesterChooser[semesterChooser.selectedIndex].value;
	var monthChooser = document.reg.elements['classMonth'];
	var month = monthChooser[monthChooser.selectedIndex].value;
	var dateChooser = document.reg.elements['classDate'];
	date = dateChooser[dateChooser.selectedIndex].value;
	if(semester == "Drop In" && (month == "" || date == ""))
	{
		return false;
	}else
	{
		return true;
	}
}

function validateRadio(option1, option2)
{
	val1 = document.getElementById(option1).checked;
	val2 = document.getElementById(option2).checked;
	if(val1 || val2)
	{
		return true;
	}else
	{
		return false;
	}
}

function validateCheckbox(element)
{
	if(element.checked)
	{
		return true;
	}else
	{
		return false;
	}
}

function validateCredit(element)
{
	var re = /^\d{4}([-\s]?\d{4}){3}$|^\d{4}[-\s]?\d{6}[-\s]?\d{5}$/;
	var string = element.value;
	var result = string.match(re);
	if(result)
	{
		return true;
	}else
	{
		return false;
	}
}

function validateCIDCVV(element)
{
	var re = /\d{3,4}/;
	var string = element.value;
	var result = string.match(re);
	if(result)
	{
		return true;
	}else
	{
		return false;
	}
}

function containsInput(element)
{
	var value = element.value;
	if(value.length > 1)
	{
		return true;
	}else
	{
		return false;
	}
}

function validateForm()
{
	clearErrors();
	var inputs = document.reg.elements;
	if(!validateName(inputs['childFirstName'])){errors.push('child');}
	if(!validateName(inputs['childLastName'])){errors.push('child');}
	if(!validateSelect(inputs['birthMonth'])){errors.push('child');}
	if(!validateSelect(inputs['birthDay'])){errors.push('child');}
	if(!validateSelect(inputs['birthYear'])){errors.push('child');}
	if(!validateSelect(inputs['age'])){errors.push('child');}
	if(!validateSelect(inputs['gender'])){errors.push('child');}
	
	if(!validateName(inputs['parentFirstName'])){errors.push('parent');}
	if(!validateName(inputs['parentLastName'])){errors.push('parent');}
	
	if(!containsInput(inputs['address'])){errors.push('contact');}
	if(!validateCity(inputs['city'])){errors.push('contact');}
	if(!validateZip(inputs['zip'])){errors.push('contact');}
	if(!validatePhone(inputs['homePhone']) && !validatePhone(inputs['mobilePhone'])){errors.push('contact');}
	if(!validateOptionalPhone(inputs['fax'])){errors.push('contact');}
	if(!validatePhone(inputs['emergencyContact'])){errors.push('contact');}
	if(!validateEmail(inputs['email'])){errors.push('contact');}
	
	if(!validateSelect(inputs['className'])){errors.push('class');}
	if(!validateSelect(inputs['classDay'])){errors.push('class');}
	if(!validateSelect(inputs['classTime'])){errors.push('class');}
	
	if(!validateSelect(inputs['classSemester'])){errors.push('semester');}
	if(!validateClassDropInDay()){errors.push('semester');}
	
	if(!validateRadio('rb_register_yes', 'rb_register_no')){errors.push('1stTimer');}
	
	if(!validateRadio('rb_membership_yes', 'rb_membership_no')){errors.push('membership');}	
	
	if(
	!validateCoupon(inputs['couponCode']) && 
	(!validateCredit(inputs['cardNumber']) || 
	!validateCIDCVV(inputs['cidcvv']) || 
	!validateSelect(inputs['cardType']) || 
	!validateSelect(inputs['expMonth']) || 
	!validateSelect(inputs['expYear']))
	)
	{
		errors.push('payment');
	}
	
	if(membershipFee() > 0 && 
	(!validateCredit(inputs['cardNumber']) || 
	!validateCIDCVV(inputs['cidcvv']) || 
	!validateSelect(inputs['cardType']) || 
	!validateSelect(inputs['expMonth']) || 
	!validateSelect(inputs['expYear']))
	)
	{
		errors.push('payment');
	}
	
	if(!validateCheckbox(inputs['confirm'])){errors.push('confirm');}
	if(!validateName(inputs['confirmFirstName'])){errors.push('confirm');}
	if(!validateName(inputs['confirmLastName'])){errors.push('confirm');}
	
	if(errors.length > 0)
	{
		errorAt(errors, 'errorBoxShow floatL');
		alert('Oops!\nLooks like your information is incomplete.');
	}else
	{
		var div = document.getElementById('total');
		var phantomTotal = document.createElement('input');
		phantomTotal.type = "text";
		phantomTotal.name = "total";
		phantomTotal.className = "hidden";
		phantomTotal.value = getContent(document.getElementById("totalPrice")).toString().substring(2);
		div.appendChild(phantomTotal);
		document.reg.submit();
	}
}

function validateCoupon(element)
{
	var isValid = false;
	var value = element.value;
	for(var c in coupons)
	{
		value.toLowerCase() == coupons[c].toLowerCase() ? isValid = true : null;
	}
	return isValid;
}

function validateCampForm()
{
	clearErrors();
	var inputs = document.reg.elements;
	if(!validateName(inputs['childFirstName'])){errors.push('child');}
	if(!validateName(inputs['childLastName'])){errors.push('child');}
	if(!validateSelect(inputs['birthMonth'])){errors.push('child');}
	if(!validateSelect(inputs['birthDay'])){errors.push('child');}
	if(!validateSelect(inputs['birthYear'])){errors.push('child');}
	if(!validateSelect(inputs['age'])){errors.push('child');}
	if(!validateSelect(inputs['gender'])){errors.push('child');}
	
	if(!validateName(inputs['parentFirstName'])){errors.push('parent');}
	if(!validateName(inputs['parentLastName'])){errors.push('parent');}
	
	if(!containsInput(inputs['address'])){errors.push('contact');}
	if(!validateCity(inputs['city'])){errors.push('contact');}
	if(!validateZip(inputs['zip'])){errors.push('contact');}
	if(!validatePhone(inputs['homePhone']) && !validatePhone(inputs['mobilePhone'])){errors.push('contact');}
	if(!validateOptionalPhone(inputs['fax'])){errors.push('contact');}
	if(!validatePhone(inputs['emergencyContact'])){errors.push('contact');}
	if(!validateEmail(inputs['email'])){errors.push('contact');}
	/*
	if(!containsInput(inputs['drFirstName'])){errors.push('safety');}
	if(!containsInput(inputs['drLastName'])){errors.push('safety');}
	if(!validatePhone(inputs['drPhone'])){errors.push('safety');}
	if(!containsInput(inputs['insuranceCoverage'])){errors.push('safety');}
	if(!containsInput(inputs['policyNumber'])){errors.push('safety');}
	if(!containsInput(inputs['crPass'])){errors.push('safety');}
	*/
	
	if(!validateSelect(inputs['campGroup'])){errors.push('campGroup');}
	if(!validateSelect(inputs['week1'])){errors.push('week1');}
	if(!validateSelect(inputs['week2'])){errors.push('week2');}
	if(!validateSelect(inputs['week3'])){errors.push('week3');}
	if(!validateSelect(inputs['week4'])){errors.push('week4');}
	if(!validateSelect(inputs['week5'])){errors.push('week5');}
	if(!validateSelect(inputs['week6'])){errors.push('week6');}
	if(!validateSelect(inputs['week7'])){errors.push('week7');}
	if(!validateSelect(inputs['week8'])){errors.push('week8');}
	
	if(!validateRadio('rb_membership_yes', 'rb_membership_no')){errors.push('membership');}	
	
	if(!validateCredit(inputs['cardNumber'])){errors.push('payment');}
	if(!validateCIDCVV(inputs['cidcvv'])){errors.push('payment');}
	if(!validateSelect(inputs['cardType'])){errors.push('payment');}
	if(!validateSelect(inputs['expMonth'])){errors.push('payment');}
	if(!validateSelect(inputs['expYear'])){errors.push('payment');}
	

	
	if(!validateCheckbox(inputs['confirm'])){errors.push('confirm');}
	if(!validateName(inputs['confirmFirstName'])){errors.push('confirm');}
	if(!validateName(inputs['confirmLastName'])){errors.push('confirm');}
	
	if(errors.length > 0)
	{
		errorAt(errors, 'errorBoxShow floatL');
		alert('Oops!\nLooks like your information is incomplete.');
	}else
	{
		var div = document.getElementById('total');
		var phantomTotal = document.createElement('input');
		phantomTotal.type = "text";
		phantomTotal.name = "total";
		phantomTotal.className = "hidden";
		phantomTotal.value = getContent(document.getElementById("totalPrice")).toString().substring(2);
		div.appendChild(phantomTotal);
		document.reg.submit();
	}
}

function validateHolidayCampForm()
{
	clearErrors();
	var inputs = document.reg.elements;
	if(!validateName(inputs['childFirstName'])){errors.push('child');}
	if(!validateName(inputs['childLastName'])){errors.push('child');}
	if(!validateSelect(inputs['birthMonth'])){errors.push('child');}
	if(!validateSelect(inputs['birthDay'])){errors.push('child');}
	if(!validateSelect(inputs['birthYear'])){errors.push('child');}
	if(!validateSelect(inputs['age'])){errors.push('child');}
	if(!validateSelect(inputs['gender'])){errors.push('child');}
	
	if(!validateName(inputs['parentFirstName'])){errors.push('parent');}
	if(!validateName(inputs['parentLastName'])){errors.push('parent');}
	
	if(!containsInput(inputs['address'])){errors.push('contact');}
	if(!validateCity(inputs['city'])){errors.push('contact');}
	if(!validateZip(inputs['zip'])){errors.push('contact');}
	if(!validatePhone(inputs['homePhone']) && !validatePhone(inputs['mobilePhone'])){errors.push('contact');}
	if(!validateOptionalPhone(inputs['fax'])){errors.push('contact');}
	if(!validatePhone(inputs['emergencyContact'])){errors.push('contact');}
	if(!validateEmail(inputs['email'])){errors.push('contact');}
	
	/*
	if(!containsInput(inputs['drFirstName'])){errors.push('safety');}
	if(!containsInput(inputs['drLastName'])){errors.push('safety');}
	if(!validatePhone(inputs['drPhone'])){errors.push('safety');}
	if(!containsInput(inputs['insuranceCoverage'])){errors.push('safety');}
	if(!containsInput(inputs['policyNumber'])){errors.push('safety');}
	if(!containsInput(inputs['crPass'])){errors.push('safety');}
	*/
	
	if(!validateSelect(inputs['holidayCampGroup'])){errors.push('holidayCampGroup');}
	if(!validateSelect(inputs['day1'])){errors.push('day1');}
	if(!validateSelect(inputs['day2'])){errors.push('day2');}
	if(!validateSelect(inputs['day3'])){errors.push('day3');}
	if(!validateSelect(inputs['day4'])){errors.push('day4');}
	if(!validateSelect(inputs['day5'])){errors.push('day5');}
	if(!validateSelect(inputs['day6'])){errors.push('day6');}
	
	if(!validateRadio('rb_membership_yes', 'rb_membership_no')){errors.push('membership');}	
	
	if(!validateCredit(inputs['cardNumber'])){errors.push('payment');}
	if(!validateCIDCVV(inputs['cidcvv'])){errors.push('payment');}
	if(!validateSelect(inputs['cardType'])){errors.push('payment');}
	if(!validateSelect(inputs['expMonth'])){errors.push('payment');}
	if(!validateSelect(inputs['expYear'])){errors.push('payment');}
	

	
	if(!validateCheckbox(inputs['confirm'])){errors.push('confirm');}
	if(!validateName(inputs['confirmFirstName'])){errors.push('confirm');}
	if(!validateName(inputs['confirmLastName'])){errors.push('confirm');}
	
	if(errors.length > 0)
	{
		errorAt(errors, 'errorBoxShow floatL');
		alert('Oops!\nLooks like your information is incomplete.');
	}else
	{
		var div = document.getElementById('total');
		var phantomTotal = document.createElement('input');
		phantomTotal.type = "text";
		phantomTotal.name = "total";
		phantomTotal.className = "hidden";
		phantomTotal.value = getContent(document.getElementById("totalPrice")).toString().substring(2);
		div.appendChild(phantomTotal);
		document.reg.submit();
	}
}

function validateJuneCampForm()
{
	clearErrors();
	var inputs = document.reg.elements;
	if(!validateName(inputs['childFirstName'])){errors.push('child');}
	if(!validateName(inputs['childLastName'])){errors.push('child');}
	if(!validateSelect(inputs['birthMonth'])){errors.push('child');}
	if(!validateSelect(inputs['birthDay'])){errors.push('child');}
	if(!validateSelect(inputs['birthYear'])){errors.push('child');}
	if(!validateSelect(inputs['age'])){errors.push('child');}
	if(!validateSelect(inputs['gender'])){errors.push('child');}
	
	if(!validateName(inputs['parentFirstName'])){errors.push('parent');}
	if(!validateName(inputs['parentLastName'])){errors.push('parent');}
	
	if(!containsInput(inputs['address'])){errors.push('contact');}
	if(!validateCity(inputs['city'])){errors.push('contact');}
	if(!validateZip(inputs['zip'])){errors.push('contact');}
	if(!validatePhone(inputs['homePhone']) && !validatePhone(inputs['mobilePhone'])){errors.push('contact');}
	if(!validateOptionalPhone(inputs['fax'])){errors.push('contact');}
	if(!validatePhone(inputs['emergencyContact'])){errors.push('contact');}
	if(!validateEmail(inputs['email'])){errors.push('contact');}
	
	/*
	if(!containsInput(inputs['drFirstName'])){errors.push('safety');}
	if(!containsInput(inputs['drLastName'])){errors.push('safety');}
	if(!validatePhone(inputs['drPhone'])){errors.push('safety');}
	if(!containsInput(inputs['insuranceCoverage'])){errors.push('safety');}
	if(!containsInput(inputs['policyNumber'])){errors.push('safety');}
	if(!containsInput(inputs['crPass'])){errors.push('safety');}
	*/
	
	if(!validateSelect(inputs['week1'])){errors.push('week1');}
	if(!validateSelect(inputs['week2'])){errors.push('week2');}
	if(!validateSelect(inputs['week3'])){errors.push('week3');}
	if(!validateSelect(inputs['week4'])){errors.push('week4');}
	if(!validateSelect(inputs['week5'])){errors.push('week5');}

	if(!validateRadio('rb_membership_yes', 'rb_membership_no')){errors.push('membership');}	
	
	if(!validateCredit(inputs['cardNumber'])){errors.push('payment');}
	if(!validateCIDCVV(inputs['cidcvv'])){errors.push('payment');}
	if(!validateSelect(inputs['cardType'])){errors.push('payment');}
	if(!validateSelect(inputs['expMonth'])){errors.push('payment');}
	if(!validateSelect(inputs['expYear'])){errors.push('payment');}
	
	if(!validateCheckbox(inputs['confirm'])){errors.push('confirm');}
	if(!validateName(inputs['confirmFirstName'])){errors.push('confirm');}
	if(!validateName(inputs['confirmLastName'])){errors.push('confirm');}
	
	if(errors.length > 0)
	{
		errorAt(errors, 'errorBoxShow floatL');
		alert('Oops!\nLooks like your information is incomplete.');
	}else
	{
		var div = document.getElementById('total');
		var phantomTotal = document.createElement('input');
		phantomTotal.type = "text";
		phantomTotal.name = "total";
		phantomTotal.className = "hidden";
		phantomTotal.value = getContent(document.getElementById("totalPrice")).toString().substring(2);
		div.appendChild(phantomTotal);
		document.reg.submit();
	}
}

function validateDropInForm()
{
	clearErrors();
	var inputs = document.reg.elements;
	if(!validateName(inputs['childFirstName'])){errors.push('child');}
	if(!validateName(inputs['childLastName'])){errors.push('child');}
	if(!validateSelect(inputs['birthMonth'])){errors.push('child');}
	if(!validateSelect(inputs['birthDay'])){errors.push('child');}
	if(!validateSelect(inputs['birthYear'])){errors.push('child');}
	if(!validateSelect(inputs['age'])){errors.push('child');}
	if(!validateSelect(inputs['gender'])){errors.push('child');}
	
	if(!validateName(inputs['parentFirstName'])){errors.push('parent');}
	if(!validateName(inputs['parentLastName'])){errors.push('parent');}
	
	if(!containsInput(inputs['address'])){errors.push('contact');}
	if(!validateCity(inputs['city'])){errors.push('contact');}
	if(!validateZip(inputs['zip'])){errors.push('contact');}
	if(!validatePhone(inputs['homePhone']) && !validatePhone(inputs['mobilePhone'])){errors.push('contact');}
	if(!validateOptionalPhone(inputs['fax'])){errors.push('contact');}
	if(!validatePhone(inputs['emergencyContact'])){errors.push('contact');}
	if(!validateEmail(inputs['email'])){errors.push('contact');}
	
	if(inputs['ptPackage'].selectedIndex < 2 && inputs['ohPass'].selectedIndex < 2 && inputs['motfVisits'].selectedIndex < 2){errors.push('playTime','openHouse','motf');}
	if(inputs['ptPackage'].selectedIndex > 1 && (inputs['ptDay'].selectedIndex == 0 || inputs['ptMonth'].selectedIndex == 0 || inputs['ptDate'].selectedIndex == 0)){errors.push('playTime');}
	if(inputs['ohPass'].selectedIndex > 1 && inputs['ohPass'].selectedIndex < 4 && (inputs['ohDay'].selectedIndex == 0 || inputs['ohMonth'].selectedIndex == 0)){errors.push('openHouse');}
	if(inputs['ohPass'].selectedIndex > 3 && inputs['ohSemester'].selectedIndex == 0){errors.push('openHouse');}
	if(inputs['motfVisits'].selectedIndex == 2 && (inputs['motfDay'].selectedIndex == 0 || inputs['motfMonth'].selectedIndex == 0)){errors.push('motf');}
	
	if(!validateRadio('rb_membership_yes', 'rb_membership_no')){errors.push('membership');}	
	
	if(!validateCredit(inputs['cardNumber'])){errors.push('payment');}
	if(!validateCIDCVV(inputs['cidcvv'])){errors.push('payment');}
	if(!validateSelect(inputs['cardType'])){errors.push('payment');}
	if(!validateSelect(inputs['expMonth'])){errors.push('payment');}
	if(!validateSelect(inputs['expYear'])){errors.push('payment');}
	

	
	if(!validateCheckbox(inputs['confirm'])){errors.push('confirm');}
	if(!validateName(inputs['confirmFirstName'])){errors.push('confirm');}
	if(!validateName(inputs['confirmLastName'])){errors.push('confirm');}
	
	if(errors.length > 0)
	{
		errorAt(errors, 'errorBoxShow floatL');
		alert('Oops!\nLooks like your information is incomplete.');
	}else
	{
		var div = document.getElementById('total');
		var phantomTotal = document.createElement('input');
		phantomTotal.type = "text";
		phantomTotal.name = "total";
		phantomTotal.className = "hidden";
		phantomTotal.value = getContent(document.getElementById("totalPrice")).toString().substring(2);
		div.appendChild(phantomTotal);
		document.reg.submit();
	}
}

function validatePlayGroupForm()
{
	clearErrors();
	var inputs = document.reg.elements;
	if(!validateName(inputs['childFirstName'])){errors.push('child');}
	if(!validateName(inputs['childLastName'])){errors.push('child');}
	if(!validateSelect(inputs['birthMonth'])){errors.push('child');}
	if(!validateSelect(inputs['birthDay'])){errors.push('child');}
	if(!validateSelect(inputs['birthYear'])){errors.push('child');}
	if(!validateSelect(inputs['age'])){errors.push('child');}
	if(!validateSelect(inputs['gender'])){errors.push('child');}
	
	if(!validateName(inputs['parentFirstName'])){errors.push('parent');}
	if(!validateName(inputs['parentLastName'])){errors.push('parent');}
	
	if(!containsInput(inputs['address'])){errors.push('contact');}
	if(!validateCity(inputs['city'])){errors.push('contact');}
	if(!validateZip(inputs['zip'])){errors.push('contact');}
	if(!validatePhone(inputs['homePhone']) && !validatePhone(inputs['mobilePhone'])){errors.push('contact');}
	if(!validateOptionalPhone(inputs['fax'])){errors.push('contact');}
	if(!validatePhone(inputs['emergencyContact'])){errors.push('contact');}
	if(!validateEmail(inputs['email'])){errors.push('contact');}
	
/*
	if(!validateName(inputs['drFirstName'])){errors.push('safety');}
	if(!validateName(inputs['drLastName'])){errors.push('safety');}
	if(!validatePhone(inputs['drPhone'])){errors.push('safety');}
	if(!containsInput(inputs['insuranceCoverage'])){errors.push('safety');}
	if(!containsInput(inputs['policyNumber'])){errors.push('safety');}
	if(!containsInput(inputs['crPass'])){errors.push('safety');}
*/
	
	if(!validateSelect(inputs['group'])){errors.push('group');}
	
	if(!validateSelect(inputs['day1'])){errors.push('day1');}
	if(inputs['group'].selectedIndex == 1 && inputs['day2'].selectedIndex > 1){errors.push('day2');}
	if(inputs['group'].selectedIndex == 2 && inputs['day2'].selectedIndex < inputs['day1'].selectedIndex + 2){errors.push('day2');}
	if(inputs['group'].selectedIndex == 3 && inputs['day1'].selectedIndex != 1){errors.push('day1');}
	if(inputs['group'].selectedIndex == 3 && inputs['day2'].selectedIndex > 1){errors.push('day2');}
	if(inputs['group'].selectedIndex == 4 && inputs['day1'].selectedIndex != 1){errors.push('day1');}
	if(inputs['group'].selectedIndex == 4 && inputs['day2'].selectedIndex != 4){errors.push('day2');}
	
	if(!validateSelect(inputs['semester'])){errors.push('semester');}
	
	if(!validateRadio('rb_register_yes', 'rb_register_no')){errors.push('1stTimer');}
	
	if(!validateRadio('rb_membership_yes', 'rb_membership_no')){errors.push('membership');}	
	
	if(!validateCredit(inputs['cardNumber'])){errors.push('payment');}
	if(!validateCIDCVV(inputs['cidcvv'])){errors.push('payment');}
	if(!validateSelect(inputs['cardType'])){errors.push('payment');}
	if(!validateSelect(inputs['expMonth'])){errors.push('payment');}
	if(!validateSelect(inputs['expYear'])){errors.push('payment');}
	

	
	if(!validateCheckbox(inputs['confirm'])){errors.push('confirm');}
	if(!validateName(inputs['confirmFirstName'])){errors.push('confirm');}
	if(!validateName(inputs['confirmLastName'])){errors.push('confirm');}
	
	if(errors.length > 0)
	{
		errorAt(errors, 'errorBoxShow floatL');
		alert('Oops!\nLooks like your information is incomplete.');
	}else
	{
		var div = document.getElementById('total');
		var phantomTotal = document.createElement('input');
		phantomTotal.type = "text";
		phantomTotal.name = "total";
		phantomTotal.className = "hidden";
		phantomTotal.value = getContent(document.getElementById("totalPrice")).toString().substring(2);
		div.appendChild(phantomTotal);
		document.reg.submit();
	}
}