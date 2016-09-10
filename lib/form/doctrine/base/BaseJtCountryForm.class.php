<?php

/**
 * JtCountry form base class.
 *
 * @method JtCountry getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtCountryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'code'           => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormInputText(),
      'continent'      => new sfWidgetFormChoice(array('choices' => array('Asia' => 'Asia', 'Europe' => 'Europe', 'North America' => 'North America', 'Africa' => 'Africa', 'Oceania' => 'Oceania', 'Antarctica' => 'Antarctica', 'South America' => 'South America'))),
      'region'         => new sfWidgetFormInputText(),
      'surfacearea'    => new sfWidgetFormInputText(),
      'indepyear'      => new sfWidgetFormInputText(),
      'population'     => new sfWidgetFormInputText(),
      'lifeexpectancy' => new sfWidgetFormInputText(),
      'gnp'            => new sfWidgetFormInputText(),
      'gnpold'         => new sfWidgetFormInputText(),
      'localname'      => new sfWidgetFormInputText(),
      'governmentform' => new sfWidgetFormInputText(),
      'headofstate'    => new sfWidgetFormInputText(),
      'capital'        => new sfWidgetFormInputText(),
      'code2'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'code'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('code')), 'empty_value' => $this->getObject()->get('code'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 52, 'required' => false)),
      'continent'      => new sfValidatorChoice(array('choices' => array(0 => 'Asia', 1 => 'Europe', 2 => 'North America', 3 => 'Africa', 4 => 'Oceania', 5 => 'Antarctica', 6 => 'South America'), 'required' => false)),
      'region'         => new sfValidatorString(array('max_length' => 26, 'required' => false)),
      'surfacearea'    => new sfValidatorNumber(array('required' => false)),
      'indepyear'      => new sfValidatorInteger(array('required' => false)),
      'population'     => new sfValidatorInteger(array('required' => false)),
      'lifeexpectancy' => new sfValidatorNumber(array('required' => false)),
      'gnp'            => new sfValidatorNumber(array('required' => false)),
      'gnpold'         => new sfValidatorNumber(array('required' => false)),
      'localname'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'governmentform' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'headofstate'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'capital'        => new sfValidatorInteger(array('required' => false)),
      'code2'          => new sfValidatorString(array('max_length' => 2, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_country[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtCountry';
  }

}
