<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" class="rodape" style="padding-top: 6px;padding-bottom:6px;">
	&nbsp;<?php echo link_to(image_tag('general/icons/facebook.png', array('size' => '30x30', 'alt' => 'Facebook')), 'http://es-la.facebook.com/people/Perutvonline-Tvonline/100002192898500', array('title' => 'Facebook', 'target' => '_BLANK')) ?>
	<!--&nbsp;<?php //echo link_to(image_tag('general/icons/youtube.png', array('size' => '30x30')), 'http://www.youtube.com/user/perutvonline1', array('title' => 'You tube', 'target' => '_BLANK')) ?>-->
	&nbsp;<?php echo link_to(image_tag('general/icons/twitter.png', array('size' => '30x30', 'alt' => 'Twitter')), 'http://twitter.com/#!/perutvonline', array('title' => 'Twitter', 'target' => '_BLANK')) ?>
	

	</td>
    <td align="right" class="rodape"  valign="middle"><b>
    &copy; 2010 <?php echo link_to('peruTVonline.com', '/') ?> <?php echo __('Todos los derechos reservados')?> - <?php echo 344783+Doctrine::getTable('Visit')->count(); ?> <?php echo __('Visitas')?></b>
    </td>
    <td width="25">&nbsp;</td>
  </tr>
</table>