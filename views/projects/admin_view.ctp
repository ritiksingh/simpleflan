<div class="project">
<h2 class="page_title"><?php  echo __('View',true).' '.__('Project', true);?></h2>
	<dl>
		<dt>Title</dt>
		<dd>
			<h3><?php echo $project['Project']['title']?></h3>
			&nbsp;
		</dd>
		<dt>Client</dt>
		<dd>
			<?php echo $html->link($project['Client']['name'], array('controller'=> 'clients', 'action'=>'view', $project['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt class="altrow">Category</dt>
		<dd class="altrow">
			<?php echo $html->link($project['Category']['name'], array('controller'=> 'categories', 'action'=>'view', $project['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt>Url</dt>
		<dd>
			<?php echo $project['Project']['url']?>
			&nbsp;
		</dd>
		<dt class="altrow">Description</dt>
		<dd class="altrow">
			<?php echo $project['Project']['description']?>
			&nbsp;
		</dd>

	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Attach', true).' '.__('Image', true), array('controller'=> 'images', 'action'=>'add','projectId'=>$project['Project']['id']),array('class'=>'new_image')); ?> </li>
		<li><?php echo $html->link(__('Edit', true).' '.__('Project', true),   array('action'=>'edit', $project['Project']['id']),array('class'=>'edit_project')); ?> </li>
		<li><?php echo $html->link(__('Delete', true).' '.__('Project', true), array('action'=>'delete', $project['Project']['id']), array('class'=>'delete_project'), __('Are you sure you want to delete', true).' #' . $project['Project']['id'] . '?'); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('action'=>'add'),array('class'=>'new_project')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Category', true), array('controller'=> 'categories', 'action'=>'add'),array('class'=>'new_category')); ?> </li>
	</ul>
</div>
<div id="images">
	<h4><?php __('Images') ?></h4>
	<?php if (empty($project['Image'])): ?>
		<div class="empty">
			<p><?php __("No images has been attached to this project") ?></p>
		</div>
	<?php endif ?>
	<?php foreach ($project['Image'] as $image): ?>
		<div class="image">
			<?php echo $imager->imageLink($image,array('size'=>'thumb','linkSize'=>'large'),array('rel'=>'lightbox')) ?>
			<?php echo $html->link(__("delete",true),array('controller'=>'Images','action'=>'delete','id'=>$image['id'],'projectId'=>$project['Project']['id']),array('class'=>'action'),__("Delete this image?",true)) ?>			
		</div>
	<?php endforeach ?>
</div>