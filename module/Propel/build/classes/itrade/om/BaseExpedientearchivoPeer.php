<?php


/**
 * Base static class for performing query and update operations on the 'expedientearchivo' table.
 *
 *
 *
 * @package propel.generator.itrade.om
 */
abstract class BaseExpedientearchivoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'itrade';

    /** the table name for this class */
    const TABLE_NAME = 'expedientearchivo';

    /** the related Propel class for this table */
    const OM_CLASS = 'Expedientearchivo';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ExpedientearchivoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the idexpedientearchivo field */
    const IDEXPEDIENTEARCHIVO = 'expedientearchivo.idexpedientearchivo';

    /** the column name for the idexpediente field */
    const IDEXPEDIENTE = 'expedientearchivo.idexpediente';

    /** the column name for the idempleado field */
    const IDEMPLEADO = 'expedientearchivo.idempleado';

    /** the column name for the expedientearchivo_fecha field */
    const EXPEDIENTEARCHIVO_FECHA = 'expedientearchivo.expedientearchivo_fecha';

    /** the column name for the expedientearchivo_tipo field */
    const EXPEDIENTEARCHIVO_TIPO = 'expedientearchivo.expedientearchivo_tipo';

    /** the column name for the expedientearchivo_archivo field */
    const EXPEDIENTEARCHIVO_ARCHIVO = 'expedientearchivo.expedientearchivo_archivo';

    /** the column name for the expedientearchivo_size field */
    const EXPEDIENTEARCHIVO_SIZE = 'expedientearchivo.expedientearchivo_size';

    /** The enumerated values for the expedientearchivo_tipo field */
    const EXPEDIENTEARCHIVO_TIPO_BLAWB = 'blawb';
    const EXPEDIENTEARCHIVO_TIPO_CERTIFICADOORIGEN = 'certificadoorigen';
    const EXPEDIENTEARCHIVO_TIPO_POLIZASEGURO = 'polizaseguro';
    const EXPEDIENTEARCHIVO_TIPO_FACTURAMERCANCIA = 'facturamercancia';
    const EXPEDIENTEARCHIVO_TIPO_FACTURASHIPPER = 'facturashipper';
    const EXPEDIENTEARCHIVO_TIPO_PEDIMENTO = 'pedimento';
    const EXPEDIENTEARCHIVO_TIPO_PACKINGLIST = 'packinglist';
    const EXPEDIENTEARCHIVO_TIPO_MSDS = 'msds';
    const EXPEDIENTEARCHIVO_TIPO_EIR = 'eir';
    const EXPEDIENTEARCHIVO_TIPO_ESTIMACIONGASTOS = 'estimaciongastos';
    const EXPEDIENTEARCHIVO_TIPO_DOCUMENTOSADUANALES = 'documentosaduanales';
    const EXPEDIENTEARCHIVO_TIPO_OTRO = 'otro';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Expedientearchivo objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Expedientearchivo[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ExpedientearchivoPeer::$fieldNames[ExpedientearchivoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idexpedientearchivo', 'Idexpediente', 'Idempleado', 'ExpedientearchivoFecha', 'ExpedientearchivoTipo', 'ExpedientearchivoArchivo', 'ExpedientearchivoSize', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idexpedientearchivo', 'idexpediente', 'idempleado', 'expedientearchivoFecha', 'expedientearchivoTipo', 'expedientearchivoArchivo', 'expedientearchivoSize', ),
        BasePeer::TYPE_COLNAME => array (ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, ExpedientearchivoPeer::IDEXPEDIENTE, ExpedientearchivoPeer::IDEMPLEADO, ExpedientearchivoPeer::EXPEDIENTEARCHIVO_FECHA, ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO, ExpedientearchivoPeer::EXPEDIENTEARCHIVO_ARCHIVO, ExpedientearchivoPeer::EXPEDIENTEARCHIVO_SIZE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDEXPEDIENTEARCHIVO', 'IDEXPEDIENTE', 'IDEMPLEADO', 'EXPEDIENTEARCHIVO_FECHA', 'EXPEDIENTEARCHIVO_TIPO', 'EXPEDIENTEARCHIVO_ARCHIVO', 'EXPEDIENTEARCHIVO_SIZE', ),
        BasePeer::TYPE_FIELDNAME => array ('idexpedientearchivo', 'idexpediente', 'idempleado', 'expedientearchivo_fecha', 'expedientearchivo_tipo', 'expedientearchivo_archivo', 'expedientearchivo_size', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ExpedientearchivoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idexpedientearchivo' => 0, 'Idexpediente' => 1, 'Idempleado' => 2, 'ExpedientearchivoFecha' => 3, 'ExpedientearchivoTipo' => 4, 'ExpedientearchivoArchivo' => 5, 'ExpedientearchivoSize' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idexpedientearchivo' => 0, 'idexpediente' => 1, 'idempleado' => 2, 'expedientearchivoFecha' => 3, 'expedientearchivoTipo' => 4, 'expedientearchivoArchivo' => 5, 'expedientearchivoSize' => 6, ),
        BasePeer::TYPE_COLNAME => array (ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO => 0, ExpedientearchivoPeer::IDEXPEDIENTE => 1, ExpedientearchivoPeer::IDEMPLEADO => 2, ExpedientearchivoPeer::EXPEDIENTEARCHIVO_FECHA => 3, ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO => 4, ExpedientearchivoPeer::EXPEDIENTEARCHIVO_ARCHIVO => 5, ExpedientearchivoPeer::EXPEDIENTEARCHIVO_SIZE => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDEXPEDIENTEARCHIVO' => 0, 'IDEXPEDIENTE' => 1, 'IDEMPLEADO' => 2, 'EXPEDIENTEARCHIVO_FECHA' => 3, 'EXPEDIENTEARCHIVO_TIPO' => 4, 'EXPEDIENTEARCHIVO_ARCHIVO' => 5, 'EXPEDIENTEARCHIVO_SIZE' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('idexpedientearchivo' => 0, 'idexpediente' => 1, 'idempleado' => 2, 'expedientearchivo_fecha' => 3, 'expedientearchivo_tipo' => 4, 'expedientearchivo_archivo' => 5, 'expedientearchivo_size' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO => array(
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_BLAWB,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_CERTIFICADOORIGEN,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_POLIZASEGURO,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_FACTURAMERCANCIA,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_FACTURASHIPPER,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_PEDIMENTO,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_PACKINGLIST,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_MSDS,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_EIR,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_ESTIMACIONGASTOS,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_DOCUMENTOSADUANALES,
            ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO_OTRO,
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
        $toNames = ExpedientearchivoPeer::getFieldNames($toType);
        $key = isset(ExpedientearchivoPeer::$fieldKeys[$fromType][$name]) ? ExpedientearchivoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ExpedientearchivoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ExpedientearchivoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ExpedientearchivoPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ExpedientearchivoPeer::$enumValueSets;
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
        $valueSets = ExpedientearchivoPeer::getValueSets();

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
        $values = ExpedientearchivoPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ExpedientearchivoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ExpedientearchivoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO);
            $criteria->addSelectColumn(ExpedientearchivoPeer::IDEXPEDIENTE);
            $criteria->addSelectColumn(ExpedientearchivoPeer::IDEMPLEADO);
            $criteria->addSelectColumn(ExpedientearchivoPeer::EXPEDIENTEARCHIVO_FECHA);
            $criteria->addSelectColumn(ExpedientearchivoPeer::EXPEDIENTEARCHIVO_TIPO);
            $criteria->addSelectColumn(ExpedientearchivoPeer::EXPEDIENTEARCHIVO_ARCHIVO);
            $criteria->addSelectColumn(ExpedientearchivoPeer::EXPEDIENTEARCHIVO_SIZE);
        } else {
            $criteria->addSelectColumn($alias . '.idexpedientearchivo');
            $criteria->addSelectColumn($alias . '.idexpediente');
            $criteria->addSelectColumn($alias . '.idempleado');
            $criteria->addSelectColumn($alias . '.expedientearchivo_fecha');
            $criteria->addSelectColumn($alias . '.expedientearchivo_tipo');
            $criteria->addSelectColumn($alias . '.expedientearchivo_archivo');
            $criteria->addSelectColumn($alias . '.expedientearchivo_size');
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
        $criteria->setPrimaryTableName(ExpedientearchivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientearchivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Expedientearchivo
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ExpedientearchivoPeer::doSelect($critcopy, $con);
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
        return ExpedientearchivoPeer::populateObjects(ExpedientearchivoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ExpedientearchivoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);

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
     * @param Expedientearchivo $obj A Expedientearchivo object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdexpedientearchivo();
            } // if key === null
            ExpedientearchivoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Expedientearchivo object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Expedientearchivo) {
                $key = (string) $value->getIdexpedientearchivo();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Expedientearchivo object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ExpedientearchivoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Expedientearchivo Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ExpedientearchivoPeer::$instances[$key])) {
                return ExpedientearchivoPeer::$instances[$key];
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
        foreach (ExpedientearchivoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ExpedientearchivoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to expedientearchivo
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
        $cls = ExpedientearchivoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ExpedientearchivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ExpedientearchivoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ExpedientearchivoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Expedientearchivo object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ExpedientearchivoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ExpedientearchivoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ExpedientearchivoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ExpedientearchivoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ExpedientearchivoPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(ExpedientearchivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientearchivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientearchivoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
        $criteria->setPrimaryTableName(ExpedientearchivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientearchivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientearchivoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

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
     * Selects a collection of Expedientearchivo objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientearchivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);
        }

        ExpedientearchivoPeer::addSelectColumns($criteria);
        $startcol = ExpedientearchivoPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(ExpedientearchivoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientearchivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientearchivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ExpedientearchivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientearchivoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Expedientearchivo) to $obj2 (Empleado)
                $obj2->addExpedientearchivo($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Expedientearchivo objects pre-filled with their Expediente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientearchivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinExpediente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);
        }

        ExpedientearchivoPeer::addSelectColumns($criteria);
        $startcol = ExpedientearchivoPeer::NUM_HYDRATE_COLUMNS;
        ExpedientePeer::addSelectColumns($criteria);

        $criteria->addJoin(ExpedientearchivoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientearchivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientearchivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ExpedientearchivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientearchivoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Expedientearchivo) to $obj2 (Expediente)
                $obj2->addExpedientearchivo($obj1);

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
        $criteria->setPrimaryTableName(ExpedientearchivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientearchivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientearchivoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ExpedientearchivoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

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
     * Selects a collection of Expedientearchivo objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientearchivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);
        }

        ExpedientearchivoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedientearchivoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        ExpedientePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ExpedientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedientearchivoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(ExpedientearchivoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientearchivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientearchivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedientearchivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientearchivoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Expedientearchivo) to the collection in $obj2 (Empleado)
                $obj2->addExpedientearchivo($obj1);
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

                // Add the $obj1 (Expedientearchivo) to the collection in $obj3 (Expediente)
                $obj3->addExpedientearchivo($obj1);
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
        $criteria->setPrimaryTableName(ExpedientearchivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientearchivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientearchivoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);

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
        $criteria->setPrimaryTableName(ExpedientearchivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ExpedientearchivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ExpedientearchivoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Selects a collection of Expedientearchivo objects pre-filled with all related objects except Empleado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientearchivo objects.
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
            $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);
        }

        ExpedientearchivoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedientearchivoPeer::NUM_HYDRATE_COLUMNS;

        ExpedientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ExpedientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedientearchivoPeer::IDEXPEDIENTE, ExpedientePeer::IDEXPEDIENTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientearchivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientearchivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedientearchivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientearchivoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Expedientearchivo) to the collection in $obj2 (Expediente)
                $obj2->addExpedientearchivo($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Expedientearchivo objects pre-filled with all related objects except Expediente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Expedientearchivo objects.
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
            $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);
        }

        ExpedientearchivoPeer::addSelectColumns($criteria);
        $startcol2 = ExpedientearchivoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ExpedientearchivoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ExpedientearchivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ExpedientearchivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ExpedientearchivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ExpedientearchivoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Expedientearchivo) to the collection in $obj2 (Empleado)
                $obj2->addExpedientearchivo($obj1);

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
        return Propel::getDatabaseMap(ExpedientearchivoPeer::DATABASE_NAME)->getTable(ExpedientearchivoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseExpedientearchivoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseExpedientearchivoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ExpedientearchivoTableMap());
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
        return ExpedientearchivoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Expedientearchivo or Criteria object.
     *
     * @param      mixed $values Criteria or Expedientearchivo object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Expedientearchivo object
        }

        if ($criteria->containsKey(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO) && $criteria->keyContainsValue(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Expedientearchivo or Criteria object.
     *
     * @param      mixed $values Criteria or Expedientearchivo object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ExpedientearchivoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO);
            $value = $criteria->remove(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO);
            if ($value) {
                $selectCriteria->add(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ExpedientearchivoPeer::TABLE_NAME);
            }

        } else { // $values is Expedientearchivo object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the expedientearchivo table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ExpedientearchivoPeer::TABLE_NAME, $con, ExpedientearchivoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ExpedientearchivoPeer::clearInstancePool();
            ExpedientearchivoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Expedientearchivo or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Expedientearchivo object or primary key or array of primary keys
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
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ExpedientearchivoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Expedientearchivo) { // it's a model object
            // invalidate the cache for this single object
            ExpedientearchivoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ExpedientearchivoPeer::DATABASE_NAME);
            $criteria->add(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ExpedientearchivoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ExpedientearchivoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ExpedientearchivoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Expedientearchivo object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Expedientearchivo $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ExpedientearchivoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ExpedientearchivoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ExpedientearchivoPeer::DATABASE_NAME, ExpedientearchivoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Expedientearchivo
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ExpedientearchivoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ExpedientearchivoPeer::DATABASE_NAME);
        $criteria->add(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, $pk);

        $v = ExpedientearchivoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Expedientearchivo[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ExpedientearchivoPeer::DATABASE_NAME);
            $criteria->add(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, $pks, Criteria::IN);
            $objs = ExpedientearchivoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseExpedientearchivoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseExpedientearchivoPeer::buildTableMap();

