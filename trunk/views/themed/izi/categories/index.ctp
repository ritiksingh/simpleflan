<div id="categories">
	<h2>Nuestros Servicios</h2>
	<?php foreach ($categories as $category): ?>
		<div class="category">
			<h3><?php echo $category['Category']['name'] ?></h3>
			<div class="image">
				<?php echo $imager->image($category['Category'],array('modelName'=>'Category','size'=>'small')) ?>				
			</div>
			<div class="description">
				<?php echo $textile->textileThis($category['Category']['description']) ?>
			</div>
			<div class="more_from_category">
				<?php echo $html->link("ver proyectos en {$category['Category']['name']}", "/servicio/{$category['Category']['slug']}",array('class'=>"more")) ?>
			</div>			
		</div>
	<?php endforeach ?>
</div>