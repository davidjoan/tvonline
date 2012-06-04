<?php $is_selected = $sf_user->getCurrentRouteName() == $uri ?>
<tr>
  <td height="21" align="right"><img height="21" border="0" width="10" src="/images/frontend/b2menu.jpg"></td>
  <td nowrap="" background="/images/frontend/b3menu.jpg" valign="top" class="menu">
    <?php echo link_to
               (
                 $title, 
                 $uri, 
                 array
                (
                  'class' => 'menu',
                  'onClick' => sprintf(
                                       "cargaTitle('%s',%s);
                                       cargaCategoria('%s',%s);
                                       document.getElementById('btnLoad').style.display = 'inline';
                                       $('#slider-one').html('');
                                       return false;",
                                       sfContext::getInstance()->getController()->genUrl('@load_title'),
                                       $category,
                                       sfContext::getInstance()->getController()->genUrl('@load_category'),
                                       $category
                                     )
                 )
               ) ?>        

                     
  </td>
  <td width="4"><img height="21" width="4" src="/images/frontend/b4menu.jpg"></td>
</tr>
<tr>
 <td colspan="3">
   <div style="display:none" id="Item4"></div>
 </td>
</tr>

