<?php



/**
 * This class defines the structure of the 'expedientearchivo' table.
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
class ExpedientearchivoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.ExpedientearchivoTableMap';

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
        $this->setName('expedientearchivo');
        $this->setPhpName('Expedientearchivo');
        $this->setClassname('Expedientearchivo');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idexpedientearchivo', 'Idexpedientearchivo', 'INTEGER', true, null, null);
        $this->addForeignKey('idexpediente', 'Idexpediente', 'INTEGER', 'expediente', 'idexpediente', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addColumn('expedientearchivo_fecha', 'ExpedientearchivoFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('expedientearchivo_tipo', 'ExpedientearchivoTipo', 'CHAR', true, null, null);
        $this->getColumn('expedientearchivo_tipo', false)->setValueSet(array (
  0 => 'blawb',
  1 => 'certificadoorigen',
  2 => 'polizaseguro',
  3 => 'facturamercancia',
  4 => 'facturashipper',
  5 => 'pedimento',
  6 => 'packinglist',
  7 => 'msds',
  8 => 'eir',
  9 => 'estimaciongastos',
  10 => 'documentosaduanales',
  11 => 'otro',
));
        $this->addColumn('expedientearchivo_archivo', 'ExpedientearchivoArchivo', 'LONGVARCHAR', true, null, null);
        $this->addColumn('expedientearchivo_nota', 'ExpedientearchivoNota', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Expediente', 'Expediente', RelationMap::MANY_TO_ONE, array('idexpediente' => 'idexpediente', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ExpedientearchivoTableMap
