<?php
class Image extends AppModel {

	var $name = 'Image';


	var $actsAs= array(
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
									 'width'=>'243',
									 'height'=>'122',
									'aspect'=>true,
									
						),
						array('prefix'=>'medium',
									 'width'=>'486',
									 'height'=>'243',
									'allow_enlarge'=>false,
									'aspect'=>true,
						),						
						array('prefix'=>'large',
									 'width'=>'800',
									 'height'=>'400',
									'allow_enlarge'=>false,
									'aspect'=>true,
						),
					)
				)
			)
		));

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'project_id',
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'counterCache' => ''),
	);


}
?>