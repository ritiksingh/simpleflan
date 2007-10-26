<?php
/**
* Image Helper
*/
class ImagerHelper extends Helper
{
	var $helpers=array("Html");

	function image($image,$options=null){
		$options=$this->__setOptions($options);
		$url= $this->__getFolder($options['modelName'],$image).$options['size']."_".$options['fieldName'].".".$this->decodeContent($image[$options['fieldName']]);
		return $this->Html->image($url);
	}
	
	function imageLink($image,$options=null,$linkOptions=null){
		$options=$this->__setOptions($options);
		if (!isset($options['sourceSize'])){
			$options['sourceSize']=$options['size'];
		}

		if (!isset($options['linkSize'])){
			$options['linkSize']=$options['sourceSize'];
		}
		
		$linkOptions=Set::merge(array('escape'=>false),$linkOptions);
		
		$imageUrl= $this->__getFolder($options['modelName'],$image).$options['sourceSize']."_".$options['fieldName'].".".$this->decodeContent($image[$options['fieldName']]);
		$linkUrl= APP_ROOT.$this->base."/img".$this->__getFolder($options['modelName'],$image).$options['linkSize']."_".$options['fieldName'].".".$this->decodeContent($image[$options['fieldName']]);
		return $this->Html->link($this->Html->image($imageUrl),$linkUrl,$linkOptions);
	}	

	function decodeContent($content) {
		$contentsMaping=array(
	      "image/gif" => "gif",
	      "image/jpeg" => "jpg",
	      "image/pjpeg" => "jpg",
	      "image/x-png" => "png",
	      "image/jpg" => "jpg",
	      "image/png" => "png",
	      "application/x-shockwave-flash" => "swf",
	      "application/pdf" => "pdf",
	      "application/pgp-signature" => "sig",
	      "application/futuresplash" => "spl",
	      "application/msword" => "doc",
	      "application/postscript" => "ps",
	      "application/x-bittorrent" => "torrent",
	      "application/x-dvi" => "dvi",
	      "application/x-gzip" => "gz",
	      "application/x-ns-proxy-autoconfig" => "pac",
	      "application/x-shockwave-flash" => "swf",
	      "application/x-tgz" => "tar.gz",
	      "application/x-tar" => "tar",
	      "application/zip" => "zip",
	      "audio/mpeg" => "mp3",
	      "audio/x-mpegurl" => "m3u",
	      "audio/x-ms-wma" => "wma",
	      "audio/x-ms-wax" => "wax",
	      "audio/x-wav" => "wav",
	      "image/x-xbitmap" => "xbm",             
	      "image/x-xpixmap" => "xpm",             
	      "image/x-xwindowdump" => "xwd",             
	      "text/css" => "css",             
	      "text/html" => "html",                          
	      "text/javascript" => "js",
	      "text/plain" => "txt",
	      "text/xml" => "xml",
	      "video/mpeg" => "mpeg",
	      "video/quicktime" => "mov",
	      "video/x-msvideo" => "avi",
	      "video/x-ms-asf" => "asf",
	      "video/x-ms-wmv" => "wmv"
		);
		if (isset($contentsMaping[$content]))
			return $contentsMaping[$content];
		else return $content;
	}
	
	function __setOptions($options){
		return Set::merge(array(
				'size'=>'medium',
				'modelName'=>'image',
				'fieldName'=>'image'
			),$options);
	}

	function __getFolder($modelName="image", $record) {
		return  '/'. Inflector::camelize($modelName) .'/'. $record['id'] . '/';
	}
	
	function __getFullFolder($modelName="image",$record) {
		return  WWW_ROOT . IMAGES_URL.DS. Inflector::camelize($modelName) .DS. $record['id'] .DS;
	}	

}

?>