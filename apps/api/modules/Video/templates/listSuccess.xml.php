<?php 
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header("Content-Type:text/xml"); ?>
<videos>
<?php foreach ($pager->getResults() as $obj): ?>
  <video>
    <id><?php echo $obj->getId();?></id>
    <title><?php echo $obj->getTitleStr();?></title>
    <categoryid><?php echo $obj->getCategoryId(); ?></categoryid>
    <category><?php echo $obj->getCategoryName(); ?></category>
    <time><?php echo $obj->getTimeFormatted();?></time>
    <video><?php echo $obj->getVideo();?></video>
    <image><?php echo $obj->getImage();?></image>
    <new><?php echo $obj->getNewStr();?></new>
    <live><?php echo $obj->getLiveStr();?></live>
    <slug><?php echo $obj->getSlug();?></slug>
    <active><?php echo $obj->getActiveStr();?></active>
  </video>
<?php endforeach; ?>
</videos>