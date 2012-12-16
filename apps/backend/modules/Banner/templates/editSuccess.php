<?php slot('title') ?>
  Banners
<?php end_slot() ?>

<?php slot('subtitle') ?>
  <?php echo $form->isNew() ? 'Agregar' : 'Editar' ?> Banner
<?php end_slot() ?>

<?php include_component('Crud', 'edit', array('form' => $form)) ?>
