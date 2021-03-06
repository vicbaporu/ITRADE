<?php


/**
 * Base static class for performing query and update operations on the 'proveedorcliente' table.
 *
 *
 *
 * @package propel.generator.itrade.om
 */
abstract class BaseProveedorclientePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'itrade';

    /** the table name for this class */
    const TABLE_NAME = 'proveedorcliente';

    /** the related Propel class for this table */
    const OM_CLASS = 'Proveedorcliente';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ProveedorclienteTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the idproveedorcliente field */
    const IDPROVEEDORCLIENTE = 'proveedorcliente.idproveedorcliente';

    /** the column name for the idcliente field */
    const IDCLIENTE = 'proveedorcliente.idcliente';

    /** the column name for the proveedorcliente_nombre field */
    const PROVEEDORCLIENTE_NOMBRE = 'proveedorcliente.proveedorcliente_nombre';

    /** the column name for the proveedorcliente_taxid field */
    const PROVEEDORCLIENTE_TAXID = 'proveedorcliente.proveedorcliente_taxid';

    /** the column name for the proveedorcliente_nombrecontacto field */
    const PROVEEDORCLIENTE_NOMBRECONTACTO = 'proveedorcliente.proveedorcliente_nombrecontacto';

    /** the column name for the proveedorcliente_telefonocontacto field */
    const PROVEEDORCLIENTE_TELEFONOCONTACTO = 'proveedorcliente.proveedorcliente_telefonocontacto';

    /** the column name for the proveedorcliente_emailcontacto field */
    const PROVEEDORCLIENTE_EMAILCONTACTO = 'proveedorcliente.proveedorcliente_emailcontacto';

    /** the column name for the proveedorcliente_calle field */
    const PROVEEDORCLIENTE_CALLE = 'proveedorcliente.proveedorcliente_calle';

    /** the column name for the proveedorcliente_numero field */
    const PROVEEDORCLIENTE_NUMERO = 'proveedorcliente.proveedorcliente_numero';

    /** the column name for the proveedorcliente_interior field */
    const PROVEEDORCLIENTE_INTERIOR = 'proveedorcliente.proveedorcliente_interior';

    /** the column name for the proveedorcliente_colonia field */
    const PROVEEDORCLIENTE_COLONIA = 'proveedorcliente.proveedorcliente_colonia';

    /** the column name for the proveedorcliente_ciudad field */
    const PROVEEDORCLIENTE_CIUDAD = 'proveedorcliente.proveedorcliente_ciudad';

    /** the column name for the proveedorcliente_estado field */
    const PROVEEDORCLIENTE_ESTADO = 'proveedorcliente.proveedorcliente_estado';

    /** the column name for the proveedorcliente_pais field */
    const PROVEEDORCLIENTE_PAIS = 'proveedorcliente.proveedorcliente_pais';

    /** the column name for the proveedorcliente_tipo field */
    const PROVEEDORCLIENTE_TIPO = 'proveedorcliente.proveedorcliente_tipo';

    /** The enumerated values for the proveedorcliente_tipo field */
    const PROVEEDORCLIENTE_TIPO_PROVEEDOR = 'proveedor';
    const PROVEEDORCLIENTE_TIPO_CLIENTE = 'cliente';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Proveedorcliente objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Proveedorcliente[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProveedorclientePeer::$fieldNames[ProveedorclientePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idproveedorcliente', 'Idcliente', 'ProveedorclienteNombre', 'ProveedorclienteTaxid', 'ProveedorclienteNombrecontacto', 'ProveedorclienteTelefonocontacto', 'ProveedorclienteEmailcontacto', 'ProveedorclienteCalle', 'ProveedorclienteNumero', 'ProveedorclienteInterior', 'ProveedorclienteColonia', 'ProveedorclienteCiudad', 'ProveedorclienteEstado', 'ProveedorclientePais', 'ProveedorclienteTipo', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproveedorcliente', 'idcliente', 'proveedorclienteNombre', 'proveedorclienteTaxid', 'proveedorclienteNombrecontacto', 'proveedorclienteTelefonocontacto', 'proveedorclienteEmailcontacto', 'proveedorclienteCalle', 'proveedorclienteNumero', 'proveedorclienteInterior', 'proveedorclienteColonia', 'proveedorclienteCiudad', 'proveedorclienteEstado', 'proveedorclientePais', 'proveedorclienteTipo', ),
        BasePeer::TYPE_COLNAME => array (ProveedorclientePeer::IDPROVEEDORCLIENTE, ProveedorclientePeer::IDCLIENTE, ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRE, ProveedorclientePeer::PROVEEDORCLIENTE_TAXID, ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRECONTACTO, ProveedorclientePeer::PROVEEDORCLIENTE_TELEFONOCONTACTO, ProveedorclientePeer::PROVEEDORCLIENTE_EMAILCONTACTO, ProveedorclientePeer::PROVEEDORCLIENTE_CALLE, ProveedorclientePeer::PROVEEDORCLIENTE_NUMERO, ProveedorclientePeer::PROVEEDORCLIENTE_INTERIOR, ProveedorclientePeer::PROVEEDORCLIENTE_COLONIA, ProveedorclientePeer::PROVEEDORCLIENTE_CIUDAD, ProveedorclientePeer::PROVEEDORCLIENTE_ESTADO, ProveedorclientePeer::PROVEEDORCLIENTE_PAIS, ProveedorclientePeer::PROVEEDORCLIENTE_TIPO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPROVEEDORCLIENTE', 'IDCLIENTE', 'PROVEEDORCLIENTE_NOMBRE', 'PROVEEDORCLIENTE_TAXID', 'PROVEEDORCLIENTE_NOMBRECONTACTO', 'PROVEEDORCLIENTE_TELEFONOCONTACTO', 'PROVEEDORCLIENTE_EMAILCONTACTO', 'PROVEEDORCLIENTE_CALLE', 'PROVEEDORCLIENTE_NUMERO', 'PROVEEDORCLIENTE_INTERIOR', 'PROVEEDORCLIENTE_COLONIA', 'PROVEEDORCLIENTE_CIUDAD', 'PROVEEDORCLIENTE_ESTADO', 'PROVEEDORCLIENTE_PAIS', 'PROVEEDORCLIENTE_TIPO', ),
        BasePeer::TYPE_FIELDNAME => array ('idproveedorcliente', 'idcliente', 'proveedorcliente_nombre', 'proveedorcliente_taxid', 'proveedorcliente_nombrecontacto', 'proveedorcliente_telefonocontacto', 'proveedorcliente_emailcontacto', 'proveedorcliente_calle', 'proveedorcliente_numero', 'proveedorcliente_interior', 'proveedorcliente_colonia', 'proveedorcliente_ciudad', 'proveedorcliente_estado', 'proveedorcliente_pais', 'proveedorcliente_tipo', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProveedorclientePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idproveedorcliente' => 0, 'Idcliente' => 1, 'ProveedorclienteNombre' => 2, 'ProveedorclienteTaxid' => 3, 'ProveedorclienteNombrecontacto' => 4, 'ProveedorclienteTelefonocontacto' => 5, 'ProveedorclienteEmailcontacto' => 6, 'ProveedorclienteCalle' => 7, 'ProveedorclienteNumero' => 8, 'ProveedorclienteInterior' => 9, 'ProveedorclienteColonia' => 10, 'ProveedorclienteCiudad' => 11, 'ProveedorclienteEstado' => 12, 'ProveedorclientePais' => 13, 'ProveedorclienteTipo' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproveedorcliente' => 0, 'idcliente' => 1, 'proveedorclienteNombre' => 2, 'proveedorclienteTaxid' => 3, 'proveedorclienteNombrecontacto' => 4, 'proveedorclienteTelefonocontacto' => 5, 'proveedorclienteEmailcontacto' => 6, 'proveedorclienteCalle' => 7, 'proveedorclienteNumero' => 8, 'proveedorclienteInterior' => 9, 'proveedorclienteColonia' => 10, 'proveedorclienteCiudad' => 11, 'proveedorclienteEstado' => 12, 'proveedorclientePais' => 13, 'proveedorclienteTipo' => 14, ),
        BasePeer::TYPE_COLNAME => array (ProveedorclientePeer::IDPROVEEDORCLIENTE => 0, ProveedorclientePeer::IDCLIENTE => 1, ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRE => 2, ProveedorclientePeer::PROVEEDORCLIENTE_TAXID => 3, ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRECONTACTO => 4, ProveedorclientePeer::PROVEEDORCLIENTE_TELEFONOCONTACTO => 5, ProveedorclientePeer::PROVEEDORCLIENTE_EMAILCONTACTO => 6, ProveedorclientePeer::PROVEEDORCLIENTE_CALLE => 7, ProveedorclientePeer::PROVEEDORCLIENTE_NUMERO => 8, ProveedorclientePeer::PROVEEDORCLIENTE_INTERIOR => 9, ProveedorclientePeer::PROVEEDORCLIENTE_COLONIA => 10, ProveedorclientePeer::PROVEEDORCLIENTE_CIUDAD => 11, ProveedorclientePeer::PROVEEDORCLIENTE_ESTADO => 12, ProveedorclientePeer::PROVEEDORCLIENTE_PAIS => 13, ProveedorclientePeer::PROVEEDORCLIENTE_TIPO => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPROVEEDORCLIENTE' => 0, 'IDCLIENTE' => 1, 'PROVEEDORCLIENTE_NOMBRE' => 2, 'PROVEEDORCLIENTE_TAXID' => 3, 'PROVEEDORCLIENTE_NOMBRECONTACTO' => 4, 'PROVEEDORCLIENTE_TELEFONOCONTACTO' => 5, 'PROVEEDORCLIENTE_EMAILCONTACTO' => 6, 'PROVEEDORCLIENTE_CALLE' => 7, 'PROVEEDORCLIENTE_NUMERO' => 8, 'PROVEEDORCLIENTE_INTERIOR' => 9, 'PROVEEDORCLIENTE_COLONIA' => 10, 'PROVEEDORCLIENTE_CIUDAD' => 11, 'PROVEEDORCLIENTE_ESTADO' => 12, 'PROVEEDORCLIENTE_PAIS' => 13, 'PROVEEDORCLIENTE_TIPO' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('idproveedorcliente' => 0, 'idcliente' => 1, 'proveedorcliente_nombre' => 2, 'proveedorcliente_taxid' => 3, 'proveedorcliente_nombrecontacto' => 4, 'proveedorcliente_telefonocontacto' => 5, 'proveedorcliente_emailcontacto' => 6, 'proveedorcliente_calle' => 7, 'proveedorcliente_numero' => 8, 'proveedorcliente_interior' => 9, 'proveedorcliente_colonia' => 10, 'proveedorcliente_ciudad' => 11, 'proveedorcliente_estado' => 12, 'proveedorcliente_pais' => 13, 'proveedorcliente_tipo' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ProveedorclientePeer::PROVEEDORCLIENTE_TIPO => array(
            ProveedorclientePeer::PROVEEDORCLIENTE_TIPO_PROVEEDOR,
            ProveedorclientePeer::PROVEEDORCLIENTE_TIPO_CLIENTE,
        ),
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
        $toNames = ProveedorclientePeer::getFieldNames($toType);
        $key = isset(ProveedorclientePeer::$fieldKeys[$fromType][$name]) ? ProveedorclientePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProveedorclientePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ProveedorclientePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProveedorclientePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ProveedorclientePeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = ProveedorclientePeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = ProveedorclientePeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
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
     * @param      string $column The column name for current table. (i.e. ProveedorclientePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProveedorclientePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ProveedorclientePeer::IDPROVEEDORCLIENTE);
            $criteria->addSelectColumn(ProveedorclientePeer::IDCLIENTE);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRE);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_TAXID);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRECONTACTO);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_TELEFONOCONTACTO);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_EMAILCONTACTO);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_CALLE);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_NUMERO);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_INTERIOR);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_COLONIA);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_CIUDAD);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_ESTADO);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_PAIS);
            $criteria->addSelectColumn(ProveedorclientePeer::PROVEEDORCLIENTE_TIPO);
        } else {
            $criteria->addSelectColumn($alias . '.idproveedorcliente');
            $criteria->addSelectColumn($alias . '.idcliente');
            $criteria->addSelectColumn($alias . '.proveedorcliente_nombre');
            $criteria->addSelectColumn($alias . '.proveedorcliente_taxid');
            $criteria->addSelectColumn($alias . '.proveedorcliente_nombrecontacto');
            $criteria->addSelectColumn($alias . '.proveedorcliente_telefonocontacto');
            $criteria->addSelectColumn($alias . '.proveedorcliente_emailcontacto');
            $criteria->addSelectColumn($alias . '.proveedorcliente_calle');
            $criteria->addSelectColumn($alias . '.proveedorcliente_numero');
            $criteria->addSelectColumn($alias . '.proveedorcliente_interior');
            $criteria->addSelectColumn($alias . '.proveedorcliente_colonia');
            $criteria->addSelectColumn($alias . '.proveedorcliente_ciudad');
            $criteria->addSelectColumn($alias . '.proveedorcliente_estado');
            $criteria->addSelectColumn($alias . '.proveedorcliente_pais');
            $criteria->addSelectColumn($alias . '.proveedorcliente_tipo');
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
        $criteria->setPrimaryTableName(ProveedorclientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProveedorclientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProveedorclientePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Proveedorcliente
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProveedorclientePeer::doSelect($critcopy, $con);
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
        return ProveedorclientePeer::populateObjects(ProveedorclientePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProveedorclientePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProveedorclientePeer::DATABASE_NAME);

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
     * @param Proveedorcliente $obj A Proveedorcliente object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdproveedorcliente();
            } // if key === null
            ProveedorclientePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Proveedorcliente object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Proveedorcliente) {
                $key = (string) $value->getIdproveedorcliente();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Proveedorcliente object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProveedorclientePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Proveedorcliente Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProveedorclientePeer::$instances[$key])) {
                return ProveedorclientePeer::$instances[$key];
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
        foreach (ProveedorclientePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ProveedorclientePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to proveedorcliente
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
        $cls = ProveedorclientePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProveedorclientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProveedorclientePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProveedorclientePeer::addInstanceToPool($obj, $key);
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
     * @return array (Proveedorcliente object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProveedorclientePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProveedorclientePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProveedorclientePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProveedorclientePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProveedorclientePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cliente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCliente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProveedorclientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProveedorclientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProveedorclientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProveedorclientePeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

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
     * Selects a collection of Proveedorcliente objects pre-filled with their Cliente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Proveedorcliente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCliente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProveedorclientePeer::DATABASE_NAME);
        }

        ProveedorclientePeer::addSelectColumns($criteria);
        $startcol = ProveedorclientePeer::NUM_HYDRATE_COLUMNS;
        ClientePeer::addSelectColumns($criteria);

        $criteria->addJoin(ProveedorclientePeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProveedorclientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProveedorclientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProveedorclientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProveedorclientePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClientePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Proveedorcliente) to $obj2 (Cliente)
                $obj2->addProveedorcliente($obj1);

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
        $criteria->setPrimaryTableName(ProveedorclientePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProveedorclientePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProveedorclientePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProveedorclientePeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

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
     * Selects a collection of Proveedorcliente objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Proveedorcliente objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProveedorclientePeer::DATABASE_NAME);
        }

        ProveedorclientePeer::addSelectColumns($criteria);
        $startcol2 = ProveedorclientePeer::NUM_HYDRATE_COLUMNS;

        ClientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProveedorclientePeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProveedorclientePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProveedorclientePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProveedorclientePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProveedorclientePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Cliente rows

            $key2 = ClientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ClientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Proveedorcliente) to the collection in $obj2 (Cliente)
                $obj2->addProveedorcliente($obj1);
            } // if joined row not null

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
        return Propel::getDatabaseMap(ProveedorclientePeer::DATABASE_NAME)->getTable(ProveedorclientePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseProveedorclientePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseProveedorclientePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ProveedorclienteTableMap());
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
        return ProveedorclientePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Proveedorcliente or Criteria object.
     *
     * @param      mixed $values Criteria or Proveedorcliente object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Proveedorcliente object
        }

        if ($criteria->containsKey(ProveedorclientePeer::IDPROVEEDORCLIENTE) && $criteria->keyContainsValue(ProveedorclientePeer::IDPROVEEDORCLIENTE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProveedorclientePeer::IDPROVEEDORCLIENTE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ProveedorclientePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Proveedorcliente or Criteria object.
     *
     * @param      mixed $values Criteria or Proveedorcliente object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProveedorclientePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProveedorclientePeer::IDPROVEEDORCLIENTE);
            $value = $criteria->remove(ProveedorclientePeer::IDPROVEEDORCLIENTE);
            if ($value) {
                $selectCriteria->add(ProveedorclientePeer::IDPROVEEDORCLIENTE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProveedorclientePeer::TABLE_NAME);
            }

        } else { // $values is Proveedorcliente object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProveedorclientePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the proveedorcliente table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += ProveedorclientePeer::doOnDeleteCascade(new Criteria(ProveedorclientePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ProveedorclientePeer::TABLE_NAME, $con, ProveedorclientePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProveedorclientePeer::clearInstancePool();
            ProveedorclientePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Proveedorcliente or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Proveedorcliente object or primary key or array of primary keys
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
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Proveedorcliente) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProveedorclientePeer::DATABASE_NAME);
            $criteria->add(ProveedorclientePeer::IDPROVEEDORCLIENTE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ProveedorclientePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += ProveedorclientePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ProveedorclientePeer::clearInstancePool();
            } elseif ($values instanceof Proveedorcliente) { // it's a model object
                ProveedorclientePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ProveedorclientePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProveedorclientePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = ProveedorclientePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Expediente objects
            $criteria = new Criteria(ExpedientePeer::DATABASE_NAME);

            $criteria->add(ExpedientePeer::IDCONSIGNATARIOEMBARCADOR, $obj->getIdproveedorcliente());
            $affectedRows += ExpedientePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Proveedorcliente object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Proveedorcliente $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProveedorclientePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProveedorclientePeer::TABLE_NAME);

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

        return BasePeer::doValidate(ProveedorclientePeer::DATABASE_NAME, ProveedorclientePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Proveedorcliente
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ProveedorclientePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ProveedorclientePeer::DATABASE_NAME);
        $criteria->add(ProveedorclientePeer::IDPROVEEDORCLIENTE, $pk);

        $v = ProveedorclientePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Proveedorcliente[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ProveedorclientePeer::DATABASE_NAME);
            $criteria->add(ProveedorclientePeer::IDPROVEEDORCLIENTE, $pks, Criteria::IN);
            $objs = ProveedorclientePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseProveedorclientePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseProveedorclientePeer::buildTableMap();

