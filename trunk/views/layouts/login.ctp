<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		SimpleFlan : <?php __('Please login') ?>
	</title>

	<?php echo $html->charset();?>

	<link rel="icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
	<?php echo $html->css('admin_css/login');?>
</head>
<body >
	<div id="container">
		<div id="content">
			<?php
				if ($session->check('Message.flash')):
						$session->flash();
				endif;
			?>

			<?php echo $content_for_layout;?>

		</div>
	</div>
	<?php echo $cakeDebug?>
</body>
</html>