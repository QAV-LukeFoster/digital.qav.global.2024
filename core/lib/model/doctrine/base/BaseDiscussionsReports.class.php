<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DiscussionsReports', 'doctrine');

/**
 * BaseDiscussionsReports
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $users_id
 * @property string $name
 * @property integer $display_on_home
 * @property string $projects_id
 * @property string $projects_type_id
 * @property string $projects_status_id
 * @property string $discussions_status_id
 * @property integer $sort_order
 * @property Users $Users
 * 
 * @method integer            getId()                    Returns the current record's "id" value
 * @method integer            getUsersId()               Returns the current record's "users_id" value
 * @method string             getName()                  Returns the current record's "name" value
 * @method integer            getDisplayOnHome()         Returns the current record's "display_on_home" value
 * @method string             getProjectsId()            Returns the current record's "projects_id" value
 * @method string             getProjectsTypeId()        Returns the current record's "projects_type_id" value
 * @method string             getProjectsStatusId()      Returns the current record's "projects_status_id" value
 * @method string             getDiscussionsStatusId()   Returns the current record's "discussions_status_id" value
 * @method integer            getSortOrder()             Returns the current record's "sort_order" value
 * @method Users              getUsers()                 Returns the current record's "Users" value
 * @method DiscussionsReports setId()                    Sets the current record's "id" value
 * @method DiscussionsReports setUsersId()               Sets the current record's "users_id" value
 * @method DiscussionsReports setName()                  Sets the current record's "name" value
 * @method DiscussionsReports setDisplayOnHome()         Sets the current record's "display_on_home" value
 * @method DiscussionsReports setProjectsId()            Sets the current record's "projects_id" value
 * @method DiscussionsReports setProjectsTypeId()        Sets the current record's "projects_type_id" value
 * @method DiscussionsReports setProjectsStatusId()      Sets the current record's "projects_status_id" value
 * @method DiscussionsReports setDiscussionsStatusId()   Sets the current record's "discussions_status_id" value
 * @method DiscussionsReports setSortOrder()             Sets the current record's "sort_order" value
 * @method DiscussionsReports setUsers()                 Sets the current record's "Users" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDiscussionsReports extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('discussions_reports');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
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
        $this->hasColumn('display_on_home', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('projects_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('projects_type_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('projects_status_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('discussions_status_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('sort_order', 'integer', 4, array(
             'type' => 'integer',
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
        $this->hasOne('Users', array(
             'local' => 'users_id',
             'foreign' => 'id'));
    }
}