<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.gif" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <!-- Required CSS -->
  <link type="text/css" href="/css/frontend/jquery/movingboxes.css" media="screen" charset="utf-8" rel="stylesheet"  />
  <!--[if lt IE 9]>
  <link type="text/css" href="/css/frontend/jquery/movingboxes-ie.css" rel="stylesheet" media="screen" />
  <![endif]-->
  
<style type="text/css">			
body {
background-color: #000023;
<?php if(Doctrine::getTable('Theme')->getBackground() <> ''): ?>
	background-image: url(/uploads/theme_images/<?php echo Doctrine::getTable('Theme')->getBackground() ?>);
        background-repeat: no-repeat;
	background-position: center -50px;
	overflow-x: hidden;
<?php endif; ?>
}
</style>
<script type="text/javascript">
		$(document).ready(function() {
			$(".contact").fancybox({
				'width'		: 555,
				'height'	: 542,
				'autoScale'	: true,
				'transitionIn'	: 'none',
				'transitionOut'	: 'none',
				'type'		: 'iframe'
			});
	   });
           
           function cargaCategoria(url, category)
           {
             $("#slider-one").load(url,
	                {'category': category,'sf_culture': 'es'},
	                 function (XMLHttpRequest) {
                             document.getElementById('btnLoad').style.display   = 'none';    
                         });
             return false;
           }
           function cargaVideo(url, video)
           {
             $("#pantalla").load(url,
	                {'video': video,'sf_culture': 'es'},
	                 function (XMLHttpRequest) {
                             document.getElementById('btnLoad2').style.display   = 'none';    
                         });
             return false;
           }
           function cargaTitle(url, category)
           {
             $("#title_category").load(url,
	                {'category': category,'sf_culture': 'es'},
	                 function (XMLHttpRequest) {
                         });
             return false;
           }
</script>  
</head> 
<body style="margin-left: 0px; margin-top: 0px;">
  <table style="width: 100%;height: 100%;border: 0; padding: 0; border-collapse: collapse">
  <tr>
    <br/><br/>
    <td align="center" style="vertical-align:middle; width: 100%">

     <table width="940" height="549" border="0" cellpadding="0" cellspacing="0" class="borda">
      <tr>
        <td height="80" background="/images/frontend/top.jpg">
          <?php include_partial('General/header') ?>
        </td>
      </tr>
      <tr>
        <td valign="top">
		  <table width="940" height="469" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="226" valign="top" background="/images/frontend/menu.jpg">
              <?php include_partial('General/menu') ?>
            </td>
            <td valign="top" background="/images/frontend/miolo.jpg">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                    <table  style="width: 100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center">
                       <img border="0" src="/images/load.gif" style="display: none" id="btnLoad2"/>
                       <?php include_partial('Home/video') ?>
                    </td>
                    <td align="right" valign="top">
                      <?php include_partial('General/banner') ?>
                    </td>
                  </tr>
                </table></td>
              </tr>
            </table>
            <?php include_partial('General/contact'); ?>
            <table style="width: 100%;" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="20">&nbsp;</td>
                </tr>
                <tr>
                    <td style="height: 100" align="center" valign="middle" background="/images/frontend/iframe.jpg">
                    <img border="0" src="/images/load.gif" style="display: none" id="btnLoad">
                    <?php echo $sf_content ?>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                  <?php include_partial('General/footer') ?>
                  </td>
                </tr>
              </table></td>
          </tr>
        </table>
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>