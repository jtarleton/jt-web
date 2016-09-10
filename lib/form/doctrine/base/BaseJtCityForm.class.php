<?php

/**
 * JtCity form base class.
 *
 * @method JtCity getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtCityForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'countrycode' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('JtCountry'), 'add_empty' => false)),
      'district'    => new sfWidgetFormInputText(),
      'population'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 35, 'required' => false)),
      'countrycode' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('JtCountry'), 'required' => false)),
      'district'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'population'  => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_city[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtCity';
  }

}
