<?php

/**
 * JtZipcodes form base class.
 *
 * @method JtZipcodes getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtZipcodesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'zip'       => new sfWidgetFormInputText(),
      'city'      => new sfWidgetFormInputText(),
      'state'     => new sfWidgetFormInputText(),
      'latitude'  => new sfWidgetFormInputText(),
      'longitude' => new sfWidgetFormInputText(),
      'timezone'  => new sfWidgetFormInputText(),
      'dst'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'zip'       => new sfValidatorString(array('max_length' => 5)),
      'city'      => new sfValidatorString(array('max_length' => 250)),
      'state'     => new sfValidatorString(array('max_length' => 5)),
      'latitude'  => new sfValidatorNumber(),
      'longitude' => new sfValidatorNumber(),
      'timezone'  => new sfValidatorInteger(),
      'dst'       => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('jt_zipcodes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtZipcodes';
  }

}
