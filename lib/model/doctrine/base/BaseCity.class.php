<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('City', 'doctrine');

/**
 * BaseCity
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $countrycode
 * @property string $district
 * @property integer $population
 * @property Country $Country
 * 
 * @method integer getId()          Returns the current record's "id" value
 * @method string  getName()        Returns the current record's "name" value
 * @method string  getCountrycode() Returns the current record's "countrycode" value
 * @method string  getDistrict()    Returns the current record's "district" value
 * @method integer getPopulation()  Returns the current record's "population" value
 * @method Country getCountry()     Returns the current record's "Country" value
 * @method City    setId()          Sets the current record's "id" value
 * @method City    setName()        Sets the current record's "name" value
 * @method City    setCountrycode() Sets the current record's "countrycode" value
 * @method City    setDistrict()    Sets the current record's "district" value
 * @method City    setPopulation()  Sets the current record's "population" value
 * @method City    setCountry()     Sets the current record's "Country" value
 * 
 * @package    jtweb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCity extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('City');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 35, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 35,
             ));
        $this->hasColumn('countrycode', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('district', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('population', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Country', array(
             'local' => 'countrycode',
             'foreign' => 'code'));
    }
}