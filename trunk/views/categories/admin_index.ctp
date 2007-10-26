<div id="categories">
<h2  class="page_title"><?php __('Categories');?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('name');?></th>					
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($categories as $category):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($category['Category']['name'], array('action'=>'view', $category['Category']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $category['Category']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $category['Category']['id']), null, __('Are you sure you want to delete', true).' #' . $category['Category']['id']); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('&laquo; '.__('previous', true), array('escape'=>false,'class'=>'prev enabled'), null, array('class'=>'prev disabled'));?>
	<div class="numbers">	<?php echo $paginator->numbers();?>
</div>
	<?php echo $paginator->next(__('next', true).' &raquo;', array('escape'=>false,'class'=>'next enabled'), null, array('class'=>'next disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New', true).' '.__('Category', true), array('action'=>'add'),array('class'=>'new_category')); ?></li>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('controller'=> 'projects', 'action'=>'add'),array('class'=>'new_project')); ?> </li>
	</ul>
</div>