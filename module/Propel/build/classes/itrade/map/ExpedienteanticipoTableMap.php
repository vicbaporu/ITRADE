<?php



/**
 * This class defines the structure of the 'expedienteanticipo' table.
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
class ExpedienteanticipoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.ExpedienteanticipoTableMap';

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
        $this->setName('expedienteanticipo');
        $this->setPhpName('Expedienteanticipo');
        $this->setClassname('Expedienteanticipo');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idexpedienteanticipo', 'Idexpedienteanticipo', 'INTEGER', true, null, null);
        $this->addColumn('expedienteanticipo_fecha', 'ExpedienteanticipoFecha', 'TIMESTAMP', true, null, null);
        $this->addForeignKey('idexpediente', 'Idexpediente', 'INTEGER', 'expediente', 'idexpediente', true, null, null);
        $this->addColumn('expedienteanticipo_cantidad', 'ExpedienteanticipoCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('expedienteanticipo_metodopago', 'ExpedienteanticipoMetodopago', 'CHAR', true, null, null);
        $this->getColumn('expedienteanticipo_metodopago', false)->setValueSet(array (
  0 => 'efectivo',
  1 => 'cheque',
  2 => 'trasnferencia',
  3 => 'otro',
));
        $this->addColumn('expedienteanticipo_comprobante', 'ExpedienteanticipoComprobante', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Expediente', 'Expediente', RelationMap::MANY_TO_ONE, array('idexpediente' => 'idexpediente', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ExpedienteanticipoTableMap
