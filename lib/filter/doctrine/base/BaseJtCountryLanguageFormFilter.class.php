<?php

/**
 * JtCountryLanguage filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtCountryLanguageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'isofficial'  => new sfWidgetFormChoice(array('choices' => array('' => '', 'T' => 'T', 'F' => 'F'))),
      'percentage'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'isofficial'  => new sfValidatorChoice(array('required' => false, 'choices' => array('T' => 'T', 'F' => 'F'))),
      'percentage'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('jt_country_language_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtCountryLanguage';
  }

  public function getFields()
  {
    return array(
      'countrycode' => 'Text',
      'language'    => 'Text',
      'isofficial'  => 'Enum',
      'percentage'  => 'Number',
    );
  }
}
