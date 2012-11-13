<?php

/**
 * Video actions.
 *
 * @package    tvonline
 * @subpackage Video
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VideoActions extends ActionsCrud
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
    Doctrine::getTable($this->modelClass)->updateQueryForList($q);
  }
  /*
  protected function complementSave(sfWebRequest $request)
  {
  $app_id = '24033';
  $key = '2cffea531e7b0f03c182';
  $secret = 'defb10d9ca28cedd587e';
    $pusher = new Pusher($key, $secret, $app_id);
    $data["message"] = sprintf("Una nuevo video en perutvonline");
    $data["id"] = $this->form->getObject()->getId();
    $data["name"] = $this->form->getObject()->Translation['es']->title;
    $pusher->trigger('perutvonline', 'notificaciones',$data );
  }  */
}
