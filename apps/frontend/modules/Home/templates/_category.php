<script>
function goToPlaylist()
{
jwplayer("container").remove();            
jwplayer("container").setup({
modes: [
{ type: "flash", src: "/js/jwplayer/player.swf" },
{ type: "html5" }],
autostart: true,
controlbar: "none",
volume: 80,
stretching: "fill",
height:"323",
width:"586",
skin: "/skins/glow/glow.zip",
file: "/perutvonline/playlist.xml",
repeat: "always",
"viral.onpause": false,
"viral.oncomplete": false,
"viral.allowmenu": false,
    events: {
        onPause: function(event) {jwplayer("container").play();}
    }
});

    jwplayer().onReady(function() {
        var seconds = new Date().getMinutes()*60 + new Date().getSeconds();
        var playlist = this.getPlaylist();
        var offset = 0;
        //this.stop();
        for (var index=0; index < playlist.length; index++) {
            var duration = Math.round(playlist[index]['duration']);
            if(offset + duration > seconds) {
                this.playlistItem(index);
                this.play();
                break;
            } else {
                offset += duration;
            }
        }
    });
    }
    function playOnDemand(video,url)
    {
    jwplayer('container').remove();
    jwplayer('container').setup(
    {
    modes: [
    { type: "flash", src: "/js/jwplayer/player.swf" },
    { type: "html5" }
    ],
    stretching: "fill",
    height:"323",
    width:"586",
    skin: "/skins/glow/glow.zip",
    autostart: true,   
    file: 'http://233803962.r.cdnstreaming.net/'+video,
    controlbar: 'over',
    "viral.onpause": false,
    "viral.oncomplete": false,
    "viral.allowmenu": false,  
    repeat: 'none', 
    events: { 
    onComplete: function(event) { goToPlaylist();},
    onPause: function(event) {
    if(url == "")
    {
    jwplayer("container").play();
    }else
    {
    jwplayer("container").play();
    window.location= url;
    }
    }
    }
    });
    }
</script>
<div class="txtSeccion"><?php echo $category->Translation[$sf_user->getCulture()]->name; ?> </div>
<ul id="mycarousel" class="jcarousel-skin-tango">
    <?php foreach ($videos as $key => $video): ?>
        <li>
            <div class="itemtodo alpha70 redondo">
                <div class="breaker"></div>
                <div class="itemvideo redondo" style="background-color:#666">
                    <?php if($video->getType() == 'E'): ?>
                    <?php echo link_to(image_tag(sfConfig::get('app_video_images_path') . '/' . $video->getImage(), array('border' => 0, 'width' => 100, 'height' => 75, 'alt' => $video->Translation['es']->title)),"@live?sf_culture=".$sf_user->getCulture().'&slug='.$video->getSlug()); ?>
                    <?php else: ?>
                    <?php echo link_to_function(image_tag(sfConfig::get('app_video_images_path') . '/' . $video->getImage(), array('border' => 0, 'width' => 100, 'height' => 75, 'alt' => $video->Translation['es']->title)),"playOnDemand('".$video->getVideo()."','".$video->Translation['es']->description."');"); ?>
                    <?php endif; ?> 
                </div>
                <div class="itemtxt"><?php echo $video->getTitleEs(); ?></div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
  <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#mycarousel').jcarousel({
                    wrap: 'circular'
                });
                $("#contact").fancybox({
                    'transitionIn' : 'none',
                    'transitionOut' : 'none',
                    'autoScale' : false,
                    'type' : 'iframe',
                    'width' : 400,
                    'height' : 400,
                    'scrolling' : 'no'
                });
            });
  </script>