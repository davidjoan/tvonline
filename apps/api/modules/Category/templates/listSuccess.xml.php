<?php 
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header("Content-Type:text/xml"); ?>
<categories>
<?php foreach($pager->getResults() as $obj): ?>
  <category>
    <id><?php echo $obj->getId();?></id>
    <name><?php echo $obj->getNameStr();?></name>
    <slug><?php echo $obj->getSlug();?></slug>
    <active><?php echo $obj->getActiveStr();?></active>
  </category>
<?php endforeach; ?>
</categories>