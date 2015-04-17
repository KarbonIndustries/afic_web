<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Art Farm Photo Shoot</title>
</head>
<style type="text/css" media="screen">
	*{color:#555555;}
	body{background:#656A75;padding:20px;margin:0;}
	.photoShell{
		margin:0 auto 50px;width:480px;padding:10px;text-align:center;background:#FFFFFF;
		-moz-box-shadow:0 3px 3px rgba(0,0,0,0.3);
		-webkit-box-shadow:0 3px 3px rgba(0,0,0,0.3);
		box-shadow:0 3px 3px rgba(0,0,0,0.3);
	}
	a.imgLink{border:0;}
	.label{font:12px Helvetica,sans-serif;}
	.labelText{background:black;padding:5px;opacity:.85;}
	a.downloadLink:link{color:#555555;font-size:1.75em;}
	a.downloadLink:hover{color:#0070FF;}
</style>
<body>
<?php
if ($handle = opendir('./img/sml'))
{
	while(false !== ($entry = readdir($handle)))
	{
		if(preg_match('/\.jpg$/',$entry))
		{?>
			<div class='photoShell' id='<?=$entry?>'>
				<a href='img/lrg/<?=$entry?>' class='imgLink'><img src='img/sml/<?=$entry?>'/></a>
				<p class='label'><a href='img/lrg/<?=$entry?>' class='downloadLink'>Download</a></p>
			</div>
		<?}
	}
	closedir($handle);
}
?>
<div style='clear:both'></div>
</body>
</html>
