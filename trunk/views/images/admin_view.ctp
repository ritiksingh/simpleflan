<div class="image">
<h2><?php  __('Image');?></h2>
	<dl>
		<dt>Title</dt>
		<dd>
			<h3><?php echo $image['Image']['title']?></h3>
		</dd>
		<dt class="altrow">Description</dt>
		<dd class="altrow">
			<?php echo $image['Image']['description']?>
		</dd>
		<dt>Image</dt>
		<dd>
			<?php echo $image['Image']['image']?>
		</dd>
		<dt class="altrow">Project</dt>
		<dd class="altrow">
			<?php echo $html->link($image['Project']['title'], array('controller'=> 'projects', 'action'=>'view', $image['Project']['id'])); ?>
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit', true).' '.__('Image', true),   array('action'=>'edit', $image['Image']['id']),array('class'=>'edit_image')); ?> </li>
		<li><?php echo $html->link(__('Delete', true).' '.__('Image', true), array('action'=>'delete', $image['Image']['id']), array('class'=>'delete_image'), __('Are you sure you want to delete', true).' #' . $image['Image']['id'] . '?'); ?> </li>
		<li><?php echo $html->link(__('List', true).' '.__('Images', true), array('action'=>'index'),array('class'=>'list_image')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Image', true), array('action'=>'add'),array('class'=>'new_image')); ?> </li>
		<li><?php echo $html->link(__('List', true).' '.__('Projects', true), array('controller'=> 'projects', 'action'=>'index'),array('class'=>'list_project')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('controller'=> 'projects', 'action'=>'add'),array('class'=>'new_project')); ?> </li>
	</ul>
</div>
