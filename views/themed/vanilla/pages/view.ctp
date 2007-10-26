<?php
/**
* This is a special view, because it is used to display pages from the database.
*/
?>

<div id="page">
	<h2><?php echo $page['Page']['title'] ?></h2>
	<div class="excerpt">
		<?php echo $textile->textileThis($page['Page']['excerpt']) ?>
	</div>
	<div class="body">
		<?php echo $textile->textileThis($page['Page']['body']) ?>
	</div>	
</div>