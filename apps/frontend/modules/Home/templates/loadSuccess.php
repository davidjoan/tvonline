<?php if(count($videos) > 0):?>
  <?php foreach($videos as $key => $video):?>
    <li>
      <?php echo link_to
                 (
                   image_tag(sfConfig::get('app_video_images_path').'/'.$video->getImage() , array('border' => 0,'width' => 67,'height' => 50, 'alt' => $video->Translation['es']->title)), 
                   '@homepage?category='.$video->getCategoryId().'&video='.$video->getId(),
                   array
                   (
                     'onClick' => sprintf(
                                    "cargaVideo('%s',%s);
                                    document.getElementById('btnLoad2').style.display = 'inline';
                                    $('#MPlay1').html('');
                                    return false;",
                                    sfContext::getInstance()->getController()->genUrl('@load_video'),
                                    $video->getId()
                                     ),'title' => $video->Translation['es']->title
                   )
                  ); 
      ?>
    </li>
  <?php endforeach; ?>
<?php endif; ?>
<script type="text/javascript">
$(function(){
	$('#slider-one').movingBoxes({
		startPanel   : 4,
		width        : 600,
		wrap         : true,
		buildNav     : false
	});
});
</script>