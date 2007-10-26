<?php

if (!isset($pageName)){
	$pageName=$this->name.'_'.$this->action;
}

$mainNav=array(
		array('label'=>__("Home",true),'url'=>'/','name'=>'home'),
		array('label'=>__("About Us",true),'url'=>'/page/about','name'=>'about'),		
		array('label'=>__("Our Services",true),'url'=>'/categories','name'=>'Categories_index'),
		array('label'=>__("Clients",true),'url'=>'/clients','name'=>'Clients_index'),
		array('label'=>__("Portfolio",true),'url'=>'/projects','name'=>'Projects_index'),
		array('label'=>__("Contact",true),'url'=>'/feedback/send','name'=>'FeedBack_send'),
	)
?>

<div id="navigation">
	<ul>
		<?php foreach ($mainNav as $item): ?>
			<?php $item['class']=($pageName==$item['name'])?"current":""?>
			<li class="<?php echo $item['class'] ?>"><?php echo $html->link(__($item['label'],true),$item['url'])?></li>
		<?php endforeach ?>
	</ul>
</div>

