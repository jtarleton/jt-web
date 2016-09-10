<?php

/**
 * Country filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCountryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'continent'      => new sfWidgetFormChoice(array('choices' => array('' => '', 'Asia' => 'Asia', 'Europe' => 'Europe', 'North America' => 'North America', 'Africa' => 'Africa', 'Oceania' => 'Oceania', 'Antarctica' => 'Antarctica', 'South America' => 'South America'))),
      'region'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'surfacearea'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'indepyear'      => new sfWidgetFormFilterInput(),
      'population'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lifeexpectancy' => new sfWidgetFormFilterInput(),
      'gnp'            => new sfWidgetFormFilterInput(),
      'gnpold'         => new sfWidgetFormFilterInput(),
      'localname'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'governmentform' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'headofstate'    => new sfWidgetFormFilterInput(),
      'capital'        => new sfWidgetFormFilterInput(),
      'code2'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'           => new sfValidatorPass(array('required' => false)),
      'continent'      => new sfValidatorChoice(array('required' => false, 'choices' => array('Asia' => 'Asia', 'Europe' => 'Europe', 'North America' => 'North America', 'Africa' => 'Africa', 'Oceania' => 'Oceania', 'Antarctica' => 'Antarctica', 'South America' => 'South America'))),
      'region'         => new sfValidatorPass(array('required' => false)),
      'surfacearea'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'indepyear'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'population'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lifeexpectancy' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gnp'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gnpold'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'localname'      => new sfValidatorPass(array('required' => false)),
      'governmentform' => new sfValidatorPass(array('required' => false)),
      'headofstate'    => new sfValidatorPass(array('required' => false)),
      'capital'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'code2'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('country_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Country';
  }

  public function getFields()
  {
    return array(
      'code'           => 'Text',
      'name'           => 'Text',
      'continent'      => 'Enum',
      'region'         => 'Text',
      'surfacearea'    => 'Number',
      'indepyear'      => 'Number',
      'population'     => 'Number',
      'lifeexpectancy' => 'Number',
      'gnp'            => 'Number',
      'gnpold'         => 'Number',
      'localname'      => 'Text',
      'governmentform' => 'Text',
      'headofstate'    => 'Text',
      'capital'        => 'Number',
      'code2'          => 'Text',
    );
  }
}
