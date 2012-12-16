<?php

/**
 * Banner form base class.
 *
 * @method Banner getObject() Returns the current form's model object
 *
 * @package    tvonline
 * @subpackage form
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBannerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'title'       => new sfWidgetFormInputText(),
      'url'         => new sfWidgetFormTextarea(),
      'image'       => new sfWidgetFormInputText(),
      'active'      => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'slug'        => new sfWidgetFormInputText(),
      'created_by'  => new sfWidgetFormInputText(),
      'updated_by'  => new sfWidgetFormTextarea(),
      'videos_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Video')),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 200)),
      'url'         => new sfValidatorString(array('max_length' => 500)),
      'image'       => new sfValidatorString(array('max_length' => 200)),
      'active'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'slug'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_by'  => new sfValidatorInteger(array('required' => false)),
      'updated_by'  => new sfValidatorString(array('required' => false)),
      'videos_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Video', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Banner', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('banner[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Banner';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['videos_list']))
    {
      $this->setDefault('videos_list', $this->object->Videos->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveVideosList($con);

    parent::doSave($con);
  }

  public function saveVideosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['videos_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Videos->getPrimaryKeys();
    $values = $this->getValue('videos_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Videos', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Videos', array_values($link));
    }
  }

}
