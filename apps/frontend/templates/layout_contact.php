<!doctype html>
<html lang=es>
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <?php include_javascripts() ?>
        <?php include_stylesheets() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="/skins/tango/skin.css" />
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#mycarousel').jcarousel({
                    wrap: 'circular'
                });
            });
        </script>
    </head>

    <body>
        <div class="todo">

            <div>
                <div>
                    <?php echo link_to(image_tag('frontend/logo', array('border' => 0, 'width' => 380, 'height' => 66, 'alt' => 'Perú TV Online')), '@homepage?sf_culture=' . $sf_user->getCulture()); ?>

                </div>
                <?php echo $sf_content ?>
            </div>

    </body>
</html>