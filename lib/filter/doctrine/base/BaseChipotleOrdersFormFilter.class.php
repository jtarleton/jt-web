<?php

/**
 * ChipotleOrders filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseChipotleOrdersFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'order_id'           => new sfWidgetFormFilterInput(),
      'quantity'           => new sfWidgetFormFilterInput(),
      'item_name'          => new sfWidgetFormFilterInput(),
      'choice_description' => new sfWidgetFormFilterInput(),
      'item_price'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'order_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'quantity'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'item_name'          => new sfValidatorPass(array('required' => false)),
      'choice_description' => new sfValidatorPass(array('required' => false)),
      'item_price'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('chipotle_orders_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ChipotleOrders';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'order_id'           => 'Number',
      'quantity'           => 'Number',
      'item_name'          => 'Text',
      'choice_description' => 'Text',
      'item_price'         => 'Text',
    );
  }
}
