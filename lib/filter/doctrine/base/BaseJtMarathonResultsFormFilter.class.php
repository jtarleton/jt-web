<?php

/**
 * JtMarathonResults filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtMarathonResultsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'year'            => new sfWidgetFormFilterInput(),
      'city'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'event_name'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'overall_place'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'age_group_place' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gender_place'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'half_split'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'net_finish_time' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'avg_pace'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'notes'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'year'            => new sfValidatorPass(array('required' => false)),
      'city'            => new sfValidatorPass(array('required' => false)),
      'event_name'      => new sfValidatorPass(array('required' => false)),
      'overall_place'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'age_group_place' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gender_place'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'half_split'      => new sfValidatorPass(array('required' => false)),
      'net_finish_time' => new sfValidatorPass(array('required' => false)),
      'avg_pace'        => new sfValidatorPass(array('required' => false)),
      'notes'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_marathon_results_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtMarathonResults';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'year'            => 'Text',
      'city'            => 'Text',
      'event_name'      => 'Text',
      'overall_place'   => 'Number',
      'age_group_place' => 'Number',
      'gender_place'    => 'Number',
      'half_split'      => 'Text',
      'net_finish_time' => 'Text',
      'avg_pace'        => 'Text',
      'notes'           => 'Text',
    );
  }
}
