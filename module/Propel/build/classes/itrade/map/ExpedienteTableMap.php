<?php



/**
 * This class defines the structure of the 'expediente' table.
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
class ExpedienteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.ExpedienteTableMap';

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
        $this->setName('expediente');
        $this->setPhpName('Expediente');
        $this->setClassname('Expediente');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idexpediente', 'Idexpediente', 'INTEGER', true, null, null);
        $this->addForeignKey('idcliente', 'Idcliente', 'INTEGER', 'cliente', 'idcliente', false, null, null);
        $this->addColumn('expediente_listaempaque', 'ExpedienteListaempaque', 'LONGVARCHAR', false, null, null);
        $this->addColumn('expediente_factura', 'ExpedienteFactura', 'VARCHAR', false, 45, null);
        $this->addColumn('expediente_fechainicio', 'ExpedienteFechainicio', 'DATE', true, null, null);
        $this->addColumn('expediente_fechafin', 'ExpedienteFechafin', 'DATE', false, null, null);
        $this->addColumn('expediente_precio', 'ExpedientePrecio', 'DECIMAL', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('idcliente' => 'idcliente', ), 'SET NULL', 'SET NULL');
        $this->addRelation('Expedienteanticipo', 'Expedienteanticipo', RelationMap::ONE_TO_MANY, array('idexpediente' => 'idexpediente', ), 'CASCADE', 'CASCADE', 'Expedienteanticipos');
        $this->addRelation('Expedientearchivo', 'Expedientearchivo', RelationMap::ONE_TO_MANY, array('idexpediente' => 'idexpediente', ), 'CASCADE', 'CASCADE', 'Expedientearchivos');
        $this->addRelation('Expedientegasto', 'Expedientegasto', RelationMap::ONE_TO_MANY, array('idexpediente' => 'idexpediente', ), 'CASCADE', 'CASCADE', 'Expedientegastos');
        $this->addRelation('Expedientehistorial', 'Expedientehistorial', RelationMap::ONE_TO_MANY, array('idexpediente' => 'idexpediente', ), 'CASCADE', 'CASCADE', 'Expedientehistorials');
        $this->addRelation('Expedienteservicio', 'Expedienteservicio', RelationMap::ONE_TO_MANY, array('idexpediente' => 'idexpediente', ), 'CASCADE', 'CASCADE', 'Expedienteservicios');
    } // buildRelations()

} // ExpedienteTableMap