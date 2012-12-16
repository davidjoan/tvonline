<?php

/**
 * Banner form.
 *
 * @package    tvonline
 * @subpackage form
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BannerForm extends BaseBannerForm
{
  public function initialize()
  {
    $this->labels = array
    (
      'title'         => 'Titulo',
      'url'           => 'Enlace',
      'image'         => 'Imagen',
      'active'        => 'Activo',
      'videos_list'   => 'Videos'
    );
  }
  public function configure()
  {
    $this->setWidgets(array
    (
      'id'                   => new sfWidgetFormInputHidden(),
      'title'                => new sfWidgetFormInputText(array(), array('size' => 60)),
      'url'                  => new sfWidgetFormInputText(array(), array('size' => 90)),
      'image'                => new sfWidgetFormInputFileEditable
                                (
                                  array
                                  (
                                    'file_src'     => $this->object->getImage(),
                                    'with_delete'  => false,
                                    'template'     => sprintf
                                                      (
                                                        '<a class="file_link" href="%s/%%file%%" target="BLANK">%%file%%</a><br />%%input%%<br />%%delete%% %%delete_label%%',
                                                        sfConfig::get('app_banner_images_path')
                                                      )
                                  ),
                                  array('size'         => '60',)
                                ),
       'videos_list'       => new sfWidgetFormDoctrineChoice(array
                                (
                                  'model'            => 'Video',
                                  'expanded'         => true,
                                  'multiple'         => true,
                                  'renderer_class'   => 'sfWidgetFormSelectDoubleList',
                                  'renderer_options' => array('label_unassociated' => 'No Seleccionados','label_associated'   => 'Seleccionados')
                                )),
      'active'               => new sfWidgetFormChoice(array
                                (
                                  'choices'          => $this->getTable()->getStatuss(),
                                  'expanded'         => true,
                                  'renderer_options' => array('formatter' => array($this->widgetFormatter, 'radioFormatter'))
                                ))
    ));



   $this->addValidators(array
    (
      'image'                 => new sfValidatorFile(array
                                (
                                  'required'   => false,
                                  'path'       => sfConfig::get('app_banner_images_dir').'/'
                                ))
    ));

    $this->types = array
    (
      'id'          => '=',
      'title'       => 'text',
      'url'         => 'url',
      'image'       => 'file',
      'active'      => array('combo', array('choices' => array_keys($this->getTable()->getStatuss()))),
      'created_at'  => '-',
      'updated_at'  => '-',
      'created_by'  => '-',
      'updated_by'  => '-',
      'videos_list' => 'pass'
    );

    $this->widgetSchema->setHelp('image' , 'Tamaño recomendado 285 (alto)  x 195(ancho)' );


  }
}
