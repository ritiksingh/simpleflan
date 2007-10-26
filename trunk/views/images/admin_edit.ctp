<div id="image">
<h2 class="page_title"><?php __('Edit');?> <?php __('Image');?></h2>

<?php echo $form->create('Image');?>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('description');
		echo $form->input('image');
		echo $form->input('project_id');
	?>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Image.id')), array('class'=>'delete_image'), __('Are you sure you want to delete', true).' #' . $form->value('Image.id')); ?></li>
		<li><?php echo $html->link(__('List', true).' '.__('Images', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List', true).' '.__('Projects', true), array('controller'=> 'projects', 'action'=>'index'),array('class'=>'list_project')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('controller'=> 'projects', 'action'=>'add'),array('class'=>'new_project')); ?> </li>
	</ul>
</div>