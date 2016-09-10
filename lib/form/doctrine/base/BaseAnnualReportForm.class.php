<?php

/**
 * AnnualReport form base class.
 *
 * @method AnnualReport getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAnnualReportForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'year'               => new sfWidgetFormInputText(),
      'gross_earnings'     => new sfWidgetFormInputText(),
      'fixed_expenses'     => new sfWidgetFormInputText(),
      'total_spend'        => new sfWidgetFormInputText(),
      'fed_taxes'          => new sfWidgetFormInputText(),
      'state_taxes'        => new sfWidgetFormInputText(),
      'city_taxes'         => new sfWidgetFormInputText(),
      'retirement_savings' => new sfWidgetFormInputText(),
      'cc_balance_start'   => new sfWidgetFormInputText(),
      'cc_balance_end'     => new sfWidgetFormInputText(),
      'cc_balance_diff'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'year'               => new sfValidatorInteger(),
      'gross_earnings'     => new sfValidatorNumber(array('required' => false)),
      'fixed_expenses'     => new sfValidatorNumber(array('required' => false)),
      'total_spend'        => new sfValidatorNumber(array('required' => false)),
      'fed_taxes'          => new sfValidatorNumber(array('required' => false)),
      'state_taxes'        => new sfValidatorNumber(array('required' => false)),
      'city_taxes'         => new sfValidatorNumber(array('required' => false)),
      'retirement_savings' => new sfValidatorNumber(array('required' => false)),
      'cc_balance_start'   => new sfValidatorNumber(array('required' => false)),
      'cc_balance_end'     => new sfValidatorNumber(array('required' => false)),
      'cc_balance_diff'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('annual_report[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AnnualReport';
  }

}
