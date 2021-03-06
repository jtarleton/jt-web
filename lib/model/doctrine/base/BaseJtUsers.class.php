<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('JtUsers', 'doctrine');

/**
 * BaseJtUsers
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $fbid
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $city_id
 * @property timestamp $last_login
 * @property timestamp $created
 * @property timestamp $last_updated
 * 
 * @method integer   getid()           Returns the current record's "id" value
 * @method string    getfbid()         Returns the current record's "fbid" value
 * @method string    getusername()     Returns the current record's "username" value
 * @method string    getpassword()     Returns the current record's "password" value
 * @method string    getemail()        Returns the current record's "email" value
 * @method string    getcity_id()      Returns the current record's "city_id" value
 * @method timestamp getlast_login()   Returns the current record's "last_login" value
 * @method timestamp getcreated()      Returns the current record's "created" value
 * @method timestamp getlast_updated() Returns the current record's "last_updated" value
 * @method JtUsers   setid()           Sets the current record's "id" value
 * @method JtUsers   setfbid()         Sets the current record's "fbid" value
 * @method JtUsers   setusername()     Sets the current record's "username" value
 * @method JtUsers   setpassword()     Sets the current record's "password" value
 * @method JtUsers   setemail()        Sets the current record's "email" value
 * @method JtUsers   setcity_id()      Sets the current record's "city_id" value
 * @method JtUsers   setlast_login()   Sets the current record's "last_login" value
 * @method JtUsers   setcreated()      Sets the current record's "created" value
 * @method JtUsers   setlast_updated() Sets the current record's "last_updated" value
 * 
 * @package    jtweb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJtUsers extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('JtUsers');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('fbid', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('username', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('password', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('email', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('city_id', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 250,
             ));
        $this->hasColumn('last_login', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('created', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('last_updated', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}