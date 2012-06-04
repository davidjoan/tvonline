<table width="940" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="248" align="right">
      <?php echo link_to(image_tag('frontend/logo.gif'     , array('border' => 0, 'width' => 230, 'height' => 48)), '@homepage' , array('title' => 'Peru TV online')) ?>
    </td>
    <td>&nbsp;</td>
    <td align="right">
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="right"><?php echo link_to(image_tag('frontend/band_peru.gif'     , array('border' => 0, 'width' => 23, 'height' => 17)), '@homepage?sf_culture=es' , array('title' => 'Peru TV online')) ?></td>
          <td width="30" align="right">
                <?php echo link_to(image_tag('frontend/band_eua.gif'     , array('border' => 0, 'width' => 23, 'height' => 17)), '@homepage?sf_culture=en' , array('title' => 'Peru TV online')) ?>
                </td>
                <td width="30" align="right">
                <?php echo link_to(image_tag('frontend/band_br.gif'     , array('border' => 0, 'width' => 23, 'height' => 17)), '@homepage?sf_culture=pt' , array('title' => 'Peru TV online')) ?>
                </td>
                <td width="25">
                    <!-- CultureFlags -->
                </td>
              </tr>
            </table>
           </td>
          </tr>
        </table>