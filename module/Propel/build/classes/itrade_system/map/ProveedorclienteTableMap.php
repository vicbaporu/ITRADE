<?php



/**
 * This class defines the structure of the 'proveedorcliente' table.
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
class ProveedorclienteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade_system.map.ProveedorclienteTableMap';

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
        $this->setName('proveedorcliente');
        $this->setPhpName('Proveedorcliente');
        $this->setClassname('Proveedorcliente');
        $this->setPackage('itrade_system');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproveedorcliente', 'Idproveedorcliente', 'INTEGER', true, null, null);
        $this->addColumn('proveedorcliente_taxid', 'ProveedorclienteTaxid', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedorcliente_calle', 'ProveedorclienteCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedorcliente_numero', 'ProveedorclienteNumero', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedorcliente_interior', 'ProveedorclienteInterior', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedorcliente_colonia', 'ProveedorclienteColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedorcliente_ciudad', 'ProveedorclienteCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedorcliente_estado', 'ProveedorclienteEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedorcliente_pais', 'ProveedorclientePais', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedorcliente_nombrecontacto', 'ProveedorclienteNombrecontacto', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedorcliente_emailcontacto', 'ProveedorclienteEmailcontacto', 'VARCHAR', false, 45, null);
        $this->addColumn('proveedorcliente_telefonocontacto', 'ProveedorclienteTelefonocontacto', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ProveedorclienteTableMap
