<div class="container">
<ul class="list-inline">
<?php foreach($productos as $producto ): ?>
    <li><a href="#"><img src="<?=base_url().'assets/img/'.$producto->imagen?>"></li></a>
<?php endforeach; ?>
</ul>
</div>