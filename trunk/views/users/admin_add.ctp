<div id="user">
<h2 class="page_title"><?php __('Add');?> <?php __('User');?></h2>

<?php echo $form->create('User');?>
	<?php
		echo $form->input('name');	
		echo $form->input('email');
		echo $form->input('password');
		echo $form->input('admin',array('type'=>'checkbox','label'=>'Administrador'));		
	?>
<?php echo $form->end('Submit');?>
</div>
