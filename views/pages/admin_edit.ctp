<div id="page">
<h2 class="page_title"><?php __('Edit');?> <?php __('Page');?></h2>

<?php echo $form->create('Page');?>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('excerpt');
		echo $form->input('body');
	?>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Page.id')), array('class'=>'delete_page'), __('Are you sure you want to delete', true).' #' . $form->value('Page.id')); ?></li>
		<li><?php echo $html->link(__('List', true).' '.__('Pages', true), array('action'=>'index'));?></li>
	</ul>
</div>