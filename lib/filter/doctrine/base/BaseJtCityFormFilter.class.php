<?php

/**
 * JtCity filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtCityFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'countrycode' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('JtCountry'), 'add_empty' => true)),
      'district'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'population'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorPass(array('required' => false)),
      'countrycode' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('JtCountry'), 'column' => 'code')),
      'district'    => new sfValidatorPass(array('required' => false)),
      'population'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('jt_city_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtCity';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'name'        => 'Text',
      'countrycode' => 'ForeignKey',
      'district'    => 'Text',
      'population'  => 'Number',
    );
  }
}
