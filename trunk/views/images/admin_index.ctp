<div id="images">
<h2  class="page_title"><?php __('Images');?></h2>
<table cellpadding="0" cellspacing="0">
<tr>

	

	

	

		
		<th><?php echo $paginator->sort('title');?></th>		
	

		
		<th><?php echo $paginator->sort('description');?></th>		
	

		
		<th><?php echo $paginator->sort('image');?></th>		
	

		
		<th><?php echo $paginator->sort('project_id');?></th>		
	
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($images as $image):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($image['Image']['title'], array('action'=>'view', $image['Image']['id'])); ?>
		</td>
		<td>
			<?php echo $image['Image']['description']?>
		</td>
		<td>
			<?php echo $image['Image']['image']?>
		</td>
		<td>
			<?php echo $html->link($image['Project']['title'], array('controller'=> 'projects', 'action'=>'view', $image['Project']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $image['Image']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $image['Image']['id']), null, __('Are you sure you want to delete', true).' #' . $image['Image']['id']); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('&laquo; '.__('previous', true), array('escape'=>false,'class'=>'prev enabled'), null, array('class'=>'prev disabled'));?>
	<div class="numbers">	<?php echo $paginator->numbers();?>
</div>
	<?php echo $paginator->next(__('next', true).' &raquo;', array('escape'=>false,'class'=>'next enabled'), null, array('class'=>'next disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New', true).' '.__('Image', true), array('action'=>'add'),array('class'=>'new_image')); ?></li>
		<li><?php echo $html->link(__('List', true).' '.__('Projects', true), array('controller'=> 'projects', 'action'=>'index'),array('class'=>'list_project')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('controller'=> 'projects', 'action'=>'add'),array('class'=>'new_project')); ?> </li>
	</ul>
</div>