<?php



/**
 * This class defines the structure of the 'proveedoritradeservicio' table.
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
class ProveedoritradeservicioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade_system.map.ProveedoritradeservicioTableMap';

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
        $this->setName('proveedoritradeservicio');
        $this->setPhpName('Proveedoritradeservicio');
        $this->setClassname('Proveedoritradeservicio');
        $this->setPackage('itrade_system');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproveedoritradeservicio', 'Idproveedoritradeservicio', 'INTEGER', true, null, null);
        $this->addForeignKey('idproveedoritrade', 'Idproveedoritrade', 'INTEGER', 'proveedoritrade', 'idproveedoritrade', false, null, null);
        $this->addForeignKey('idservicio', 'Idservicio', 'INTEGER', 'servicio', 'idservicio', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Proveedoritrade', 'Proveedoritrade', RelationMap::MANY_TO_ONE, array('idproveedoritrade' => 'idproveedoritrade', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Servicio', 'Servicio', RelationMap::MANY_TO_ONE, array('idservicio' => 'idservicio', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ProveedoritradeservicioTableMap