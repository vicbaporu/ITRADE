<?php



/**
 * This class defines the structure of the 'expedienteservicio' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.itrade_system.map
 */
class ExpedienteservicioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade_system.map.ExpedienteservicioTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('expedienteservicio');
        $this->setPhpName('Expedienteservicio');
        $this->setClassname('Expedienteservicio');
        $this->setPackage('itrade_system');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idexpedienteservicio', 'Idexpedienteservicio', 'INTEGER', true, null, null);
        $this->addForeignKey('idexpediente', 'Idexpediente', 'INTEGER', 'expediente', 'idexpediente', true, null, null);
        $this->addForeignKey('idservicio', 'Idservicio', 'INTEGER', 'servicio', 'idservicio', true, null, null);
        $this->addColumn('expedienteservicio_fecha', 'ExpedienteservicioFecha', 'DATE', true, null, null);
        $this->addColumn('expedienteservicio_fechatermino', 'ExpedienteservicioFechatermino', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Expediente', 'Expediente', RelationMap::MANY_TO_ONE, array('idexpediente' => 'idexpediente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Servicio', 'Servicio', RelationMap::MANY_TO_ONE, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ExpedienteservicioTableMap
