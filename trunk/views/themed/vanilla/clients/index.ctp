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
				<?php echo $html->link("see projects for this client", array('action'=>'view',$client['Client']['slug']),array('class'=>"more",'escape'=>false)) ?>
			</div>
		</div>
	<?php endforeach ?>
</div>