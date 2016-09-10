<?php

/**
 * JtWhois filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtWhoisFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cust_name'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'city'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'state_prov'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'postal_code' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'country'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reg_date'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'url'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cust_name'   => new sfValidatorPass(array('required' => false)),
      'address'     => new sfValidatorPass(array('required' => false)),
      'city'        => new sfValidatorPass(array('required' => false)),
      'state_prov'  => new sfValidatorPass(array('required' => false)),
      'postal_code' => new sfValidatorPass(array('required' => false)),
      'country'     => new sfValidatorPass(array('required' => false)),
      'reg_date'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'updated'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'url'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_whois_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtWhois';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'cust_name'   => 'Text',
      'address'     => 'Text',
      'city'        => 'Text',
      'state_prov'  => 'Text',
      'postal_code' => 'Text',
      'country'     => 'Text',
      'reg_date'    => 'Date',
      'updated'     => 'Date',
      'url'         => 'Text',
    );
  }
}
