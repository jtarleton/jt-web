<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('JtCity', 'doctrine');

/**
 * BaseJtCity
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $countrycode
 * @property string $district
 * @property integer $population
 * @property JtCountry $JtCountry
 * 
 * @method integer   getid()          Returns the current record's "id" value
 * @method string    getname()        Returns the current record's "name" value
 * @method string    getcountrycode() Returns the current record's "countrycode" value
 * @method string    getdistrict()    Returns the current record's "district" value
 * @method integer   getpopulation()  Returns the current record's "population" value
 * @method JtCountry getJtCountry()   Returns the current record's "JtCountry" value
 * @method JtCity    setid()          Sets the current record's "id" value
 * @method JtCity    setname()        Sets the current record's "name" value
 * @method JtCity    setcountrycode() Sets the current record's "countrycode" value
 * @method JtCity    setdistrict()    Sets the current record's "district" value
 * @method JtCity    setpopulation()  Sets the current record's "population" value
 * @method JtCity    setJtCountry()   Sets the current record's "JtCountry" value
 * 
 * @package    jtweb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJtCity extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('JtCity');
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
        $this->hasOne('JtCountry', array(
             'local' => 'countrycode',
             'foreign' => 'code'));
    }
}