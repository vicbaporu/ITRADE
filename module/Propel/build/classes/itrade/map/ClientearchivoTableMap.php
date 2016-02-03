<?php



/**
 * This class defines the structure of the 'clientearchivo' table.
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
class ClientearchivoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.ClientearchivoTableMap';

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
        $this->setName('clientearchivo');
        $this->setPhpName('Clientearchivo');
        $this->setClassname('Clientearchivo');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idclientearchivo', 'Idclientearchivo', 'INTEGER', true, null, null);
        $this->addForeignKey('idcliente', 'Idcliente', 'INTEGER', 'cliente', 'idcliente', true, null, null);
        $this->addColumn('clientearchivo_archivo', 'ClientearchivoArchivo', 'LONGVARCHAR', true, null, null);
        $this->addColumn('clientearchivo_size', 'ClientearchivoSize', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('idcliente' => 'idcliente', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ClientearchivoTableMap
