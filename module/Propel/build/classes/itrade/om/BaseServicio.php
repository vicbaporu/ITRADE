<?php


/**
 * Base class that represents a row from the 'servicio' table.
 *
 *
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseServicio extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ServicioPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ServicioPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idservicio field.
     * @var        int
     */
    protected $idservicio;

    /**
     * The value for the servicio_nombre field.
     * @var        string
     */
    protected $servicio_nombre;

    /**
     * The value for the servicio_descripcion field.
     * @var        string
     */
    protected $servicio_descripcion;

    /**
     * @var        PropelObjectCollection|Expedienteservicio[] Collection to store aggregation of Expedienteservicio objects.
     */
    protected $collExpedienteservicios;
    protected $collExpedienteserviciosPartial;

    /**
     * @var        PropelObjectCollection|Proveedoritradeservicio[] Collection to store aggregation of Proveedoritradeservicio objects.
     */
    protected $collProveedoritradeservicios;
    protected $collProveedoritradeserviciosPartial;

    /**
     * @var        PropelObjectCollection|Servicioestado[] Collection to store aggregation of Servicioestado objects.
     */
    protected $collServicioestados;
    protected $collServicioestadosPartial;

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
    protected $expedienteserviciosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $proveedoritradeserviciosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $servicioestadosScheduledForDeletion = null;

    /**
     * Get the [idservicio] column value.
     *
     * @return int
     */
    public function getIdservicio()
    {

        return $this->idservicio;
    }

    /**
     * Get the [servicio_nombre] column value.
     *
     * @return string
     */
    public function getServicioNombre()
    {

        return $this->servicio_nombre;
    }

    /**
     * Get the [servicio_descripcion] column value.
     *
     * @return string
     */
    public function getServicioDescripcion()
    {

        return $this->servicio_descripcion;
    }

    /**
     * Set the value of [idservicio] column.
     *
     * @param  int $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setIdservicio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idservicio !== $v) {
            $this->idservicio = $v;
            $this->modifiedColumns[] = ServicioPeer::IDSERVICIO;
        }


        return $this;
    } // setIdservicio()

    /**
     * Set the value of [servicio_nombre] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicio_nombre !== $v) {
            $this->servicio_nombre = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_NOMBRE;
        }


        return $this;
    } // setServicioNombre()

    /**
     * Set the value of [servicio_descripcion] column.
     *
     * @param  string $v new value
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicio_descripcion !== $v) {
            $this->servicio_descripcion = $v;
            $this->modifiedColumns[] = ServicioPeer::SERVICIO_DESCRIPCION;
        }


        return $this;
    } // setServicioDescripcion()

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

            $this->idservicio = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->servicio_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->servicio_descripcion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = ServicioPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Servicio object", $e);
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
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ServicioPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collExpedienteservicios = null;

            $this->collProveedoritradeservicios = null;

            $this->collServicioestados = null;

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
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ServicioQuery::create()
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
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ServicioPeer::addInstanceToPool($this);
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

            if ($this->expedienteserviciosScheduledForDeletion !== null) {
                if (!$this->expedienteserviciosScheduledForDeletion->isEmpty()) {
                    ExpedienteservicioQuery::create()
                        ->filterByPrimaryKeys($this->expedienteserviciosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->expedienteserviciosScheduledForDeletion = null;
                }
            }

            if ($this->collExpedienteservicios !== null) {
                foreach ($this->collExpedienteservicios as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->proveedoritradeserviciosScheduledForDeletion !== null) {
                if (!$this->proveedoritradeserviciosScheduledForDeletion->isEmpty()) {
                    ProveedoritradeservicioQuery::create()
                        ->filterByPrimaryKeys($this->proveedoritradeserviciosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->proveedoritradeserviciosScheduledForDeletion = null;
                }
            }

            if ($this->collProveedoritradeservicios !== null) {
                foreach ($this->collProveedoritradeservicios as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->servicioestadosScheduledForDeletion !== null) {
                if (!$this->servicioestadosScheduledForDeletion->isEmpty()) {
                    ServicioestadoQuery::create()
                        ->filterByPrimaryKeys($this->servicioestadosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->servicioestadosScheduledForDeletion = null;
                }
            }

            if ($this->collServicioestados !== null) {
                foreach ($this->collServicioestados as $referrerFK) {
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

        $this->modifiedColumns[] = ServicioPeer::IDSERVICIO;
        if (null !== $this->idservicio) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ServicioPeer::IDSERVICIO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ServicioPeer::IDSERVICIO)) {
            $modifiedColumns[':p' . $index++]  = '`idservicio`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_nombre`';
        }
        if ($this->isColumnModified(ServicioPeer::SERVICIO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`servicio_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `servicio` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idservicio`':
                        $stmt->bindValue($identifier, $this->idservicio, PDO::PARAM_INT);
                        break;
                    case '`servicio_nombre`':
                        $stmt->bindValue($identifier, $this->servicio_nombre, PDO::PARAM_STR);
                        break;
                    case '`servicio_descripcion`':
                        $stmt->bindValue($identifier, $this->servicio_descripcion, PDO::PARAM_STR);
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
        $this->setIdservicio($pk);

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


            if (($retval = ServicioPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collExpedienteservicios !== null) {
                    foreach ($this->collExpedienteservicios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProveedoritradeservicios !== null) {
                    foreach ($this->collProveedoritradeservicios as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collServicioestados !== null) {
                    foreach ($this->collServicioestados as $referrerFK) {
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
        $pos = ServicioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdservicio();
                break;
            case 1:
                return $this->getServicioNombre();
                break;
            case 2:
                return $this->getServicioDescripcion();
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
        if (isset($alreadyDumpedObjects['Servicio'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Servicio'][$this->getPrimaryKey()] = true;
        $keys = ServicioPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdservicio(),
            $keys[1] => $this->getServicioNombre(),
            $keys[2] => $this->getServicioDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collExpedienteservicios) {
                $result['Expedienteservicios'] = $this->collExpedienteservicios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProveedoritradeservicios) {
                $result['Proveedoritradeservicios'] = $this->collProveedoritradeservicios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collServicioestados) {
                $result['Servicioestados'] = $this->collServicioestados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ServicioPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdservicio($value);
                break;
            case 1:
                $this->setServicioNombre($value);
                break;
            case 2:
                $this->setServicioDescripcion($value);
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
        $keys = ServicioPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdservicio($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setServicioNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setServicioDescripcion($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ServicioPeer::DATABASE_NAME);

        if ($this->isColumnModified(ServicioPeer::IDSERVICIO)) $criteria->add(ServicioPeer::IDSERVICIO, $this->idservicio);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_NOMBRE)) $criteria->add(ServicioPeer::SERVICIO_NOMBRE, $this->servicio_nombre);
        if ($this->isColumnModified(ServicioPeer::SERVICIO_DESCRIPCION)) $criteria->add(ServicioPeer::SERVICIO_DESCRIPCION, $this->servicio_descripcion);

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
        $criteria = new Criteria(ServicioPeer::DATABASE_NAME);
        $criteria->add(ServicioPeer::IDSERVICIO, $this->idservicio);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdservicio();
    }

    /**
     * Generic method to set the primary key (idservicio column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdservicio($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdservicio();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Servicio (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setServicioNombre($this->getServicioNombre());
        $copyObj->setServicioDescripcion($this->getServicioDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getExpedienteservicios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpedienteservicio($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProveedoritradeservicios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProveedoritradeservicio($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getServicioestados() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addServicioestado($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdservicio(NULL); // this is a auto-increment column, so set to default value
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
     * @return Servicio Clone of current object.
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
     * @return ServicioPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ServicioPeer();
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
        if ('Expedienteservicio' == $relationName) {
            $this->initExpedienteservicios();
        }
        if ('Proveedoritradeservicio' == $relationName) {
            $this->initProveedoritradeservicios();
        }
        if ('Servicioestado' == $relationName) {
            $this->initServicioestados();
        }
    }

    /**
     * Clears out the collExpedienteservicios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Servicio The current object (for fluent API support)
     * @see        addExpedienteservicios()
     */
    public function clearExpedienteservicios()
    {
        $this->collExpedienteservicios = null; // important to set this to null since that means it is uninitialized
        $this->collExpedienteserviciosPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedienteservicios collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedienteservicios($v = true)
    {
        $this->collExpedienteserviciosPartial = $v;
    }

    /**
     * Initializes the collExpedienteservicios collection.
     *
     * By default this just sets the collExpedienteservicios collection to an empty array (like clearcollExpedienteservicios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedienteservicios($overrideExisting = true)
    {
        if (null !== $this->collExpedienteservicios && !$overrideExisting) {
            return;
        }
        $this->collExpedienteservicios = new PropelObjectCollection();
        $this->collExpedienteservicios->setModel('Expedienteservicio');
    }

    /**
     * Gets an array of Expedienteservicio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Servicio is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Expedienteservicio[] List of Expedienteservicio objects
     * @throws PropelException
     */
    public function getExpedienteservicios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedienteserviciosPartial && !$this->isNew();
        if (null === $this->collExpedienteservicios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedienteservicios) {
                // return empty collection
                $this->initExpedienteservicios();
            } else {
                $collExpedienteservicios = ExpedienteservicioQuery::create(null, $criteria)
                    ->filterByServicio($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedienteserviciosPartial && count($collExpedienteservicios)) {
                      $this->initExpedienteservicios(false);

                      foreach ($collExpedienteservicios as $obj) {
                        if (false == $this->collExpedienteservicios->contains($obj)) {
                          $this->collExpedienteservicios->append($obj);
                        }
                      }

                      $this->collExpedienteserviciosPartial = true;
                    }

                    $collExpedienteservicios->getInternalIterator()->rewind();

                    return $collExpedienteservicios;
                }

                if ($partial && $this->collExpedienteservicios) {
                    foreach ($this->collExpedienteservicios as $obj) {
                        if ($obj->isNew()) {
                            $collExpedienteservicios[] = $obj;
                        }
                    }
                }

                $this->collExpedienteservicios = $collExpedienteservicios;
                $this->collExpedienteserviciosPartial = false;
            }
        }

        return $this->collExpedienteservicios;
    }

    /**
     * Sets a collection of Expedienteservicio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedienteservicios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Servicio The current object (for fluent API support)
     */
    public function setExpedienteservicios(PropelCollection $expedienteservicios, PropelPDO $con = null)
    {
        $expedienteserviciosToDelete = $this->getExpedienteservicios(new Criteria(), $con)->diff($expedienteservicios);


        $this->expedienteserviciosScheduledForDeletion = $expedienteserviciosToDelete;

        foreach ($expedienteserviciosToDelete as $expedienteservicioRemoved) {
            $expedienteservicioRemoved->setServicio(null);
        }

        $this->collExpedienteservicios = null;
        foreach ($expedienteservicios as $expedienteservicio) {
            $this->addExpedienteservicio($expedienteservicio);
        }

        $this->collExpedienteservicios = $expedienteservicios;
        $this->collExpedienteserviciosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Expedienteservicio objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Expedienteservicio objects.
     * @throws PropelException
     */
    public function countExpedienteservicios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedienteserviciosPartial && !$this->isNew();
        if (null === $this->collExpedienteservicios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedienteservicios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExpedienteservicios());
            }
            $query = ExpedienteservicioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByServicio($this)
                ->count($con);
        }

        return count($this->collExpedienteservicios);
    }

    /**
     * Method called to associate a Expedienteservicio object to this object
     * through the Expedienteservicio foreign key attribute.
     *
     * @param    Expedienteservicio $l Expedienteservicio
     * @return Servicio The current object (for fluent API support)
     */
    public function addExpedienteservicio(Expedienteservicio $l)
    {
        if ($this->collExpedienteservicios === null) {
            $this->initExpedienteservicios();
            $this->collExpedienteserviciosPartial = true;
        }

        if (!in_array($l, $this->collExpedienteservicios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpedienteservicio($l);

            if ($this->expedienteserviciosScheduledForDeletion and $this->expedienteserviciosScheduledForDeletion->contains($l)) {
                $this->expedienteserviciosScheduledForDeletion->remove($this->expedienteserviciosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Expedienteservicio $expedienteservicio The expedienteservicio object to add.
     */
    protected function doAddExpedienteservicio($expedienteservicio)
    {
        $this->collExpedienteservicios[]= $expedienteservicio;
        $expedienteservicio->setServicio($this);
    }

    /**
     * @param	Expedienteservicio $expedienteservicio The expedienteservicio object to remove.
     * @return Servicio The current object (for fluent API support)
     */
    public function removeExpedienteservicio($expedienteservicio)
    {
        if ($this->getExpedienteservicios()->contains($expedienteservicio)) {
            $this->collExpedienteservicios->remove($this->collExpedienteservicios->search($expedienteservicio));
            if (null === $this->expedienteserviciosScheduledForDeletion) {
                $this->expedienteserviciosScheduledForDeletion = clone $this->collExpedienteservicios;
                $this->expedienteserviciosScheduledForDeletion->clear();
            }
            $this->expedienteserviciosScheduledForDeletion[]= clone $expedienteservicio;
            $expedienteservicio->setServicio(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicio is new, it will return
     * an empty collection; or if this Servicio has previously
     * been saved, it will retrieve related Expedienteservicios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicio.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedienteservicio[] List of Expedienteservicio objects
     */
    public function getExpedienteserviciosJoinExpediente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedienteservicioQuery::create(null, $criteria);
        $query->joinWith('Expediente', $join_behavior);

        return $this->getExpedienteservicios($query, $con);
    }

    /**
     * Clears out the collProveedoritradeservicios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Servicio The current object (for fluent API support)
     * @see        addProveedoritradeservicios()
     */
    public function clearProveedoritradeservicios()
    {
        $this->collProveedoritradeservicios = null; // important to set this to null since that means it is uninitialized
        $this->collProveedoritradeserviciosPartial = null;

        return $this;
    }

    /**
     * reset is the collProveedoritradeservicios collection loaded partially
     *
     * @return void
     */
    public function resetPartialProveedoritradeservicios($v = true)
    {
        $this->collProveedoritradeserviciosPartial = $v;
    }

    /**
     * Initializes the collProveedoritradeservicios collection.
     *
     * By default this just sets the collProveedoritradeservicios collection to an empty array (like clearcollProveedoritradeservicios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProveedoritradeservicios($overrideExisting = true)
    {
        if (null !== $this->collProveedoritradeservicios && !$overrideExisting) {
            return;
        }
        $this->collProveedoritradeservicios = new PropelObjectCollection();
        $this->collProveedoritradeservicios->setModel('Proveedoritradeservicio');
    }

    /**
     * Gets an array of Proveedoritradeservicio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Servicio is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Proveedoritradeservicio[] List of Proveedoritradeservicio objects
     * @throws PropelException
     */
    public function getProveedoritradeservicios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProveedoritradeserviciosPartial && !$this->isNew();
        if (null === $this->collProveedoritradeservicios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProveedoritradeservicios) {
                // return empty collection
                $this->initProveedoritradeservicios();
            } else {
                $collProveedoritradeservicios = ProveedoritradeservicioQuery::create(null, $criteria)
                    ->filterByServicio($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProveedoritradeserviciosPartial && count($collProveedoritradeservicios)) {
                      $this->initProveedoritradeservicios(false);

                      foreach ($collProveedoritradeservicios as $obj) {
                        if (false == $this->collProveedoritradeservicios->contains($obj)) {
                          $this->collProveedoritradeservicios->append($obj);
                        }
                      }

                      $this->collProveedoritradeserviciosPartial = true;
                    }

                    $collProveedoritradeservicios->getInternalIterator()->rewind();

                    return $collProveedoritradeservicios;
                }

                if ($partial && $this->collProveedoritradeservicios) {
                    foreach ($this->collProveedoritradeservicios as $obj) {
                        if ($obj->isNew()) {
                            $collProveedoritradeservicios[] = $obj;
                        }
                    }
                }

                $this->collProveedoritradeservicios = $collProveedoritradeservicios;
                $this->collProveedoritradeserviciosPartial = false;
            }
        }

        return $this->collProveedoritradeservicios;
    }

    /**
     * Sets a collection of Proveedoritradeservicio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $proveedoritradeservicios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Servicio The current object (for fluent API support)
     */
    public function setProveedoritradeservicios(PropelCollection $proveedoritradeservicios, PropelPDO $con = null)
    {
        $proveedoritradeserviciosToDelete = $this->getProveedoritradeservicios(new Criteria(), $con)->diff($proveedoritradeservicios);


        $this->proveedoritradeserviciosScheduledForDeletion = $proveedoritradeserviciosToDelete;

        foreach ($proveedoritradeserviciosToDelete as $proveedoritradeservicioRemoved) {
            $proveedoritradeservicioRemoved->setServicio(null);
        }

        $this->collProveedoritradeservicios = null;
        foreach ($proveedoritradeservicios as $proveedoritradeservicio) {
            $this->addProveedoritradeservicio($proveedoritradeservicio);
        }

        $this->collProveedoritradeservicios = $proveedoritradeservicios;
        $this->collProveedoritradeserviciosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Proveedoritradeservicio objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Proveedoritradeservicio objects.
     * @throws PropelException
     */
    public function countProveedoritradeservicios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProveedoritradeserviciosPartial && !$this->isNew();
        if (null === $this->collProveedoritradeservicios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProveedoritradeservicios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProveedoritradeservicios());
            }
            $query = ProveedoritradeservicioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByServicio($this)
                ->count($con);
        }

        return count($this->collProveedoritradeservicios);
    }

    /**
     * Method called to associate a Proveedoritradeservicio object to this object
     * through the Proveedoritradeservicio foreign key attribute.
     *
     * @param    Proveedoritradeservicio $l Proveedoritradeservicio
     * @return Servicio The current object (for fluent API support)
     */
    public function addProveedoritradeservicio(Proveedoritradeservicio $l)
    {
        if ($this->collProveedoritradeservicios === null) {
            $this->initProveedoritradeservicios();
            $this->collProveedoritradeserviciosPartial = true;
        }

        if (!in_array($l, $this->collProveedoritradeservicios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProveedoritradeservicio($l);

            if ($this->proveedoritradeserviciosScheduledForDeletion and $this->proveedoritradeserviciosScheduledForDeletion->contains($l)) {
                $this->proveedoritradeserviciosScheduledForDeletion->remove($this->proveedoritradeserviciosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Proveedoritradeservicio $proveedoritradeservicio The proveedoritradeservicio object to add.
     */
    protected function doAddProveedoritradeservicio($proveedoritradeservicio)
    {
        $this->collProveedoritradeservicios[]= $proveedoritradeservicio;
        $proveedoritradeservicio->setServicio($this);
    }

    /**
     * @param	Proveedoritradeservicio $proveedoritradeservicio The proveedoritradeservicio object to remove.
     * @return Servicio The current object (for fluent API support)
     */
    public function removeProveedoritradeservicio($proveedoritradeservicio)
    {
        if ($this->getProveedoritradeservicios()->contains($proveedoritradeservicio)) {
            $this->collProveedoritradeservicios->remove($this->collProveedoritradeservicios->search($proveedoritradeservicio));
            if (null === $this->proveedoritradeserviciosScheduledForDeletion) {
                $this->proveedoritradeserviciosScheduledForDeletion = clone $this->collProveedoritradeservicios;
                $this->proveedoritradeserviciosScheduledForDeletion->clear();
            }
            $this->proveedoritradeserviciosScheduledForDeletion[]= $proveedoritradeservicio;
            $proveedoritradeservicio->setServicio(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicio is new, it will return
     * an empty collection; or if this Servicio has previously
     * been saved, it will retrieve related Proveedoritradeservicios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicio.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Proveedoritradeservicio[] List of Proveedoritradeservicio objects
     */
    public function getProveedoritradeserviciosJoinProveedoritrade($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProveedoritradeservicioQuery::create(null, $criteria);
        $query->joinWith('Proveedoritrade', $join_behavior);

        return $this->getProveedoritradeservicios($query, $con);
    }

    /**
     * Clears out the collServicioestados collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Servicio The current object (for fluent API support)
     * @see        addServicioestados()
     */
    public function clearServicioestados()
    {
        $this->collServicioestados = null; // important to set this to null since that means it is uninitialized
        $this->collServicioestadosPartial = null;

        return $this;
    }

    /**
     * reset is the collServicioestados collection loaded partially
     *
     * @return void
     */
    public function resetPartialServicioestados($v = true)
    {
        $this->collServicioestadosPartial = $v;
    }

    /**
     * Initializes the collServicioestados collection.
     *
     * By default this just sets the collServicioestados collection to an empty array (like clearcollServicioestados());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initServicioestados($overrideExisting = true)
    {
        if (null !== $this->collServicioestados && !$overrideExisting) {
            return;
        }
        $this->collServicioestados = new PropelObjectCollection();
        $this->collServicioestados->setModel('Servicioestado');
    }

    /**
     * Gets an array of Servicioestado objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Servicio is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Servicioestado[] List of Servicioestado objects
     * @throws PropelException
     */
    public function getServicioestados($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collServicioestadosPartial && !$this->isNew();
        if (null === $this->collServicioestados || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collServicioestados) {
                // return empty collection
                $this->initServicioestados();
            } else {
                $collServicioestados = ServicioestadoQuery::create(null, $criteria)
                    ->filterByServicio($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collServicioestadosPartial && count($collServicioestados)) {
                      $this->initServicioestados(false);

                      foreach ($collServicioestados as $obj) {
                        if (false == $this->collServicioestados->contains($obj)) {
                          $this->collServicioestados->append($obj);
                        }
                      }

                      $this->collServicioestadosPartial = true;
                    }

                    $collServicioestados->getInternalIterator()->rewind();

                    return $collServicioestados;
                }

                if ($partial && $this->collServicioestados) {
                    foreach ($this->collServicioestados as $obj) {
                        if ($obj->isNew()) {
                            $collServicioestados[] = $obj;
                        }
                    }
                }

                $this->collServicioestados = $collServicioestados;
                $this->collServicioestadosPartial = false;
            }
        }

        return $this->collServicioestados;
    }

    /**
     * Sets a collection of Servicioestado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $servicioestados A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Servicio The current object (for fluent API support)
     */
    public function setServicioestados(PropelCollection $servicioestados, PropelPDO $con = null)
    {
        $servicioestadosToDelete = $this->getServicioestados(new Criteria(), $con)->diff($servicioestados);


        $this->servicioestadosScheduledForDeletion = $servicioestadosToDelete;

        foreach ($servicioestadosToDelete as $servicioestadoRemoved) {
            $servicioestadoRemoved->setServicio(null);
        }

        $this->collServicioestados = null;
        foreach ($servicioestados as $servicioestado) {
            $this->addServicioestado($servicioestado);
        }

        $this->collServicioestados = $servicioestados;
        $this->collServicioestadosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Servicioestado objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Servicioestado objects.
     * @throws PropelException
     */
    public function countServicioestados(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collServicioestadosPartial && !$this->isNew();
        if (null === $this->collServicioestados || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collServicioestados) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getServicioestados());
            }
            $query = ServicioestadoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByServicio($this)
                ->count($con);
        }

        return count($this->collServicioestados);
    }

    /**
     * Method called to associate a Servicioestado object to this object
     * through the Servicioestado foreign key attribute.
     *
     * @param    Servicioestado $l Servicioestado
     * @return Servicio The current object (for fluent API support)
     */
    public function addServicioestado(Servicioestado $l)
    {
        if ($this->collServicioestados === null) {
            $this->initServicioestados();
            $this->collServicioestadosPartial = true;
        }

        if (!in_array($l, $this->collServicioestados->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddServicioestado($l);

            if ($this->servicioestadosScheduledForDeletion and $this->servicioestadosScheduledForDeletion->contains($l)) {
                $this->servicioestadosScheduledForDeletion->remove($this->servicioestadosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Servicioestado $servicioestado The servicioestado object to add.
     */
    protected function doAddServicioestado($servicioestado)
    {
        $this->collServicioestados[]= $servicioestado;
        $servicioestado->setServicio($this);
    }

    /**
     * @param	Servicioestado $servicioestado The servicioestado object to remove.
     * @return Servicio The current object (for fluent API support)
     */
    public function removeServicioestado($servicioestado)
    {
        if ($this->getServicioestados()->contains($servicioestado)) {
            $this->collServicioestados->remove($this->collServicioestados->search($servicioestado));
            if (null === $this->servicioestadosScheduledForDeletion) {
                $this->servicioestadosScheduledForDeletion = clone $this->collServicioestados;
                $this->servicioestadosScheduledForDeletion->clear();
            }
            $this->servicioestadosScheduledForDeletion[]= clone $servicioestado;
            $servicioestado->setServicio(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idservicio = null;
        $this->servicio_nombre = null;
        $this->servicio_descripcion = null;
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
            if ($this->collExpedienteservicios) {
                foreach ($this->collExpedienteservicios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProveedoritradeservicios) {
                foreach ($this->collProveedoritradeservicios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collServicioestados) {
                foreach ($this->collServicioestados as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collExpedienteservicios instanceof PropelCollection) {
            $this->collExpedienteservicios->clearIterator();
        }
        $this->collExpedienteservicios = null;
        if ($this->collProveedoritradeservicios instanceof PropelCollection) {
            $this->collProveedoritradeservicios->clearIterator();
        }
        $this->collProveedoritradeservicios = null;
        if ($this->collServicioestados instanceof PropelCollection) {
            $this->collServicioestados->clearIterator();
        }
        $this->collServicioestados = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ServicioPeer::DEFAULT_STRING_FORMAT);
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
