<?php
/*! \brief  Theme Model
	
	&copy; Copyright 2007 Nolimit studio - . All Rights Reserved.

	\author  Nolimit studio
	\author $LastChangedBy$
 	\date 2007-10-25
	\date $LastChangedDate$
	\version $Rev$
	\sa
*/
class Theme extends AppModel {
	var $name = 'Theme';
	var $useTable=false;
	var $path;
	
	function __construct(){
		$viewPaths=Configure::read('viewPaths');
		$this->path=$viewPaths[0].'themed'.DS;
		$this->data['Theme']=null;
		parent::__construct();
	}
	
	function findAll(){		
		$data=(array('Theme'=>array()));
		if (is_dir($this->path)){
			chdir($this->path);
			$dirs=glob('*',GLOB_ONLYDIR);
		}
		foreach ($dirs as $dir){
			if ($info=$this->getInfo($dir)){
				if ($info['active']){
					$activeInfo=$info;
				}else{
					$data['Theme'][]=$info;					
				}				
			}		
		}		

		if(isset($activeInfo)){
			array_unshift($data['Theme'],$activeInfo);
		}
		$this->data=$data;
		return $data;
	}
	
	function find($path){
		if (empty($this->data['Theme'])){
			$data=$this->findAll();
		}else{
			$data=$this->data;
		}
		$return='false';
		foreach($data['Theme'] as $theme){
			if ($theme['path']==$path){
				$return=$theme;
			}
		}
		return $return;
	}
	
	function getInfo($dir){
		$infoFileName=$this->path.$dir.DS.'theme_info.php';		
		$defaultInfo=array(
						'name'=>$dir,
						'path'=>$dir,
						'full-path'=>$this->path.$dir,
						'thumbnail'=>'thumbnail.png',
						'description'=>'Simpleflan Theme',
						'author'=>'Don Galleto',
						'url'=>'http://simpleflan.com',
						'licence'=>'Creative Commons Attribution Share Alike',
						'active'=>(	$dir==Configure::read("simpleflan.theme")	),
						);

		if (file_exists($infoFileName)){
			include($infoFileName);
			if (isset($themeInfo)){
				$themeInfo=Set::merge($defaultInfo,$themeInfo);				
				$themeInfo['thumbnail']='/css/themed/'.$themeInfo['path'].'/images/'.$themeInfo['thumbnail'];
				return $themeInfo;
			}else{
				return false;
			}
		}
	}
} // END class Theme

?>