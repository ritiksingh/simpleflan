<?php
class Tag extends AppModel {

	var $name = 'Tag';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array(
			'Project' => array('className' => 'Project',
						'joinTable' => 'projects_tags',
						'foreignKey' => 'tag_id',
						'associationForeignKey' => 'project_id',
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