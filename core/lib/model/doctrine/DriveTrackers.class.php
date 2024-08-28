<?php

/**
 * DriveTracker
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Luke Foster
 * @version    SVN: $Id
 */
class DriveTrackers extends BaseDriveTrackers
{
    public static function getSchema()
    {
        $drives =  Doctrine_Core::getTable('DriveTrackers')->createQuery('d')        
            ->orderBy('d.id')
            ->fetchArray();
        
        $schema = array();

        foreach($drives as $d)
        {
            $schema[$d['id']] = $d['name'];
        }
        
        return $schema;
    }

    public static function getNextDriveInt()
    {
        $getNext =  Doctrine_Core::getTable('DriveTrackers')->createQuery()        
                        ->select('MAX(name) AS new_name')
                        ->fetchArray();

        $getNextInt = $getNext[0]['new_name']+1;
    
        return $getNextInt;
    }

    public static function getNextDriveName()
    {
        $getNext =  Doctrine_Core::getTable('DriveTrackers')->createQuery()        
                        ->select('MAX(name) AS new_name')
                        ->fetchArray();
                        
        $getNextInt = $getNext[0]['new_name']+1;
        $str = 'X' . sprintf('%05d', $getNextInt);
    
        return $str;
    }

    public static function updateFreeSpace($drive, $original_value, $new_value)
    {
        $query = Doctrine_Core::getTable('DriveTrackers')->find($drive);

        $freeSpace = $query->getFreeSpace();
        $original_value = (int)$original_value;
        $new_value = (int)$new_value;

        $resetFreeSpace = $freeSpace + $original_value;
        $updatedFreeSpace = $resetFreeSpace - $new_value;

        $runQuery = Doctrine_Query::create()
                                ->update('DriveTrackers u')
                                ->set('u.free_space', $updatedFreeSpace)
                                ->where('u.id = ?', $drive)
                                ->execute();

        $query = Doctrine_Core::getTable('DriveTrackers')->find($drive);

        $freeSpace = $query->getFreeSpace();
        $capacity = ($query->getCapacity() * 0.1);

        if($freeSpace < $capacity){
            $runQuery = Doctrine_Query::create()
                                ->update('DriveTrackers u')
                                ->set('u.active', 2)
                                ->where('u.id = ?', $drive)
                                ->execute();
        }

    }

    public static function createFreeSpace($drive, $new_value)
    {
        $query = Doctrine_Core::getTable('DriveTrackers')->find($drive);

        $freeSpace = $query->getFreeSpace();
        $updatedFreeSpace = $freeSpace - $new_value;

        $runQuery = Doctrine_Query::create()
                                ->update('DriveTrackers u')
                                ->set('u.free_space', $updatedFreeSpace)
                                ->where('u.id = ?', $drive)
                                ->execute();

        $query = Doctrine_Core::getTable('DriveTrackers')->find($drive);

        $freeSpace = $query->getFreeSpace();
        $capacity = ($query->getCapacity() * 0.1);

        if($freeSpace < $capacity){
            $runQuery = Doctrine_Query::create()
                                ->update('DriveTrackers u')
                                ->set('u.active', 2)
                                ->where('u.id = ?', $drive)
                                ->execute();
        }
    }
}