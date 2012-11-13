<?php
require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();
require_once(dirname(__FILE__).'/../plugins/symfextPlugin/config/sfProjectConfigurationExt.class.php');
require_once(dirname(__FILE__).'/../lib/vendor/geshi/geshi.php');

class ProjectConfiguration extends sfProjectConfigurationExt
{
  protected function getActivePlugins()
  {
    return array
           (
             'sfContactFormPlugin',
             'sfDoctrineNestedSetPlugin',
             'sfDoctrineActAsSignablePlugin',
             'sfDoctrineJQueryUISortablePlugin',
             'sfDoctrinePlugin',
             'symfextPlugin'
           );
  }
  
  protected function setConfigVariables()
  {
    parent::setConfigVariables();
    
    $this->setWebDir($this->getRootDir().'/public_html');
    
    sfConfig::set('site_name', 'PERUTVONLINE');
    
    $this->setConfigDirPathVariable('banner_images'   , sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'banner_images' );
    $this->setConfigDirPathVariable('video_images'    , sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'video_images'    );
    $this->setConfigDirPathVariable('category_images' , sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'category_images' );
    $this->setConfigDirPathVariable('theme_images'    , sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'theme_images' );
    
  }
}