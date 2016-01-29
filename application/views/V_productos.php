<div class="container">
    <ul class="list-inline">
        <?php foreach($productos as $producto ): ?>
        <li><a href="<?=site_url("Un_producto/mostrar/".$producto->id_producto)?>"><img class="img-responsive" width="200" src="<?=base_url().'assets/img/'.$producto->imagen?>"></li></a>
                <h4><?=$producto->nombre ?></h4>
        <?php endforeach; ?>
    </ul>
</div>
