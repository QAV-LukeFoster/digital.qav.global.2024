<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Events', 'doctrine');

/**
 * BaseEvents
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $event_id
 * @property string $event_name
 * @property timestamp $start_date
 * @property timestamp $end_date
 * @property string $details
 * @property integer $users_id
 * @property Users $Users
 * 
 * @method integer   getEventId()    Returns the current record's "event_id" value
 * @method string    getEventName()  Returns the current record's "event_name" value
 * @method timestamp getStartDate()  Returns the current record's "start_date" value
 * @method timestamp getEndDate()    Returns the current record's "end_date" value
 * @method string    getDetails()    Returns the current record's "details" value
 * @method integer   getUsersId()    Returns the current record's "users_id" value
 * @method Users     getUsers()      Returns the current record's "Users" value
 * @method Events    setEventId()    Sets the current record's "event_id" value
 * @method Events    setEventName()  Sets the current record's "event_name" value
 * @method Events    setStartDate()  Sets the current record's "start_date" value
 * @method Events    setEndDate()    Sets the current record's "end_date" value
 * @method Events    setDetails()    Sets the current record's "details" value
 * @method Events    setUsersId()    Sets the current record's "users_id" value
 * @method Events    setUsers()      Sets the current record's "Users" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     QAV Digital
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEvents extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('events');
        $this->hasColumn('event_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('event_name', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('start_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('end_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('details', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('users_id', 'integer', 4, array(
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
        $this->hasOne('Users', array(
             'local' => 'users_id',
             'foreign' => 'id'));
    }
}