<div id="image">
<h2 class="page_title"><?php __('Add');?> <?php __('Image');?></h2>

<?php echo $form->create('Image',array('type'=>'file'));?>
	<?php
		echo $form->input('image',array('type'=>'file'));
		if (isset($projectId)) {
			echo $form->input('project_id',array('type'=>'hidden','value'=>$projectId));
		}
		echo $form->input('title');
		echo $form->input('description');
	?>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List', true).' '.__('Images', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List', true).' '.__('Projects', true), array('controller'=> 'projects', 'action'=>'index'),array('class'=>'list_project')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('controller'=> 'projects', 'action'=>'add'),array('class'=>'new_project')); ?> </li>
	</ul>
</div>