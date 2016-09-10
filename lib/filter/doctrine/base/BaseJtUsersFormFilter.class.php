<?php

/**
 * JtUsers filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtUsersFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fbid'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'username'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'city_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_login'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'last_updated' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'fbid'         => new sfValidatorPass(array('required' => false)),
      'username'     => new sfValidatorPass(array('required' => false)),
      'password'     => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(array('required' => false)),
      'city_id'      => new sfValidatorPass(array('required' => false)),
      'last_login'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'last_updated' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('jt_users_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtUsers';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'fbid'         => 'Text',
      'username'     => 'Text',
      'password'     => 'Text',
      'email'        => 'Text',
      'city_id'      => 'Text',
      'last_login'   => 'Date',
      'created'      => 'Date',
      'last_updated' => 'Date',
    );
  }
}
