<?php

/**
 * JtSessions filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtSessionsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'session_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ip'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'session_id' => new sfValidatorPass(array('required' => false)),
      'ip'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_sessions_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtSessions';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'session_id' => 'Text',
      'ip'         => 'Text',
    );
  }
}
