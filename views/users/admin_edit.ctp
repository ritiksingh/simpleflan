<div id="user">
<h2 class="page_title"><?php __('Edit');?> <?php __('User');?></h2>

<?php echo $form->create('User');?>
	<?php
		echo $form->input('id');
		echo $form->input('email');
		echo $form->input('password');
	?>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('User.id')), array('class'=>'delete_user'), __('Are you sure you want to delete', true).' #' . $form->value('User.id')); ?></li>
		<li><?php echo $html->link(__('List', true).' '.__('Users', true), array('action'=>'index'));?></li>
	</ul>
</div>