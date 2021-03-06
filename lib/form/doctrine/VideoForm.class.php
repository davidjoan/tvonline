<?php

/**
 * Video form.
 *
 * @package    tvonline
 * @subpackage form
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VideoForm extends BaseVideoForm
{
  public function initialize()
  {
    $this->labels = array
    (
      'category_id'   => 'Categoria',
      'code'          => 'Codigo',
      'image'         => 'Imagen',
      'video'         => 'Video',
      'video_preview' => 'Vista Previa',
      'time'          => 'Duración',
      'new'           => 'Video Nuevo',
      'live'          => 'Programación en Vivo',
      'type'          => 'Formato',
      'active'        => 'Activo',
      'banners_list'  => 'Banners'
    );
  }
  public function configure()
  {
  	$this->object->loadNextCode();
  	$this->setWidgets(array
    (
      'id'                   => new sfWidgetFormInputHidden(),
      'code'                 => new sfWidgetFormValue(array('value' => $this->object->getCode())),
      'type'                 => new sfWidgetFormChoice(array
                                (
                                  'choices'          => $this->getTable()->getTypes(),
                                  'expanded'         => false
                                )),
      'category_id'          => new sfWidgetFormDoctrineChoice(array
                                (
                                  'model'      => $this->getRelatedModelName('Category'),
                                   'add_empty' => '--- Seleccionar ---'
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
                                                        sfConfig::get('app_video_images_path')
                                                      )
                                  ),
                                  array('size'         => '60',)
                                ),
      //'video'                => new sfWidgetFormTextarea(array(), array('cols' => 50, 'rows' => 6)),
      'time'                 => new sfWidgetFormInputText(array(), array('size' => 10)),
      'video'                => new sfWidgetFormInputText(array(), array('size' => 30)),
      //'video_preview'        => new sfVideoWidget(array('player.width' => '330px', 'player.height' => '200px', 'url' => 'http://724378576.r.cdnstreaming.net/H264 4.mp4?format=apple'), array()),
      'active'               => new sfWidgetFormChoice(array
                                (
                                  'choices'          => $this->getTable()->getStatuss(),
                                  'expanded'         => true,
                                  'renderer_options' => array('formatter' => array($this->widgetFormatter, 'radioFormatter'))
                                )),
      'new'                  => new sfWidgetFormChoice(array
                                (
                                  'choices'          => $this->getTable()->getNews(),
                                  'expanded'         => true,
                                  'renderer_options' => array('formatter' => array($this->widgetFormatter, 'radioFormatter'))
                                )),
      'live'                  => new sfWidgetFormChoice(array
                                (
                                  'choices'          => $this->getTable()->getLives(),
                                  'expanded'         => true,
                                  'renderer_options' => array('formatter' => array($this->widgetFormatter, 'radioFormatter'))
                                )),
       'banners_list'       => new sfWidgetFormDoctrineChoice(array
                                (
                                  'model'            => 'Banner',
                                  'expanded'         => true,
                                  'multiple'         => true,
                                  'renderer_class'   => 'sfWidgetFormSelectDoubleList',
                                  'renderer_options' => array('label_unassociated' => 'No Seleccionados','label_associated'   => 'Seleccionados')
                                )),
   ));
    
   $this->addValidators(array
    (
      'image'                 => new sfValidatorFile(array
                                (
                                  'required'   => false,
                                  'path'       => sfConfig::get('app_video_images_dir').'/'
                                )),
    ));

  	
  	$this->types = array
    (
      'id'          => '=',
      'category_id' => 'combo',
      'code'        => '-',
      'image'       => 'file',
      'video'       => 'pass',
      'time'        => 'pass',
      'active'      => array('combo', array('choices' => array_keys($this->getTable()->getStatuss()))),
      'new'         => array('combo', array('choices' => array_keys($this->getTable()->getNews()))),
      'type'        => array('combo', array('choices' => array_keys($this->getTable()->getTypes()))),
      'live'       => array('combo', array('choices' => array_keys($this->getTable()->getLives()))),
      'created_at'  => '-',
      'updated_at'  => '-',
      'slug'        => '-',
      'created_by'  => '-',
      'updated_by'  => '-',
      'video_preview' => 'pass',
      'banners_list'  => 'pass'
    );
    
    $this->setDefault('new', '1');
    
    $this->setDefault('live', '0');
    
    $this->setDefault('active', '1');
    
    $this->widgetSchema->setHelp('video' , 'Formato: [nombre video].mp4');
    
    $this->widgetSchema->setHelp('time' , 'Formato: en Milisegundos');
    
    $this->embedI18n(array('es'));
    $this->widgetSchema->setLabel('es', 'Spanish');
  }
}
