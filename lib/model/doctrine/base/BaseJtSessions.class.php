<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('JtSessions', 'doctrine');

/**
 * BaseJtSessions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $session_id
 * @property string $ip
 * 
 * @method integer    getid()         Returns the current record's "id" value
 * @method string     getsession_id() Returns the current record's "session_id" value
 * @method string     getip()         Returns the current record's "ip" value
 * @method JtSessions setid()         Sets the current record's "id" value
 * @method JtSessions setsession_id() Sets the current record's "session_id" value
 * @method JtSessions setip()         Sets the current record's "ip" value
 * 
 * @package    jtweb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJtSessions extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('JtSessions');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('session_id', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('ip', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}