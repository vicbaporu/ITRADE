<?php



/**
 * This class defines the structure of the 'proveedoritrade' table.
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
class ProveedoritradeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.ProveedoritradeTableMap';

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
        $this->setName('proveedoritrade');
        $this->setPhpName('Proveedoritrade');
        $this->setClassname('Proveedoritrade');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproveedoritrade', 'Idproveedoritrade', 'INTEGER', true, null, null);
        $this->addColumn('proveedoritrade_nombre', 'ProveedoritradeNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('proveedoritrade_nombrecontacto', 'ProveedoritradeNombrecontacto', 'VARCHAR', true, 45, null);
        $this->addColumn('proveedoritrade_telefono', 'ProveedoritradeTelefono', 'VARCHAR', true, 45, null);
        $this->addColumn('proveedoritrade_calle', 'ProveedoritradeCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedoritrade_numero', 'ProveedoritradeNumero', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedoritrade_interior', 'ProveedoritradeInterior', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedoritrade_colonia', 'ProveedoritradeColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedoritrade_ciudad', 'ProveedoritradeCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedoritrade_estado', 'ProveedoritradeEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedoritrade_pais', 'ProveedoritradePais', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedoritrade_email', 'ProveedoritradeEmail', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedoritrade_rfc', 'ProveedoritradeRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedoritrade_clabe', 'ProveedoritradeClabe', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Expedientegasto', 'Expedientegasto', RelationMap::ONE_TO_MANY, array('idproveedoritrade' => 'idproveedoritrade', ), null, null, 'Expedientegastos');
        $this->addRelation('Proveedoritradearchivo', 'Proveedoritradearchivo', RelationMap::ONE_TO_MANY, array('idproveedoritrade' => 'idproveedoritrade', ), 'CASCADE', 'CASCADE', 'Proveedoritradearchivos');
        $this->addRelation('Proveedoritradeservicio', 'Proveedoritradeservicio', RelationMap::ONE_TO_MANY, array('idproveedoritrade' => 'idproveedoritrade', ), 'CASCADE', 'CASCADE', 'Proveedoritradeservicios');
    } // buildRelations()

} // ProveedoritradeTableMap
