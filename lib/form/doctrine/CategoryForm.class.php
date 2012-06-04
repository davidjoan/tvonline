<?php

/**
 * Category form.
 *
 * @package    tvonline
 * @subpackage form
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CategoryForm extends BaseCategoryForm
{
  public function initialize()
  {
    $this->labels = array
    (
      'image'         => 'Imagen',
      'parent'        => 'Categoria Padre',    
      'active'        => 'Activo',
      'rank'          => ''
    );
  }
  public function configure()
  {
  	$this->setWidgets(array
    (
      'id'                   => new sfWidgetFormInputHidden(),
      'rank'                 => new sfWidgetFormInputHidden(),
      'parent'               => new sfWidgetFormDoctrineChoiceNestedSet(array(
                                'model'     => 'Category',
                                'add_empty' => false ,
                                'method'    => 'getNameEs'
                             )),
      'image'                => new sfWidgetFormInputFileEditable
                                (
                                  array
                                  (
                                    'file_src'     => $this->object->getImage(),
                                    'with_delete'  => false,
                                    'template'     => sprintf
                                                      (
                                                        '<a class="file_link" href="%s/%%file%%" target="BLANK">%%file%%</a><br />%%input%%<br />%%delete%% %%delete_label%%', 
                                                        sfConfig::get('app_category_images_path')
                                                      )
                                  ),
                                  array('size'         => '60',)
                                ),
      'active'               => new sfWidgetFormChoice(array
                                (
                                  'choices'          => $this->getTable()->getStatuss(),
                                  'expanded'         => true,
                                  'renderer_options' => array('formatter' => array($this->widgetFormatter, 'radioFormatter'))
                                ))
    ));
    
    if ($this->getObject()->getNode()->hasParent())
    {
      $this->setDefaults
      (
        array
        (
          'parent' => $this->getObject()->getNode()->getParent()->getId(),
          'rank '  => $this->getObject()->getRank(),
        )
      );
    }
   
   $this->addValidators(array
    (
      'image'                 => new sfValidatorFile(array
                                (
                                  'required'   => false,
                                  'path'       => sfConfig::get('app_category_images_dir').'/'
                                )),
      'parent'               => new sfValidatorDoctrineChoiceNestedSet(array
                                (
                                  'model' => 'Category',
                                  'node'  => $this->getObject()
                                 )) 
    ));
  	
    $this->types = array
    (
      'root_id'     => '-',
      'rank'        => 'pass',
      'parent'      => '=',
      'lft'         => '-',
      'rgt'         => '-',
      'level'       => '-',
      'id'          => '=',
      'image'       => 'file',
      'active'      => array('combo', array('choices' => array_keys($this->getTable()->getStatuss()))),
      'created_at'  => '-',
      'updated_at'  => '-',
      'created_by'  => '-',
      'updated_by'  => '-'
    );
    
    $this->embedI18n(array('es', 'en', 'pt'));
    $this->widgetSchema->setLabel('es', 'Spanish');
    $this->widgetSchema->setLabel('en', 'English');
    $this->widgetSchema->setLabel('pt', 'Portugues');
  }
  

  public function doSave($con = null)
  {
  	
    // save the record itself
    parent::doSave($con);
    // if a parent has been specified, add/move this node to be the child of that node
    if ($this->getValue('parent'))
    {
      $parent = Doctrine::getTable('Category')->findOneById($this->getValue('parent'));
      if ($this->isNew())
      {
        $this->getObject()->getNode()->insertAsLastChildOf($parent);
      }
      else
      {
        $this->getObject()->getNode()->moveAsLastChildOf($parent);
      }
    }
    // if no parent was selected, add/move this node to be a new root in the tree
    else
    {
      $categoryTree = Doctrine::getTable('Category')->getTree();
      if ($this->isNew())
      {
        $categoryTree->createRoot($this->getObject());
      }
      else
      {
        $this->getObject()->getNode()->makeRoot($this->getObject()->getId());
      }
    }
  }
}
