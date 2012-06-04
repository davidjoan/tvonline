<?php

/**
 * sfVideo form.
 *
 * @subpackage form
 * @author     Javier Aguirre <javaguirre@ufocoders.com>
 */
class sfVideoForm extends sfForm
{
  public function configure()
  {
    $this->widgetSchema['video'] = new sfVideoWidget();
    $this->widgetSchema['video']->setOption('url', '/sfVideoPlugin/flv/01.flv');
    $this->widgetSchema['video']->setOption('player.width', '200px');
  }
}
