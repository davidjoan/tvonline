<?php

/**
 * General actions.
 *
 * @package    tvonline
 * @subpackage General
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class HomeComponents extends ComponentsProject
{

  public function executeLive(sfWebRequest $request)
  {

        $this->slug = $request->getParameter('slug');
        
  	$this->video = Doctrine::getTable('Video')->findOneBySlug($this->slug);
  }
}