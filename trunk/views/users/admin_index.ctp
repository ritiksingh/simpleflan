<div id="users">
<h2  class="page_title"><?php __('Users');?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
		<th><?php echo $paginator->sort('email');?></th>		
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($users as $user):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $user['User']['email']?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $user['User']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $user['User']['id']), null, __('Are you sure you want to delete', true).' #' . $user['User']['id']); ?>
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
		<li><?php echo $html->link(__('New', true).' '.__('User', true), array('action'=>'add'),array('class'=>'new_user')); ?></li>
	</ul>
</div>