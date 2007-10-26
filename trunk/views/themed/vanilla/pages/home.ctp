<?php
$welcome=$this->requestAction('/pages/getOne/slug/welcome');
$projects=$this->requestAction('/projects/getPaginated/limit:1/recursive:1');
$project=$projects[0];
?>

<div id="welcome">
	<?php echo $textile->textileThis($welcome['Page']['body']) ?>
</div>

<h2>My last project</h2>
<div id="last" class="project">
	<div class="image">
		<?php echo $imager->image($project['Image'][0],array('size'=>'medium')) ?>		
	</div>
</div>