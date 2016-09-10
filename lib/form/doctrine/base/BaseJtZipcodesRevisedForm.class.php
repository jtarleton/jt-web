<?php

/**
 * JtZipcodesRevised form base class.
 *
 * @method JtZipcodesRevised getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtZipcodesRevisedForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputText(),
      'zip'         => new sfWidgetFormInputText(),
      'city'        => new sfWidgetFormInputText(),
      'state'       => new sfWidgetFormInputText(),
      'latitude'    => new sfWidgetFormInputText(),
      'longitude'   => new sfWidgetFormInputText(),
      'timezone'    => new sfWidgetFormInputText(),
      'dst'         => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormInputText(),
      'countrycode' => new sfWidgetFormInputText(),
      'district'    => new sfWidgetFormInputText(),
      'population'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorInteger(array('required' => false)),
      'zip'         => new sfValidatorString(array('max_length' => 5)),
      'city'        => new sfValidatorString(array('max_length' => 250)),
      'state'       => new sfValidatorString(array('max_length' => 5)),
      'latitude'    => new sfValidatorNumber(),
      'longitude'   => new sfValidatorNumber(),
      'timezone'    => new sfValidatorInteger(),
      'dst'         => new sfValidatorInteger(),
      'name'        => new sfValidatorString(array('max_length' => 35, 'required' => false)),
      'countrycode' => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'district'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'population'  => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_zipcodes_revised[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtZipcodesRevised';
  }

}
