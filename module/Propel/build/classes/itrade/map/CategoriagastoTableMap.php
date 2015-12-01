<?php



/**
 * This class defines the structure of the 'categoriagasto' table.
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
class CategoriagastoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.CategoriagastoTableMap';

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
        $this->setName('categoriagasto');
        $this->setPhpName('Categoriagasto');
        $this->setClassname('Categoriagasto');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcategoriagasto', 'Idcategoriagasto', 'INTEGER', true, null, null);
        $this->addColumn('categoriagasto_nombre', 'CategoriagastoNombre', 'VARCHAR', true, 255, null);
        $this->addColumn('categoriagasto_descripcion', 'CategoriagastoDescripcion', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Gastofacturacion', 'Gastofacturacion', RelationMap::ONE_TO_MANY, array('idcategoriagasto' => 'idcategoriagasto', ), 'CASCADE', 'CASCADE', 'Gastofacturacions');
    } // buildRelations()

} // CategoriagastoTableMap
