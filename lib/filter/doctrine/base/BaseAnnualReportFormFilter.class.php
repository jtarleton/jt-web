<?php

/**
 * AnnualReport filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAnnualReportFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'year'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gross_earnings'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fixed_expenses'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_spend'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fed_taxes'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'state_taxes'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'city_taxes'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'retirement_savings' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cc_balance_start'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cc_balance_end'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cc_balance_diff'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'year'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gross_earnings'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fixed_expenses'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_spend'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fed_taxes'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'state_taxes'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'city_taxes'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'retirement_savings' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cc_balance_start'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cc_balance_end'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cc_balance_diff'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('annual_report_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AnnualReport';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'year'               => 'Number',
      'gross_earnings'     => 'Number',
      'fixed_expenses'     => 'Number',
      'total_spend'        => 'Number',
      'fed_taxes'          => 'Number',
      'state_taxes'        => 'Number',
      'city_taxes'         => 'Number',
      'retirement_savings' => 'Number',
      'cc_balance_start'   => 'Number',
      'cc_balance_end'     => 'Number',
      'cc_balance_diff'    => 'Number',
    );
  }
}
