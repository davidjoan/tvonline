<?php 
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header("Content-Type:text/xml"); ?>
<?php decorate_with(false); ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ; ?>
<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/" xmlns:jwplayer="http://developer.longtailvideo.com/trac/" xmlns:content="http://purl.org/rss/1.0/modules/content/">
<channel> 
<title>Perutvonline Playlist</title> 
<?php foreach($videos as $video): ?>
<item>
<title><?php echo utf8_encode($video->getTitleEs()); ?></title> 
<enclosure url="<?php echo utf8_encode("http://233803962.r.cdnstreaming.net/".$video->getVideo()); ?>" type="video/mp4" length="<?php echo $video->getTime(); ?>" />
<media:content url="<?php echo utf8_encode("http://233803962.r.cdnstreaming.net/".$video->getVideo()); ?>" />
<?php if($video->getImage() <> ""): ?>
<media:thumbnail url="http://www.perutvonline.com/uploads/video_images/<?php echo utf8_encode($video->getImage()); ?>" />
<?php endif; ?>
<description><?php echo utf8_encode($video->Translation['es']->description); ?></description>
<jwplayer:duration><?php echo $video->getTime(); ?></jwplayer:duration> 
<jwplayer:provider>http</jwplayer:provider>
<jwplayer:http.startparam>starttime</jwplayer:http.startparam>
</item> 
<?php endforeach; ?>
</channel> 
</rss>