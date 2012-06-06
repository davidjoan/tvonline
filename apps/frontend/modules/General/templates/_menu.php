<?php $menus = Doctrine::getTable('Category')->getMenu($sf_user->getCulture()); ?>
<div id="colorinchis">
    <?php foreach ($menus as $key => $menu): ?>
        <div class="txtfdocolor<?php echo $key + 1; ?>"><?php echo link_to($menu->Translation[$sf_user->getCulture()]->name, '@homepage?sf_culture=' . $sf_user->getCulture() . '&category=' . $menu->getId()); ?></div>
    <?php endforeach; ?>
</div>