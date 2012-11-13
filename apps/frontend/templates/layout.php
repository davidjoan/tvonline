<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=980">
        <meta name="google-site-verification" content="IL8FIc8GmPjMvGHph_GxleDrP5I1KUpVNlQAEL7LWX8" />
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <?php include_javascripts() ?>
        <?php include_stylesheets() ?>
        <meta name="google-site-verification" content="BF0Fs1ACukEc0wgruLpb8p4N8fqHIeHhG6DLZIDTTLg" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="/skins/tango/skin.css" />     
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25159130-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

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
                            <?php echo $sf_content; ?>
                        </div>
                    </div>
                </div>
                <?php include_partial('General/footer') ?>
            </div>
        </div>
    </body>

</html>