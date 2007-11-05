<?php
/**
 *
 *  Vanilla Theme Default Layout
 * 
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php echo Configure::read('simpleflan.title') ?> 
		|
		<?php echo $title_for_layout;?>
	</title>

	<?php echo $html->charset();?>

	<link rel="icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
	<?php echo $html->css('themed/'.$this->theme.'/styles');?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $html->link(Configure::read('simpleflan.title'), '/');?></h1>
		</div>		
		<?php echo $this->renderElement("navigation"); ?>
		<div id="content">

			<?php echo $content_for_layout;?>

			<div id="footer">
				&copy; <?php echo Configure::read('simpleflan.title') ?> |
				powered by <?php echo $html->link('simpleflan','http://simpleflan.com') ?>
			</div>

		</div>

	</div>
	<?php echo $cakeDebug?>
</body>
</html>