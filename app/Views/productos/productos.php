<?= $this->extend('plantilla/layout'); ?>

<?php

use App\Controllers\Productos;

echo $this->section('contenido'); ?>

<h2>Productos</h2>

<table class="table">

    <thead>
        <th>Código</th>
        <th>Nombre</th>
        <th>Stock</th>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto) : ?>
            <tr>
                <td><?php echo $producto->codigo; ?></td>
                <td><?php echo $producto->nombre; ?></td>
                <td><?php echo $producto->stock; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo $this->endSection(); ?>
<?php echo $this->section('scripts'); ?>
<script>
    // alert('holiwi');
</script>
<?php echo $this->endSection(); ?>