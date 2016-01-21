<?php



/**
 * This class defines the structure of the 'proveedoritradearchivo' table.
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
class ProveedoritradearchivoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.ProveedoritradearchivoTableMap';

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
        $this->setName('proveedoritradearchivo');
        $this->setPhpName('Proveedoritradearchivo');
        $this->setClassname('Proveedoritradearchivo');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproveedoritradearchivo', 'Idproveedoritradearchivo', 'INTEGER', true, null, null);
        $this->addForeignKey('idproveedoritrade', 'Idproveedoritrade', 'INTEGER', 'proveedoritrade', 'idproveedoritrade', true, null, null);
        $this->addColumn('proveedoritradearchivo_archivo', 'ProveedoritradearchivoArchivo', 'LONGVARCHAR', true, null, null);
        $this->addColumn('proveedoritradearchivo_size', 'ProveedoritradearchivoSize', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Proveedoritrade', 'Proveedoritrade', RelationMap::MANY_TO_ONE, array('idproveedoritrade' => 'idproveedoritrade', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ProveedoritradearchivoTableMap
