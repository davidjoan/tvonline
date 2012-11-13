<?php

/**
 * Video actions.
 *
 * @package    tvonline
 * @subpackage Video
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VideoActions extends ActionsRestCrud
{
  protected function getExtraFilterAndArrangeFields()
  {
    return array
    (
      't'  => array('title_str'    => 'title')
    );
  }
  
  protected function complementList(sfWebRequest $request, DoctrineQuery $q)
  {
    Doctrine::getTable($this->modelClass)->updateQueryForListApi($q);
  }
}
