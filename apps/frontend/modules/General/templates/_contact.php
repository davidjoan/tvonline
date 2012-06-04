<?php $category_id = $sf_request->getParameter('category'); ?>
<?php $category    = Doctrine::getTable('Category')->findOneById($category_id); ?>

<table cellspacing="0" cellpadding="0" border="0" background="/images/frontend/meio.jpg" width="100%">
  <tr>
    <td width="25" height="20"><img width="19" height="12" src="/images/frontend/ponto.jpg"></td>
    <td class="brancotxt" style="text-align: left;">
      <div id="title_category">  
      <?php if($category_id == ''): ?>
      <?php echo __('Novedades:')?>
      <?php else: ?>
      <?php echo $category->Translation[$sf_user->getCulture()]->name; ?>:
      <?php endif; ?>
      </div>
    </td>
    <td align="right" width="420">
      <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td align="right" width="90" nowrap="nowrap" class="ajuda04">
          </td>
          <td background="/images/frontend/ajuda03.gif" width="10"></td>
          <td align="right" nowrap="nowrap" class="ajuda02">
            <?php echo link_to(__('Cont&aacute;ctenos'), '@contact', array('class' => 'contact linkpequeno', 'id' => 'contact')); ?>
            </td>
          <td background="/images/frontend/ajuda01.gif" width="27">&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
</table>