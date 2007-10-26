<?php
$greet=$this->requestAction('/pages/getOne/slug/thank_you');
?>

<div id="page">
	<h2><?php echo $greet['Page']['title'] ?></h2>
	<div class="body">
		<?php echo $textile->textileThis($greet['Page']['body']) ?>		
	</div>
</div>

