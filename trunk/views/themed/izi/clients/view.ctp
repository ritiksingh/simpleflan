<div id="client">
	<h2><?php echo $client['Client']['name'] ?></h2>
	<div class="excerpt">
		Algunos proyectos realizados para este cliente
	</div>
	<?php echo $this->renderElement('list_projects',array('projects'=>$client['Project'])) ?>
</div>