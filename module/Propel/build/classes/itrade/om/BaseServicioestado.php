<?php


/**
 * Base class that represents a row from the 'servicioestado' table.
 *
 *
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseServicioestado extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ServicioestadoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ServicioestadoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idservicioestado field.
     * @var        int
     */
    protected $idservicioestado;

    /**
     * The value for the idservicio field.
     * @var        int
     */
    protected $idservicio;

    /**
     * The value for the servicioestado_nombre field.
     * @var        string
     */
    protected $servicioestado_nombre;

    /**
     * The value for the servicioestado_comodin field.
     * @var        boolean
     */
    protected $servicioestado_comodin;

    /**
     * The value for the servicioestado_jerarquia field.
     * @var        int
     */
    protected $servicioestado_jerarquia;

    /**
     * @var        Servicio
     */
    protected $aServicio;

    /**
     * @var        PropelObjectCollection|Expedientehistorial[] Collection to store aggregation of Expedientehistorial objects.
     */
    protected $collExpedientehistorials;
    protected $collExpedientehistorialsPartial;

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
    protected $expedientehistorialsScheduledForDeletion = null;

    /**
     * Get the [idservicioestado] column value.
     *
     * @return int
     */
    public function getIdservicioestado()
    {

        return $this->idservicioestado;
    }

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
     * Get the [servicioestado_nombre] column value.
     *
     * @return string
     */
    public function getServicioestadoNombre()
    {

        return $this->servicioestado_nombre;
    }

    /**
     * Get the [servicioestado_comodin] column value.
     *
     * @return boolean
     */
    public function getServicioestadoComodin()
    {

        return $this->servicioestado_comodin;
    }

    /**
     * Get the [servicioestado_jerarquia] column value.
     *
     * @return int
     */
    public function getServicioestadoJerarquia()
    {

        return $this->servicioestado_jerarquia;
    }

    /**
     * Set the value of [idservicioestado] column.
     *
     * @param  int $v new value
     * @return Servicioestado The current object (for fluent API support)
     */
    public function setIdservicioestado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idservicioestado !== $v) {
            $this->idservicioestado = $v;
            $this->modifiedColumns[] = ServicioestadoPeer::IDSERVICIOESTADO;
        }


        return $this;
    } // setIdservicioestado()

    /**
     * Set the value of [idservicio] column.
     *
     * @param  int $v new value
     * @return Servicioestado The current object (for fluent API support)
     */
    public function setIdservicio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idservicio !== $v) {
            $this->idservicio = $v;
            $this->modifiedColumns[] = ServicioestadoPeer::IDSERVICIO;
        }

        if ($this->aServicio !== null && $this->aServicio->getIdservicio() !== $v) {
            $this->aServicio = null;
        }


        return $this;
    } // setIdservicio()

    /**
     * Set the value of [servicioestado_nombre] column.
     *
     * @param  string $v new value
     * @return Servicioestado The current object (for fluent API support)
     */
    public function setServicioestadoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->servicioestado_nombre !== $v) {
            $this->servicioestado_nombre = $v;
            $this->modifiedColumns[] = ServicioestadoPeer::SERVICIOESTADO_NOMBRE;
        }


        return $this;
    } // setServicioestadoNombre()

    /**
     * Sets the value of the [servicioestado_comodin] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Servicioestado The current object (for fluent API support)
     */
    public function setServicioestadoComodin($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->servicioestado_comodin !== $v) {
            $this->servicioestado_comodin = $v;
            $this->modifiedColumns[] = ServicioestadoPeer::SERVICIOESTADO_COMODIN;
        }


        return $this;
    } // setServicioestadoComodin()

    /**
     * Set the value of [servicioestado_jerarquia] column.
     *
     * @param  int $v new value
     * @return Servicioestado The current object (for fluent API support)
     */
    public function setServicioestadoJerarquia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->servicioestado_jerarquia !== $v) {
            $this->servicioestado_jerarquia = $v;
            $this->modifiedColumns[] = ServicioestadoPeer::SERVICIOESTADO_JERARQUIA;
        }


        return $this;
    } // setServicioestadoJerarquia()

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

            $this->idservicioestado = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idservicio = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->servicioestado_nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->servicioestado_comodin = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->servicioestado_jerarquia = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = ServicioestadoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Servicioestado object", $e);
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

        if ($this->aServicio !== null && $this->idservicio !== $this->aServicio->getIdservicio()) {
            $this->aServicio = null;
        }
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
            $con = Propel::getConnection(ServicioestadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ServicioestadoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aServicio = null;
            $this->collExpedientehistorials = null;

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
            $con = Propel::getConnection(ServicioestadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ServicioestadoQuery::create()
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
            $con = Propel::getConnection(ServicioestadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ServicioestadoPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aServicio !== null) {
                if ($this->aServicio->isModified() || $this->aServicio->isNew()) {
                    $affectedRows += $this->aServicio->save($con);
                }
                $this->setServicio($this->aServicio);
            }

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

            if ($this->expedientehistorialsScheduledForDeletion !== null) {
                if (!$this->expedientehistorialsScheduledForDeletion->isEmpty()) {
                    ExpedientehistorialQuery::create()
                        ->filterByPrimaryKeys($this->expedientehistorialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->expedientehistorialsScheduledForDeletion = null;
                }
            }

            if ($this->collExpedientehistorials !== null) {
                foreach ($this->collExpedientehistorials as $referrerFK) {
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

        $this->modifiedColumns[] = ServicioestadoPeer::IDSERVICIOESTADO;
        if (null !== $this->idservicioestado) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ServicioestadoPeer::IDSERVICIOESTADO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ServicioestadoPeer::IDSERVICIOESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`idservicioestado`';
        }
        if ($this->isColumnModified(ServicioestadoPeer::IDSERVICIO)) {
            $modifiedColumns[':p' . $index++]  = '`idservicio`';
        }
        if ($this->isColumnModified(ServicioestadoPeer::SERVICIOESTADO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`servicioestado_nombre`';
        }
        if ($this->isColumnModified(ServicioestadoPeer::SERVICIOESTADO_COMODIN)) {
            $modifiedColumns[':p' . $index++]  = '`servicioestado_comodin`';
        }
        if ($this->isColumnModified(ServicioestadoPeer::SERVICIOESTADO_JERARQUIA)) {
            $modifiedColumns[':p' . $index++]  = '`servicioestado_jerarquia`';
        }

        $sql = sprintf(
            'INSERT INTO `servicioestado` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idservicioestado`':
                        $stmt->bindValue($identifier, $this->idservicioestado, PDO::PARAM_INT);
                        break;
                    case '`idservicio`':
                        $stmt->bindValue($identifier, $this->idservicio, PDO::PARAM_INT);
                        break;
                    case '`servicioestado_nombre`':
                        $stmt->bindValue($identifier, $this->servicioestado_nombre, PDO::PARAM_STR);
                        break;
                    case '`servicioestado_comodin`':
                        $stmt->bindValue($identifier, (int) $this->servicioestado_comodin, PDO::PARAM_INT);
                        break;
                    case '`servicioestado_jerarquia`':
                        $stmt->bindValue($identifier, $this->servicioestado_jerarquia, PDO::PARAM_INT);
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
        $this->setIdservicioestado($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aServicio !== null) {
                if (!$this->aServicio->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aServicio->getValidationFailures());
                }
            }


            if (($retval = ServicioestadoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collExpedientehistorials !== null) {
                    foreach ($this->collExpedientehistorials as $referrerFK) {
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
        $pos = ServicioestadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdservicioestado();
                break;
            case 1:
                return $this->getIdservicio();
                break;
            case 2:
                return $this->getServicioestadoNombre();
                break;
            case 3:
                return $this->getServicioestadoComodin();
                break;
            case 4:
                return $this->getServicioestadoJerarquia();
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
        if (isset($alreadyDumpedObjects['Servicioestado'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Servicioestado'][$this->getPrimaryKey()] = true;
        $keys = ServicioestadoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdservicioestado(),
            $keys[1] => $this->getIdservicio(),
            $keys[2] => $this->getServicioestadoNombre(),
            $keys[3] => $this->getServicioestadoComodin(),
            $keys[4] => $this->getServicioestadoJerarquia(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aServicio) {
                $result['Servicio'] = $this->aServicio->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collExpedientehistorials) {
                $result['Expedientehistorials'] = $this->collExpedientehistorials->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ServicioestadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdservicioestado($value);
                break;
            case 1:
                $this->setIdservicio($value);
                break;
            case 2:
                $this->setServicioestadoNombre($value);
                break;
            case 3:
                $this->setServicioestadoComodin($value);
                break;
            case 4:
                $this->setServicioestadoJerarquia($value);
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
        $keys = ServicioestadoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdservicioestado($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdservicio($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setServicioestadoNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setServicioestadoComodin($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setServicioestadoJerarquia($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ServicioestadoPeer::DATABASE_NAME);

        if ($this->isColumnModified(ServicioestadoPeer::IDSERVICIOESTADO)) $criteria->add(ServicioestadoPeer::IDSERVICIOESTADO, $this->idservicioestado);
        if ($this->isColumnModified(ServicioestadoPeer::IDSERVICIO)) $criteria->add(ServicioestadoPeer::IDSERVICIO, $this->idservicio);
        if ($this->isColumnModified(ServicioestadoPeer::SERVICIOESTADO_NOMBRE)) $criteria->add(ServicioestadoPeer::SERVICIOESTADO_NOMBRE, $this->servicioestado_nombre);
        if ($this->isColumnModified(ServicioestadoPeer::SERVICIOESTADO_COMODIN)) $criteria->add(ServicioestadoPeer::SERVICIOESTADO_COMODIN, $this->servicioestado_comodin);
        if ($this->isColumnModified(ServicioestadoPeer::SERVICIOESTADO_JERARQUIA)) $criteria->add(ServicioestadoPeer::SERVICIOESTADO_JERARQUIA, $this->servicioestado_jerarquia);

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
        $criteria = new Criteria(ServicioestadoPeer::DATABASE_NAME);
        $criteria->add(ServicioestadoPeer::IDSERVICIOESTADO, $this->idservicioestado);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdservicioestado();
    }

    /**
     * Generic method to set the primary key (idservicioestado column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdservicioestado($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdservicioestado();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Servicioestado (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdservicio($this->getIdservicio());
        $copyObj->setServicioestadoNombre($this->getServicioestadoNombre());
        $copyObj->setServicioestadoComodin($this->getServicioestadoComodin());
        $copyObj->setServicioestadoJerarquia($this->getServicioestadoJerarquia());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getExpedientehistorials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpedientehistorial($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdservicioestado(NULL); // this is a auto-increment column, so set to default value
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
     * @return Servicioestado Clone of current object.
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
     * @return ServicioestadoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ServicioestadoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Servicio object.
     *
     * @param                  Servicio $v
     * @return Servicioestado The current object (for fluent API support)
     * @throws PropelException
     */
    public function setServicio(Servicio $v = null)
    {
        if ($v === null) {
            $this->setIdservicio(NULL);
        } else {
            $this->setIdservicio($v->getIdservicio());
        }

        $this->aServicio = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Servicio object, it will not be re-added.
        if ($v !== null) {
            $v->addServicioestado($this);
        }


        return $this;
    }


    /**
     * Get the associated Servicio object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Servicio The associated Servicio object.
     * @throws PropelException
     */
    public function getServicio(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aServicio === null && ($this->idservicio !== null) && $doQuery) {
            $this->aServicio = ServicioQuery::create()->findPk($this->idservicio, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aServicio->addServicioestados($this);
             */
        }

        return $this->aServicio;
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
        if ('Expedientehistorial' == $relationName) {
            $this->initExpedientehistorials();
        }
    }

    /**
     * Clears out the collExpedientehistorials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Servicioestado The current object (for fluent API support)
     * @see        addExpedientehistorials()
     */
    public function clearExpedientehistorials()
    {
        $this->collExpedientehistorials = null; // important to set this to null since that means it is uninitialized
        $this->collExpedientehistorialsPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedientehistorials collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedientehistorials($v = true)
    {
        $this->collExpedientehistorialsPartial = $v;
    }

    /**
     * Initializes the collExpedientehistorials collection.
     *
     * By default this just sets the collExpedientehistorials collection to an empty array (like clearcollExpedientehistorials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedientehistorials($overrideExisting = true)
    {
        if (null !== $this->collExpedientehistorials && !$overrideExisting) {
            return;
        }
        $this->collExpedientehistorials = new PropelObjectCollection();
        $this->collExpedientehistorials->setModel('Expedientehistorial');
    }

    /**
     * Gets an array of Expedientehistorial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Servicioestado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Expedientehistorial[] List of Expedientehistorial objects
     * @throws PropelException
     */
    public function getExpedientehistorials($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedientehistorialsPartial && !$this->isNew();
        if (null === $this->collExpedientehistorials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedientehistorials) {
                // return empty collection
                $this->initExpedientehistorials();
            } else {
                $collExpedientehistorials = ExpedientehistorialQuery::create(null, $criteria)
                    ->filterByServicioestado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedientehistorialsPartial && count($collExpedientehistorials)) {
                      $this->initExpedientehistorials(false);

                      foreach ($collExpedientehistorials as $obj) {
                        if (false == $this->collExpedientehistorials->contains($obj)) {
                          $this->collExpedientehistorials->append($obj);
                        }
                      }

                      $this->collExpedientehistorialsPartial = true;
                    }

                    $collExpedientehistorials->getInternalIterator()->rewind();

                    return $collExpedientehistorials;
                }

                if ($partial && $this->collExpedientehistorials) {
                    foreach ($this->collExpedientehistorials as $obj) {
                        if ($obj->isNew()) {
                            $collExpedientehistorials[] = $obj;
                        }
                    }
                }

                $this->collExpedientehistorials = $collExpedientehistorials;
                $this->collExpedientehistorialsPartial = false;
            }
        }

        return $this->collExpedientehistorials;
    }

    /**
     * Sets a collection of Expedientehistorial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedientehistorials A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Servicioestado The current object (for fluent API support)
     */
    public function setExpedientehistorials(PropelCollection $expedientehistorials, PropelPDO $con = null)
    {
        $expedientehistorialsToDelete = $this->getExpedientehistorials(new Criteria(), $con)->diff($expedientehistorials);


        $this->expedientehistorialsScheduledForDeletion = $expedientehistorialsToDelete;

        foreach ($expedientehistorialsToDelete as $expedientehistorialRemoved) {
            $expedientehistorialRemoved->setServicioestado(null);
        }

        $this->collExpedientehistorials = null;
        foreach ($expedientehistorials as $expedientehistorial) {
            $this->addExpedientehistorial($expedientehistorial);
        }

        $this->collExpedientehistorials = $expedientehistorials;
        $this->collExpedientehistorialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Expedientehistorial objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Expedientehistorial objects.
     * @throws PropelException
     */
    public function countExpedientehistorials(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedientehistorialsPartial && !$this->isNew();
        if (null === $this->collExpedientehistorials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedientehistorials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExpedientehistorials());
            }
            $query = ExpedientehistorialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByServicioestado($this)
                ->count($con);
        }

        return count($this->collExpedientehistorials);
    }

    /**
     * Method called to associate a Expedientehistorial object to this object
     * through the Expedientehistorial foreign key attribute.
     *
     * @param    Expedientehistorial $l Expedientehistorial
     * @return Servicioestado The current object (for fluent API support)
     */
    public function addExpedientehistorial(Expedientehistorial $l)
    {
        if ($this->collExpedientehistorials === null) {
            $this->initExpedientehistorials();
            $this->collExpedientehistorialsPartial = true;
        }

        if (!in_array($l, $this->collExpedientehistorials->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpedientehistorial($l);

            if ($this->expedientehistorialsScheduledForDeletion and $this->expedientehistorialsScheduledForDeletion->contains($l)) {
                $this->expedientehistorialsScheduledForDeletion->remove($this->expedientehistorialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Expedientehistorial $expedientehistorial The expedientehistorial object to add.
     */
    protected function doAddExpedientehistorial($expedientehistorial)
    {
        $this->collExpedientehistorials[]= $expedientehistorial;
        $expedientehistorial->setServicioestado($this);
    }

    /**
     * @param	Expedientehistorial $expedientehistorial The expedientehistorial object to remove.
     * @return Servicioestado The current object (for fluent API support)
     */
    public function removeExpedientehistorial($expedientehistorial)
    {
        if ($this->getExpedientehistorials()->contains($expedientehistorial)) {
            $this->collExpedientehistorials->remove($this->collExpedientehistorials->search($expedientehistorial));
            if (null === $this->expedientehistorialsScheduledForDeletion) {
                $this->expedientehistorialsScheduledForDeletion = clone $this->collExpedientehistorials;
                $this->expedientehistorialsScheduledForDeletion->clear();
            }
            $this->expedientehistorialsScheduledForDeletion[]= $expedientehistorial;
            $expedientehistorial->setServicioestado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Servicioestado is new, it will return
     * an empty collection; or if this Servicioestado has previously
     * been saved, it will retrieve related Expedientehistorials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Servicioestado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedientehistorial[] List of Expedientehistorial objects
     */
    public function getExpedientehistorialsJoinExpedienteservicio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedientehistorialQuery::create(null, $criteria);
        $query->joinWith('Expedienteservicio', $join_behavior);

        return $this->getExpedientehistorials($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idservicioestado = null;
        $this->idservicio = null;
        $this->servicioestado_nombre = null;
        $this->servicioestado_comodin = null;
        $this->servicioestado_jerarquia = null;
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
            if ($this->collExpedientehistorials) {
                foreach ($this->collExpedientehistorials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aServicio instanceof Persistent) {
              $this->aServicio->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collExpedientehistorials instanceof PropelCollection) {
            $this->collExpedientehistorials->clearIterator();
        }
        $this->collExpedientehistorials = null;
        $this->aServicio = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ServicioestadoPeer::DEFAULT_STRING_FORMAT);
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
