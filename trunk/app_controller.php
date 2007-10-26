<?php
/* SVN FILE: $Id: app_controller.php 5118 2007-05-18 17:19:53Z phpnut $ */
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2005-2007, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2007, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package			cake
 * @subpackage		cake.app
 * @since			CakePHP(tm) v 0.2.9
 * @version			$Revision: 5118 $
 * @modifiedby		$LastChangedBy: phpnut $
 * @lastmodified	$Date: 2007-05-18 12:19:53 -0500 (Fri, 18 May 2007) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		cake
 * @subpackage	cake.app
 */
class AppController extends Controller {
	
	var $components=array('Auth');
	
	var $helpers=array('Imager','Textile','Javascript');
	
	var $view="Theme";
	
	function beforeFilter()
	{
		//set Auth Component
		$this->Auth->fields = array('username' => 'email', 'password' => 'password');
		$this->Auth->loginRedirect = array('controller' => 'projects', 'action' => 'index');
		$this->Auth->logoutRedirect = '/admin';	
		$this->Auth->authorize = 'controller';			
		
		if(isset($this->params['admin']) && $this->params['admin'] == 'admin'){
			$this->layout = 'admin';			
		}else{
			$this->theme=Configure::read("simpleflan.theme");			
			$this->Auth->allow();
		}
	}
	
	function beforeRender(){
		if(isset($this->params['admin']) && $this->params['admin'] == 'admin'){
			$this->set('userName',$this->Auth->user('name'));
		}		
	}
	
	function isAuthorized() {
		if (isset($this->params[Configure::read('Routing.admin')])) {
			if ($this->Auth->user('admin') == 0) {
				return false;
			}
		}
		return true;
	}	
	
	/*
	 * regresamos un 404
	 */
	 
	function notFound()
	{
		$this->cakeError('error404', array(array('className' =>
		$this->modelClass, 'webroot' => '', 'base' => $this->base, 'action' =>
		$this->action)));
	}	
	
	/*
		Request Actions
	*/
	
	
	
	function getRandom($modelName=null){
		if (!isset($modelName)){
			$modelName=$this->modelNames[0];
		}
		// set recursive option
		$this->{$modelName}->recursive=(isset($this->namedArgs['recursive']))?$this->namedArgs['recursive']:-1;
		return $this->{$modelName}->find( null, null, 'RAND()' ); 
	}	
	
	function getOne($field='id',$key='1',$modelName=null){
		if ($modelName==null){
			$modelName=$this->modelNames[0];			
		}
		$field=ucfirst($field);
		$method="findBy{$field}";
		return $this->{$modelName}->{$method}($key);
	}
	
	function getPaginated($modelName=null){
		if (!isset($modelName)){
			$modelName=$this->modelNames[0];
		}
		// set default options
		$defaultOptions=array(
				'fields'=>null,
				'orderBy'=>$modelName.".created",
				'direction'=>'desc',
				'limit'=>20,
				'page'=>1,
				'recursive'=>null				
			);
		$options=Set::merge($defaultOptions,$this->namedArgs);
		// set recursive option		
		$this->{$modelName}->recursive=$options['recursive'];

		// set paginate options
		$this->paginate = array( 
								'fields'=>explode(',',$options['fields']),
								'order' => array($options['orderBy'] => $options['direction']),
								'limit'=>$options['limit'],
								'page'=>$options['page'],								
								'recursive'=>$options['recursive'],
								);					
		return $this->paginate();		
	}
}
?>