<?php if($category_id == ''): ?>
  <?php echo __('Novedades:')?>
<?php else: ?>
  <?php echo $category->Translation[$sf_user->getCulture()]->name; ?>:
<?php endif; ?>