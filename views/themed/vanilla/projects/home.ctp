<div id="recent_project">
	<h2>Proyectos Recientes</h2>
<?php
foreach ($projects as $project):
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
		</div>
	</div>
<?php
endforeach;
?>	
</div>

<?php echo $this->renderElement("random_quote"); ?>
