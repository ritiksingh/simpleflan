<?php

if (!isset($pageName)){
	$pageName=$this->name.'_'.$this->action;
}

$mainNav=array(
		array('label'=>__("Inicio",true),'url'=>'/','name'=>'home'),
		array('label'=>__("Nosotros",true),'url'=>'/pagina/nosotros','name'=>'nosotros'),		
		array('label'=>__("Servicios",true),'url'=>'/pagina/servicios','name'=>'Categories_index'),
		array('label'=>__("Clientes",true),'url'=>'/pagina/clientes','name'=>'Clients_index'),
		array('label'=>__("Proyectos",true),'url'=>'/pagina/proyectos','name'=>'Projects_index'),
		array('label'=>__("Contacto",true),'url'=>'/pagina/contacto','name'=>'contacto'),
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

