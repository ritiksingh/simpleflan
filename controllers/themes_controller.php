<?php
/** \brief  Themes Controller
	
	&copy; Copyright 2007 Nolimit studio - . All Rights Reserved.

	\author  Nolimit studio
	\author $LastChangedBy$
 	\date 2007-10-25
	\date $LastChangedDate$
	\version $Rev$
	\sa
**/
class ThemesController extends AppController 
{
	var $name = 'Themes';
	var $components=array('WriteConfig');

	function __construct() {
		parent::__construct();
	}
	
	
	/** \brief index the model for return to a view
		\author  Nolimit studio
		\date 2007-10-25

		\sa
	**/
	function admin_index()
	{
		  $this->set('data',$this->Theme->findAll());
	} // END function index
	
	function admin_set($themeName)
	{
		if ($theme=$this->Theme->find($themeName)){
			// change current theme on configuration
			Configure::write('simpleflan.theme',$themeName);
			//store current config in a file		
			if ($this->WriteConfig->write('simpleflan','simpleflan_config')){
				$this->Session->setFlash( $theme['name'].' '.__('has been activated',true));
			}else{
				$this->Session->setFlash(__('an error has ocurred',true));
			}			
		}else{
			$this->Session->setFlash(__('an error has ocurred',true));
		}
		$this->redirect('index');
	}
	


	
} // END class ThemesController
?>