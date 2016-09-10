<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('JtCountry', 'doctrine');

/**
 * BaseJtCountry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $code
 * @property string $name
 * @property enum $continent
 * @property string $region
 * @property float $surfacearea
 * @property integer $indepyear
 * @property integer $population
 * @property float $lifeexpectancy
 * @property float $gnp
 * @property float $gnpold
 * @property string $localname
 * @property string $governmentform
 * @property string $headofstate
 * @property integer $capital
 * @property string $code2
 * @property Doctrine_Collection $JtCity
 * @property Doctrine_Collection $JtCountryLanguage
 * 
 * @method string              getcode()              Returns the current record's "code" value
 * @method string              getname()              Returns the current record's "name" value
 * @method enum                getcontinent()         Returns the current record's "continent" value
 * @method string              getregion()            Returns the current record's "region" value
 * @method float               getsurfacearea()       Returns the current record's "surfacearea" value
 * @method integer             getindepyear()         Returns the current record's "indepyear" value
 * @method integer             getpopulation()        Returns the current record's "population" value
 * @method float               getlifeexpectancy()    Returns the current record's "lifeexpectancy" value
 * @method float               getgnp()               Returns the current record's "gnp" value
 * @method float               getgnpold()            Returns the current record's "gnpold" value
 * @method string              getlocalname()         Returns the current record's "localname" value
 * @method string              getgovernmentform()    Returns the current record's "governmentform" value
 * @method string              getheadofstate()       Returns the current record's "headofstate" value
 * @method integer             getcapital()           Returns the current record's "capital" value
 * @method string              getcode2()             Returns the current record's "code2" value
 * @method Doctrine_Collection getJtCity()            Returns the current record's "JtCity" collection
 * @method Doctrine_Collection getJtCountryLanguage() Returns the current record's "JtCountryLanguage" collection
 * @method JtCountry           setcode()              Sets the current record's "code" value
 * @method JtCountry           setname()              Sets the current record's "name" value
 * @method JtCountry           setcontinent()         Sets the current record's "continent" value
 * @method JtCountry           setregion()            Sets the current record's "region" value
 * @method JtCountry           setsurfacearea()       Sets the current record's "surfacearea" value
 * @method JtCountry           setindepyear()         Sets the current record's "indepyear" value
 * @method JtCountry           setpopulation()        Sets the current record's "population" value
 * @method JtCountry           setlifeexpectancy()    Sets the current record's "lifeexpectancy" value
 * @method JtCountry           setgnp()               Sets the current record's "gnp" value
 * @method JtCountry           setgnpold()            Sets the current record's "gnpold" value
 * @method JtCountry           setlocalname()         Sets the current record's "localname" value
 * @method JtCountry           setgovernmentform()    Sets the current record's "governmentform" value
 * @method JtCountry           setheadofstate()       Sets the current record's "headofstate" value
 * @method JtCountry           setcapital()           Sets the current record's "capital" value
 * @method JtCountry           setcode2()             Sets the current record's "code2" value
 * @method JtCountry           setJtCity()            Sets the current record's "JtCity" collection
 * @method JtCountry           setJtCountryLanguage() Sets the current record's "JtCountryLanguage" collection
 * 
 * @package    jtweb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJtCountry extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('JtCountry');
        $this->hasColumn('code', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('name', 'string', 52, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 52,
             ));
        $this->hasColumn('continent', 'enum', 13, array(
             'type' => 'enum',
             'fixed' => 0,
             'unsigned' => false,
             'values' => 
             array(
              0 => 'Asia',
              1 => 'Europe',
              2 => 'North America',
              3 => 'Africa',
              4 => 'Oceania',
              5 => 'Antarctica',
              6 => 'South America',
             ),
             'primary' => false,
             'default' => 'Asia',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 13,
             ));
        $this->hasColumn('region', 'string', 26, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 26,
             ));
        $this->hasColumn('surfacearea', 'float', 10, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0.00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('indepyear', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 2,
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
        $this->hasColumn('lifeexpectancy', 'float', 3, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('gnp', 'float', 10, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('gnpold', 'float', 10, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('localname', 'string', 45, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('governmentform', 'string', 45, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('headofstate', 'string', 60, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('capital', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('code2', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('JtCity', array(
             'local' => 'code',
             'foreign' => 'countrycode'));

        $this->hasMany('JtCountryLanguage', array(
             'local' => 'code',
             'foreign' => 'countrycode'));
    }
}