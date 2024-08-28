<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DriveTracker', 'doctrine');

/**
 * BaseDriveTracker
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property string $encrypt_id
 * @property string $encrypt_key
 * @property text $associations
 * @property integer $legacy
 * @property text $legacy_info
 * @property integer $capacity
 * @property integer $free_space
 * @property integer $record_disabled
 * @property year $year
 * 
 * @method integer      getId()              Returns the current record's "id" value
 * @method string       getName()            Returns the current record's "name" value
 * @method string       getType()            Returns the current record's "type" value
 * @method string       getEncryptId()       Returns the current record's "encrypt_id" value
 * @method string       getEncryptKey()      Returns the current record's "encrypt_key" value
 * @method text         getAssociations()    Returns the current record's "associations" value
 * @method integer      getLegacy()          Returns the current record's "legacy" value
 * @method text         getLegacyInfo()      Returns the current record's "legacy_info" value
 * @method integer      getCapacity()        Returns the current record's "capacity" value
 * @method integer      getFreeSpace()       Returns the current record's "free_space" value
 * @method integer      getRecordDisabled()  Returns the current record's "record_disabled" value
 * @method year         getYear()            Returns the current record's "year" value
 * @method DriveTracker setId()              Sets the current record's "id" value
 * @method DriveTracker setName()            Sets the current record's "name" value
 * @method DriveTracker setType()            Sets the current record's "type" value
 * @method DriveTracker setEncryptId()       Sets the current record's "encrypt_id" value
 * @method DriveTracker setEncryptKey()      Sets the current record's "encrypt_key" value
 * @method DriveTracker setAssociations()    Sets the current record's "associations" value
 * @method DriveTracker setLegacy()          Sets the current record's "legacy" value
 * @method DriveTracker setLegacyInfo()      Sets the current record's "legacy_info" value
 * @method DriveTracker setCapacity()        Sets the current record's "capacity" value
 * @method DriveTracker setFreeSpace()       Sets the current record's "free_space" value
 * @method DriveTracker setRecordDisabled()  Sets the current record's "record_disabled" value
 * @method DriveTracker setYear()            Sets the current record's "year" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     QAV Digital
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDriveTracker extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('drive_trackers');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('type', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 15,
             ));
        $this->hasColumn('encrypt_id', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('encrypt_key', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('associations', 'text', null, array(
             'type' => 'text',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('legacy', 'integer', 11, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'default' => '0',
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('legacy_info', 'text', null, array(
             'type' => 'text',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('capacity', 'integer', 11, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('free_space', 'integer', 11, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('record_disabled', 'integer', 11, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('year', 'year', 4, array(
             'type' => 'year',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
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