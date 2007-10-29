<div id="projects">
<?php foreach ($projects as $project): ?>
	<?php if (!isset($project['Project'])) $project['Project']=$project ?>
	<div class="project">
		
		<div class="image">
			<?php if (isset($project['Image'][0])): ?>
				<?php echo $imager->imageLink($project['Image'][0],array('size'=>'medium','linkSize'=>'large'),array('rel'=>'lightbox')) ?>
			<?php endif ?>
		</div>
		<?php if (sizeof($project['Image'])>1): ?>
			<?php unset($project['Image'][0]) ?>
			<div class="thumbs">
				<?php foreach ($project['Image'] as $image): ?>
					<div class="image">								
					<?php echo $imager->imageLink($image,array('size'=>'thumb','linkSize'=>'large'),array('rel'=>'lightbox')) ?>						
					</div>
				<?php endforeach ?>						
			</div>
		<?php endif ?>
		
		<div class="meta">
			<h4><?php echo $html->link($project['Project']['title'],array('action'=>'view',$project['Project']['slug'])); ?>
			</h4>
			<div class="description">
				<?php echo $textile->textileThis($project['Project']['description']); ?>
			</div>
		</div>
	</div>
<?php endforeach ?>
</div>