<?php


/**
 * Base static class for performing query and update operations on the 'gastofacturacion' table.
 *
 *
 *
 * @package propel.generator.itrade.om
 */
abstract class BaseGastofacturacionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'itrade';

    /** the table name for this class */
    const TABLE_NAME = 'gastofacturacion';

    /** the related Propel class for this table */
    const OM_CLASS = 'Gastofacturacion';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GastofacturacionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the idgastofacturacion field */
    const IDGASTOFACTURACION = 'gastofacturacion.idgastofacturacion';

    /** the column name for the idcategoriagasto field */
    const IDCATEGORIAGASTO = 'gastofacturacion.idcategoriagasto';

    /** the column name for the gastofacturacion_nombre field */
    const GASTOFACTURACION_NOMBRE = 'gastofacturacion.gastofacturacion_nombre';

    /** the column name for the gastofacturacion_descripcion field */
    const GASTOFACTURACION_DESCRIPCION = 'gastofacturacion.gastofacturacion_descripcion';

    /** the column name for the gastofacturacion_iva field */
    const GASTOFACTURACION_IVA = 'gastofacturacion.gastofacturacion_iva';

    /** The enumerated values for the gastofacturacion_iva field */
    const GASTOFACTURACION_IVA_0 = '0';
    const GASTOFACTURACION_IVA_16 = '16';
    const GASTOFACTURACION_IVA_4 = '4';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Gastofacturacion objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Gastofacturacion[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GastofacturacionPeer::$fieldNames[GastofacturacionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idgastofacturacion', 'Idcategoriagasto', 'GastofacturacionNombre', 'GastofacturacionDescripcion', 'GastofacturacionIva', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idgastofacturacion', 'idcategoriagasto', 'gastofacturacionNombre', 'gastofacturacionDescripcion', 'gastofacturacionIva', ),
        BasePeer::TYPE_COLNAME => array (GastofacturacionPeer::IDGASTOFACTURACION, GastofacturacionPeer::IDCATEGORIAGASTO, GastofacturacionPeer::GASTOFACTURACION_NOMBRE, GastofacturacionPeer::GASTOFACTURACION_DESCRIPCION, GastofacturacionPeer::GASTOFACTURACION_IVA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDGASTOFACTURACION', 'IDCATEGORIAGASTO', 'GASTOFACTURACION_NOMBRE', 'GASTOFACTURACION_DESCRIPCION', 'GASTOFACTURACION_IVA', ),
        BasePeer::TYPE_FIELDNAME => array ('idgastofacturacion', 'idcategoriagasto', 'gastofacturacion_nombre', 'gastofacturacion_descripcion', 'gastofacturacion_iva', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GastofacturacionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idgastofacturacion' => 0, 'Idcategoriagasto' => 1, 'GastofacturacionNombre' => 2, 'GastofacturacionDescripcion' => 3, 'GastofacturacionIva' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idgastofacturacion' => 0, 'idcategoriagasto' => 1, 'gastofacturacionNombre' => 2, 'gastofacturacionDescripcion' => 3, 'gastofacturacionIva' => 4, ),
        BasePeer::TYPE_COLNAME => array (GastofacturacionPeer::IDGASTOFACTURACION => 0, GastofacturacionPeer::IDCATEGORIAGASTO => 1, GastofacturacionPeer::GASTOFACTURACION_NOMBRE => 2, GastofacturacionPeer::GASTOFACTURACION_DESCRIPCION => 3, GastofacturacionPeer::GASTOFACTURACION_IVA => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDGASTOFACTURACION' => 0, 'IDCATEGORIAGASTO' => 1, 'GASTOFACTURACION_NOMBRE' => 2, 'GASTOFACTURACION_DESCRIPCION' => 3, 'GASTOFACTURACION_IVA' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('idgastofacturacion' => 0, 'idcategoriagasto' => 1, 'gastofacturacion_nombre' => 2, 'gastofacturacion_descripcion' => 3, 'gastofacturacion_iva' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        GastofacturacionPeer::GASTOFACTURACION_IVA => array(
            GastofacturacionPeer::GASTOFACTURACION_IVA_0,
            GastofacturacionPeer::GASTOFACTURACION_IVA_16,
            GastofacturacionPeer::GASTOFACTURACION_IVA_4,
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
        $toNames = GastofacturacionPeer::getFieldNames($toType);
        $key = isset(GastofacturacionPeer::$fieldKeys[$fromType][$name]) ? GastofacturacionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GastofacturacionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GastofacturacionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GastofacturacionPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return GastofacturacionPeer::$enumValueSets;
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
        $valueSets = GastofacturacionPeer::getValueSets();

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
        $values = GastofacturacionPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. GastofacturacionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GastofacturacionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GastofacturacionPeer::IDGASTOFACTURACION);
            $criteria->addSelectColumn(GastofacturacionPeer::IDCATEGORIAGASTO);
            $criteria->addSelectColumn(GastofacturacionPeer::GASTOFACTURACION_NOMBRE);
            $criteria->addSelectColumn(GastofacturacionPeer::GASTOFACTURACION_DESCRIPCION);
            $criteria->addSelectColumn(GastofacturacionPeer::GASTOFACTURACION_IVA);
        } else {
            $criteria->addSelectColumn($alias . '.idgastofacturacion');
            $criteria->addSelectColumn($alias . '.idcategoriagasto');
            $criteria->addSelectColumn($alias . '.gastofacturacion_nombre');
            $criteria->addSelectColumn($alias . '.gastofacturacion_descripcion');
            $criteria->addSelectColumn($alias . '.gastofacturacion_iva');
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
        $criteria->setPrimaryTableName(GastofacturacionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GastofacturacionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GastofacturacionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Gastofacturacion
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GastofacturacionPeer::doSelect($critcopy, $con);
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
        return GastofacturacionPeer::populateObjects(GastofacturacionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GastofacturacionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GastofacturacionPeer::DATABASE_NAME);

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
     * @param Gastofacturacion $obj A Gastofacturacion object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdgastofacturacion();
            } // if key === null
            GastofacturacionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Gastofacturacion object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Gastofacturacion) {
                $key = (string) $value->getIdgastofacturacion();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Gastofacturacion object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GastofacturacionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Gastofacturacion Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GastofacturacionPeer::$instances[$key])) {
                return GastofacturacionPeer::$instances[$key];
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
        foreach (GastofacturacionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GastofacturacionPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gastofacturacion
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ExpedientegastoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ExpedientegastoPeer::clearInstancePool();
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
        $cls = GastofacturacionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GastofacturacionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GastofacturacionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GastofacturacionPeer::addInstanceToPool($obj, $key);
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
     * @return array (Gastofacturacion object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GastofacturacionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GastofacturacionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GastofacturacionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GastofacturacionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GastofacturacionPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Categoriagasto table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCategoriagasto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GastofacturacionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GastofacturacionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GastofacturacionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GastofacturacionPeer::IDCATEGORIAGASTO, CategoriagastoPeer::IDCATEGORIAGASTO, $join_behavior);

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
     * Selects a collection of Gastofacturacion objects pre-filled with their Categoriagasto objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Gastofacturacion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCategoriagasto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GastofacturacionPeer::DATABASE_NAME);
        }

        GastofacturacionPeer::addSelectColumns($criteria);
        $startcol = GastofacturacionPeer::NUM_HYDRATE_COLUMNS;
        CategoriagastoPeer::addSelectColumns($criteria);

        $criteria->addJoin(GastofacturacionPeer::IDCATEGORIAGASTO, CategoriagastoPeer::IDCATEGORIAGASTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GastofacturacionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GastofacturacionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GastofacturacionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GastofacturacionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CategoriagastoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CategoriagastoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CategoriagastoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CategoriagastoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Gastofacturacion) to $obj2 (Categoriagasto)
                $obj2->addGastofacturacion($obj1);

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
        $criteria->setPrimaryTableName(GastofacturacionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GastofacturacionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GastofacturacionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GastofacturacionPeer::IDCATEGORIAGASTO, CategoriagastoPeer::IDCATEGORIAGASTO, $join_behavior);

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
     * Selects a collection of Gastofacturacion objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Gastofacturacion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GastofacturacionPeer::DATABASE_NAME);
        }

        GastofacturacionPeer::addSelectColumns($criteria);
        $startcol2 = GastofacturacionPeer::NUM_HYDRATE_COLUMNS;

        CategoriagastoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CategoriagastoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GastofacturacionPeer::IDCATEGORIAGASTO, CategoriagastoPeer::IDCATEGORIAGASTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GastofacturacionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GastofacturacionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GastofacturacionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GastofacturacionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Categoriagasto rows

            $key2 = CategoriagastoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CategoriagastoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CategoriagastoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CategoriagastoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Gastofacturacion) to the collection in $obj2 (Categoriagasto)
                $obj2->addGastofacturacion($obj1);
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
        return Propel::getDatabaseMap(GastofacturacionPeer::DATABASE_NAME)->getTable(GastofacturacionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGastofacturacionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGastofacturacionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GastofacturacionTableMap());
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
        return GastofacturacionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Gastofacturacion or Criteria object.
     *
     * @param      mixed $values Criteria or Gastofacturacion object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Gastofacturacion object
        }

        if ($criteria->containsKey(GastofacturacionPeer::IDGASTOFACTURACION) && $criteria->keyContainsValue(GastofacturacionPeer::IDGASTOFACTURACION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.GastofacturacionPeer::IDGASTOFACTURACION.')');
        }


        // Set the correct dbName
        $criteria->setDbName(GastofacturacionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Gastofacturacion or Criteria object.
     *
     * @param      mixed $values Criteria or Gastofacturacion object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GastofacturacionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GastofacturacionPeer::IDGASTOFACTURACION);
            $value = $criteria->remove(GastofacturacionPeer::IDGASTOFACTURACION);
            if ($value) {
                $selectCriteria->add(GastofacturacionPeer::IDGASTOFACTURACION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GastofacturacionPeer::TABLE_NAME);
            }

        } else { // $values is Gastofacturacion object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GastofacturacionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gastofacturacion table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += GastofacturacionPeer::doOnDeleteCascade(new Criteria(GastofacturacionPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(GastofacturacionPeer::TABLE_NAME, $con, GastofacturacionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GastofacturacionPeer::clearInstancePool();
            GastofacturacionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Gastofacturacion or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Gastofacturacion object or primary key or array of primary keys
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
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Gastofacturacion) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GastofacturacionPeer::DATABASE_NAME);
            $criteria->add(GastofacturacionPeer::IDGASTOFACTURACION, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(GastofacturacionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += GastofacturacionPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                GastofacturacionPeer::clearInstancePool();
            } elseif ($values instanceof Gastofacturacion) { // it's a model object
                GastofacturacionPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    GastofacturacionPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GastofacturacionPeer::clearRelatedInstancePool();
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
        $objects = GastofacturacionPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Expedientegasto objects
            $criteria = new Criteria(ExpedientegastoPeer::DATABASE_NAME);

            $criteria->add(ExpedientegastoPeer::IDGASTOFACTURACION, $obj->getIdgastofacturacion());
            $affectedRows += ExpedientegastoPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Gastofacturacion object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Gastofacturacion $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GastofacturacionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GastofacturacionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GastofacturacionPeer::DATABASE_NAME, GastofacturacionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Gastofacturacion
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GastofacturacionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GastofacturacionPeer::DATABASE_NAME);
        $criteria->add(GastofacturacionPeer::IDGASTOFACTURACION, $pk);

        $v = GastofacturacionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Gastofacturacion[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GastofacturacionPeer::DATABASE_NAME);
            $criteria->add(GastofacturacionPeer::IDGASTOFACTURACION, $pks, Criteria::IN);
            $objs = GastofacturacionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGastofacturacionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGastofacturacionPeer::buildTableMap();

