<?php

/**
 * JtMarathonResults form base class.
 *
 * @method JtMarathonResults getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtMarathonResultsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputText(),
      'year'            => new sfWidgetFormInputText(),
      'city'            => new sfWidgetFormInputText(),
      'event_name'      => new sfWidgetFormInputText(),
      'overall_place'   => new sfWidgetFormInputText(),
      'age_group_place' => new sfWidgetFormInputText(),
      'gender_place'    => new sfWidgetFormInputText(),
      'half_split'      => new sfWidgetFormInputText(),
      'net_finish_time' => new sfWidgetFormInputText(),
      'avg_pace'        => new sfWidgetFormInputText(),
      'notes'           => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorInteger(),
      'year'            => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'city'            => new sfValidatorString(array('max_length' => 200)),
      'event_name'      => new sfValidatorString(array('max_length' => 200)),
      'overall_place'   => new sfValidatorInteger(),
      'age_group_place' => new sfValidatorInteger(),
      'gender_place'    => new sfValidatorInteger(),
      'half_split'      => new sfValidatorString(array('max_length' => 200)),
      'net_finish_time' => new sfValidatorString(array('max_length' => 200)),
      'avg_pace'        => new sfValidatorString(array('max_length' => 200)),
      'notes'           => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('jt_marathon_results[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtMarathonResults';
  }

}
