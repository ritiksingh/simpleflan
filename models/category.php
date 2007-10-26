<?php
class Category extends AppModel {

	var $name = 'Category';
	

	var $actsAs= array(
		
		'Slug' => array('separator' => '_', 'label' => array('name')),
		
		'Image'=>array(
			'fields'=>array(
				'image'=>array(
					'versions'=>array(
						array('prefix'=>'thumb',
									 'width'=>'96',
									 'height'=>'96',
									'square'=>true,
									
						),						
						array('prefix'=>'small',
									 'width'=>'145',
									 'height'=>'145',
									'aspect'=>true,
									
						),					
						array('prefix'=>'large',
									 'width'=>'800',
									 'height'=>'800',
									'allow_enlarge'=>false,
									'aspect'=>true,
						),
					)
				)
			)
		));	
	
	var $validate = array(
		'name' => VALID_NOT_EMPTY,
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'category_id',
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