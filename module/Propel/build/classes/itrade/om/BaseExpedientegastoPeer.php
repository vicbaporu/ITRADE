<?php


/**
 * Base static class for performing query and update operations on the 'expedientegasto' table.
 *
 *
 *
 * @package propel.generator.itrade.om
 */
abstract class BaseExpedientegastoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'itrade';

    /** the table name for this class */
    const TABLE_NAME = 'expedientegasto';

    /** the related Propel class for this table */
    const OM_CLASS = 'Expedientegasto';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ExpedientegastoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the idexpedientegasto field */
    const IDEXPEDIENTEGASTO = 'expedientegasto.idexpedientegasto';

    /** the column name for the idexpediente field */
    const IDEXPEDIENTE = 'expedientegasto.idexpediente';

    /** the column name for the idgastofacturacion field */
    const IDGASTOFACTURACION = 'expedientegasto.idgastofacturacion';

    /** the column name for the idproveedoritrade field */
    const IDPROVEEDORITRADE = 'expedientegasto.idproveedoritrade';

    /** the column name for the idempleado field */
    const IDEMPLEADO = 'expedientegasto.idempleado';

    /** the column name for the expedientegasto_fecha field */
    const EXPEDIENTEGASTO_FECHA = 'expedientegasto.expedientegasto_fecha';

    /** the column name for the expedientegasto_monto field */
    const EXPEDIENTEGASTO_MONTO = 'expedientegasto.expedientegasto_monto';

    /** the column name for the expedientegasto_tipo field */
    const EXPEDIENTEGASTO_TIPO = 'expedientegasto.expedientegasto_tipo';

    /** the column name for the expedientegasto_comprobante field */
    const EXPEDIENTEGASTO_COMPROBANTE = 'expedientegasto.expedientegasto_comprobante';

    /** The enumerated values for the expedientegasto_tipo field */
    const EXPEDIENTEGASTO_TIPO_GASTORECIBIR = 'gastorecibir';
    const EXPEDIENTEGASTO_TIPO_GASTOCONOCIDO = 'gastoconocido';
    const EXPEDIENTEGASTO_TIPO_COBRO = 'cobro';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Expedientegasto objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Expedientegasto[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ExpedientegastoPeer::$fieldNames[ExpedientegastoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idexpedientegasto', 'Idexpediente', 'Idgastofacturacion', 'Idproveedoritrade', 'Idempleado', 'ExpedientegastoFecha', 'ExpedientegastoMonto', 'ExpedientegastoTipo', 'ExpedientegastoComprobante', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idexpedientegasto', 'idexpediente', 'idgastofacturacion', 'idproveedoritrade', 'idempleado', 'expedientegastoFecha', 'expedientegastoMonto', 'expedientegastoTipo', 'expedientegastoComprobante', ),
        BasePeer::TYPE_COLNAME => array (ExpedientegastoPeer::IDEXPEDIENTEGASTO, ExpedientegastoPeer::IDEXPEDIENTE, ExpedientegastoPeer::IDGASTOFACTURACION, ExpedientegastoPeer::IDPROVEEDORITRADE, ExpedientegastoPeer::IDEMPLEADO, ExpedientegastoPeer::EXPEDIENTEGASTO_FECHA, ExpedientegastoPeer::EXPEDIENTEGASTO_MONTO, ExpedientegastoPeer::EXPEDIENTEGASTO_TIPO, ExpedientegastoPeer::EXPEDIENTEGASTO_COMPROBANTE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDEXPEDIENTEGASTO', 'IDEXPEDIENTE', 'IDGASTOFACTURACION', 'IDPROVEEDORITRADE', 'IDEMPLEADO', 'EXPEDIENTEGASTO_FECHA', 'EXPEDIENTEGASTO_MONTO', 'EXPEDIENTEGASTO_TIPO', 'EXPEDIENTEGASTO_COMPROBANTE', ),
        BasePeer::TYPE_FIELDNAME => array ('idexpedientegasto', 'idexpediente', 'idgastofacturacion', 'idproveedoritrade', 'idempleado', 'expedientegasto_fecha', 'expedientegasto_monto', 'expedientegasto_tipo', 'expedientegasto_comprobante', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ExpedientegastoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idexpedientegasto' => 0, 'Idexpediente' => 1, 'Idgastofacturacion' => 2, 'Idproveedoritrade' => 3, 'Idempleado' => 4, 'ExpedientegastoFecha' => 5, 'ExpedientegastoMonto' => 6, 'ExpedientegastoTipo' => 7, 'ExpedientegastoComprobante' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idexpedientegasto' => 0, 'idexpediente' => 1, 'idgastofacturacion' => 2, 'idproveedoritrade' => 3, 'idempleado' => 4, 'expedientegastoFecha' => 5, 'expedientegastoMonto' => 6, 'expedientegastoTipo' => 7, 'expedientegastoComprobante' => 8, ),
        BasePeer::TYPE_COLNAME => array (ExpedientegastoPeer::IDEXPEDIENTEGASTO => 0, ExpedientegastoPeer::IDEXPEDIENTE => 1, ExpedientegastoPeer::IDGASTOFACTURACION => 2, ExpedientegastoPeer::IDPROVEEDORITRADE => 3, ExpedientegastoPeer::IDEMPLEADO => 4, ExpedientegastoPeer::EXPEDIENTEGASTO_FECHA => 5, ExpedientegastoPeer::EXPEDIENTEGASTO_MONTO => 6, ExpedientegastoPeer::EXPEDIENTEGASTO_TIPO => 7, ExpedientegastoPeer::EXPEDIENTEGASTO_COMPROBANTE => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDEXPEDIENTEGASTO' => 0, 'IDEXPEDIENTE' => 1, 'IDGASTOFACTURACION' => 2, 'IDPROVEEDORITRADE' => 3, 'IDEMPLEADO' => 4, 'EXPEDIENTEGASTO_FECHA' => 5, 'EXPEDIENTEGASTO_MONTO' => 6, 'EXPEDIENTEGASTO_TIPO' => 7, 'EXPEDIENTEGASTO_COMPROBANTE' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('idexpedientegasto' => 0, 'idexpediente' => 1, 'idgastofacturacion' => 2, 'idproveedoritrade' => 3, 'idempleado' => 4, 'expedientegasto_fecha' => 5, 'expedientegasto_monto' => 6, 'expedientegasto_tipo' => 7, 'expedientegasto_comprobante' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ExpedientegastoPeer::EXPEDIENTEGASTO_TIPO => array(
            ExpedientegastoPeer::EXPEDIENTEGASTO_TIPO_GASTORECIBIR,
            ExpedientegastoPeer::EXPEDIENTEGASTO_TIPO_GASTOCONOCIDO,
            ExpedientegastoPeer::EXPEDIENTEGASTO_TIPO_COBRO,
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
        $toNames = ExpedientegastoPeer::getFieldNames($toType);
        $key = isset(ExpedientegastoPeer::$fieldKeys[$fromType][$name]) ? ExpedientegastoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ExpedientegastoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ExpedientegastoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ExpedientegastoPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ExpedientegastoPeer::$enumValueSets;
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
        $valueSets = ExpedientegastoPeer::getValueSets();

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
        $values = ExpedientegastoPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ExpedientegastoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ExpedientegastoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ExpedientegastoPeer::IDEXPEDIENTEGASTO);
            $criteria->addSelectColumn(ExpedientegastoPeer::IDEXPEDIENTE);
            $criteria->addSelectColumn(ExpedientegastoPeer::IDGASTOFACTURACION);
            $criteria->addSelectColumn(ExpedientegastoPeer::IDPROVEEDORITRADE);
            $criteria->addSelectColumn(ExpedientegastoPeer::IDEMPLEADO);
            $criteria->addSelectColumn(ExpedientegastoPeer::EXPEDIENTEGASTO_FECHA);
            $criteria->addSelectColumn(ExpedientegastoPeer::EXPEDIENTEGASTO_MONTO);
            $criteria->addSelectColumn(ExpedientegastoPeer::EXPEDIENTEGASTO_TIPO);
            $criteria->addSelectColumn(ExpedientegastoPeer::EXPEDIENTEGASTO_COMPROBANTE);
        } else {
            $criteria->addSelectColumn($alias . '.idexpedientegasto');
            $criteria->addSelectColumn($alias . '.idexpediente');
            $criteria->addSelectColumn($alias . '.idgastofacturacion');
            $criteria->addSelectColumn($alias . '.idproveedoritrade');
            $criteria->addSelectColumn($alias . '.idempleado');
            $criteria->addSelectColumn($alias . '.expedientegasto_fecha');
            $criteria->addSelectColumn($alias . '.expedientegasto_monto');
            $criteria->addSelectColumn($alias . '.expedientegasto_tipo');
            $criteria->addSelectColumn($alias . '.expedientegasto_comprobante');
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
        $criteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Expedientegasto
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ExpedientegastoPeer::doSelect($critcopy, $con);
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
        return ExpedientegastoPeer::populateObjects(ExpedientegastoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

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
     * @param Expedientegasto $obj A Expedientegasto object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdexpedientegasto();
            } // if key === null
            ExpedientegastoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Expedientegasto object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Expedientegasto) {
                $key = (string) $value->getIdexpedientegasto();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Expedientegasto object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ExpedientegastoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Expedientegasto Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ExpedientegastoPeer::$instances[$key])) {
                return ExpedientegastoPeer::$instances[$key];
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
        foreach (ExpedientegastoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ExpedientegastoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to expedientegasto
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
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
        $cls = ExpedientegastoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ExpedientegastoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ExpedientegastoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Expedientegasto object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ExpedientegastoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ExpedientegastoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ExpedientegastoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ExpedientegastoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Empleado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientegastoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Expediente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinExpediente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientegastoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Gastofacturacion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGastofacturacion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientegastoPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDGASTOFACTURACION, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Proveedoritrade table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProveedoritrade(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientegastoPeer::IDPROVEEDORITRADE, ProveedoritradePeer::IDPROVEEDORITRADE, $join_behavior);

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
     * Selects a collection of Expedientegasto objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientegasto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);
        }

        ExpedientegastoPeer::addSelectColumns($criteria);
        $startcol = ExpedientegastoPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(ExpedientegastoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientegastoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ExpedientegastoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientegastoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Expedientegasto) to $obj2 (Empleado)
                $obj2->addExpedientegasto($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Expedientegasto objects pre-filled with their Expediente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientegasto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinExpediente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);
        }

        ExpedientegastoPeer::addSelectColumns($criteria);
        $startcol = ExpedientegastoPeer::NUM_HYDRATE_COLUMNS;
        ExpedientePeer::addSelectColumns($criteria);

        $criteria->addJoin(ExpedientegastoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientegastoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ExpedientegastoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientegastoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ExpedientePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ExpedientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ExpedientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ExpedientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Expedientegasto) to $obj2 (Expediente)
                $obj2->addExpedientegasto($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Expedientegasto objects pre-filled with their Gastofacturacion objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientegasto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGastofacturacion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);
        }

        ExpedientegastoPeer::addSelectColumns($criteria);
        $startcol = ExpedientegastoPeer::NUM_HYDRATE_COLUMNS;
        GastofacturacionPeer::addSelectColumns($criteria);

        $criteria->addJoin(ExpedientegastoPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDGASTOFACTURACION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientegastoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ExpedientegastoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientegastoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GastofacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GastofacturacionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GastofacturacionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GastofacturacionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Expedientegasto) to $obj2 (Gastofacturacion)
                $obj2->addExpedientegasto($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Expedientegasto objects pre-filled with their Proveedoritrade objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientegasto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProveedoritrade(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);
        }

        ExpedientegastoPeer::addSelectColumns($criteria);
        $startcol = ExpedientegastoPeer::NUM_HYDRATE_COLUMNS;
        ProveedoritradePeer::addSelectColumns($criteria);

        $criteria->addJoin(ExpedientegastoPeer::IDPROVEEDORITRADE, ProveedoritradePeer::IDPROVEEDORITRADE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientegastoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ExpedientegastoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientegastoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProveedoritradePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProveedoritradePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProveedoritradePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProveedoritradePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Expedientegasto) to $obj2 (Proveedoritrade)
                $obj2->addExpedientegasto($obj1);

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
        $criteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientegastoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDGASTOFACTURACION, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDPROVEEDORITRADE, ProveedoritradePeer::IDPROVEEDORITRADE, $join_behavior);

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
     * Selects a collection of Expedientegasto objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientegasto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);
        }

        ExpedientegastoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedientegastoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        ExpedientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ExpedientePeer::NUM_HYDRATE_COLUMNS;

        GastofacturacionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GastofacturacionPeer::NUM_HYDRATE_COLUMNS;

        ProveedoritradePeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ProveedoritradePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedientegastoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDGASTOFACTURACION, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDPROVEEDORITRADE, ProveedoritradePeer::IDPROVEEDORITRADE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientegastoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedientegastoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientegastoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Expedientegasto) to the collection in $obj2 (Empleado)
                $obj2->addExpedientegasto($obj1);
            } // if joined row not null

            // Add objects for joined Expediente rows

            $key3 = ExpedientePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ExpedientePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ExpedientePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ExpedientePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj3 (Expediente)
                $obj3->addExpedientegasto($obj1);
            } // if joined row not null

            // Add objects for joined Gastofacturacion rows

            $key4 = GastofacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = GastofacturacionPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = GastofacturacionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GastofacturacionPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj4 (Gastofacturacion)
                $obj4->addExpedientegasto($obj1);
            } // if joined row not null

            // Add objects for joined Proveedoritrade rows

            $key5 = ProveedoritradePeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = ProveedoritradePeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = ProveedoritradePeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ProveedoritradePeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj5 (Proveedoritrade)
                $obj5->addExpedientegasto($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Empleado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpleado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientegastoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDGASTOFACTURACION, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDPROVEEDORITRADE, ProveedoritradePeer::IDPROVEEDORITRADE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Expediente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptExpediente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientegastoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDGASTOFACTURACION, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDPROVEEDORITRADE, ProveedoritradePeer::IDPROVEEDORITRADE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Gastofacturacion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGastofacturacion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientegastoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDPROVEEDORITRADE, ProveedoritradePeer::IDPROVEEDORITRADE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Proveedoritrade table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProveedoritrade(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientegastoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientegastoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDGASTOFACTURACION, $join_behavior);

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
     * Selects a collection of Expedientegasto objects pre-filled with all related objects except Empleado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientegasto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);
        }

        ExpedientegastoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedientegastoPeer::NUM_HYDRATE_COLUMNS;

        ExpedientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ExpedientePeer::NUM_HYDRATE_COLUMNS;

        GastofacturacionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GastofacturacionPeer::NUM_HYDRATE_COLUMNS;

        ProveedoritradePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProveedoritradePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedientegastoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDGASTOFACTURACION, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDPROVEEDORITRADE, ProveedoritradePeer::IDPROVEEDORITRADE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientegastoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedientegastoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientegastoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Expediente rows

                $key2 = ExpedientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ExpedientePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ExpedientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ExpedientePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj2 (Expediente)
                $obj2->addExpedientegasto($obj1);

            } // if joined row is not null

                // Add objects for joined Gastofacturacion rows

                $key3 = GastofacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GastofacturacionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GastofacturacionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GastofacturacionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj3 (Gastofacturacion)
                $obj3->addExpedientegasto($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedoritrade rows

                $key4 = ProveedoritradePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProveedoritradePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProveedoritradePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProveedoritradePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj4 (Proveedoritrade)
                $obj4->addExpedientegasto($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Expedientegasto objects pre-filled with all related objects except Expediente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientegasto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptExpediente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);
        }

        ExpedientegastoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedientegastoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        GastofacturacionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GastofacturacionPeer::NUM_HYDRATE_COLUMNS;

        ProveedoritradePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProveedoritradePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedientegastoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDGASTOFACTURACION, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDPROVEEDORITRADE, ProveedoritradePeer::IDPROVEEDORITRADE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientegastoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedientegastoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientegastoPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj2 (Empleado)
                $obj2->addExpedientegasto($obj1);

            } // if joined row is not null

                // Add objects for joined Gastofacturacion rows

                $key3 = GastofacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GastofacturacionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GastofacturacionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GastofacturacionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj3 (Gastofacturacion)
                $obj3->addExpedientegasto($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedoritrade rows

                $key4 = ProveedoritradePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProveedoritradePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProveedoritradePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProveedoritradePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj4 (Proveedoritrade)
                $obj4->addExpedientegasto($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Expedientegasto objects pre-filled with all related objects except Gastofacturacion.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientegasto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGastofacturacion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);
        }

        ExpedientegastoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedientegastoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        ExpedientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ExpedientePeer::NUM_HYDRATE_COLUMNS;

        ProveedoritradePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProveedoritradePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedientegastoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDPROVEEDORITRADE, ProveedoritradePeer::IDPROVEEDORITRADE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientegastoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedientegastoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientegastoPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj2 (Empleado)
                $obj2->addExpedientegasto($obj1);

            } // if joined row is not null

                // Add objects for joined Expediente rows

                $key3 = ExpedientePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ExpedientePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ExpedientePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ExpedientePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj3 (Expediente)
                $obj3->addExpedientegasto($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedoritrade rows

                $key4 = ProveedoritradePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProveedoritradePeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProveedoritradePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProveedoritradePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj4 (Proveedoritrade)
                $obj4->addExpedientegasto($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Expedientegasto objects pre-filled with all related objects except Proveedoritrade.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientegasto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProveedoritrade(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);
        }

        ExpedientegastoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedientegastoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        ExpedientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ExpedientePeer::NUM_HYDRATE_COLUMNS;

        GastofacturacionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GastofacturacionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedientegastoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $criteria->addJoin(ExpedientegastoPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDGASTOFACTURACION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientegastoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientegastoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedientegastoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientegastoPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj2 (Empleado)
                $obj2->addExpedientegasto($obj1);

            } // if joined row is not null

                // Add objects for joined Expediente rows

                $key3 = ExpedientePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ExpedientePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ExpedientePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ExpedientePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj3 (Expediente)
                $obj3->addExpedientegasto($obj1);

            } // if joined row is not null

                // Add objects for joined Gastofacturacion rows

                $key4 = GastofacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GastofacturacionPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GastofacturacionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GastofacturacionPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Expedientegasto) to the collection in $obj4 (Gastofacturacion)
                $obj4->addExpedientegasto($obj1);

            } // if joined row is not null

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
        return Propel::getDatabaseMap(ExpedientegastoPeer::DATABASE_NAME)->getTable(ExpedientegastoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseExpedientegastoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseExpedientegastoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ExpedientegastoTableMap());
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
        return ExpedientegastoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Expedientegasto or Criteria object.
     *
     * @param      mixed $values Criteria or Expedientegasto object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Expedientegasto object
        }

        if ($criteria->containsKey(ExpedientegastoPeer::IDEXPEDIENTEGASTO) && $criteria->keyContainsValue(ExpedientegastoPeer::IDEXPEDIENTEGASTO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ExpedientegastoPeer::IDEXPEDIENTEGASTO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Expedientegasto or Criteria object.
     *
     * @param      mixed $values Criteria or Expedientegasto object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ExpedientegastoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ExpedientegastoPeer::IDEXPEDIENTEGASTO);
            $value = $criteria->remove(ExpedientegastoPeer::IDEXPEDIENTEGASTO);
            if ($value) {
                $selectCriteria->add(ExpedientegastoPeer::IDEXPEDIENTEGASTO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ExpedientegastoPeer::TABLE_NAME);
            }

        } else { // $values is Expedientegasto object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the expedientegasto table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ExpedientegastoPeer::TABLE_NAME, $con, ExpedientegastoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ExpedientegastoPeer::clearInstancePool();
            ExpedientegastoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Expedientegasto or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Expedientegasto object or primary key or array of primary keys
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
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ExpedientegastoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Expedientegasto) { // it's a model object
            // invalidate the cache for this single object
            ExpedientegastoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ExpedientegastoPeer::DATABASE_NAME);
            $criteria->add(ExpedientegastoPeer::IDEXPEDIENTEGASTO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ExpedientegastoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ExpedientegastoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ExpedientegastoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Expedientegasto object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Expedientegasto $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ExpedientegastoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ExpedientegastoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ExpedientegastoPeer::DATABASE_NAME, ExpedientegastoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Expedientegasto
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ExpedientegastoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ExpedientegastoPeer::DATABASE_NAME);
        $criteria->add(ExpedientegastoPeer::IDEXPEDIENTEGASTO, $pk);

        $v = ExpedientegastoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Expedientegasto[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ExpedientegastoPeer::DATABASE_NAME);
            $criteria->add(ExpedientegastoPeer::IDEXPEDIENTEGASTO, $pks, Criteria::IN);
            $objs = ExpedientegastoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseExpedientegastoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseExpedientegastoPeer::buildTableMap();

