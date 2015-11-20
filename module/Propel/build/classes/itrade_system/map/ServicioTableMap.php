<?php



/**
 * This class defines the structure of the 'servicio' table.
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
class ServicioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade_system.map.ServicioTableMap';

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
        $this->setName('servicio');
        $this->setPhpName('Servicio');
        $this->setClassname('Servicio');
        $this->setPackage('itrade_system');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idservicio', 'Idservicio', 'INTEGER', true, null, null);
        $this->addColumn('servicio_nombre', 'ServicioNombre', 'VARCHAR', false, 45, null);
        $this->addColumn('servicio_descripcion', 'ServicioDescripcion', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Expedienteservicio', 'Expedienteservicio', RelationMap::ONE_TO_MANY, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE', 'Expedienteservicios');
        $this->addRelation('Proveedoritradeservicio', 'Proveedoritradeservicio', RelationMap::ONE_TO_MANY, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE', 'Proveedoritradeservicios');
        $this->addRelation('Servicioestado', 'Servicioestado', RelationMap::ONE_TO_MANY, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE', 'Servicioestados');
    } // buildRelations()

} // ServicioTableMap
