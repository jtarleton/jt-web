<?php

/**
 * JtZipcodesRevised filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtZipcodesRevisedFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormFilterInput(),
      'zip'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'city'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'state'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'latitude'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'longitude'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'timezone'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dst'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'        => new sfWidgetFormFilterInput(),
      'countrycode' => new sfWidgetFormFilterInput(),
      'district'    => new sfWidgetFormFilterInput(),
      'population'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'zip'         => new sfValidatorPass(array('required' => false)),
      'city'        => new sfValidatorPass(array('required' => false)),
      'state'       => new sfValidatorPass(array('required' => false)),
      'latitude'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'longitude'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'timezone'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dst'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'        => new sfValidatorPass(array('required' => false)),
      'countrycode' => new sfValidatorPass(array('required' => false)),
      'district'    => new sfValidatorPass(array('required' => false)),
      'population'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('jt_zipcodes_revised_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtZipcodesRevised';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'zip'         => 'Text',
      'city'        => 'Text',
      'state'       => 'Text',
      'latitude'    => 'Number',
      'longitude'   => 'Number',
      'timezone'    => 'Number',
      'dst'         => 'Number',
      'name'        => 'Text',
      'countrycode' => 'Text',
      'district'    => 'Text',
      'population'  => 'Number',
    );
  }
}
