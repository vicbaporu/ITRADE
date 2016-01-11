<?php



/**
 * This class defines the structure of the 'expedientehistorial' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.itrade.map
 */
class ExpedientehistorialTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.ExpedientehistorialTableMap';

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
        $this->setName('expedientehistorial');
        $this->setPhpName('Expedientehistorial');
        $this->setClassname('Expedientehistorial');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idexpedientehistorial', 'Idexpedientehistorial', 'INTEGER', true, null, null);
        $this->addForeignKey('idexpedienteservicio', 'Idexpedienteservicio', 'INTEGER', 'expedienteservicio', 'idexpedienteservicio', false, null, null);
        $this->addForeignKey('idestadoservicio', 'Idestadoservicio', 'INTEGER', 'servicioestado', 'idservicioestado', false, null, null);
        $this->addColumn('expedientehistorial_fecha', 'ExpedientehistorialFecha', 'TIMESTAMP', false, null, null);
        $this->addColumn('expedientehistorial_nota', 'ExpedientehistorialNota', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Expedienteservicio', 'Expedienteservicio', RelationMap::MANY_TO_ONE, array('idexpedienteservicio' => 'idexpedienteservicio', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Servicioestado', 'Servicioestado', RelationMap::MANY_TO_ONE, array('idestadoservicio' => 'idservicioestado', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ExpedientehistorialTableMap
