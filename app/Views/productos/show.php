<?= $this->extend('plantilla/layout'); ?>

<?php echo $this->section('contenido'); ?>

<h2>Detalles del producto <?= $producto['nombre'] ?></h2>

<?php echo $this->endSection(); ?>