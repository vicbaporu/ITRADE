<?php



/**
 * This class defines the structure of the 'expedientegasto' table.
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
class ExpedientegastoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'itrade.map.ExpedientegastoTableMap';

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
        $this->setName('expedientegasto');
        $this->setPhpName('Expedientegasto');
        $this->setClassname('Expedientegasto');
        $this->setPackage('itrade');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idexpedientegasto', 'Idexpedientegasto', 'INTEGER', true, null, null);
        $this->addForeignKey('idexpediente', 'Idexpediente', 'INTEGER', 'expediente', 'idexpediente', true, null, null);
        $this->addForeignKey('idgastofacturacion', 'Idgastofacturacion', 'INTEGER', 'gastofacturacion', 'idgastofacturacion', true, null, null);
        $this->addForeignKey('idproveedoritrade', 'Idproveedoritrade', 'INTEGER', 'proveedoritrade', 'idproveedoritrade', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addColumn('expedientegasto_fecha', 'ExpedientegastoFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('expedientegasto_monto', 'ExpedientegastoMonto', 'DECIMAL', true, 10, null);
        $this->addColumn('expedientegasto_tipo', 'ExpedientegastoTipo', 'CHAR', true, null, null);
        $this->getColumn('expedientegasto_tipo', false)->setValueSet(array (
  0 => 'gastorecibir',
  1 => 'gastoconocido',
  2 => 'cobro',
));
        $this->addColumn('expedientegasto_comprobante', 'ExpedientegastoComprobante', 'LONGVARCHAR', false, null, null);
        $this->addColumn('expedientegasto_nota', 'ExpedientegastoNota', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Expediente', 'Expediente', RelationMap::MANY_TO_ONE, array('idexpediente' => 'idexpediente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Gastofacturacion', 'Gastofacturacion', RelationMap::MANY_TO_ONE, array('idgastofacturacion' => 'idgastofacturacion', ), null, null);
        $this->addRelation('Proveedoritrade', 'Proveedoritrade', RelationMap::MANY_TO_ONE, array('idproveedoritrade' => 'idproveedoritrade', ), null, null);
    } // buildRelations()

} // ExpedientegastoTableMap
