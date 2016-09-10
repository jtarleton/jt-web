<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('JtZipcodesExpanded', 'doctrine');

/**
 * BaseJtZipcodesExpanded
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $zip
 * @property string $city
 * @property string $state
 * @property float $latitude
 * @property float $longitude
 * @property integer $timezone
 * @property integer $dst
 * @property string $name
 * @property string $countrycode
 * @property string $district
 * @property integer $population
 * 
 * @method integer            getid()          Returns the current record's "id" value
 * @method string             getzip()         Returns the current record's "zip" value
 * @method string             getcity()        Returns the current record's "city" value
 * @method string             getstate()       Returns the current record's "state" value
 * @method float              getlatitude()    Returns the current record's "latitude" value
 * @method float              getlongitude()   Returns the current record's "longitude" value
 * @method integer            gettimezone()    Returns the current record's "timezone" value
 * @method integer            getdst()         Returns the current record's "dst" value
 * @method string             getname()        Returns the current record's "name" value
 * @method string             getcountrycode() Returns the current record's "countrycode" value
 * @method string             getdistrict()    Returns the current record's "district" value
 * @method integer            getpopulation()  Returns the current record's "population" value
 * @method JtZipcodesExpanded setid()          Sets the current record's "id" value
 * @method JtZipcodesExpanded setzip()         Sets the current record's "zip" value
 * @method JtZipcodesExpanded setcity()        Sets the current record's "city" value
 * @method JtZipcodesExpanded setstate()       Sets the current record's "state" value
 * @method JtZipcodesExpanded setlatitude()    Sets the current record's "latitude" value
 * @method JtZipcodesExpanded setlongitude()   Sets the current record's "longitude" value
 * @method JtZipcodesExpanded settimezone()    Sets the current record's "timezone" value
 * @method JtZipcodesExpanded setdst()         Sets the current record's "dst" value
 * @method JtZipcodesExpanded setname()        Sets the current record's "name" value
 * @method JtZipcodesExpanded setcountrycode() Sets the current record's "countrycode" value
 * @method JtZipcodesExpanded setdistrict()    Sets the current record's "district" value
 * @method JtZipcodesExpanded setpopulation()  Sets the current record's "population" value
 * 
 * @package    jtweb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJtZipcodesExpanded extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('JtZipcodesExpanded');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('zip', 'string', 5, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('city', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('state', 'string', 5, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('latitude', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('longitude', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('timezone', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('dst', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 35, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 35,
             ));
        $this->hasColumn('countrycode', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('district', 'string', 20, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('population', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}