<?php
class Project extends AppModel {

	var $name = 'Project';
	
	var $actsAs = array(
						'Slug' => array('separator' => '_', 'label' => array('title')),
						'Tag',
						'Url',
						);
	
	var $validate = array(
		'title' => VALID_NOT_EMPTY,
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Client' => array('className' => 'Client',
								'foreignKey' => 'client_id',
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'counterCache' => ''),
			'Category' => array('className' => 'Category',
								'foreignKey' => 'category_id',
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'counterCache' => ''),
	);

	var $hasMany = array(
			'Image' => array('className' => 'Image',
								'foreignKey' => 'project_id',
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

	var $hasAndBelongsToMany = array(
			'Tag' => array('className' => 'Tag',
						'joinTable' => 'projects_tags',
						'foreignKey' => 'project_id',
						'associationForeignKey' => 'tag_id',
						'conditions' => '',
						'fields' => '',
						'order' => '',
						'limit' => '',
						'offset' => '',
						'unique' => '',
						'finderQuery' => '',
						'deleteQuery' => '',
						'insertQuery' => ''),
	);

}
?>