<div id="client">
	<h2><?php echo $category['Category']['name'] ?></h2>
	<div class="excerpt">
		Algunos proyectos realizados en esta categoría de servicio
	</div>
	<?php echo $this->renderElement('list_projects',array('projects'=>$category['Project'])) ?>
</div>