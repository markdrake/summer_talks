<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Nearsoft | Nearshore Software Product Development </title>
		<link rel="shortcut icon" href="http://www.nearsoft.com/templates/nearsoft/favicon.ico" />
		<link href="<?php echo base_url();?>css/style.css" media="screen" rel="Stylesheet" type="text/css" />
	</head>
	<body>
		<div id="page-wrap">
			<div id="header">
				<img id="nearsoft-logo" src="<?php echo base_url();?>images/nearsoft-logo.gif" alt="nearsoft-logo" />
				<img id="nearsoft-slogan" src="<?php echo base_url();?>images/nearsoft-slogan.png" alt="nearsoft-slogan" />
				<br /><br />
				<hr class="ns-divisor" />
			</div>
			<br />
			<div id="nav-container">
				<ul id="nav">
					<li><?php echo anchor('agenda/index', 'Contact list')?></li>
					<li><?php echo anchor('agenda/add', 'Add a contact')?></li>
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
