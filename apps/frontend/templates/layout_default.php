<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <!-- Required CSS -->
  <link type="text/css" href="/css/frontend/jquery/movingboxes.css" media="screen" charset="utf-8" rel="stylesheet"  />
  <!--[if lt IE 9]>
  <link type="text/css" href="/css/frontend/jquery/movingboxes-ie.css" rel="stylesheet" media="screen" />
  <![endif]-->
  </head>     
  
<body leftmargin="0" topmargin="0">
<table width="1024" height="900" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top" background="/images/frontend/miolo.jpg">
      <table width="1024" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="60" align="left"><img src="/images/general/logo.png" width="230" height="48" /></td>
      </tr>
      <tr>
        <td align="center">
        <?php echo $sf_content ?>
        </td>
      </tr>
    </table>

    </td>
  </tr>
</table>
</body>
</html>