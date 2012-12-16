<?php 
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header("Content-Type:text/xml"); ?>
<?php decorate_with(false); ?>
<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/">
<channel> 
<title>Perutvonline Playlist</title> 
<?php foreach($videos as $video): ?>
<item>
<title><?php echo utf8_encode($video->getTitleEs()); ?></title>
<media:content url="<?php echo utf8_encode("http://233803962.r.cdnstreaming.net/".$video->getVideo()); ?>" />
<?php if($video->getImage() <> ""): ?>
<media:thumbnail url="http://www.perutvonline.com/uploads/video_images/<?php echo utf8_encode($video->getImage()); ?>" />
<?php endif; ?>
<description><?php echo utf8_encode($video->Translation['es']->description); ?></description>
</item> 
<?php endforeach; ?>
</channel> 
</rss>