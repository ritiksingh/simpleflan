<div id="login">
	<h2 class="page_title"><?php __('Please login');?></h2>

	<?php echo $form->create('User',array('action'=>'login'));?>
	<div id="user_password">
		<?php
			echo $form->input('email');
			echo $form->input('password');
		?>		
	</div>
	<div id="remember">
		<?php echo $form->input('remember_me',array('type'=>'checkbox','label'=>__('Remember me',true)));			
		 ?>		
	</div>
	<?php echo $form->end('login');?>

</div>