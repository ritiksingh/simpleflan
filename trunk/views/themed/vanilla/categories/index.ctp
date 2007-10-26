<div id="categories">
	<h2>Nuestros Servicios</h2>
	<?php foreach ($categories as $category): ?>
		<div class="category">
			<h3><?php echo $category['Category']['name'] ?></h3>
			<div class="description">
				<?php echo $textile->textileThis($category['Category']['description']) ?>
			</div>
			<div class="more_from_category">
				<?php echo $html->link("see {$category['Category']['name']} examples &raquo;", array('action'=>'view',$category['Category']['slug']),array('class'=>"more",'escape'=>false)) ?>
			</div>			
		</div>
	<?php endforeach ?>
</div>