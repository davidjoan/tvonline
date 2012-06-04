<?php

/**
 * sfVideoWidget enables displaying video files inside a symfony form.
 *
 * @subpackage widget
 * @author     Javier Aguirre <javaguirre@ufocoders.com>
 */
class sfVideoWidget extends sfWidgetForm
{
  public function configure($options = array(), $attributes = array())
  {
    $this->addOption('player.width', sfConfig::get('app_video_width'));
    $this->addOption('player.height', sfConfig::get('app_video_height'));
    $this->addOption('player.autoload', sfConfig::get('app_video_autoload'));
    $this->addOption('player.autobuffering', sfConfig::get('app_video_autobuffering'));
    $this->addOption('url', '/sfVideoPlugin/flv/01.flv');
    $this->addOption('template.html',
'<a href="{url}"
  style="display:block;width: {player.width} ;height: {player.height}"
  id="player"></a>');
    $this->addOption('template.javascript',
'<script type="text/javascript" src="/sfVideoPlugin/js/flowplayer-3.1.4.min.js" ></script>
<script type="text/javascript">
  flowplayer("player", "/sfVideoPlugin/swf/flowplayer-3.1.5.swf", {
    clip: {
      autoPlay: false,
      autoBuffering: false
    }
  });
</script>');
  }

  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    $template_vars = array(
      '{player.width}' => $this->getOption('player.width'),
      '{player.height}' => $this->getOption('player.height'),
      '{player.autoload}' => $this->getOption('player.autoload'),
      '{player.autobuffering}' => $this->getOption('player.autobuffering'),
      '{url}' => $this->getOption('url')
    );

    $value = !is_array($value) ? array() : $value;
    $value['url'] = isset($value['url']) ? $value['url'] : '/sfVideoPlugin/flv/01.flv';
    return strtr($this->getOption('template.html') . $this->getOption('template.javascript'), $template_vars);
  }

  public function getJavascripts()
  {
    return array('/sfVideoPlugin/js/flowplayer-3.1.4.min.js');
  }
}
