<div class="page">
<h2><?php  __('Page');?></h2>
	<dl>
		<dt>Title</dt>
		<dd>
			<h3><?php echo $page['Page']['title']?></h3>
			&nbsp;
		</dd>
		<dt class="altrow">Slug</dt>
		<dd class="altrow">
			<?php echo $page['Page']['slug']?>
			&nbsp;
		</dd>
		<dt>Excerpt</dt>
		<dd>
			<?php echo $page['Page']['excerpt']?>
			&nbsp;
		</dd>
		<dt class="altrow">Body</dt>
		<dd class="altrow">
			<?php echo $page['Page']['body']?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit', true).' '.__('Page', true),   array('action'=>'edit', $page['Page']['id']),array('class'=>'edit_page')); ?> </li>
		<li><?php echo $html->link(__('Delete', true).' '.__('Page', true), array('action'=>'delete', $page['Page']['id']), array('class'=>'delete_page'), __('Are you sure you want to delete', true).' #' . $page['Page']['id'] . '?'); ?> </li>
		<li><?php echo $html->link(__('List', true).' '.__('Pages', true), array('action'=>'index'),array('class'=>'list_page')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('Page', true), array('action'=>'add'),array('class'=>'new_page')); ?> </li>
	</ul>
</div>
