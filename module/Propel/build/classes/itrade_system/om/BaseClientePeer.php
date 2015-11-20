<?php


/**
 * Base static class for performing query and update operations on the 'cliente' table.
 *
 *
 *
 * @package propel.generator.itrade_system.om
 */
abstract class BaseClientePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'itrade_system';

    /** the table name for this class */
    const TABLE_NAME = 'cliente';

    /** the related Propel class for this table */
    const OM_CLASS = 'Cliente';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ClienteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 36;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 36;

    /** the column name for the idcliente field */
    const IDCLIENTE = 'cliente.idcliente';

    /** the column name for the cliente_razonsocial field */
    const CLIENTE_RAZONSOCIAL = 'cliente.cliente_razonsocial';

    /** the column name for the cliente_rfc field */
    const CLIENTE_RFC = 'cliente.cliente_rfc';

    /** the column name for the cliente_calle field */
    const CLIENTE_CALLE = 'cliente.cliente_calle';

    /** the column name for the cliente_numero field */
    const CLIENTE_NUMERO = 'cliente.cliente_numero';

    /** the column name for the cliente_interior field */
    const CLIENTE_INTERIOR = 'cliente.cliente_interior';

    /** the column name for the cliente_colonia field */
    const CLIENTE_COLONIA = 'cliente.cliente_colonia';

    /** the column name for the cliente_ciudad field */
    const CLIENTE_CIUDAD = 'cliente.cliente_ciudad';

    /** the column name for the cliente_estado field */
    const CLIENTE_ESTADO = 'cliente.cliente_estado';

    /** the column name for the cliente_pais field */
    const CLIENTE_PAIS = 'cliente.cliente_pais';

    /** the column name for the cliente_email field */
    const CLIENTE_EMAIL = 'cliente.cliente_email';

    /** the column name for the cliente_telefono field */
    const CLIENTE_TELEFONO = 'cliente.cliente_telefono';

    /** the column name for the cliente_nombrecontacto field */
    const CLIENTE_NOMBRECONTACTO = 'cliente.cliente_nombrecontacto';

    /** the column name for the cliente_cumpleanios field */
    const CLIENTE_CUMPLEANIOS = 'cliente.cliente_cumpleanios';

    /** the column name for the cliente_callefiscal field */
    const CLIENTE_CALLEFISCAL = 'cliente.cliente_callefiscal';

    /** the column name for the cliente_numerofiscal field */
    const CLIENTE_NUMEROFISCAL = 'cliente.cliente_numerofiscal';

    /** the column name for the cliente_interiorfiscal field */
    const CLIENTE_INTERIORFISCAL = 'cliente.cliente_interiorfiscal';

    /** the column name for the cliente_coloniafiscal field */
    const CLIENTE_COLONIAFISCAL = 'cliente.cliente_coloniafiscal';

    /** the column name for the cliente_ciudadfiscal field */
    const CLIENTE_CIUDADFISCAL = 'cliente.cliente_ciudadfiscal';

    /** the column name for the cliente_estadofiscal field */
    const CLIENTE_ESTADOFISCAL = 'cliente.cliente_estadofiscal';

    /** the column name for the cliente_paisfiscal field */
    const CLIENTE_PAISFISCAL = 'cliente.cliente_paisfiscal';

    /** the column name for the cliente_padronimportador field */
    const CLIENTE_PADRONIMPORTADOR = 'cliente.cliente_padronimportador';

    /** the column name for the cliente_encargadoconferido field */
    const CLIENTE_ENCARGADOCONFERIDO = 'cliente.cliente_encargadoconferido';

    /** the column name for the cliente_r1 field */
    const CLIENTE_R1 = 'cliente.cliente_r1';

    /** the column name for the cliente_r2 field */
    const CLIENTE_R2 = 'cliente.cliente_r2';

    /** the column name for the cliente_identificacionrepresentantelegal field */
    const CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL = 'cliente.cliente_identificacionrepresentantelegal';

    /** the column name for the cliente_rfcrepresentantelegal field */
    const CLIENTE_RFCREPRESENTANTELEGAL = 'cliente.cliente_rfcrepresentantelegal';

    /** the column name for the cliente_actaconstitutiva field */
    const CLIENTE_ACTACONSTITUTIVA = 'cliente.cliente_actaconstitutiva';

    /** the column name for the cliente_podernotarial field */
    const CLIENTE_PODERNOTARIAL = 'cliente.cliente_podernotarial';

    /** the column name for the cliente_cartaencomienda field */
    const CLIENTE_CARTAENCOMIENDA = 'cliente.cliente_cartaencomienda';

    /** the column name for the cliente_comprobantedomicilio field */
    const CLIENTE_COMPROBANTEDOMICILIO = 'cliente.cliente_comprobantedomicilio';

    /** the column name for the cliente_comprobanteclabe field */
    const CLIENTE_COMPROBANTECLABE = 'cliente.cliente_comprobanteclabe';

    /** the column name for the cliente_clabe field */
    const CLIENTE_CLABE = 'cliente.cliente_clabe';

    /** the column name for the cliente_archivoszip field */
    const CLIENTE_ARCHIVOSZIP = 'cliente.cliente_archivoszip';

    /** the column name for the idempleadocomercial field */
    const IDEMPLEADOCOMERCIAL = 'cliente.idempleadocomercial';

    /** the column name for the idempleadooperaciones field */
    const IDEMPLEADOOPERACIONES = 'cliente.idempleadooperaciones';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Cliente objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Cliente[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ClientePeer::$fieldNames[ClientePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idcliente', 'ClienteRazonsocial', 'ClienteRfc', 'ClienteCalle', 'ClienteNumero', 'ClienteInterior', 'ClienteColonia', 'ClienteCiudad', 'ClienteEstado', 'ClientePais', 'ClienteEmail', 'ClienteTelefono', 'ClienteNombrecontacto', 'ClienteCumpleanios', 'ClienteCallefiscal', 'ClienteNumerofiscal', 'ClienteInteriorfiscal', 'ClienteColoniafiscal', 'ClienteCiudadfiscal', 'ClienteEstadofiscal', 'ClientePaisfiscal', 'ClientePadronimportador', 'ClienteEncargadoconferido', 'ClienteR1', 'ClienteR2', 'ClienteIdentificacionrepresentantelegal', 'ClienteRfcrepresentantelegal', 'ClienteActaconstitutiva', 'ClientePodernotarial', 'ClienteCartaencomienda', 'ClienteComprobantedomicilio', 'ClienteComprobanteclabe', 'ClienteClabe', 'ClienteArchivoszip', 'Idempleadocomercial', 'Idempleadooperaciones', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcliente', 'clienteRazonsocial', 'clienteRfc', 'clienteCalle', 'clienteNumero', 'clienteInterior', 'clienteColonia', 'clienteCiudad', 'clienteEstado', 'clientePais', 'clienteEmail', 'clienteTelefono', 'clienteNombrecontacto', 'clienteCumpleanios', 'clienteCallefiscal', 'clienteNumerofiscal', 'clienteInteriorfiscal', 'clienteColoniafiscal', 'clienteCiudadfiscal', 'clienteEstadofiscal', 'clientePaisfiscal', 'clientePadronimportador', 'clienteEncargadoconferido', 'clienteR1', 'clienteR2', 'clienteIdentificacionrepresentantelegal', 'clienteRfcrepresentantelegal', 'clienteActaconstitutiva', 'clientePodernotarial', 'clienteCartaencomienda', 'clienteComprobantedomicilio', 'clienteComprobanteclabe', 'clienteClabe', 'clienteArchivoszip', 'idempleadocomercial', 'idempleadooperaciones', ),
        BasePeer::TYPE_COLNAME => array (ClientePeer::IDCLIENTE, ClientePeer::CLIENTE_RAZONSOCIAL, ClientePeer::CLIENTE_RFC, ClientePeer::CLIENTE_CALLE, ClientePeer::CLIENTE_NUMERO, ClientePeer::CLIENTE_INTERIOR, ClientePeer::CLIENTE_COLONIA, ClientePeer::CLIENTE_CIUDAD, ClientePeer::CLIENTE_ESTADO, ClientePeer::CLIENTE_PAIS, ClientePeer::CLIENTE_EMAIL, ClientePeer::CLIENTE_TELEFONO, ClientePeer::CLIENTE_NOMBRECONTACTO, ClientePeer::CLIENTE_CUMPLEANIOS, ClientePeer::CLIENTE_CALLEFISCAL, ClientePeer::CLIENTE_NUMEROFISCAL, ClientePeer::CLIENTE_INTERIORFISCAL, ClientePeer::CLIENTE_COLONIAFISCAL, ClientePeer::CLIENTE_CIUDADFISCAL, ClientePeer::CLIENTE_ESTADOFISCAL, ClientePeer::CLIENTE_PAISFISCAL, ClientePeer::CLIENTE_PADRONIMPORTADOR, ClientePeer::CLIENTE_ENCARGADOCONFERIDO, ClientePeer::CLIENTE_R1, ClientePeer::CLIENTE_R2, ClientePeer::CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL, ClientePeer::CLIENTE_RFCREPRESENTANTELEGAL, ClientePeer::CLIENTE_ACTACONSTITUTIVA, ClientePeer::CLIENTE_PODERNOTARIAL, ClientePeer::CLIENTE_CARTAENCOMIENDA, ClientePeer::CLIENTE_COMPROBANTEDOMICILIO, ClientePeer::CLIENTE_COMPROBANTECLABE, ClientePeer::CLIENTE_CLABE, ClientePeer::CLIENTE_ARCHIVOSZIP, ClientePeer::IDEMPLEADOCOMERCIAL, ClientePeer::IDEMPLEADOOPERACIONES, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCLIENTE', 'CLIENTE_RAZONSOCIAL', 'CLIENTE_RFC', 'CLIENTE_CALLE', 'CLIENTE_NUMERO', 'CLIENTE_INTERIOR', 'CLIENTE_COLONIA', 'CLIENTE_CIUDAD', 'CLIENTE_ESTADO', 'CLIENTE_PAIS', 'CLIENTE_EMAIL', 'CLIENTE_TELEFONO', 'CLIENTE_NOMBRECONTACTO', 'CLIENTE_CUMPLEANIOS', 'CLIENTE_CALLEFISCAL', 'CLIENTE_NUMEROFISCAL', 'CLIENTE_INTERIORFISCAL', 'CLIENTE_COLONIAFISCAL', 'CLIENTE_CIUDADFISCAL', 'CLIENTE_ESTADOFISCAL', 'CLIENTE_PAISFISCAL', 'CLIENTE_PADRONIMPORTADOR', 'CLIENTE_ENCARGADOCONFERIDO', 'CLIENTE_R1', 'CLIENTE_R2', 'CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL', 'CLIENTE_RFCREPRESENTANTELEGAL', 'CLIENTE_ACTACONSTITUTIVA', 'CLIENTE_PODERNOTARIAL', 'CLIENTE_CARTAENCOMIENDA', 'CLIENTE_COMPROBANTEDOMICILIO', 'CLIENTE_COMPROBANTECLABE', 'CLIENTE_CLABE', 'CLIENTE_ARCHIVOSZIP', 'IDEMPLEADOCOMERCIAL', 'IDEMPLEADOOPERACIONES', ),
        BasePeer::TYPE_FIELDNAME => array ('idcliente', 'cliente_razonsocial', 'cliente_rfc', 'cliente_calle', 'cliente_numero', 'cliente_interior', 'cliente_colonia', 'cliente_ciudad', 'cliente_estado', 'cliente_pais', 'cliente_email', 'cliente_telefono', 'cliente_nombrecontacto', 'cliente_cumpleanios', 'cliente_callefiscal', 'cliente_numerofiscal', 'cliente_interiorfiscal', 'cliente_coloniafiscal', 'cliente_ciudadfiscal', 'cliente_estadofiscal', 'cliente_paisfiscal', 'cliente_padronimportador', 'cliente_encargadoconferido', 'cliente_r1', 'cliente_r2', 'cliente_identificacionrepresentantelegal', 'cliente_rfcrepresentantelegal', 'cliente_actaconstitutiva', 'cliente_podernotarial', 'cliente_cartaencomienda', 'cliente_comprobantedomicilio', 'cliente_comprobanteclabe', 'cliente_clabe', 'cliente_archivoszip', 'idempleadocomercial', 'idempleadooperaciones', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ClientePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idcliente' => 0, 'ClienteRazonsocial' => 1, 'ClienteRfc' => 2, 'ClienteCalle' => 3, 'ClienteNumero' => 4, 'ClienteInterior' => 5, 'ClienteColonia' => 6, 'ClienteCiudad' => 7, 'ClienteEstado' => 8, 'ClientePais' => 9, 'ClienteEmail' => 10, 'ClienteTelefono' => 11, 'ClienteNombrecontacto' => 12, 'ClienteCumpleanios' => 13, 'ClienteCallefiscal' => 14, 'ClienteNumerofiscal' => 15, 'ClienteInteriorfiscal' => 16, 'ClienteColoniafiscal' => 17, 'ClienteCiudadfiscal' => 18, 'ClienteEstadofiscal' => 19, 'ClientePaisfiscal' => 20, 'ClientePadronimportador' => 21, 'ClienteEncargadoconferido' => 22, 'ClienteR1' => 23, 'ClienteR2' => 24, 'ClienteIdentificacionrepresentantelegal' => 25, 'ClienteRfcrepresentantelegal' => 26, 'ClienteActaconstitutiva' => 27, 'ClientePodernotarial' => 28, 'ClienteCartaencomienda' => 29, 'ClienteComprobantedomicilio' => 30, 'ClienteComprobanteclabe' => 31, 'ClienteClabe' => 32, 'ClienteArchivoszip' => 33, 'Idempleadocomercial' => 34, 'Idempleadooperaciones' => 35, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcliente' => 0, 'clienteRazonsocial' => 1, 'clienteRfc' => 2, 'clienteCalle' => 3, 'clienteNumero' => 4, 'clienteInterior' => 5, 'clienteColonia' => 6, 'clienteCiudad' => 7, 'clienteEstado' => 8, 'clientePais' => 9, 'clienteEmail' => 10, 'clienteTelefono' => 11, 'clienteNombrecontacto' => 12, 'clienteCumpleanios' => 13, 'clienteCallefiscal' => 14, 'clienteNumerofiscal' => 15, 'clienteInteriorfiscal' => 16, 'clienteColoniafiscal' => 17, 'clienteCiudadfiscal' => 18, 'clienteEstadofiscal' => 19, 'clientePaisfiscal' => 20, 'clientePadronimportador' => 21, 'clienteEncargadoconferido' => 22, 'clienteR1' => 23, 'clienteR2' => 24, 'clienteIdentificacionrepresentantelegal' => 25, 'clienteRfcrepresentantelegal' => 26, 'clienteActaconstitutiva' => 27, 'clientePodernotarial' => 28, 'clienteCartaencomienda' => 29, 'clienteComprobantedomicilio' => 30, 'clienteComprobanteclabe' => 31, 'clienteClabe' => 32, 'clienteArchivoszip' => 33, 'idempleadocomercial' => 34, 'idempleadooperaciones' => 35, ),
        BasePeer::TYPE_COLNAME => array (ClientePeer::IDCLIENTE => 0, ClientePeer::CLIENTE_RAZONSOCIAL => 1, ClientePeer::CLIENTE_RFC => 2, ClientePeer::CLIENTE_CALLE => 3, ClientePeer::CLIENTE_NUMERO => 4, ClientePeer::CLIENTE_INTERIOR => 5, ClientePeer::CLIENTE_COLONIA => 6, ClientePeer::CLIENTE_CIUDAD => 7, ClientePeer::CLIENTE_ESTADO => 8, ClientePeer::CLIENTE_PAIS => 9, ClientePeer::CLIENTE_EMAIL => 10, ClientePeer::CLIENTE_TELEFONO => 11, ClientePeer::CLIENTE_NOMBRECONTACTO => 12, ClientePeer::CLIENTE_CUMPLEANIOS => 13, ClientePeer::CLIENTE_CALLEFISCAL => 14, ClientePeer::CLIENTE_NUMEROFISCAL => 15, ClientePeer::CLIENTE_INTERIORFISCAL => 16, ClientePeer::CLIENTE_COLONIAFISCAL => 17, ClientePeer::CLIENTE_CIUDADFISCAL => 18, ClientePeer::CLIENTE_ESTADOFISCAL => 19, ClientePeer::CLIENTE_PAISFISCAL => 20, ClientePeer::CLIENTE_PADRONIMPORTADOR => 21, ClientePeer::CLIENTE_ENCARGADOCONFERIDO => 22, ClientePeer::CLIENTE_R1 => 23, ClientePeer::CLIENTE_R2 => 24, ClientePeer::CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL => 25, ClientePeer::CLIENTE_RFCREPRESENTANTELEGAL => 26, ClientePeer::CLIENTE_ACTACONSTITUTIVA => 27, ClientePeer::CLIENTE_PODERNOTARIAL => 28, ClientePeer::CLIENTE_CARTAENCOMIENDA => 29, ClientePeer::CLIENTE_COMPROBANTEDOMICILIO => 30, ClientePeer::CLIENTE_COMPROBANTECLABE => 31, ClientePeer::CLIENTE_CLABE => 32, ClientePeer::CLIENTE_ARCHIVOSZIP => 33, ClientePeer::IDEMPLEADOCOMERCIAL => 34, ClientePeer::IDEMPLEADOOPERACIONES => 35, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCLIENTE' => 0, 'CLIENTE_RAZONSOCIAL' => 1, 'CLIENTE_RFC' => 2, 'CLIENTE_CALLE' => 3, 'CLIENTE_NUMERO' => 4, 'CLIENTE_INTERIOR' => 5, 'CLIENTE_COLONIA' => 6, 'CLIENTE_CIUDAD' => 7, 'CLIENTE_ESTADO' => 8, 'CLIENTE_PAIS' => 9, 'CLIENTE_EMAIL' => 10, 'CLIENTE_TELEFONO' => 11, 'CLIENTE_NOMBRECONTACTO' => 12, 'CLIENTE_CUMPLEANIOS' => 13, 'CLIENTE_CALLEFISCAL' => 14, 'CLIENTE_NUMEROFISCAL' => 15, 'CLIENTE_INTERIORFISCAL' => 16, 'CLIENTE_COLONIAFISCAL' => 17, 'CLIENTE_CIUDADFISCAL' => 18, 'CLIENTE_ESTADOFISCAL' => 19, 'CLIENTE_PAISFISCAL' => 20, 'CLIENTE_PADRONIMPORTADOR' => 21, 'CLIENTE_ENCARGADOCONFERIDO' => 22, 'CLIENTE_R1' => 23, 'CLIENTE_R2' => 24, 'CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL' => 25, 'CLIENTE_RFCREPRESENTANTELEGAL' => 26, 'CLIENTE_ACTACONSTITUTIVA' => 27, 'CLIENTE_PODERNOTARIAL' => 28, 'CLIENTE_CARTAENCOMIENDA' => 29, 'CLIENTE_COMPROBANTEDOMICILIO' => 30, 'CLIENTE_COMPROBANTECLABE' => 31, 'CLIENTE_CLABE' => 32, 'CLIENTE_ARCHIVOSZIP' => 33, 'IDEMPLEADOCOMERCIAL' => 34, 'IDEMPLEADOOPERACIONES' => 35, ),
        BasePeer::TYPE_FIELDNAME => array ('idcliente' => 0, 'cliente_razonsocial' => 1, 'cliente_rfc' => 2, 'cliente_calle' => 3, 'cliente_numero' => 4, 'cliente_interior' => 5, 'cliente_colonia' => 6, 'cliente_ciudad' => 7, 'cliente_estado' => 8, 'cliente_pais' => 9, 'cliente_email' => 10, 'cliente_telefono' => 11, 'cliente_nombrecontacto' => 12, 'cliente_cumpleanios' => 13, 'cliente_callefiscal' => 14, 'cliente_numerofiscal' => 15, 'cliente_interiorfiscal' => 16, 'cliente_coloniafiscal' => 17, 'cliente_ciudadfiscal' => 18, 'cliente_estadofiscal' => 19, 'cliente_paisfiscal' => 20, 'cliente_padronimportador' => 21, 'cliente_encargadoconferido' => 22, 'cliente_r1' => 23, 'cliente_r2' => 24, 'cliente_identificacionrepresentantelegal' => 25, 'cliente_rfcrepresentantelegal' => 26, 'cliente_actaconstitutiva' => 27, 'cliente_podernotarial' => 28, 'cliente_cartaencomienda' => 29, 'cliente_comprobantedomicilio' => 30, 'cliente_comprobanteclabe' => 31, 'cliente_clabe' => 32, 'cliente_archivoszip' => 33, 'idempleadocomercial' => 34, 'idempleadooperaciones' => 35, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = ClientePeer::getFieldNames($toType);
        $key = isset(ClientePeer::$fieldKeys[$fromType][$name]) ? ClientePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ClientePeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, ClientePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ClientePeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ClientePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ClientePeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ClientePeer::IDCLIENTE);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_RAZONSOCIAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_RFC);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_CALLE);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_NUMERO);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_INTERIOR);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_COLONIA);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_CIUDAD);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_ESTADO);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_PAIS);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_EMAIL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_TELEFONO);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_NOMBRECONTACTO);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_CUMPLEANIOS);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_CALLEFISCAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_NUMEROFISCAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_INTERIORFISCAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_COLONIAFISCAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_CIUDADFISCAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_ESTADOFISCAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_PAISFISCAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_PADRONIMPORTADOR);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_ENCARGADOCONFERIDO);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_R1);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_R2);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_RFCREPRESENTANTELEGAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_ACTACONSTITUTIVA);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_PODERNOTARIAL);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_CARTAENCOMIENDA);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_COMPROBANTEDOMICILIO);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_COMPROBANTECLABE);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_CLABE);
            $criteria->addSelectColumn(ClientePeer::CLIENTE_ARCHIVOSZIP);
            $criteria->addSelectColumn(ClientePeer::IDEMPLEADOCOMERCIAL);
            $criteria->addSelectColumn(ClientePeer::IDEMPLEADOOPERACIONES);
        } else {
            $criteria->addSelectColumn($alias . '.idcliente');
            $criteria->addSelectColumn($alias . '.cliente_razonsocial');
            $criteria->addSelectColumn($alias . '.cliente_rfc');
            $criteria->addSelectColumn($alias . '.cliente_calle');
            $criteria->addSelectColumn($alias . '.cliente_numero');
            $criteria->addSelectColumn($alias . '.cliente_interior');
            $criteria->addSelectColumn($alias . '.cliente_colonia');
            $criteria->addSelectColumn($alias . '.cliente_ciudad');
            $criteria->addSelectColumn($alias . '.cliente_estado');
            $criteria->addSelectColumn($alias . '.cliente_pais');
            $criteria->addSelectColumn($alias . '.cliente_email');
            $criteria->addSelectColumn($alias . '.cliente_telefono');
            $criteria->addSelectColumn($alias . '.cliente_nombrecontacto');
            $criteria->addSelectColumn($alias . '.cliente_cumpleanios');
            $criteria->addSelectColumn($alias . '.cliente_callefiscal');
            $criteria->addSelectColumn($alias . '.cliente_numerofiscal');
            $criteria->addSelectColumn($alias . '.cliente_interiorfiscal');
            $criteria->addSelectColumn($alias . '.cliente_coloniafiscal');
            $criteria->addSelectColumn($alias . '.cliente_ciudadfiscal');
            $criteria->addSelectColumn($alias . '.cliente_estadofiscal');
            $criteria->addSelectColumn($alias . '.cliente_paisfiscal');
            $criteria->addSelectColumn($alias . '.cliente_padronimportador');
            $criteria->addSelectColumn($alias . '.cliente_encargadoconferido');
            $criteria->addSelectColumn($alias . '.cliente_r1');
            $criteria->addSelectColumn($alias . '.cliente_r2');
            $criteria->addSelectColumn($alias . '.cliente_identificacionrepresentantelegal');
            $criteria->addSelectColumn($alias . '.cliente_rfcrepresentantelegal');
            $criteria->addSelectColumn($alias . '.cliente_actaconstitutiva');
            $criteria->addSelectColumn($alias . '.cliente_podernotarial');
            $criteria->addSelectColumn($alias . '.cliente_cartaencomienda');
            $criteria->addSelectColumn($alias . '.cliente_comprobantedomicilio');
            $criteria->addSelectColumn($alias . '.cliente_comprobanteclabe');
            $criteria->addSelectColumn($alias . '.cliente_clabe');
            $criteria->addSelectColumn($alias . '.cliente_archivoszip');
            $criteria->addSelectColumn($alias . '.idempleadocomercial');
            $criteria->addSelectColumn($alias . '.idempleadooperaciones');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ClientePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Cliente
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ClientePeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return ClientePeer::populateObjects(ClientePeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ClientePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ClientePeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Cliente $obj A Cliente object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdcliente();
            } // if key === null
            ClientePeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Cliente object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Cliente) {
                $key = (string) $value->getIdcliente();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Cliente object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ClientePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Cliente Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ClientePeer::$instances[$key])) {
                return ClientePeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (ClientePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ClientePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cliente
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ExpedientePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ExpedientePeer::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = ClientePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ClientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ClientePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ClientePeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Cliente object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ClientePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ClientePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ClientePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ClientePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ClientePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadocomercial table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleadoRelatedByIdempleadocomercial(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientePeer::IDEMPLEADOCOMERCIAL, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadooperaciones table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleadoRelatedByIdempleadooperaciones(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientePeer::IDEMPLEADOOPERACIONES, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Cliente objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cliente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleadoRelatedByIdempleadocomercial(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientePeer::DATABASE_NAME);
        }

        ClientePeer::addSelectColumns($criteria);
        $startcol = ClientePeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(ClientePeer::IDEMPLEADOCOMERCIAL, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ClientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Cliente) to $obj2 (Empleado)
                $obj2->addClienteRelatedByIdempleadocomercial($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cliente objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cliente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleadoRelatedByIdempleadooperaciones(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientePeer::DATABASE_NAME);
        }

        ClientePeer::addSelectColumns($criteria);
        $startcol = ClientePeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(ClientePeer::IDEMPLEADOOPERACIONES, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ClientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Cliente) to $obj2 (Empleado)
                $obj2->addClienteRelatedByIdempleadooperaciones($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ClientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ClientePeer::IDEMPLEADOCOMERCIAL, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ClientePeer::IDEMPLEADOOPERACIONES, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Cliente objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cliente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientePeer::DATABASE_NAME);
        }

        ClientePeer::addSelectColumns($criteria);
        $startcol2 = ClientePeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ClientePeer::IDEMPLEADOCOMERCIAL, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ClientePeer::IDEMPLEADOOPERACIONES, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Empleado rows

            $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Cliente) to the collection in $obj2 (Empleado)
                $obj2->addClienteRelatedByIdempleadocomercial($obj1);
            } // if joined row not null

            // Add objects for joined Empleado rows

            $key3 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = EmpleadoPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpleadoPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Cliente) to the collection in $obj3 (Empleado)
                $obj3->addClienteRelatedByIdempleadooperaciones($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadocomercial table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpleadoRelatedByIdempleadocomercial(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ClientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadooperaciones table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpleadoRelatedByIdempleadooperaciones(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ClientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ClientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ClientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Cliente objects pre-filled with all related objects except EmpleadoRelatedByIdempleadocomercial.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cliente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpleadoRelatedByIdempleadocomercial(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientePeer::DATABASE_NAME);
        }

        ClientePeer::addSelectColumns($criteria);
        $startcol2 = ClientePeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cliente objects pre-filled with all related objects except EmpleadoRelatedByIdempleadooperaciones.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cliente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpleadoRelatedByIdempleadooperaciones(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ClientePeer::DATABASE_NAME);
        }

        ClientePeer::addSelectColumns($criteria);
        $startcol2 = ClientePeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ClientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ClientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ClientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ClientePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(ClientePeer::DATABASE_NAME)->getTable(ClientePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseClientePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseClientePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ClienteTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return ClientePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Cliente or Criteria object.
     *
     * @param      mixed $values Criteria or Cliente object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Cliente object
        }

        if ($criteria->containsKey(ClientePeer::IDCLIENTE) && $criteria->keyContainsValue(ClientePeer::IDCLIENTE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ClientePeer::IDCLIENTE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ClientePeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Cliente or Criteria object.
     *
     * @param      mixed $values Criteria or Cliente object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ClientePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ClientePeer::IDCLIENTE);
            $value = $criteria->remove(ClientePeer::IDCLIENTE);
            if ($value) {
                $selectCriteria->add(ClientePeer::IDCLIENTE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ClientePeer::TABLE_NAME);
            }

        } else { // $values is Cliente object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ClientePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cliente table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            ClientePeer::doOnDeleteSetNull(new Criteria(ClientePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ClientePeer::TABLE_NAME, $con, ClientePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ClientePeer::clearInstancePool();
            ClientePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Cliente or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Cliente object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Cliente) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ClientePeer::DATABASE_NAME);
            $criteria->add(ClientePeer::IDCLIENTE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ClientePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            ClientePeer::doOnDeleteSetNull($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ClientePeer::clearInstancePool();
            } elseif ($values instanceof Cliente) { // it's a model object
                ClientePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ClientePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ClientePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE SET NULL DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return void
     */
    protected static function doOnDeleteSetNull(Criteria $criteria, PropelPDO $con)
    {

        // first find the objects that are implicated by the $criteria
        $objects = ClientePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {

            // set fkey col in related Expediente rows to null
            $selectCriteria = new Criteria(ClientePeer::DATABASE_NAME);
            $updateValues = new Criteria(ClientePeer::DATABASE_NAME);
            $selectCriteria->add(ExpedientePeer::IDCLIENTE, $obj->getIdcliente());
            $updateValues->add(ExpedientePeer::IDCLIENTE, null);

            BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

        }
    }

    /**
     * Validates all modified columns of given Cliente object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Cliente $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ClientePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ClientePeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ClientePeer::DATABASE_NAME, ClientePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Cliente
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ClientePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ClientePeer::DATABASE_NAME);
        $criteria->add(ClientePeer::IDCLIENTE, $pk);

        $v = ClientePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Cliente[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ClientePeer::DATABASE_NAME);
            $criteria->add(ClientePeer::IDCLIENTE, $pks, Criteria::IN);
            $objs = ClientePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseClientePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseClientePeer::buildTableMap();

