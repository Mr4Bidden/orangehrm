<?php

/**
 * BaseEmpContract
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int          $emp_number                Type: integer(4), primary key
 * @property float        $contract_id               Type: decimal(10), primary key
 * @property string       $start_date                Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @property string       $end_date                  Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @property Employee     $Employee                  
 *  
 * @method int            getEmpNumber()             Type: integer(4), primary key
 * @method float          getContractId()            Type: decimal(10), primary key
 * @method string         getStartDate()             Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method string         getEndDate()               Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method Employee       getEmployee()              
 *  
 * @method EmpContract    setEmpNumber(int $val)     Type: integer(4), primary key
 * @method EmpContract    setContractId(float $val)  Type: decimal(10), primary key
 * @method EmpContract    setStartDate(string $val)  Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method EmpContract    setEndDate(string $val)    Type: timestamp(25), Timestamp in ISO-8601 format (YYYY-MM-DD HH:MI:SS)
 * @method EmpContract    setEmployee(Employee $val) 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmpContract extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_emp_contract_extend');
        $this->hasColumn('emp_number', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('econ_extend_id as contract_id', 'decimal', 10, array(
             'type' => 'decimal',
             'primary' => true,
             'length' => 10,
             ));
        $this->hasColumn('econ_extend_start_date as start_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => 25,
             ));
        $this->hasColumn('econ_extend_end_date as end_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Employee', array(
             'local' => 'emp_number',
             'foreign' => 'emp_number'));
    }
}