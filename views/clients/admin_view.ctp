<div class="client">
<h2 class="page_title"><?php  __('Client');?></h2>
	<dl>
		<dt>Name</dt>
		<dd>
			<h3><?php echo $client['Client']['name']?></h3>
			&nbsp;
		</dd>
		<dt class="altrow">Slug</dt>
		<dd class="altrow">
			<?php echo $client['Client']['slug']?>
			&nbsp;
		</dd>
		<dt>Url</dt>
		<dd>
			<?php echo $client['Client']['url']?>
			&nbsp;
		</dd>
		<dt class="altrow">Description</dt>
		<dd class="altrow">
			<?php echo $client['Client']['description']?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Add', true).' '.__('Project', true), array('controller'=> 'projects', 'action'=>'add','clientId'=>$client['Client']['id']),array('class'=>'new_project')); ?> </li>		
		<li><?php echo $html->link(__('Edit', true).' '.__('Client', true),   array('action'=>'edit', $client['Client']['id']),array('class'=>'edit_client')); ?> </li>
		<li><?php echo $html->link(__('Delete', true).' '.__('Client', true), array('action'=>'delete', $client['Client']['id']), array('class'=>'delete_client'), __('Are you sure you want to delete', true).' #' . $client['Client']['id'] . '?'); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Client', true), array('action'=>'add'),array('class'=>'new_client')); ?> </li>
	</ul>
</div>
<?php echo $this->renderElement('related_list',array('data'=>$client,'options'=>array('relatedModelName'=>'Project','linkTitle'=>'title'))) ?>
