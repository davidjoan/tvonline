<table>
  <tr>
    <td class="left">
      <?php echo link_to(image_tag('general/logo.jpg', array('height' => '60px')), 'http://www.cusa.com.pe') ?>
    </td>
    <td class="right">
    <?php echo link_to('Ayuda', 'http://www.perutvonline.com/files/manual-usuario-perutvonline.docx') ?>&nbsp;&nbsp;
      <?php echo image_tag('backend/secure_user.png') ?>&nbsp;<?php echo $sf_user->getUsername() ?>
    </td>
  </tr>
</table>
