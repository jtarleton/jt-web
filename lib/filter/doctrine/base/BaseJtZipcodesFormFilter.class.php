<?php

/**
 * JtZipcodes filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtZipcodesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'zip'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'city'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'state'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'latitude'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'longitude' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'timezone'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dst'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'zip'       => new sfValidatorPass(array('required' => false)),
      'city'      => new sfValidatorPass(array('required' => false)),
      'state'     => new sfValidatorPass(array('required' => false)),
      'latitude'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'longitude' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'timezone'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dst'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('jt_zipcodes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtZipcodes';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'zip'       => 'Text',
      'city'      => 'Text',
      'state'     => 'Text',
      'latitude'  => 'Number',
      'longitude' => 'Number',
      'timezone'  => 'Number',
      'dst'       => 'Number',
    );
  }
}
