<div id="project">
<?php if (isset($clientId)): ?>
	<h2 class="page_title"><?php echo __('Add',true).' '.__('Project',true).' '.__('To',true)." {$clients[$clientId]}";?></h2>	
<?php else: ?>
	<h2 class="page_title"><?php echo __('Create',true).' '.__('Project',true)?></h2>	
<?php endif ?>

<?php echo $form->create('Project');?>
	<?php
		echo $form->input('title');
		echo $form->input('url');
		echo $form->input('description');
		if (isset($clientId)){
			echo $form->input('client_id',array('type'=>'hidden','value'=>$clientId));			
		}else{
			echo $form->input('client_id');
		}
		echo $form->input('category_id');
		echo $form->input('tags',array('type'=>'text','after'=>'<p class="advice">'.__('separate each tag with a comma (,)',true).'</p>'));
	?>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New', true).' '.__('Client', true), array('controller'=> 'clients', 'action'=>'add'),array('class'=>'new_client')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Category', true), array('controller'=> 'categories', 'action'=>'add'),array('class'=>'new_category')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Image', true), array('controller'=> 'images', 'action'=>'add'),array('class'=>'new_image')); ?> </li>
	</ul>
</div>