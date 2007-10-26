<div class="category">
<h2 class="page_title"><?php  __('Category');?></h2>
	<dl>
		<dt>Name</dt>
		<dd>
			<h3><?php echo $category['Category']['name']?></h3>
			&nbsp;
		</dd>
		<dt class="altrow">Slug</dt>
		<dd class="altrow">
			<?php echo $category['Category']['slug']?>
			&nbsp;
		</dd>
		<dt>Description</dt>
		<dd>
			<?php echo $category['Category']['description']?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit', true).' '.__('Category', true),   array('action'=>'edit', $category['Category']['id']),array('class'=>'edit_category')); ?> </li>
		<li><?php echo $html->link(__('Delete', true).' '.__('Category', true), array('action'=>'delete', $category['Category']['id']), array('class'=>'delete_category'), __('Are you sure you want to delete', true).' #' . $category['Category']['id'] . '?'); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Category', true), array('action'=>'add'),array('class'=>'new_category')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('controller'=> 'projects', 'action'=>'add'),array('class'=>'new_project')); ?> </li>
	</ul>
</div>

<?php echo $this->renderElement('related_list',array('data'=>$category,'options'=>array('relatedModelName'=>'Project','linkTitle'=>'title'))) ?>
