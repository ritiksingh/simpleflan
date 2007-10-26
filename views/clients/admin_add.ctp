<div id="client">
<h2 class="page_title"><?php __('Add');?> <?php __('Client');?></h2>

<?php echo $form->create('Client',array('type'=>'file'));?>
	<?php
		echo $form->input('name');
		echo $form->input('url');
		echo $form->input('description');
		echo $form->input('image',array('type'=>'file'));				
	?>
<?php echo $form->end('Submit');?>
</div>
