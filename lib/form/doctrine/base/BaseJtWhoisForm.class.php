<?php

/**
 * JtWhois form base class.
 *
 * @method JtWhois getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtWhoisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputText(),
      'cust_name'   => new sfWidgetFormInputText(),
      'address'     => new sfWidgetFormInputText(),
      'city'        => new sfWidgetFormInputText(),
      'state_prov'  => new sfWidgetFormInputText(),
      'postal_code' => new sfWidgetFormInputText(),
      'country'     => new sfWidgetFormInputText(),
      'reg_date'    => new sfWidgetFormDate(),
      'updated'     => new sfWidgetFormDate(),
      'url'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorInteger(),
      'cust_name'   => new sfValidatorString(array('max_length' => 200)),
      'address'     => new sfValidatorString(array('max_length' => 200)),
      'city'        => new sfValidatorString(array('max_length' => 200)),
      'state_prov'  => new sfValidatorString(array('max_length' => 200)),
      'postal_code' => new sfValidatorString(array('max_length' => 200)),
      'country'     => new sfValidatorString(array('max_length' => 200)),
      'reg_date'    => new sfValidatorDate(),
      'updated'     => new sfValidatorDate(),
      'url'         => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('jt_whois[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtWhois';
  }

}
