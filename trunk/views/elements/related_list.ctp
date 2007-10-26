<?php 
$defaultOptions=array('linkTitle'=>'name','linkToField'=>'id','action'=>'view');
$options=Set::Merge($defaultOptions,$options);
if (!isset($options['controller'])){
	$options['controller']=Inflector::Pluralize($options['relatedModelName']);
}
?>
<div class="related projects">
	<h3><?php  __('Related');?> <?php __(Inflector::pluralize($options['relatedModelName']));?></h3>
	<?php if (!empty($data[$options['relatedModelName']])):?>
	<ul>
	<?php
		$i = 0;
		foreach ($data[$options['relatedModelName']] as $row):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<li <?php echo $class ?>>
			<?php echo $html->link($row[$options['linkTitle']],array('controller'=>$options['controller'],'action'=>$options['action'],$row[$options['linkToField']])) ?>
		</li>
	<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>