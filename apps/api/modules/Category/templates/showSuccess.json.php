<?php 
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json'); ?>
{ 
  "category" : {
    "id" : "<?php echo $obj->getId();?>",
    "name" : "<?php echo $obj->getNameEs();?>",
    "slug" : "<?php echo $obj->getSlug();?>",
    "active" : "<?php echo $obj->getActiveStr();?>"
  }
}