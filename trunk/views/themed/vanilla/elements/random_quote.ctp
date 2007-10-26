<?php
$client=$this->requestAction("/clients/getRandom");
?>
<div id="top_quote">
	<blockquote>
		<?php echo $client['Client']['description'] ?>
	</blockquote>
	<p class="cite">
		<a href="<?php echo $client['Client']['url'] ?>"><?php echo $client['Client']['name'] ?></a>
	</p>
</div>