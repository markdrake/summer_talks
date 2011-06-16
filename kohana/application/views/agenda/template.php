<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Nearsoft | Nearshore Software Product Development </title>
		<link rel="shortcut icon" href="http://www.nearsoft.com/templates/nearsoft/favicon.ico" />
		<?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
	</head>
	<body>
		<div id="page-wrap">
			<div id="header">
				<img id="nearsoft-logo" src="<?php echo Url::base();?>images/nearsoft-logo.gif" alt="nearsoft-logo" />
				<img id="nearsoft-slogan" src="<?php echo Url::base();?>images/nearsoft-slogan.png" alt="nearsoft-slogan" />
				<br /><br />
				<hr class="ns-divisor" />
			</div>
			<br />
			<div id="nav-container">
				<ul id="nav">
					<li><a href="<?php echo Url::site('agenda/index');?>">Contact List</a></li>
					<li><a href="<?php echo Url::site('agenda/add');?>">Add a contact</a></li>
				</ul>
			</div>
			<br />
			<div id="content-container">	
				<div id="content">
					<?php echo $content;?>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</body>
</html>
