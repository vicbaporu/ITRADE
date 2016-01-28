<?php



/**
 * This class defines the structure of the 'servicioestado' table.
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
class ServicioestadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.ServicioestadoTableMap';

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
        $this->setName('servicioestado');
        $this->setPhpName('Servicioestado');
        $this->setClassname('Servicioestado');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idservicioestado', 'Idservicioestado', 'INTEGER', true, null, null);
        $this->addForeignKey('idservicio', 'Idservicio', 'INTEGER', 'servicio', 'idservicio', true, null, null);
        $this->addColumn('servicioestado_nombre', 'ServicioestadoNombre', 'VARCHAR', true, 100, null);
        $this->addColumn('servicioestado_jerarquia', 'ServicioestadoJerarquia', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Servicio', 'Servicio', RelationMap::MANY_TO_ONE, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Expedientehistorial', 'Expedientehistorial', RelationMap::ONE_TO_MANY, array('idservicioestado' => 'idestadoservicio', ), 'CASCADE', 'CASCADE', 'Expedientehistorials');
    } // buildRelations()

} // ServicioestadoTableMap
