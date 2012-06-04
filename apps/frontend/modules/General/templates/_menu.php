<?php $menus = Doctrine::getTable('Category')->getMenu($sf_user->getCulture()); ?>

  <table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tr>
      <td height="20" width="25"><img height="12" width="19" src="/images/frontend/ponto.jpg"></td>
      <td class="brancotxt"><?php echo __('Programaci&oacute;n On Demand')?></td>
      <td>&nbsp;</td>
    </tr>
    <?php foreach($menus as $key => $menu): ?>
      <?php include_partial('General/menu_item', array('title' => $menu->Translation[$sf_user->getCulture()]->name    , 'uri' => '@homepage?sf_culture='.$sf_user->getCulture().'&category='.$menu->getId(), 'category' => $menu->getId(), 'culture' => $sf_user->getCulture())) ?>
    <?php endforeach; ?>
  </table>