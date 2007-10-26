<div class="user">
<h2><?php  __('User');?></h2>
	<dl>
		<dt>Email</dt>
		<dd>
			<?php echo $user['User']['email']?>
			&nbsp;
		</dd>
		<dt class="altrow">Password</dt>
		<dd class="altrow">
			<?php echo $user['User']['password']?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit', true).' '.__('User', true),   array('action'=>'edit', $user['User']['id']),array('class'=>'edit_user')); ?> </li>
		<li><?php echo $html->link(__('Delete', true).' '.__('User', true), array('action'=>'delete', $user['User']['id']), array('class'=>'delete_user'), __('Are you sure you want to delete', true).' #' . $user['User']['id'] . '?'); ?> </li>
		<li><?php echo $html->link(__('List', true).' '.__('Users', true), array('action'=>'index'),array('class'=>'list_user')); ?> </li>
		<li><?php echo $html->link(__('New', true).' '.__('User', true), array('action'=>'add'),array('class'=>'new_user')); ?> </li>
	</ul>
</div>
