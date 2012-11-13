<div class="txtSeccion"><?php echo $category->Translation[$sf_user->getCulture()]->name; ?> </div>
<ul id="mycarousel" class="jcarousel-skin-tango">
    <?php foreach ($videos as $key => $video): ?>
        <li>
            <div class="itemtodo alpha70 redondo">
                <div class="breaker"></div>
                <div class="itemvideo redondo" style="background-color:#666">
                    <?php echo link_to(image_tag(sfConfig::get('app_video_images_path') . '/' . $video->getImage(), array('border' => 0, 'width' => 100, 'height' => 75, 'alt' => $video->Translation['es']->title)),"@homepage"); ?>
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