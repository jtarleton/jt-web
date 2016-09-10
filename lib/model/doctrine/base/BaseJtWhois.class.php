<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('JtWhois', 'doctrine');

/**
 * BaseJtWhois
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $cust_name
 * @property string $address
 * @property string $city
 * @property string $state_prov
 * @property string $postal_code
 * @property string $country
 * @property date $reg_date
 * @property date $updated
 * @property string $url
 * 
 * @method integer getid()          Returns the current record's "id" value
 * @method string  getcust_name()   Returns the current record's "cust_name" value
 * @method string  getaddress()     Returns the current record's "address" value
 * @method string  getcity()        Returns the current record's "city" value
 * @method string  getstate_prov()  Returns the current record's "state_prov" value
 * @method string  getpostal_code() Returns the current record's "postal_code" value
 * @method string  getcountry()     Returns the current record's "country" value
 * @method date    getreg_date()    Returns the current record's "reg_date" value
 * @method date    getupdated()     Returns the current record's "updated" value
 * @method string  geturl()         Returns the current record's "url" value
 * @method JtWhois setid()          Sets the current record's "id" value
 * @method JtWhois setcust_name()   Sets the current record's "cust_name" value
 * @method JtWhois setaddress()     Sets the current record's "address" value
 * @method JtWhois setcity()        Sets the current record's "city" value
 * @method JtWhois setstate_prov()  Sets the current record's "state_prov" value
 * @method JtWhois setpostal_code() Sets the current record's "postal_code" value
 * @method JtWhois setcountry()     Sets the current record's "country" value
 * @method JtWhois setreg_date()    Sets the current record's "reg_date" value
 * @method JtWhois setupdated()     Sets the current record's "updated" value
 * @method JtWhois seturl()         Sets the current record's "url" value
 * 
 * @package    jtweb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJtWhois extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('JtWhois');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cust_name', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('address', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('city', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('state_prov', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('postal_code', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('country', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('reg_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('url', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}