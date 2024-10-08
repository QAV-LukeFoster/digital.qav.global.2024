<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TasksComments', 'doctrine');

/**
 * BaseTasksComments
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $tasks_id
 * @property integer $created_by
 * @property integer $tasks_status_id
 * @property integer $tasks_priority_id
 * @property date $due_date
 * @property float $worked_hours
 * @property string $description
 * @property timestamp $created_at
 * @property integer $progress
 * @property Tasks $Tasks
 * @property Users $Users
 * @property TasksStatus $TasksStatus
 * @property TasksPriority $TasksPriority
 * 
 * @method integer       getId()                Returns the current record's "id" value
 * @method integer       getTasksId()           Returns the current record's "tasks_id" value
 * @method integer       getCreatedBy()         Returns the current record's "created_by" value
 * @method integer       getTasksStatusId()     Returns the current record's "tasks_status_id" value
 * @method integer       getTasksPriorityId()   Returns the current record's "tasks_priority_id" value
 * @method date          getDueDate()           Returns the current record's "due_date" value
 * @method float         getWorkedHours()       Returns the current record's "worked_hours" value
 * @method string        getDescription()       Returns the current record's "description" value
 * @method timestamp     getCreatedAt()         Returns the current record's "created_at" value
 * @method integer       getProgress()          Returns the current record's "progress" value
 * @method Tasks         getTasks()             Returns the current record's "Tasks" value
 * @method Users         getUsers()             Returns the current record's "Users" value
 * @method TasksStatus   getTasksStatus()       Returns the current record's "TasksStatus" value
 * @method TasksPriority getTasksPriority()     Returns the current record's "TasksPriority" value
 * @method TasksComments setId()                Sets the current record's "id" value
 * @method TasksComments setTasksId()           Sets the current record's "tasks_id" value
 * @method TasksComments setCreatedBy()         Sets the current record's "created_by" value
 * @method TasksComments setTasksStatusId()     Sets the current record's "tasks_status_id" value
 * @method TasksComments setTasksPriorityId()   Sets the current record's "tasks_priority_id" value
 * @method TasksComments setDueDate()           Sets the current record's "due_date" value
 * @method TasksComments setWorkedHours()       Sets the current record's "worked_hours" value
 * @method TasksComments setDescription()       Sets the current record's "description" value
 * @method TasksComments setCreatedAt()         Sets the current record's "created_at" value
 * @method TasksComments setProgress()          Sets the current record's "progress" value
 * @method TasksComments setTasks()             Sets the current record's "Tasks" value
 * @method TasksComments setUsers()             Sets the current record's "Users" value
 * @method TasksComments setTasksStatus()       Sets the current record's "TasksStatus" value
 * @method TasksComments setTasksPriority()     Sets the current record's "TasksPriority" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     QAV Digital
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTasksComments extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tasks_comments');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('tasks_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_by', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tasks_status_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tasks_priority_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('due_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('worked_hours', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('progress', 'integer', 4, array(
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
        $this->hasOne('Tasks', array(
             'local' => 'tasks_id',
             'foreign' => 'id'));

        $this->hasOne('Users', array(
             'local' => 'created_by',
             'foreign' => 'id'));

        $this->hasOne('TasksStatus', array(
             'local' => 'tasks_status_id',
             'foreign' => 'id'));

        $this->hasOne('TasksPriority', array(
             'local' => 'tasks_priority_id',
             'foreign' => 'id'));
    }
}