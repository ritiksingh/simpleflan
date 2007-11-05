<div id="clients">
<h2  class="page_title"><?php __('Clients');?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
		<th><?php echo $paginator->sort('name');?></th>		
		<th><?php echo $paginator->sort('url');?></th>			
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($clients as $client):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($client['Client']['name'], array('action'=>'view', $client['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($client['Client']['url'])?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $client['Client']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $client['Client']['id']), null, __('Are you sure you want to delete', true).' #' . $client['Client']['id']); ?>
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
		<li><?php echo $html->link(__('New', true).' '.__('Client', true), array('action'=>'add'),array('class'=>'new_client')); ?></li>
		<li><?php echo $html->link(__('New', true).' '.__('Project', true), array('controller'=> 'projects', 'action'=>'add'),array('class'=>'new_project')); ?> </li>
	</ul>
</div>