<?php

/**
 * sfVideo actions.
 *
 * @package     sfVideoPlugin
 * @author      Tomasz Ducin <tomasz.ducin@gmail.com>
 */

class sfVideoActions extends sfActions
{
  /**
   * Displays example links to external flv files.
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request)
  {
  }

  /**
   * Demo action. Displays few flowplayers on the same page.
   *
   * @param sfRequest $request A request object
   */
  public function executeMulti(sfWebRequest $request)
  {
    $this->players = array(
      array('file' => '01.flv', 'player' => 'player01'),
      array('file' => '02.flv', 'player' => 'player02'),
      array('file' => '03.flv', 'player' => 'player03'),
    );

    // adding default flowplayer stylesheet
    $this->getResponse()->addStylesheet('/sfVideoPlugin/css/flowplayer');
  }

  /**
   * Demo action. Displays an example local flv file.
   *
   * @param sfRequest $request A request object
   */
  public function executeLocal(sfWebRequest $request)
  {
    $this->file = $request->getParameter('file');

    // adding js flash embedding script
    $this->getResponse()->addJavascript('/sfVideoPlugin/js/flowplayer-3.1.4.min.js');

    // adding default flowplayer stylesheet
    $this->getResponse()->addStylesheet('/sfVideoPlugin/css/flowplayer');
  }
}
