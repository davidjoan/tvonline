<?php

/**
 * Video form base class.
 *
 * @method Video getObject() Returns the current form's model object
 *
 * @package    tvonline
 * @subpackage form
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVideoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'category_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'code'         => new sfWidgetFormInputText(),
      'image'        => new sfWidgetFormInputText(),
      'video'        => new sfWidgetFormTextarea(),
      'time'         => new sfWidgetFormInputText(),
      'live'         => new sfWidgetFormInputText(),
      'new'          => new sfWidgetFormInputText(),
      'active'       => new sfWidgetFormInputText(),
      'type'         => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'slug'         => new sfWidgetFormInputText(),
      'created_by'   => new sfWidgetFormInputText(),
      'updated_by'   => new sfWidgetFormTextarea(),
      'banners_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Banner')),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'category_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'required' => false)),
      'code'         => new sfValidatorString(array('max_length' => 20)),
      'image'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'video'        => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'time'         => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'live'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'new'          => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'active'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'type'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'slug'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_by'   => new sfValidatorInteger(array('required' => false)),
      'updated_by'   => new sfValidatorString(array('required' => false)),
      'banners_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Banner', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Video', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('video[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Video';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['banners_list']))
    {
      $this->setDefault('banners_list', $this->object->Banners->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveBannersList($con);

    parent::doSave($con);
  }

  public function saveBannersList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['banners_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Banners->getPrimaryKeys();
    $values = $this->getValue('banners_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Banners', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Banners', array_values($link));
    }
  }

}
