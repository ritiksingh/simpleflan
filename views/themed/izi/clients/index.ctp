<div id="clients">
	<h2>Nuestros Clientes</h2>
	<?php foreach ($clients as $client): ?>
		<div class="client">
			<h3><?php echo $client['Client']['name'] ?></h3>
			<div class="image">
				<?php echo $imager->image($client['Client'],array('modelName'=>'Client','size'=>'small')) ?>				
			</div>
			<div class="description">
				<?php echo $textile->textileThis($client['Client']['description']) ?>
			</div>
			<div class="more_from_client">
				<?php echo $html->link("proyectos para este cliente", "/cliente/{$client['Client']['slug']}",array('class'=>"more")) ?>
			</div>
		</div>
	<?php endforeach ?>
</div>