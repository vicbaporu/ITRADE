<?php


/**
 * Base class that represents a row from the 'gastofacturacion' table.
 *
 *
 *
 * @package    propel.generator.itrade_system.om
 */
abstract class BaseGastofacturacion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'GastofacturacionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GastofacturacionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idgastofacturacion field.
     * @var        int
     */
    protected $idgastofacturacion;

    /**
     * The value for the gastofacturacion_nombre field.
     * @var        string
     */
    protected $gastofacturacion_nombre;

    /**
     * The value for the gastofacturacion_descripcion field.
     * @var        string
     */
    protected $gastofacturacion_descripcion;

    /**
     * @var        PropelObjectCollection|Expedientegasto[] Collection to store aggregation of Expedientegasto objects.
     */
    protected $collExpedientegastos;
    protected $collExpedientegastosPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $expedientegastosScheduledForDeletion = null;

    /**
     * Get the [idgastofacturacion] column value.
     *
     * @return int
     */
    public function getIdgastofacturacion()
    {

        return $this->idgastofacturacion;
    }

    /**
     * Get the [gastofacturacion_nombre] column value.
     *
     * @return string
     */
    public function getGastofacturacionNombre()
    {

        return $this->gastofacturacion_nombre;
    }

    /**
     * Get the [gastofacturacion_descripcion] column value.
     *
     * @return string
     */
    public function getGastofacturacionDescripcion()
    {

        return $this->gastofacturacion_descripcion;
    }

    /**
     * Set the value of [idgastofacturacion] column.
     *
     * @param  int $v new value
     * @return Gastofacturacion The current object (for fluent API support)
     */
    public function setIdgastofacturacion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idgastofacturacion !== $v) {
            $this->idgastofacturacion = $v;
            $this->modifiedColumns[] = GastofacturacionPeer::IDGASTOFACTURACION;
        }


        return $this;
    } // setIdgastofacturacion()

    /**
     * Set the value of [gastofacturacion_nombre] column.
     *
     * @param  string $v new value
     * @return Gastofacturacion The current object (for fluent API support)
     */
    public function setGastofacturacionNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gastofacturacion_nombre !== $v) {
            $this->gastofacturacion_nombre = $v;
            $this->modifiedColumns[] = GastofacturacionPeer::GASTOFACTURACION_NOMBRE;
        }


        return $this;
    } // setGastofacturacionNombre()

    /**
     * Set the value of [gastofacturacion_descripcion] column.
     *
     * @param  string $v new value
     * @return Gastofacturacion The current object (for fluent API support)
     */
    public function setGastofacturacionDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gastofacturacion_descripcion !== $v) {
            $this->gastofacturacion_descripcion = $v;
            $this->modifiedColumns[] = GastofacturacionPeer::GASTOFACTURACION_DESCRIPCION;
        }


        return $this;
    } // setGastofacturacionDescripcion()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->idgastofacturacion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->gastofacturacion_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->gastofacturacion_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = GastofacturacionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Gastofacturacion object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GastofacturacionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collExpedientegastos = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GastofacturacionQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                GastofacturacionPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->expedientegastosScheduledForDeletion !== null) {
                if (!$this->expedientegastosScheduledForDeletion->isEmpty()) {
                    ExpedientegastoQuery::create()
                        ->filterByPrimaryKeys($this->expedientegastosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->expedientegastosScheduledForDeletion = null;
                }
            }

            if ($this->collExpedientegastos !== null) {
                foreach ($this->collExpedientegastos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = GastofacturacionPeer::IDGASTOFACTURACION;
        if (null !== $this->idgastofacturacion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . GastofacturacionPeer::IDGASTOFACTURACION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GastofacturacionPeer::IDGASTOFACTURACION)) {
            $modifiedColumns[':p' . $index++]  = '`idgastofacturacion`';
        }
        if ($this->isColumnModified(GastofacturacionPeer::GASTOFACTURACION_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`gastofacturacion_nombre`';
        }
        if ($this->isColumnModified(GastofacturacionPeer::GASTOFACTURACION_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`gastofacturacion_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `gastofacturacion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idgastofacturacion`':
                        $stmt->bindValue($identifier, $this->idgastofacturacion, PDO::PARAM_INT);
                        break;
                    case '`gastofacturacion_nombre`':
                        $stmt->bindValue($identifier, $this->gastofacturacion_nombre, PDO::PARAM_STR);
                        break;
                    case '`gastofacturacion_descripcion`':
                        $stmt->bindValue($identifier, $this->gastofacturacion_descripcion, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdgastofacturacion($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = GastofacturacionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collExpedientegastos !== null) {
                    foreach ($this->collExpedientegastos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = GastofacturacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdgastofacturacion();
                break;
            case 1:
                return $this->getGastofacturacionNombre();
                break;
            case 2:
                return $this->getGastofacturacionDescripcion();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Gastofacturacion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Gastofacturacion'][$this->getPrimaryKey()] = true;
        $keys = GastofacturacionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdgastofacturacion(),
            $keys[1] => $this->getGastofacturacionNombre(),
            $keys[2] => $this->getGastofacturacionDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collExpedientegastos) {
                $result['Expedientegastos'] = $this->collExpedientegastos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = GastofacturacionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdgastofacturacion($value);
                break;
            case 1:
                $this->setGastofacturacionNombre($value);
                break;
            case 2:
                $this->setGastofacturacionDescripcion($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = GastofacturacionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdgastofacturacion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setGastofacturacionNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGastofacturacionDescripcion($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GastofacturacionPeer::DATABASE_NAME);

        if ($this->isColumnModified(GastofacturacionPeer::IDGASTOFACTURACION)) $criteria->add(GastofacturacionPeer::IDGASTOFACTURACION, $this->idgastofacturacion);
        if ($this->isColumnModified(GastofacturacionPeer::GASTOFACTURACION_NOMBRE)) $criteria->add(GastofacturacionPeer::GASTOFACTURACION_NOMBRE, $this->gastofacturacion_nombre);
        if ($this->isColumnModified(GastofacturacionPeer::GASTOFACTURACION_DESCRIPCION)) $criteria->add(GastofacturacionPeer::GASTOFACTURACION_DESCRIPCION, $this->gastofacturacion_descripcion);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(GastofacturacionPeer::DATABASE_NAME);
        $criteria->add(GastofacturacionPeer::IDGASTOFACTURACION, $this->idgastofacturacion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdgastofacturacion();
    }

    /**
     * Generic method to set the primary key (idgastofacturacion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdgastofacturacion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdgastofacturacion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Gastofacturacion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setGastofacturacionNombre($this->getGastofacturacionNombre());
        $copyObj->setGastofacturacionDescripcion($this->getGastofacturacionDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getExpedientegastos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpedientegasto($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdgastofacturacion(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Gastofacturacion Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return GastofacturacionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GastofacturacionPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Expedientegasto' == $relationName) {
            $this->initExpedientegastos();
        }
    }

    /**
     * Clears out the collExpedientegastos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Gastofacturacion The current object (for fluent API support)
     * @see        addExpedientegastos()
     */
    public function clearExpedientegastos()
    {
        $this->collExpedientegastos = null; // important to set this to null since that means it is uninitialized
        $this->collExpedientegastosPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedientegastos collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedientegastos($v = true)
    {
        $this->collExpedientegastosPartial = $v;
    }

    /**
     * Initializes the collExpedientegastos collection.
     *
     * By default this just sets the collExpedientegastos collection to an empty array (like clearcollExpedientegastos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedientegastos($overrideExisting = true)
    {
        if (null !== $this->collExpedientegastos && !$overrideExisting) {
            return;
        }
        $this->collExpedientegastos = new PropelObjectCollection();
        $this->collExpedientegastos->setModel('Expedientegasto');
    }

    /**
     * Gets an array of Expedientegasto objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Gastofacturacion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Expedientegasto[] List of Expedientegasto objects
     * @throws PropelException
     */
    public function getExpedientegastos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedientegastosPartial && !$this->isNew();
        if (null === $this->collExpedientegastos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedientegastos) {
                // return empty collection
                $this->initExpedientegastos();
            } else {
                $collExpedientegastos = ExpedientegastoQuery::create(null, $criteria)
                    ->filterByGastofacturacion($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedientegastosPartial && count($collExpedientegastos)) {
                      $this->initExpedientegastos(false);

                      foreach ($collExpedientegastos as $obj) {
                        if (false == $this->collExpedientegastos->contains($obj)) {
                          $this->collExpedientegastos->append($obj);
                        }
                      }

                      $this->collExpedientegastosPartial = true;
                    }

                    $collExpedientegastos->getInternalIterator()->rewind();

                    return $collExpedientegastos;
                }

                if ($partial && $this->collExpedientegastos) {
                    foreach ($this->collExpedientegastos as $obj) {
                        if ($obj->isNew()) {
                            $collExpedientegastos[] = $obj;
                        }
                    }
                }

                $this->collExpedientegastos = $collExpedientegastos;
                $this->collExpedientegastosPartial = false;
            }
        }

        return $this->collExpedientegastos;
    }

    /**
     * Sets a collection of Expedientegasto objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedientegastos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Gastofacturacion The current object (for fluent API support)
     */
    public function setExpedientegastos(PropelCollection $expedientegastos, PropelPDO $con = null)
    {
        $expedientegastosToDelete = $this->getExpedientegastos(new Criteria(), $con)->diff($expedientegastos);


        $this->expedientegastosScheduledForDeletion = $expedientegastosToDelete;

        foreach ($expedientegastosToDelete as $expedientegastoRemoved) {
            $expedientegastoRemoved->setGastofacturacion(null);
        }

        $this->collExpedientegastos = null;
        foreach ($expedientegastos as $expedientegasto) {
            $this->addExpedientegasto($expedientegasto);
        }

        $this->collExpedientegastos = $expedientegastos;
        $this->collExpedientegastosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Expedientegasto objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Expedientegasto objects.
     * @throws PropelException
     */
    public function countExpedientegastos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedientegastosPartial && !$this->isNew();
        if (null === $this->collExpedientegastos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedientegastos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExpedientegastos());
            }
            $query = ExpedientegastoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGastofacturacion($this)
                ->count($con);
        }

        return count($this->collExpedientegastos);
    }

    /**
     * Method called to associate a Expedientegasto object to this object
     * through the Expedientegasto foreign key attribute.
     *
     * @param    Expedientegasto $l Expedientegasto
     * @return Gastofacturacion The current object (for fluent API support)
     */
    public function addExpedientegasto(Expedientegasto $l)
    {
        if ($this->collExpedientegastos === null) {
            $this->initExpedientegastos();
            $this->collExpedientegastosPartial = true;
        }

        if (!in_array($l, $this->collExpedientegastos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpedientegasto($l);

            if ($this->expedientegastosScheduledForDeletion and $this->expedientegastosScheduledForDeletion->contains($l)) {
                $this->expedientegastosScheduledForDeletion->remove($this->expedientegastosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Expedientegasto $expedientegasto The expedientegasto object to add.
     */
    protected function doAddExpedientegasto($expedientegasto)
    {
        $this->collExpedientegastos[]= $expedientegasto;
        $expedientegasto->setGastofacturacion($this);
    }

    /**
     * @param	Expedientegasto $expedientegasto The expedientegasto object to remove.
     * @return Gastofacturacion The current object (for fluent API support)
     */
    public function removeExpedientegasto($expedientegasto)
    {
        if ($this->getExpedientegastos()->contains($expedientegasto)) {
            $this->collExpedientegastos->remove($this->collExpedientegastos->search($expedientegasto));
            if (null === $this->expedientegastosScheduledForDeletion) {
                $this->expedientegastosScheduledForDeletion = clone $this->collExpedientegastos;
                $this->expedientegastosScheduledForDeletion->clear();
            }
            $this->expedientegastosScheduledForDeletion[]= clone $expedientegasto;
            $expedientegasto->setGastofacturacion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Gastofacturacion is new, it will return
     * an empty collection; or if this Gastofacturacion has previously
     * been saved, it will retrieve related Expedientegastos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Gastofacturacion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedientegasto[] List of Expedientegasto objects
     */
    public function getExpedientegastosJoinExpediente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedientegastoQuery::create(null, $criteria);
        $query->joinWith('Expediente', $join_behavior);

        return $this->getExpedientegastos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Gastofacturacion is new, it will return
     * an empty collection; or if this Gastofacturacion has previously
     * been saved, it will retrieve related Expedientegastos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Gastofacturacion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedientegasto[] List of Expedientegasto objects
     */
    public function getExpedientegastosJoinProveedoritrade($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedientegastoQuery::create(null, $criteria);
        $query->joinWith('Proveedoritrade', $join_behavior);

        return $this->getExpedientegastos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idgastofacturacion = null;
        $this->gastofacturacion_nombre = null;
        $this->gastofacturacion_descripcion = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collExpedientegastos) {
                foreach ($this->collExpedientegastos as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collExpedientegastos instanceof PropelCollection) {
            $this->collExpedientegastos->clearIterator();
        }
        $this->collExpedientegastos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GastofacturacionPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
