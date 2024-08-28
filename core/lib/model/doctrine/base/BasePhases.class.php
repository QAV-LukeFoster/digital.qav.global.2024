<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Phases', 'doctrine');

/**
 * BasePhases
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $default_values
 * 
 * @method integer getId()             Returns the current record's "id" value
 * @method string  getName()           Returns the current record's "name" value
 * @method string  getDefaultValues()  Returns the current record's "default_values" value
 * @method Phases  setId()             Sets the current record's "id" value
 * @method Phases  setName()           Sets the current record's "name" value
 * @method Phases  setDefaultValues()  Sets the current record's "default_values" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     QAV Digital
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePhases extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('phases');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('default_values', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}