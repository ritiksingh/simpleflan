<div id="recent_project">
	<h2>Proyecto Reciente</h2>
<?php
$projects=$this->requestAction('/projects/getPaginated/limit:1/recursive:1');
$project=$projects[0];
?>
	<div class="project">
		<div class="image">
			<?php if (isset($project['Image'][0])): ?>
				<?php echo $imager->imageLink($project['Image'][0],array('size'=>'medium','linkSize'=>'large'),array('rel'=>'lightbox')) ?>
			<?php endif ?>
		</div>
		<div class="meta">
			<h4><?php echo $html->link($project['Project']['title'],array('action'=>'view',$project['Project']['slug'])); ?>
			</h4>
			<div class="description">
				<?php echo $project['Project']['description'] ?>
			</div>
			<?php echo $html->link("ver mas Proyectos","/pagina/proyectos",array('class'=>'more')) ?>
		</div>
	</div>
</div>