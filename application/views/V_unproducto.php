<div class="container">
<ul class="list-inline">
<?php foreach($productos as $producto ): ?>
    <li><a href="#"><img class="img-responsive" width="200" src="<?=base_url().'assets/img/'.$producto->imagen?>"></a></li>
    <h4><?=$producto->nombre ?></h4></br>
    <h4><?=$producto->nombre ?></h4>
    <h4><?=$producto->nombre ?></h4>   
    <p><?=$producto->descripcion ?></p>   
<?php endforeach; ?>
</ul>
</div>