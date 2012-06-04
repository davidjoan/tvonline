<?php

/**
 * VideoTranslation form.
 *
 * @package    tvonline
 * @subpackage form
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VideoTranslationForm extends BaseVideoTranslationForm
{
  public function initialize()
  {
    $this->labels = array
    (
      'title'               => 'Titulo',
      'description'         => 'Descripci&oacute;n',

    );
  }
  public function configure()
  {
  	$this->setWidgets(array
    (
    'id'    => new sfWidgetFormInputHidden(),
  	'title' => new sfWidgetFormInputText(array(), array('size' => 60)),
  	'description'          => new sfWidgetFormTextareaTinyMCE(array
                                (
                                  'width'            => 350,
                                  'height'           => 250
                                ))
  	));
  	
  	$this->validatorSchema['description']->setOption('required', false);
  	 $this->types = array
    (
      'id'   => '=',
      'title' => 'text',
      'description' => '=',
      'lang' => '-'
     );
  }
}