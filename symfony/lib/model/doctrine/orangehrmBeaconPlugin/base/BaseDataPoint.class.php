<?php

/**
 * BaseDataPoint
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int            $id                                  Type: integer, primary key
 * @property string         $name                                Type: string(100)
 * @property int            $datapointTypeId                     Type: integer
 * @property string         $definition                          Type: clob
 * @property DataPointType  $DataPointType                       
 *  
 * @method int              getId()                              Type: integer, primary key
 * @method string           getName()                            Type: string(100)
 * @method int              getDatapointtypeid()                 Type: integer
 * @method string           getDefinition()                      Type: clob
 * @method DataPointType    getDataPointType()                   
 *  
 * @method DataPoint        setId(int $val)                      Type: integer, primary key
 * @method DataPoint        setName(string $val)                 Type: string(100)
 * @method DataPoint        setDatapointtypeid(int $val)         Type: integer
 * @method DataPoint        setDefinition(string $val)           Type: clob
 * @method DataPoint        setDataPointType(DataPointType $val) 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDataPoint extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_datapoint');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('datapoint_type_id as datapointTypeId', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('definition', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DataPointType', array(
             'local' => 'datapoint_type_id',
             'foreign' => 'id'));
    }
}