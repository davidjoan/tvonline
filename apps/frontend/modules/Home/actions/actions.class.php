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

  
  public function executeCategory(sfWebRequest $request)
  {
      $this->category_id = $request->getParameter('category');
      $this->category    = Doctrine::getTable('Category')->findOneById($this->category_id);
      $this->videos = Doctrine::getTable('Video')->getVideos($this->category_id);      
  }
  
  public function executePlaylist(sfWebRequest $request)
  {
      $this->videos   = Doctrine::getTable('Video')->getLive();
      //$this->setLayout(false);

  }
  
  public function executeLive(sfWebRequest $request)
  {
  	Doctrine::getTable('Visit')->createAndSave($request->getPathInfoArray());
  	
  	$this->getResponse()->setTitle('Perú TV online | Esta donde estas | En VIVO');
        
        $this->slug = $request->getParameter('slug');
        
  	$this->video = Doctrine::getTable('Video')->findOneBySlug($this->slug);
  	
        $this->category_id = $request->getParameter('category');
        
        $this->category_id = ($this->category_id == "")? 1 : $this->category_id;
        
        $this->category = Doctrine::getTable("Category")->findOneById($this->category_id);
  	$this->videos = Doctrine::getTable('Video')->getVideos($this->category_id);
  	
  }    
}