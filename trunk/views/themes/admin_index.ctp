<h2 class='page_title'>Themes</h2>
<div id="themes">
	<?php foreach ($data['Theme'] as $theme): ?>
		<?php if($theme['active']) $class="active"; else $class=null;?>
		<div class="theme <?php echo $class ?>">
			<div class="image">
				<?php $image=$html->image(APP_ROOT.$this->base.$theme['thumbnail'],array('width'=>'300','height'=>'250')) ?>
				<?php echo $html->link($image,array('action'=>'set',$theme['path']),array('escape'=>false)) ?>
			</div>
			<h2>
				<?php echo $theme['name'] ?>
				<span>by <?php echo $html->link($theme['author'],$theme['url']) ?></span>
			</h2>
			<div class="description">
				<?php echo $theme['description'] ?>
			</div>
		</div>
	<?php endforeach ?>	
</div>
