<?php 
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
$count = count($pager->getResults()); 
$i = 0; ?>
{ 
  "categories" : [
<?php foreach ($pager->getResults() as $obj): ?>
  <?php $i++;?>
  {
     "id" : "<?php echo $obj->getId();?>",
    "name" : "<?php echo $obj->getNameStr();?>",
    "image" : "<?php echo $obj->getImage();?>",
    "slug" : "<?php echo $obj->getSlug();?>"
  }<?php echo ($count == $i ? '' : ','); ?>
<?php endforeach; ?>
]}