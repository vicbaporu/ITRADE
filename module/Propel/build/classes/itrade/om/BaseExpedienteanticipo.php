<?php


/**
 * Base class that represents a row from the 'expedienteanticipo' table.
 *
 *
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseExpedienteanticipo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ExpedienteanticipoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ExpedienteanticipoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idexpedienteanticipo field.
     * @var        int
     */
    protected $idexpedienteanticipo;

    /**
     * The value for the expedienteanticipo_fecha field.
     * @var        string
     */
    protected $expedienteanticipo_fecha;

    /**
     * The value for the idexpediente field.
     * @var        int
     */
    protected $idexpediente;

    /**
     * The value for the expedienteanticipo_cantidad field.
     * @var        string
     */
    protected $expedienteanticipo_cantidad;

    /**
     * The value for the expedienteanticipo_metodopago field.
     * @var        string
     */
    protected $expedienteanticipo_metodopago;

    /**
     * The value for the expedienteanticipo_comprobante field.
     * @var        string
     */
    protected $expedienteanticipo_comprobante;

    /**
     * The value for the expedienteanticipo_moneda field.
     * @var        string
     */
    protected $expedienteanticipo_moneda;

    /**
     * @var        Expediente
     */
    protected $aExpediente;

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
     * Get the [idexpedienteanticipo] column value.
     *
     * @return int
     */
    public function getIdexpedienteanticipo()
    {

        return $this->idexpedienteanticipo;
    }

    /**
     * Get the [optionally formatted] temporal [expedienteanticipo_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getExpedienteanticipoFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->expedienteanticipo_fecha === null) {
            return null;
        }

        if ($this->expedienteanticipo_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->expedienteanticipo_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->expedienteanticipo_fecha, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [idexpediente] column value.
     *
     * @return int
     */
    public function getIdexpediente()
    {

        return $this->idexpediente;
    }

    /**
     * Get the [expedienteanticipo_cantidad] column value.
     *
     * @return string
     */
    public function getExpedienteanticipoCantidad()
    {

        return $this->expedienteanticipo_cantidad;
    }

    /**
     * Get the [expedienteanticipo_metodopago] column value.
     *
     * @return string
     */
    public function getExpedienteanticipoMetodopago()
    {

        return $this->expedienteanticipo_metodopago;
    }

    /**
     * Get the [expedienteanticipo_comprobante] column value.
     *
     * @return string
     */
    public function getExpedienteanticipoComprobante()
    {

        return $this->expedienteanticipo_comprobante;
    }

    /**
     * Get the [expedienteanticipo_moneda] column value.
     *
     * @return string
     */
    public function getExpedienteanticipoMoneda()
    {

        return $this->expedienteanticipo_moneda;
    }

    /**
     * Set the value of [idexpedienteanticipo] column.
     *
     * @param  int $v new value
     * @return Expedienteanticipo The current object (for fluent API support)
     */
    public function setIdexpedienteanticipo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idexpedienteanticipo !== $v) {
            $this->idexpedienteanticipo = $v;
            $this->modifiedColumns[] = ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO;
        }


        return $this;
    } // setIdexpedienteanticipo()

    /**
     * Sets the value of [expedienteanticipo_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Expedienteanticipo The current object (for fluent API support)
     */
    public function setExpedienteanticipoFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->expedienteanticipo_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->expedienteanticipo_fecha !== null && $tmpDt = new DateTime($this->expedienteanticipo_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->expedienteanticipo_fecha = $newDateAsString;
                $this->modifiedColumns[] = ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_FECHA;
            }
        } // if either are not null


        return $this;
    } // setExpedienteanticipoFecha()

    /**
     * Set the value of [idexpediente] column.
     *
     * @param  int $v new value
     * @return Expedienteanticipo The current object (for fluent API support)
     */
    public function setIdexpediente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idexpediente !== $v) {
            $this->idexpediente = $v;
            $this->modifiedColumns[] = ExpedienteanticipoPeer::IDEXPEDIENTE;
        }

        if ($this->aExpediente !== null && $this->aExpediente->getIdexpediente() !== $v) {
            $this->aExpediente = null;
        }


        return $this;
    } // setIdexpediente()

    /**
     * Set the value of [expedienteanticipo_cantidad] column.
     *
     * @param  string $v new value
     * @return Expedienteanticipo The current object (for fluent API support)
     */
    public function setExpedienteanticipoCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->expedienteanticipo_cantidad !== $v) {
            $this->expedienteanticipo_cantidad = $v;
            $this->modifiedColumns[] = ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_CANTIDAD;
        }


        return $this;
    } // setExpedienteanticipoCantidad()

    /**
     * Set the value of [expedienteanticipo_metodopago] column.
     *
     * @param  string $v new value
     * @return Expedienteanticipo The current object (for fluent API support)
     */
    public function setExpedienteanticipoMetodopago($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expedienteanticipo_metodopago !== $v) {
            $this->expedienteanticipo_metodopago = $v;
            $this->modifiedColumns[] = ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_METODOPAGO;
        }


        return $this;
    } // setExpedienteanticipoMetodopago()

    /**
     * Set the value of [expedienteanticipo_comprobante] column.
     *
     * @param  string $v new value
     * @return Expedienteanticipo The current object (for fluent API support)
     */
    public function setExpedienteanticipoComprobante($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expedienteanticipo_comprobante !== $v) {
            $this->expedienteanticipo_comprobante = $v;
            $this->modifiedColumns[] = ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_COMPROBANTE;
        }


        return $this;
    } // setExpedienteanticipoComprobante()

    /**
     * Set the value of [expedienteanticipo_moneda] column.
     *
     * @param  string $v new value
     * @return Expedienteanticipo The current object (for fluent API support)
     */
    public function setExpedienteanticipoMoneda($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expedienteanticipo_moneda !== $v) {
            $this->expedienteanticipo_moneda = $v;
            $this->modifiedColumns[] = ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_MONEDA;
        }


        return $this;
    } // setExpedienteanticipoMoneda()

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

            $this->idexpedienteanticipo = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->expedienteanticipo_fecha = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->idexpediente = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->expedienteanticipo_cantidad = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->expedienteanticipo_metodopago = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->expedienteanticipo_comprobante = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->expedienteanticipo_moneda = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = ExpedienteanticipoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Expedienteanticipo object", $e);
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

        if ($this->aExpediente !== null && $this->idexpediente !== $this->aExpediente->getIdexpediente()) {
            $this->aExpediente = null;
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
            $con = Propel::getConnection(ExpedienteanticipoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ExpedienteanticipoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aExpediente = null;
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
            $con = Propel::getConnection(ExpedienteanticipoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ExpedienteanticipoQuery::create()
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
            $con = Propel::getConnection(ExpedienteanticipoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ExpedienteanticipoPeer::addInstanceToPool($this);
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

            if ($this->aExpediente !== null) {
                if ($this->aExpediente->isModified() || $this->aExpediente->isNew()) {
                    $affectedRows += $this->aExpediente->save($con);
                }
                $this->setExpediente($this->aExpediente);
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

        $this->modifiedColumns[] = ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO;
        if (null !== $this->idexpedienteanticipo) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO)) {
            $modifiedColumns[':p' . $index++]  = '`idexpedienteanticipo`';
        }
        if ($this->isColumnModified(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`expedienteanticipo_fecha`';
        }
        if ($this->isColumnModified(ExpedienteanticipoPeer::IDEXPEDIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idexpediente`';
        }
        if ($this->isColumnModified(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`expedienteanticipo_cantidad`';
        }
        if ($this->isColumnModified(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_METODOPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`expedienteanticipo_metodopago`';
        }
        if ($this->isColumnModified(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_COMPROBANTE)) {
            $modifiedColumns[':p' . $index++]  = '`expedienteanticipo_comprobante`';
        }
        if ($this->isColumnModified(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_MONEDA)) {
            $modifiedColumns[':p' . $index++]  = '`expedienteanticipo_moneda`';
        }

        $sql = sprintf(
            'INSERT INTO `expedienteanticipo` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idexpedienteanticipo`':
                        $stmt->bindValue($identifier, $this->idexpedienteanticipo, PDO::PARAM_INT);
                        break;
                    case '`expedienteanticipo_fecha`':
                        $stmt->bindValue($identifier, $this->expedienteanticipo_fecha, PDO::PARAM_STR);
                        break;
                    case '`idexpediente`':
                        $stmt->bindValue($identifier, $this->idexpediente, PDO::PARAM_INT);
                        break;
                    case '`expedienteanticipo_cantidad`':
                        $stmt->bindValue($identifier, $this->expedienteanticipo_cantidad, PDO::PARAM_STR);
                        break;
                    case '`expedienteanticipo_metodopago`':
                        $stmt->bindValue($identifier, $this->expedienteanticipo_metodopago, PDO::PARAM_STR);
                        break;
                    case '`expedienteanticipo_comprobante`':
                        $stmt->bindValue($identifier, $this->expedienteanticipo_comprobante, PDO::PARAM_STR);
                        break;
                    case '`expedienteanticipo_moneda`':
                        $stmt->bindValue($identifier, $this->expedienteanticipo_moneda, PDO::PARAM_STR);
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
        $this->setIdexpedienteanticipo($pk);

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

            if ($this->aExpediente !== null) {
                if (!$this->aExpediente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aExpediente->getValidationFailures());
                }
            }


            if (($retval = ExpedienteanticipoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = ExpedienteanticipoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdexpedienteanticipo();
                break;
            case 1:
                return $this->getExpedienteanticipoFecha();
                break;
            case 2:
                return $this->getIdexpediente();
                break;
            case 3:
                return $this->getExpedienteanticipoCantidad();
                break;
            case 4:
                return $this->getExpedienteanticipoMetodopago();
                break;
            case 5:
                return $this->getExpedienteanticipoComprobante();
                break;
            case 6:
                return $this->getExpedienteanticipoMoneda();
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
        if (isset($alreadyDumpedObjects['Expedienteanticipo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Expedienteanticipo'][$this->getPrimaryKey()] = true;
        $keys = ExpedienteanticipoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdexpedienteanticipo(),
            $keys[1] => $this->getExpedienteanticipoFecha(),
            $keys[2] => $this->getIdexpediente(),
            $keys[3] => $this->getExpedienteanticipoCantidad(),
            $keys[4] => $this->getExpedienteanticipoMetodopago(),
            $keys[5] => $this->getExpedienteanticipoComprobante(),
            $keys[6] => $this->getExpedienteanticipoMoneda(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aExpediente) {
                $result['Expediente'] = $this->aExpediente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = ExpedienteanticipoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdexpedienteanticipo($value);
                break;
            case 1:
                $this->setExpedienteanticipoFecha($value);
                break;
            case 2:
                $this->setIdexpediente($value);
                break;
            case 3:
                $this->setExpedienteanticipoCantidad($value);
                break;
            case 4:
                $this->setExpedienteanticipoMetodopago($value);
                break;
            case 5:
                $this->setExpedienteanticipoComprobante($value);
                break;
            case 6:
                $this->setExpedienteanticipoMoneda($value);
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
        $keys = ExpedienteanticipoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdexpedienteanticipo($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setExpedienteanticipoFecha($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdexpediente($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setExpedienteanticipoCantidad($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setExpedienteanticipoMetodopago($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setExpedienteanticipoComprobante($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setExpedienteanticipoMoneda($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ExpedienteanticipoPeer::DATABASE_NAME);

        if ($this->isColumnModified(ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO)) $criteria->add(ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO, $this->idexpedienteanticipo);
        if ($this->isColumnModified(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_FECHA)) $criteria->add(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_FECHA, $this->expedienteanticipo_fecha);
        if ($this->isColumnModified(ExpedienteanticipoPeer::IDEXPEDIENTE)) $criteria->add(ExpedienteanticipoPeer::IDEXPEDIENTE, $this->idexpediente);
        if ($this->isColumnModified(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_CANTIDAD)) $criteria->add(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_CANTIDAD, $this->expedienteanticipo_cantidad);
        if ($this->isColumnModified(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_METODOPAGO)) $criteria->add(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_METODOPAGO, $this->expedienteanticipo_metodopago);
        if ($this->isColumnModified(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_COMPROBANTE)) $criteria->add(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_COMPROBANTE, $this->expedienteanticipo_comprobante);
        if ($this->isColumnModified(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_MONEDA)) $criteria->add(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_MONEDA, $this->expedienteanticipo_moneda);

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
        $criteria = new Criteria(ExpedienteanticipoPeer::DATABASE_NAME);
        $criteria->add(ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO, $this->idexpedienteanticipo);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdexpedienteanticipo();
    }

    /**
     * Generic method to set the primary key (idexpedienteanticipo column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdexpedienteanticipo($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdexpedienteanticipo();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Expedienteanticipo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setExpedienteanticipoFecha($this->getExpedienteanticipoFecha());
        $copyObj->setIdexpediente($this->getIdexpediente());
        $copyObj->setExpedienteanticipoCantidad($this->getExpedienteanticipoCantidad());
        $copyObj->setExpedienteanticipoMetodopago($this->getExpedienteanticipoMetodopago());
        $copyObj->setExpedienteanticipoComprobante($this->getExpedienteanticipoComprobante());
        $copyObj->setExpedienteanticipoMoneda($this->getExpedienteanticipoMoneda());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdexpedienteanticipo(NULL); // this is a auto-increment column, so set to default value
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
     * @return Expedienteanticipo Clone of current object.
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
     * @return ExpedienteanticipoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ExpedienteanticipoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Expediente object.
     *
     * @param                  Expediente $v
     * @return Expedienteanticipo The current object (for fluent API support)
     * @throws PropelException
     */
    public function setExpediente(Expediente $v = null)
    {
        if ($v === null) {
            $this->setIdexpediente(NULL);
        } else {
            $this->setIdexpediente($v->getIdexpediente());
        }

        $this->aExpediente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Expediente object, it will not be re-added.
        if ($v !== null) {
            $v->addExpedienteanticipo($this);
        }


        return $this;
    }


    /**
     * Get the associated Expediente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Expediente The associated Expediente object.
     * @throws PropelException
     */
    public function getExpediente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aExpediente === null && ($this->idexpediente !== null) && $doQuery) {
            $this->aExpediente = ExpedienteQuery::create()->findPk($this->idexpediente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aExpediente->addExpedienteanticipos($this);
             */
        }

        return $this->aExpediente;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idexpedienteanticipo = null;
        $this->expedienteanticipo_fecha = null;
        $this->idexpediente = null;
        $this->expedienteanticipo_cantidad = null;
        $this->expedienteanticipo_metodopago = null;
        $this->expedienteanticipo_comprobante = null;
        $this->expedienteanticipo_moneda = null;
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
            if ($this->aExpediente instanceof Persistent) {
              $this->aExpediente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aExpediente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ExpedienteanticipoPeer::DEFAULT_STRING_FORMAT);
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
