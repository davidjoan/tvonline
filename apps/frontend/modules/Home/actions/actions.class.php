<?php

/**
 * Home actions.
 *
 * @package    tvonline
 * @subpackage Home
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class HomeActions extends ActionsProject
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeShow(sfWebRequest $request)
  {
  	Doctrine::getTable('Visit')->createAndSave($request->getPathInfoArray());
        
        $this->category_id = $request->getParameter('category');
        
        $this->category_id = ($this->category_id == "")? 1 : $this->category_id;
        
        $this->category = Doctrine::getTable("Category")->findOneById($this->category_id);
  	$this->videos = Doctrine::getTable('Video')->getVideos($this->category_id);
  }
  
  public function executeLoad(sfWebRequest $request)
  {
      $category = $request->getPostParameter('category');
      $this->videos = Doctrine::getTable('Video')->getVideos($category);
  }
  
  public function executeCategory(sfWebRequest $request)
  {
      $this->category_id = $request->getPostParameter('category');
      $this->category    = Doctrine::getTable('Category')->findOneById($this->category_id);
  }
  
  public function executeVideo(sfWebRequest $request)
  {
      $this->video_id = $request->getPostParameter('video');
      $this->video    = Doctrine::getTable('Video')->findOneById($this->video_id);
      $this->type     = is_object($this->video)?$this->video->getType():'W';
  }
}