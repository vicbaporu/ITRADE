<?php



/**
 * This class defines the structure of the 'empleado' table.
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
class EmpleadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.EmpleadoTableMap';

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
        $this->setName('empleado');
        $this->setPhpName('Empleado');
        $this->setClassname('Empleado');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleado', 'Idempleado', 'INTEGER', true, null, null);
        $this->addColumn('empleado_nombre', 'EmpleadoNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_apellidopaterno', 'EmpleadoApellidopaterno', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_apallidomaterno', 'EmpleadoApallidomaterno', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_email', 'EmpleadoEmail', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_password', 'EmpleadoPassword', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_celular', 'EmpleadoCelular', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_telefono', 'EmpleadoTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_calle', 'EmpleadoCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_numero', 'EmpleadoNumero', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_interior', 'EmpleadoInterior', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_colonia', 'EmpleadoColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_codigopostal', 'EmpleadoCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_ciudad', 'EmpleadoCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_estado', 'EmpleadoEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_nss', 'EmpleadoNss', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_rfc', 'EmpleadoRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_iniciocontrato', 'EmpleadoIniciocontrato', 'DATE', false, null, null);
        $this->addColumn('empleado_nombrecontacto', 'EmpleadoNombrecontacto', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_telefonocontacto', 'EmpleadoTelefonocontacto', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_estatus', 'EmpleadoEstatus', 'CHAR', true, null, null);
        $this->getColumn('empleado_estatus', false)->setValueSet(array (
  0 => 'activo',
  1 => 'suspendido',
  2 => 'inactivo',
));
        $this->addColumn('empleado_rol', 'EmpleadoRol', 'CHAR', true, null, null);
        $this->getColumn('empleado_rol', false)->setValueSet(array (
  0 => 'operaciones',
  1 => 'ventas',
  2 => 'administrador',
));
        $this->addColumn('empleado_foto', 'EmpleadoFoto', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ClienteRelatedByIdempleadocomercial', 'Cliente', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadocomercial', ), 'SET NULL', 'SET NULL', 'ClientesRelatedByIdempleadocomercial');
        $this->addRelation('ClienteRelatedByIdempleadooperaciones', 'Cliente', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadooperaciones', ), 'CASCADE', 'CASCADE', 'ClientesRelatedByIdempleadooperaciones');
        $this->addRelation('Expedientearchivo', 'Expedientearchivo', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Expedientearchivos');
        $this->addRelation('Expedientegasto', 'Expedientegasto', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Expedientegastos');
    } // buildRelations()

} // EmpleadoTableMap
