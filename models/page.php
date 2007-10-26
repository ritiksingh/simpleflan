<?php
class Page extends AppModel {

	var $name = 'Page';
	
	var $actsAs = array(
						'Slug' => array('separator' => '_', 'label' => array('title')),
						);	
	
	var $validate = array(
		'title' => VALID_NOT_EMPTY,
		'body' => VALID_NOT_EMPTY,
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
}
?>