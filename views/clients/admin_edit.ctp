<div id="client">
<h2 class="page_title"><?php __('Edit');?> <?php __('Client');?></h2>

<?php echo $form->create('Client',array('type'=>'file'));?>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('url');
		echo $form->input('description');
		echo $form->input('image',array('type'=>'file'));		
	?>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Client.id')), array('class'=>'delete_client'), __('Are you sure you want to delete', true).' #' . $form->value('Client.id')); ?></li>
		<li><?php echo $html->link(__('List', true).' '.__('Clients', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List', true).' '.__('Projects', true), array('controller'=> 'projects', 'action'=>'index'),array('class'=>'list_project')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('controller'=> 'projects', 'action'=>'add'),array('class'=>'new_project')); ?> </li>
	</ul>
</div>