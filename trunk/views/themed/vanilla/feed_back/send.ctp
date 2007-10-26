<div id="contact">
	<h2>Contact form</h2>
	<?php echo $form->create(array('controller'=>'Feedback','action'=>'send'));?>
		<?php
			echo $form->input('Feedback.name',array('label'=>'Your full name'));
			echo $form->input('Feedback.email',array('label'=>'Your email address'));
			echo $form->input('Feedback.subject',array('label'=>'Reason for writing'));	
			echo $form->input('Feedback.text',array('type'=>'textarea','Label'=>'enter your message'));
		?>
	<?php echo $form->end('Submit');?>
</div>