<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ChipotleOrders', 'doctrine');

/**
 * BaseChipotleOrders
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $order_id
 * @property integer $quantity
 * @property string $item_name
 * @property string $choice_description
 * @property string $item_price
 * 
 * @method integer        getId()                 Returns the current record's "id" value
 * @method integer        getOrderId()            Returns the current record's "order_id" value
 * @method integer        getQuantity()           Returns the current record's "quantity" value
 * @method string         getItemName()           Returns the current record's "item_name" value
 * @method string         getChoiceDescription()  Returns the current record's "choice_description" value
 * @method string         getItemPrice()          Returns the current record's "item_price" value
 * @method ChipotleOrders setId()                 Sets the current record's "id" value
 * @method ChipotleOrders setOrderId()            Sets the current record's "order_id" value
 * @method ChipotleOrders setQuantity()           Sets the current record's "quantity" value
 * @method ChipotleOrders setItemName()           Sets the current record's "item_name" value
 * @method ChipotleOrders setChoiceDescription()  Sets the current record's "choice_description" value
 * @method ChipotleOrders setItemPrice()          Sets the current record's "item_price" value
 * 
 * @package    homewww
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseChipotleOrders extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ChipotleOrders');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('order_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('quantity', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('item_name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('choice_description', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('item_price', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}