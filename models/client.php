<?php
class Client extends AppModel {

	var $name = 'Client';
	
	var $actsAs= array(
		
		'Slug' => array('separator' => '_', 'label' => array('name')),
		
		'Image'=>array(
			'fields'=>array(
				'image'=>array(
					'versions'=>array(				
						array('prefix'=>'small',
									 'width'=>'145',
									 'height'=>'145',
									'aspect'=>true,
									
						),
						array('prefix'=>'large',
									 'width'=>'320',
									 'height'=>'320',
									'allow_enlarge'=>false,
									'aspect'=>true,
						),
					)
				)
			)
		),
		'url'
		);	
	var $validate = array(
		'name' => VALID_NOT_EMPTY,
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'client_id',
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'limit' => '',
								'offset' => '',
								'dependent' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''),
	);

}
?>