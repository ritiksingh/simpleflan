<?php
/** \brief  undocumented class
	
	&copy; Copyright 2007 Nolimit studio - . All Rights Reserved.

	\author  Nolimit studio
	\author $LastChangedBy$
 	\date 2007-10-25
	\date $LastChangedDate$
	\version $Rev$
	\sa
**/
class FeedBackController extends AppController 
{
	var $name = 'FeedBack';
	var	$uses=null;
	var $helpers=array('form');
	var $components = array('Email');
	

	function send()
	{
		if (!empty($this->data)){
			extract($this->data['Feedback']);
			if (isset($name,$email,$subject,$text)){
				// set email component options
				$this->Email->to = Configure::read('simpleflan.feedback_email');
				$this->Email->subject = $subject;
				$this->Email->replyTo = 'noreply@simpleflan.com';
				$this->Email->from = $email;
				$this->Email->template = 'feedback';
				$this->Email->sendAs = 'text';
				// now we send all the vars to the email template
				$this->set(compact('name','email','subject','text'));
				
				if ($this->Email->send()){
					$this->redirect('sent');
				}
			}
			$this->set('error',true);
		}
	}
	
	function sent(){
		
	}


	
} // END class FeedBacksController
?>