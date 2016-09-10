<?php

/**
 * JtCountryLanguage form base class.
 *
 * @method JtCountryLanguage getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtCountryLanguageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'countrycode' => new sfWidgetFormInputHidden(),
      'language'    => new sfWidgetFormInputHidden(),
      'isofficial'  => new sfWidgetFormChoice(array('choices' => array('T' => 'T', 'F' => 'F'))),
      'percentage'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'countrycode' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('countrycode')), 'empty_value' => $this->getObject()->get('countrycode'), 'required' => false)),
      'language'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('language')), 'empty_value' => $this->getObject()->get('language'), 'required' => false)),
      'isofficial'  => new sfValidatorChoice(array('choices' => array(0 => 'T', 1 => 'F'), 'required' => false)),
      'percentage'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_country_language[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtCountryLanguage';
  }

}
