<?php

/**
 * ChipotleOrders form base class.
 *
 * @method ChipotleOrders getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseChipotleOrdersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'order_id'           => new sfWidgetFormInputText(),
      'quantity'           => new sfWidgetFormInputText(),
      'item_name'          => new sfWidgetFormInputText(),
      'choice_description' => new sfWidgetFormInputText(),
      'item_price'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'order_id'           => new sfValidatorInteger(array('required' => false)),
      'quantity'           => new sfValidatorInteger(array('required' => false)),
      'item_name'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'choice_description' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'item_price'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('chipotle_orders[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ChipotleOrders';
  }

}
