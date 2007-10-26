<div id="category">
<h2 class="page_title"><?php __('Edit');?> <?php __('Category');?></h2>

<?php echo $form->create('Category',array('type'=>'file'));?>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('description');
		echo $form->input('image',array('type'=>'file'));			
	?>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Category.id')), array('class'=>'delete_category'), __('Are you sure you want to delete', true).' #' . $form->value('Category.id')); ?></li>
		<li><?php echo $html->link(__('List', true).' '.__('Categories', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List', true).' '.__('Projects', true), array('controller'=> 'projects', 'action'=>'index'),array('class'=>'list_project')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('controller'=> 'projects', 'action'=>'add'),array('class'=>'new_project')); ?> </li>
	</ul>
</div>