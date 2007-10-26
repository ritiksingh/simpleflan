<?php

$mainNav=array(
		array('label'=>__("Projects",true),'controller'=>'Projects','class'=>'projects'),
		array('label'=>__("Clients",true),'controller'=>'Clients','class'=>'clients'),
		array('label'=>__("Categories",true),'controller'=>'Categories','class'=>'categories'),
		array('label'=>__("Content",true),'controller'=>'Pages','class'=>'sections'),
		array('label'=>__("Users",true),'controller'=>'Users','class'=>'users'),		
		array('label'=>__("Presentation",true),'controller'=>'Themes','class'=>'themes'),		
	)
?>

<div id="main_nav">
	<ul>
		<?php foreach ($mainNav as $item): ?>
			<?php $item['class'].=($this->name==$item['controller'])?" current":""?>
			<li class="<?php echo $item['class'] ?>"><?php echo $html->link(__($item['label'],true),array('controller'=>$item['controller'])) ?></li>
		<?php endforeach ?>
	</ul>
</div>

