<div id="project">
<h2 class="page_title"><?php __('Edit');?> <?php __('Project');?></h2>

<?php echo $form->create('Project');?>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('url');
		echo $form->input('description');
		echo $form->input('client_id');
		echo $form->input('category_id');
		echo $form->input('tags',array('type'=>'text','after'=>'<p class="advice">'.__('separate each tag with a comma (,)',true).'</p>'));
	?>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Project.id')), array('class'=>'delete_project'), __('Are you sure you want to delete', true).' #' . $form->value('Project.id')); ?></li>
		<li><?php echo $html->link(__('New', true).' '.__('Client', true), array('controller'=> 'clients', 'action'=>'add'),array('class'=>'new_client')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Category', true), array('controller'=> 'categories', 'action'=>'add'),array('class'=>'new_category')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Image', true), array('controller'=> 'images', 'action'=>'add'),array('class'=>'new_image')); ?> </li>
	</ul>
</div>