<?php



/**
 * This class defines the structure of the 'gastofacturacion' table.
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
class GastofacturacionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.GastofacturacionTableMap';

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
        $this->setName('gastofacturacion');
        $this->setPhpName('Gastofacturacion');
        $this->setClassname('Gastofacturacion');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idgastofacturacion', 'Idgastofacturacion', 'INTEGER', true, null, null);
        $this->addForeignKey('idcategoriagasto', 'Idcategoriagasto', 'INTEGER', 'categoriagasto', 'idcategoriagasto', true, null, null);
        $this->addColumn('gastofacturacion_nombre', 'GastofacturacionNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('gastofacturacion_descripcion', 'GastofacturacionDescripcion', 'LONGVARCHAR', false, null, null);
        $this->addColumn('gastofacturacion_iva', 'GastofacturacionIva', 'CHAR', false, null, null);
        $this->getColumn('gastofacturacion_iva', false)->setValueSet(array (
  0 => '0',
  1 => '16',
  2 => '4',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Categoriagasto', 'Categoriagasto', RelationMap::MANY_TO_ONE, array('idcategoriagasto' => 'idcategoriagasto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Expedientegasto', 'Expedientegasto', RelationMap::ONE_TO_MANY, array('idgastofacturacion' => 'idgastofacturacion', ), 'CASCADE', 'CASCADE', 'Expedientegastos');
    } // buildRelations()

} // GastofacturacionTableMap
