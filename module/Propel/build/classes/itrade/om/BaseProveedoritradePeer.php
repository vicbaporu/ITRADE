<?php


/**
 * Base static class for performing query and update operations on the 'proveedoritrade' table.
 *
 *
 *
 * @package propel.generator.itrade.om
 */
abstract class BaseProveedoritradePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'itrade';

    /** the table name for this class */
    const TABLE_NAME = 'proveedoritrade';

    /** the related Propel class for this table */
    const OM_CLASS = 'Proveedoritrade';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ProveedoritradeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the idproveedoritrade field */
    const IDPROVEEDORITRADE = 'proveedoritrade.idproveedoritrade';

    /** the column name for the proveedoritrade_nombre field */
    const PROVEEDORITRADE_NOMBRE = 'proveedoritrade.proveedoritrade_nombre';

    /** the column name for the proveedoritrade_nombrecontacto field */
    const PROVEEDORITRADE_NOMBRECONTACTO = 'proveedoritrade.proveedoritrade_nombrecontacto';

    /** the column name for the proveedoritrade_telefono field */
    const PROVEEDORITRADE_TELEFONO = 'proveedoritrade.proveedoritrade_telefono';

    /** the column name for the proveedoritrade_calle field */
    const PROVEEDORITRADE_CALLE = 'proveedoritrade.proveedoritrade_calle';

    /** the column name for the proveedoritrade_numero field */
    const PROVEEDORITRADE_NUMERO = 'proveedoritrade.proveedoritrade_numero';

    /** the column name for the proveedoritrade_interior field */
    const PROVEEDORITRADE_INTERIOR = 'proveedoritrade.proveedoritrade_interior';

    /** the column name for the proveedoritrade_colonia field */
    const PROVEEDORITRADE_COLONIA = 'proveedoritrade.proveedoritrade_colonia';

    /** the column name for the proveedoritrade_ciudad field */
    const PROVEEDORITRADE_CIUDAD = 'proveedoritrade.proveedoritrade_ciudad';

    /** the column name for the proveedoritrade_estado field */
    const PROVEEDORITRADE_ESTADO = 'proveedoritrade.proveedoritrade_estado';

    /** the column name for the proveedoritrade_pais field */
    const PROVEEDORITRADE_PAIS = 'proveedoritrade.proveedoritrade_pais';

    /** the column name for the proveedoritrade_email field */
    const PROVEEDORITRADE_EMAIL = 'proveedoritrade.proveedoritrade_email';

    /** the column name for the proveedoritrade_rfc field */
    const PROVEEDORITRADE_RFC = 'proveedoritrade.proveedoritrade_rfc';

    /** the column name for the proveedoritrade_clabe field */
    const PROVEEDORITRADE_CLABE = 'proveedoritrade.proveedoritrade_clabe';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Proveedoritrade objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Proveedoritrade[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProveedoritradePeer::$fieldNames[ProveedoritradePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idproveedoritrade', 'ProveedoritradeNombre', 'ProveedoritradeNombrecontacto', 'ProveedoritradeTelefono', 'ProveedoritradeCalle', 'ProveedoritradeNumero', 'ProveedoritradeInterior', 'ProveedoritradeColonia', 'ProveedoritradeCiudad', 'ProveedoritradeEstado', 'ProveedoritradePais', 'ProveedoritradeEmail', 'ProveedoritradeRfc', 'ProveedoritradeClabe', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproveedoritrade', 'proveedoritradeNombre', 'proveedoritradeNombrecontacto', 'proveedoritradeTelefono', 'proveedoritradeCalle', 'proveedoritradeNumero', 'proveedoritradeInterior', 'proveedoritradeColonia', 'proveedoritradeCiudad', 'proveedoritradeEstado', 'proveedoritradePais', 'proveedoritradeEmail', 'proveedoritradeRfc', 'proveedoritradeClabe', ),
        BasePeer::TYPE_COLNAME => array (ProveedoritradePeer::IDPROVEEDORITRADE, ProveedoritradePeer::PROVEEDORITRADE_NOMBRE, ProveedoritradePeer::PROVEEDORITRADE_NOMBRECONTACTO, ProveedoritradePeer::PROVEEDORITRADE_TELEFONO, ProveedoritradePeer::PROVEEDORITRADE_CALLE, ProveedoritradePeer::PROVEEDORITRADE_NUMERO, ProveedoritradePeer::PROVEEDORITRADE_INTERIOR, ProveedoritradePeer::PROVEEDORITRADE_COLONIA, ProveedoritradePeer::PROVEEDORITRADE_CIUDAD, ProveedoritradePeer::PROVEEDORITRADE_ESTADO, ProveedoritradePeer::PROVEEDORITRADE_PAIS, ProveedoritradePeer::PROVEEDORITRADE_EMAIL, ProveedoritradePeer::PROVEEDORITRADE_RFC, ProveedoritradePeer::PROVEEDORITRADE_CLABE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPROVEEDORITRADE', 'PROVEEDORITRADE_NOMBRE', 'PROVEEDORITRADE_NOMBRECONTACTO', 'PROVEEDORITRADE_TELEFONO', 'PROVEEDORITRADE_CALLE', 'PROVEEDORITRADE_NUMERO', 'PROVEEDORITRADE_INTERIOR', 'PROVEEDORITRADE_COLONIA', 'PROVEEDORITRADE_CIUDAD', 'PROVEEDORITRADE_ESTADO', 'PROVEEDORITRADE_PAIS', 'PROVEEDORITRADE_EMAIL', 'PROVEEDORITRADE_RFC', 'PROVEEDORITRADE_CLABE', ),
        BasePeer::TYPE_FIELDNAME => array ('idproveedoritrade', 'proveedoritrade_nombre', 'proveedoritrade_nombrecontacto', 'proveedoritrade_telefono', 'proveedoritrade_calle', 'proveedoritrade_numero', 'proveedoritrade_interior', 'proveedoritrade_colonia', 'proveedoritrade_ciudad', 'proveedoritrade_estado', 'proveedoritrade_pais', 'proveedoritrade_email', 'proveedoritrade_rfc', 'proveedoritrade_clabe', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProveedoritradePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idproveedoritrade' => 0, 'ProveedoritradeNombre' => 1, 'ProveedoritradeNombrecontacto' => 2, 'ProveedoritradeTelefono' => 3, 'ProveedoritradeCalle' => 4, 'ProveedoritradeNumero' => 5, 'ProveedoritradeInterior' => 6, 'ProveedoritradeColonia' => 7, 'ProveedoritradeCiudad' => 8, 'ProveedoritradeEstado' => 9, 'ProveedoritradePais' => 10, 'ProveedoritradeEmail' => 11, 'ProveedoritradeRfc' => 12, 'ProveedoritradeClabe' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproveedoritrade' => 0, 'proveedoritradeNombre' => 1, 'proveedoritradeNombrecontacto' => 2, 'proveedoritradeTelefono' => 3, 'proveedoritradeCalle' => 4, 'proveedoritradeNumero' => 5, 'proveedoritradeInterior' => 6, 'proveedoritradeColonia' => 7, 'proveedoritradeCiudad' => 8, 'proveedoritradeEstado' => 9, 'proveedoritradePais' => 10, 'proveedoritradeEmail' => 11, 'proveedoritradeRfc' => 12, 'proveedoritradeClabe' => 13, ),
        BasePeer::TYPE_COLNAME => array (ProveedoritradePeer::IDPROVEEDORITRADE => 0, ProveedoritradePeer::PROVEEDORITRADE_NOMBRE => 1, ProveedoritradePeer::PROVEEDORITRADE_NOMBRECONTACTO => 2, ProveedoritradePeer::PROVEEDORITRADE_TELEFONO => 3, ProveedoritradePeer::PROVEEDORITRADE_CALLE => 4, ProveedoritradePeer::PROVEEDORITRADE_NUMERO => 5, ProveedoritradePeer::PROVEEDORITRADE_INTERIOR => 6, ProveedoritradePeer::PROVEEDORITRADE_COLONIA => 7, ProveedoritradePeer::PROVEEDORITRADE_CIUDAD => 8, ProveedoritradePeer::PROVEEDORITRADE_ESTADO => 9, ProveedoritradePeer::PROVEEDORITRADE_PAIS => 10, ProveedoritradePeer::PROVEEDORITRADE_EMAIL => 11, ProveedoritradePeer::PROVEEDORITRADE_RFC => 12, ProveedoritradePeer::PROVEEDORITRADE_CLABE => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPROVEEDORITRADE' => 0, 'PROVEEDORITRADE_NOMBRE' => 1, 'PROVEEDORITRADE_NOMBRECONTACTO' => 2, 'PROVEEDORITRADE_TELEFONO' => 3, 'PROVEEDORITRADE_CALLE' => 4, 'PROVEEDORITRADE_NUMERO' => 5, 'PROVEEDORITRADE_INTERIOR' => 6, 'PROVEEDORITRADE_COLONIA' => 7, 'PROVEEDORITRADE_CIUDAD' => 8, 'PROVEEDORITRADE_ESTADO' => 9, 'PROVEEDORITRADE_PAIS' => 10, 'PROVEEDORITRADE_EMAIL' => 11, 'PROVEEDORITRADE_RFC' => 12, 'PROVEEDORITRADE_CLABE' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('idproveedoritrade' => 0, 'proveedoritrade_nombre' => 1, 'proveedoritrade_nombrecontacto' => 2, 'proveedoritrade_telefono' => 3, 'proveedoritrade_calle' => 4, 'proveedoritrade_numero' => 5, 'proveedoritrade_interior' => 6, 'proveedoritrade_colonia' => 7, 'proveedoritrade_ciudad' => 8, 'proveedoritrade_estado' => 9, 'proveedoritrade_pais' => 10, 'proveedoritrade_email' => 11, 'proveedoritrade_rfc' => 12, 'proveedoritrade_clabe' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $toNames = ProveedoritradePeer::getFieldNames($toType);
        $key = isset(ProveedoritradePeer::$fieldKeys[$fromType][$name]) ? ProveedoritradePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProveedoritradePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ProveedoritradePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProveedoritradePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ProveedoritradePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProveedoritradePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ProveedoritradePeer::IDPROVEEDORITRADE);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_NOMBRE);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_NOMBRECONTACTO);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_TELEFONO);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_CALLE);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_NUMERO);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_INTERIOR);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_COLONIA);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_CIUDAD);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_ESTADO);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_PAIS);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_EMAIL);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_RFC);
            $criteria->addSelectColumn(ProveedoritradePeer::PROVEEDORITRADE_CLABE);
        } else {
            $criteria->addSelectColumn($alias . '.idproveedoritrade');
            $criteria->addSelectColumn($alias . '.proveedoritrade_nombre');
            $criteria->addSelectColumn($alias . '.proveedoritrade_nombrecontacto');
            $criteria->addSelectColumn($alias . '.proveedoritrade_telefono');
            $criteria->addSelectColumn($alias . '.proveedoritrade_calle');
            $criteria->addSelectColumn($alias . '.proveedoritrade_numero');
            $criteria->addSelectColumn($alias . '.proveedoritrade_interior');
            $criteria->addSelectColumn($alias . '.proveedoritrade_colonia');
            $criteria->addSelectColumn($alias . '.proveedoritrade_ciudad');
            $criteria->addSelectColumn($alias . '.proveedoritrade_estado');
            $criteria->addSelectColumn($alias . '.proveedoritrade_pais');
            $criteria->addSelectColumn($alias . '.proveedoritrade_email');
            $criteria->addSelectColumn($alias . '.proveedoritrade_rfc');
            $criteria->addSelectColumn($alias . '.proveedoritrade_clabe');
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
        $criteria->setPrimaryTableName(ProveedoritradePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProveedoritradePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProveedoritradePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Proveedoritrade
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProveedoritradePeer::doSelect($critcopy, $con);
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
        return ProveedoritradePeer::populateObjects(ProveedoritradePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProveedoritradePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProveedoritradePeer::DATABASE_NAME);

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
     * @param Proveedoritrade $obj A Proveedoritrade object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdproveedoritrade();
            } // if key === null
            ProveedoritradePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Proveedoritrade object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Proveedoritrade) {
                $key = (string) $value->getIdproveedoritrade();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Proveedoritrade object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProveedoritradePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Proveedoritrade Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProveedoritradePeer::$instances[$key])) {
                return ProveedoritradePeer::$instances[$key];
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
        foreach (ProveedoritradePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ProveedoritradePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to proveedoritrade
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ExpedientegastoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ExpedientegastoPeer::clearInstancePool();
        // Invalidate objects in ProveedoritradearchivoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProveedoritradearchivoPeer::clearInstancePool();
        // Invalidate objects in ProveedoritradeservicioPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProveedoritradeservicioPeer::clearInstancePool();
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
        $cls = ProveedoritradePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProveedoritradePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProveedoritradePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProveedoritradePeer::addInstanceToPool($obj, $key);
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
     * @return array (Proveedoritrade object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProveedoritradePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProveedoritradePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProveedoritradePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProveedoritradePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProveedoritradePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(ProveedoritradePeer::DATABASE_NAME)->getTable(ProveedoritradePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseProveedoritradePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseProveedoritradePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ProveedoritradeTableMap());
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
        return ProveedoritradePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Proveedoritrade or Criteria object.
     *
     * @param      mixed $values Criteria or Proveedoritrade object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Proveedoritrade object
        }

        if ($criteria->containsKey(ProveedoritradePeer::IDPROVEEDORITRADE) && $criteria->keyContainsValue(ProveedoritradePeer::IDPROVEEDORITRADE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProveedoritradePeer::IDPROVEEDORITRADE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ProveedoritradePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Proveedoritrade or Criteria object.
     *
     * @param      mixed $values Criteria or Proveedoritrade object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProveedoritradePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProveedoritradePeer::IDPROVEEDORITRADE);
            $value = $criteria->remove(ProveedoritradePeer::IDPROVEEDORITRADE);
            if ($value) {
                $selectCriteria->add(ProveedoritradePeer::IDPROVEEDORITRADE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProveedoritradePeer::TABLE_NAME);
            }

        } else { // $values is Proveedoritrade object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProveedoritradePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the proveedoritrade table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += ProveedoritradePeer::doOnDeleteCascade(new Criteria(ProveedoritradePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ProveedoritradePeer::TABLE_NAME, $con, ProveedoritradePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProveedoritradePeer::clearInstancePool();
            ProveedoritradePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Proveedoritrade or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Proveedoritrade object or primary key or array of primary keys
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
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Proveedoritrade) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProveedoritradePeer::DATABASE_NAME);
            $criteria->add(ProveedoritradePeer::IDPROVEEDORITRADE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ProveedoritradePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += ProveedoritradePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ProveedoritradePeer::clearInstancePool();
            } elseif ($values instanceof Proveedoritrade) { // it's a model object
                ProveedoritradePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ProveedoritradePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProveedoritradePeer::clearRelatedInstancePool();
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
        $objects = ProveedoritradePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Expedientegasto objects
            $criteria = new Criteria(ExpedientegastoPeer::DATABASE_NAME);

            $criteria->add(ExpedientegastoPeer::IDPROVEEDORITRADE, $obj->getIdproveedoritrade());
            $affectedRows += ExpedientegastoPeer::doDelete($criteria, $con);

            // delete related Proveedoritradearchivo objects
            $criteria = new Criteria(ProveedoritradearchivoPeer::DATABASE_NAME);

            $criteria->add(ProveedoritradearchivoPeer::IDPROVEEDORITRADE, $obj->getIdproveedoritrade());
            $affectedRows += ProveedoritradearchivoPeer::doDelete($criteria, $con);

            // delete related Proveedoritradeservicio objects
            $criteria = new Criteria(ProveedoritradeservicioPeer::DATABASE_NAME);

            $criteria->add(ProveedoritradeservicioPeer::IDPROVEEDORITRADE, $obj->getIdproveedoritrade());
            $affectedRows += ProveedoritradeservicioPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Proveedoritrade object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Proveedoritrade $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProveedoritradePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProveedoritradePeer::TABLE_NAME);

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

        return BasePeer::doValidate(ProveedoritradePeer::DATABASE_NAME, ProveedoritradePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Proveedoritrade
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ProveedoritradePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ProveedoritradePeer::DATABASE_NAME);
        $criteria->add(ProveedoritradePeer::IDPROVEEDORITRADE, $pk);

        $v = ProveedoritradePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Proveedoritrade[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ProveedoritradePeer::DATABASE_NAME);
            $criteria->add(ProveedoritradePeer::IDPROVEEDORITRADE, $pks, Criteria::IN);
            $objs = ProveedoritradePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseProveedoritradePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseProveedoritradePeer::buildTableMap();

