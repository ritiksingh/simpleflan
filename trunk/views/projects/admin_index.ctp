<div id="projects">
<h2  class="page_title"><?php __('Projects');?></h2>
<?php
$i = 0;
foreach ($projects as $project):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = 'altrow';
	}
?>
	<div class="project <?php echo $class;?>">
		<div class="image"> 
			<?php if (isset($project['Image'][0])): ?>
				<?php echo $imager->image($project['Image'][0],array('size'=>'small')) ?>				
			<?php else: ?>				
				<?php echo $html->image('no-image.gif',array('class'=>'empty')) ?>
			<?php endif ?>
		</div>	
		<div class="info">
			<h3>
				<?php echo $html->link($project['Project']['title'], array('action'=>'view', $project['Project']['id'])); ?>
			</h3>
			<div class='meta'>
				<?php echo __("for",true) ?>
				<?php echo $html->link($project['Client']['name'], array('controller'=> 'clients', 'action'=>'view', $project['Client']['id'])); ?>
				<?php echo __("in",true) ?>
				<?php echo $html->link($project['Category']['name'], array('controller'=> 'categories', 'action'=>'view', $project['Category']['id'])); ?>			
			</div>
			<div class="actions">
				<?php echo $html->link(__('Edit', true), array('action'=>'edit', $project['Project']['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('action'=>'delete', $project['Project']['id']), null, __('Are you sure you want to delete', true).' #' . $project['Project']['id']); ?>
			</div>			
		</div>

	</div>
<?php endforeach; ?>
</div>
<div class="paging">
	<?php echo $paginator->prev('&laquo; '.__('previous', true), array('escape'=>false,'class'=>'prev enabled'), null, array('class'=>'prev disabled'));?>
	<div class="numbers">	<?php echo $paginator->numbers();?>
</div>
	<?php echo $paginator->next(__('next', true).' &raquo;', array('escape'=>false,'class'=>'next enabled'), null, array('class'=>'next disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('action'=>'add'),array('class'=>'new_project')); ?></li>
		<li><?php echo $html->link(__('New', true).' '.__('Client', true), array('controller'=> 'clients', 'action'=>'add'),array('class'=>'new_client')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Category', true), array('controller'=> 'categories', 'action'=>'add'),array('class'=>'new_category')); ?> </li>
	</ul>
</div>