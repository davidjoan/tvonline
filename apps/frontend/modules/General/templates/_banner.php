<?php $banners = Doctrine::getTable('Banner')->getBanners(); ?>
<?php $vivo    = Doctrine::getTable('Video')->getVideoVivo('es'); ?>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
    <td align="right" class="brancotxt"><?php echo __('Publicidad')?></td>
    <td width="25" height="20" align="right"><img src="/images/frontend/ponto.jpg" width="19" height="12"></td>
  </tr>
  <?php foreach($banners as $key => $banner): ?>
  <tr>
    <td height="50" class="brancotxt" align="right">
      <table width="185" cellspacing="0" cellpadding="0" border="0" height="40" class="borda">
        <tr>
          <td>
			<?php echo link_to(image_tag(sfConfig::get('app_banner_images_path').'/'.$banner->getImage()     , array('border' => 0, 'width' => 185,'height' => 40)), $banner->getUrl() , array('title' => $banner->getUrl(), 'target' => '_blank')) ?>
		  </td>
        </tr>
	  </table>
    </td>
    <td align="right">&nbsp;</td>
  </tr>
  <?php endforeach;?>
  <?php if($vivo <> null):?>
    <tr>
    <td height="100" class="brancotxt" align="right">
      <table width="185" cellspacing="0" cellpadding="0" border="0" height="100" class="borda" style="text-align: center; vertical-align: top; background-color: #000000; color:#CC0000;  font-size: small; font-weight: normal">
        <tr>
          <td>
	    <p style="font-size: large; font-weight: bold">
                <?php if($vivo->getVideo() <> null): ?>
                <?php echo link_to
                           (
                             $vivo->Translation['es']->title, 
                             '@homepage?category='.$vivo->getCategoryId().'&video='.$vivo->getId() , 
                             array
                             (
                               'title' => $vivo->Translation['es']->title,
                               'onClick' => sprintf(
                                    "cargaVideo('%s',%s);
                                    document.getElementById('btnLoad2').style.display = 'inline';
                                    $('#MPlay1').html('');
                                    return false;",
                                    sfContext::getInstance()->getController()->genUrl('@load_video'),
                                    $vivo->getId()
                                     )
                             )
                           ) ?>
                <?php else: ?>
                <?php echo $vivo->Translation['es']->title; ?>
                <?php endif; ?>
            <p>
            <?php echo wrap_text($vivo->Translation['es']->description); ?>                                    
          </td>
        </tr>
	  </table>
    </td>
    <td align="right">&nbsp;</td>
  </tr>
  <?php endif; ?>
</table>