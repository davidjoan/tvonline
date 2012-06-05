<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <?php include_javascripts() ?>
        <?php include_stylesheets() ?>
        <link rel="shortcut icon" href="/favicon.gif" />
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
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=216640968456264";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="todo">
            <div class="fondo">
                <?php include_partial('General/header') ?>
                <div id="centro">
                    <?php include_partial('General/banner') ?>

                    <div id="colcentro" class="izquierda">
                        <?php include_partial('Home/video') ?>
                    </div>
                    <?php include_partial('General/social') ?>

                    <div class="breaker"></div>
                    <div id="novedades" class="alpha60">
                        <?php include_partial('General/menu') ?>

                        <div id="videos">
                            <?php echo $sf_content ?>


                        </div>
                    </div>
                </div>
                <?php include_partial('General/footer') ?>
            </div>
        </div>
    </body>

</html>