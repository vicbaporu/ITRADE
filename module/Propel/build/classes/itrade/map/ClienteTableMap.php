<?php



/**
 * This class defines the structure of the 'cliente' table.
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
class ClienteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.ClienteTableMap';

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
        $this->setName('cliente');
        $this->setPhpName('Cliente');
        $this->setClassname('Cliente');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcliente', 'Idcliente', 'INTEGER', true, null, null);
        $this->addColumn('cliente_email', 'ClienteEmail', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_password', 'ClientePassword', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_razonsocial', 'ClienteRazonsocial', 'VARCHAR', false, 255, null);
        $this->addColumn('cliente_rfc', 'ClienteRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_calle', 'ClienteCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_numero', 'ClienteNumero', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_interior', 'ClienteInterior', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_colonia', 'ClienteColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_codigopostal', 'ClienteCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_ciudad', 'ClienteCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_estado', 'ClienteEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_pais', 'ClientePais', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_telefono', 'ClienteTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_celular', 'ClienteCelular', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_nombrecontacto', 'ClienteNombrecontacto', 'VARCHAR', false, 255, null);
        $this->addColumn('cliente_cumpleanios', 'ClienteCumpleanios', 'DATE', false, null, null);
        $this->addColumn('cliente_callefiscal', 'ClienteCallefiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_numerofiscal', 'ClienteNumerofiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_interiorfiscal', 'ClienteInteriorfiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_coloniafiscal', 'ClienteColoniafiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_codigopostalfiscal', 'ClienteCodigopostalfiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_ciudadfiscal', 'ClienteCiudadfiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_estadofiscal', 'ClienteEstadofiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_paisfiscal', 'ClientePaisfiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_padronimportador', 'ClientePadronimportador', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_encargadoconferido', 'ClienteEncargadoconferido', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_r1', 'ClienteR1', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_r2', 'ClienteR2', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_identificacionrepresentantelegal', 'ClienteIdentificacionrepresentantelegal', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_rfcrepresentantelegal', 'ClienteRfcrepresentantelegal', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_actaconstitutiva', 'ClienteActaconstitutiva', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_podernotarial', 'ClientePodernotarial', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_cartaencomienda', 'ClienteCartaencomienda', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_comprobantedomicilio', 'ClienteComprobantedomicilio', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_comprobanteclabe', 'ClienteComprobanteclabe', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_clabe', 'ClienteClabe', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cliente_archivoszip', 'ClienteArchivoszip', 'LONGVARCHAR', false, null, null);
        $this->addForeignKey('idempleadocomercial', 'Idempleadocomercial', 'INTEGER', 'empleado', 'idempleado', false, null, null);
        $this->addForeignKey('idempleadooperaciones', 'Idempleadooperaciones', 'INTEGER', 'empleado', 'idempleado', false, null, null);
        $this->addColumn('cliente_ultimologin', 'ClienteUltimologin', 'TIMESTAMP', false, null, null);
        $this->addColumn('cliente_fotografiasdomicilio', 'ClienteFotografiasdomicilio', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EmpleadoRelatedByIdempleadocomercial', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadocomercial' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleadooperaciones', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadooperaciones' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Clientearchivo', 'Clientearchivo', RelationMap::ONE_TO_MANY, array('idcliente' => 'idcliente', ), 'CASCADE', 'CASCADE', 'Clientearchivos');
        $this->addRelation('Expediente', 'Expediente', RelationMap::ONE_TO_MANY, array('idcliente' => 'idcliente', ), 'CASCADE', 'CASCADE', 'Expedientes');
        $this->addRelation('Proveedorcliente', 'Proveedorcliente', RelationMap::ONE_TO_MANY, array('idcliente' => 'idcliente', ), 'CASCADE', 'CASCADE', 'Proveedorclientes');
    } // buildRelations()

} // ClienteTableMap
