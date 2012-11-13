<?php 
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json'); ?>
{ 
  "video" : {
    "id" : "<?php echo $obj->getId();?>",
    "title" : "<?php echo $obj->getTitleEs();?>",
    "category" : "<?php echo $obj->getCategoryName(); ?>",
    "time" : "<?php echo $obj->getTime();?>",
    "video" : "<?php echo $obj->getVideo();?>",
    "image" : "<?php echo $obj->getImage();?>",
    "new" : "<?php echo $obj->getNewStr();?>",
    "live" : "<?php echo $obj->getLiveStr();?>",
    "slug" : "<?php echo $obj->getSlug();?>",
    "active" : "<?php echo $obj->getActiveStr();?>"
  }
}