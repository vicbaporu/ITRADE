<?php


/**
 * Base class that represents a row from the 'proveedoritrade' table.
 *
 *
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseProveedoritrade extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProveedoritradePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProveedoritradePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idproveedoritrade field.
     * @var        int
     */
    protected $idproveedoritrade;

    /**
     * The value for the proveedoritrade_nombre field.
     * @var        string
     */
    protected $proveedoritrade_nombre;

    /**
     * The value for the proveedoritrade_calle field.
     * @var        string
     */
    protected $proveedoritrade_calle;

    /**
     * The value for the proveedoritrade_numero field.
     * @var        string
     */
    protected $proveedoritrade_numero;

    /**
     * The value for the proveedoritrade_interior field.
     * @var        string
     */
    protected $proveedoritrade_interior;

    /**
     * The value for the proveedoritrade_colonia field.
     * @var        string
     */
    protected $proveedoritrade_colonia;

    /**
     * The value for the proveedoritrade_ciudad field.
     * @var        string
     */
    protected $proveedoritrade_ciudad;

    /**
     * The value for the proveedoritrade_estado field.
     * @var        string
     */
    protected $proveedoritrade_estado;

    /**
     * The value for the proveedoritrade_pais field.
     * @var        string
     */
    protected $proveedoritrade_pais;

    /**
     * The value for the proveedoritrade_telefono field.
     * @var        string
     */
    protected $proveedoritrade_telefono;

    /**
     * The value for the proveedoritrade_email field.
     * @var        string
     */
    protected $proveedoritrade_email;

    /**
     * The value for the proveedoritrade_rfc field.
     * @var        string
     */
    protected $proveedoritrade_rfc;

    /**
     * The value for the proveedoritrade_comprobantedomicilio field.
     * @var        string
     */
    protected $proveedoritrade_comprobantedomicilio;

    /**
     * The value for the proveedoritrade_clabe field.
     * @var        string
     */
    protected $proveedoritrade_clabe;

    /**
     * The value for the proveedoritrade_comprobantedatosbancarios field.
     * @var        string
     */
    protected $proveedoritrade_comprobantedatosbancarios;

    /**
     * @var        PropelObjectCollection|Expedientegasto[] Collection to store aggregation of Expedientegasto objects.
     */
    protected $collExpedientegastos;
    protected $collExpedientegastosPartial;

    /**
     * @var        PropelObjectCollection|Proveedoritradeservicio[] Collection to store aggregation of Proveedoritradeservicio objects.
     */
    protected $collProveedoritradeservicios;
    protected $collProveedoritradeserviciosPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $proveedoritradeserviciosScheduledForDeletion = null;

    /**
     * Get the [idproveedoritrade] column value.
     *
     * @return int
     */
    public function getIdproveedoritrade()
    {

        return $this->idproveedoritrade;
    }

    /**
     * Get the [proveedoritrade_nombre] column value.
     *
     * @return string
     */
    public function getProveedoritradeNombre()
    {

        return $this->proveedoritrade_nombre;
    }

    /**
     * Get the [proveedoritrade_calle] column value.
     *
     * @return string
     */
    public function getProveedoritradeCalle()
    {

        return $this->proveedoritrade_calle;
    }

    /**
     * Get the [proveedoritrade_numero] column value.
     *
     * @return string
     */
    public function getProveedoritradeNumero()
    {

        return $this->proveedoritrade_numero;
    }

    /**
     * Get the [proveedoritrade_interior] column value.
     *
     * @return string
     */
    public function getProveedoritradeInterior()
    {

        return $this->proveedoritrade_interior;
    }

    /**
     * Get the [proveedoritrade_colonia] column value.
     *
     * @return string
     */
    public function getProveedoritradeColonia()
    {

        return $this->proveedoritrade_colonia;
    }

    /**
     * Get the [proveedoritrade_ciudad] column value.
     *
     * @return string
     */
    public function getProveedoritradeCiudad()
    {

        return $this->proveedoritrade_ciudad;
    }

    /**
     * Get the [proveedoritrade_estado] column value.
     *
     * @return string
     */
    public function getProveedoritradeEstado()
    {

        return $this->proveedoritrade_estado;
    }

    /**
     * Get the [proveedoritrade_pais] column value.
     *
     * @return string
     */
    public function getProveedoritradePais()
    {

        return $this->proveedoritrade_pais;
    }

    /**
     * Get the [proveedoritrade_telefono] column value.
     *
     * @return string
     */
    public function getProveedoritradeTelefono()
    {

        return $this->proveedoritrade_telefono;
    }

    /**
     * Get the [proveedoritrade_email] column value.
     *
     * @return string
     */
    public function getProveedoritradeEmail()
    {

        return $this->proveedoritrade_email;
    }

    /**
     * Get the [proveedoritrade_rfc] column value.
     *
     * @return string
     */
    public function getProveedoritradeRfc()
    {

        return $this->proveedoritrade_rfc;
    }

    /**
     * Get the [proveedoritrade_comprobantedomicilio] column value.
     *
     * @return string
     */
    public function getProveedoritradeComprobantedomicilio()
    {

        return $this->proveedoritrade_comprobantedomicilio;
    }

    /**
     * Get the [proveedoritrade_clabe] column value.
     *
     * @return string
     */
    public function getProveedoritradeClabe()
    {

        return $this->proveedoritrade_clabe;
    }

    /**
     * Get the [proveedoritrade_comprobantedatosbancarios] column value.
     *
     * @return string
     */
    public function getProveedoritradeComprobantedatosbancarios()
    {

        return $this->proveedoritrade_comprobantedatosbancarios;
    }

    /**
     * Set the value of [idproveedoritrade] column.
     *
     * @param  int $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setIdproveedoritrade($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedoritrade !== $v) {
            $this->idproveedoritrade = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::IDPROVEEDORITRADE;
        }


        return $this;
    } // setIdproveedoritrade()

    /**
     * Set the value of [proveedoritrade_nombre] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_nombre !== $v) {
            $this->proveedoritrade_nombre = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_NOMBRE;
        }


        return $this;
    } // setProveedoritradeNombre()

    /**
     * Set the value of [proveedoritrade_calle] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_calle !== $v) {
            $this->proveedoritrade_calle = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_CALLE;
        }


        return $this;
    } // setProveedoritradeCalle()

    /**
     * Set the value of [proveedoritrade_numero] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_numero !== $v) {
            $this->proveedoritrade_numero = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_NUMERO;
        }


        return $this;
    } // setProveedoritradeNumero()

    /**
     * Set the value of [proveedoritrade_interior] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeInterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_interior !== $v) {
            $this->proveedoritrade_interior = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_INTERIOR;
        }


        return $this;
    } // setProveedoritradeInterior()

    /**
     * Set the value of [proveedoritrade_colonia] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_colonia !== $v) {
            $this->proveedoritrade_colonia = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_COLONIA;
        }


        return $this;
    } // setProveedoritradeColonia()

    /**
     * Set the value of [proveedoritrade_ciudad] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_ciudad !== $v) {
            $this->proveedoritrade_ciudad = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_CIUDAD;
        }


        return $this;
    } // setProveedoritradeCiudad()

    /**
     * Set the value of [proveedoritrade_estado] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_estado !== $v) {
            $this->proveedoritrade_estado = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_ESTADO;
        }


        return $this;
    } // setProveedoritradeEstado()

    /**
     * Set the value of [proveedoritrade_pais] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradePais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_pais !== $v) {
            $this->proveedoritrade_pais = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_PAIS;
        }


        return $this;
    } // setProveedoritradePais()

    /**
     * Set the value of [proveedoritrade_telefono] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_telefono !== $v) {
            $this->proveedoritrade_telefono = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_TELEFONO;
        }


        return $this;
    } // setProveedoritradeTelefono()

    /**
     * Set the value of [proveedoritrade_email] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_email !== $v) {
            $this->proveedoritrade_email = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_EMAIL;
        }


        return $this;
    } // setProveedoritradeEmail()

    /**
     * Set the value of [proveedoritrade_rfc] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_rfc !== $v) {
            $this->proveedoritrade_rfc = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_RFC;
        }


        return $this;
    } // setProveedoritradeRfc()

    /**
     * Set the value of [proveedoritrade_comprobantedomicilio] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeComprobantedomicilio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_comprobantedomicilio !== $v) {
            $this->proveedoritrade_comprobantedomicilio = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_COMPROBANTEDOMICILIO;
        }


        return $this;
    } // setProveedoritradeComprobantedomicilio()

    /**
     * Set the value of [proveedoritrade_clabe] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeClabe($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_clabe !== $v) {
            $this->proveedoritrade_clabe = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_CLABE;
        }


        return $this;
    } // setProveedoritradeClabe()

    /**
     * Set the value of [proveedoritrade_comprobantedatosbancarios] column.
     *
     * @param  string $v new value
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeComprobantedatosbancarios($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedoritrade_comprobantedatosbancarios !== $v) {
            $this->proveedoritrade_comprobantedatosbancarios = $v;
            $this->modifiedColumns[] = ProveedoritradePeer::PROVEEDORITRADE_COMPROBANTEDATOSBANCARIOS;
        }


        return $this;
    } // setProveedoritradeComprobantedatosbancarios()

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

            $this->idproveedoritrade = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->proveedoritrade_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->proveedoritrade_calle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->proveedoritrade_numero = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->proveedoritrade_interior = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->proveedoritrade_colonia = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->proveedoritrade_ciudad = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->proveedoritrade_estado = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->proveedoritrade_pais = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->proveedoritrade_telefono = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->proveedoritrade_email = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->proveedoritrade_rfc = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->proveedoritrade_comprobantedomicilio = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->proveedoritrade_clabe = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->proveedoritrade_comprobantedatosbancarios = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = ProveedoritradePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Proveedoritrade object", $e);
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
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProveedoritradePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collExpedientegastos = null;

            $this->collProveedoritradeservicios = null;

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
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProveedoritradeQuery::create()
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
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProveedoritradePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ProveedoritradePeer::IDPROVEEDORITRADE;
        if (null !== $this->idproveedoritrade) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProveedoritradePeer::IDPROVEEDORITRADE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProveedoritradePeer::IDPROVEEDORITRADE)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedoritrade`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_nombre`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_calle`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_numero`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_INTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_interior`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_colonia`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_ciudad`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_estado`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_pais`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_telefono`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_email`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_rfc`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_COMPROBANTEDOMICILIO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_comprobantedomicilio`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_CLABE)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_clabe`';
        }
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_COMPROBANTEDATOSBANCARIOS)) {
            $modifiedColumns[':p' . $index++]  = '`proveedoritrade_comprobantedatosbancarios`';
        }

        $sql = sprintf(
            'INSERT INTO `proveedoritrade` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idproveedoritrade`':
                        $stmt->bindValue($identifier, $this->idproveedoritrade, PDO::PARAM_INT);
                        break;
                    case '`proveedoritrade_nombre`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_nombre, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_calle`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_calle, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_numero`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_numero, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_interior`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_interior, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_colonia`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_colonia, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_ciudad`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_ciudad, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_estado`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_estado, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_pais`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_pais, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_telefono`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_telefono, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_email`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_email, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_rfc`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_rfc, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_comprobantedomicilio`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_comprobantedomicilio, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_clabe`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_clabe, PDO::PARAM_STR);
                        break;
                    case '`proveedoritrade_comprobantedatosbancarios`':
                        $stmt->bindValue($identifier, $this->proveedoritrade_comprobantedatosbancarios, PDO::PARAM_STR);
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
        $this->setIdproveedoritrade($pk);

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


            if (($retval = ProveedoritradePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collExpedientegastos !== null) {
                    foreach ($this->collExpedientegastos as $referrerFK) {
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
        $pos = ProveedoritradePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdproveedoritrade();
                break;
            case 1:
                return $this->getProveedoritradeNombre();
                break;
            case 2:
                return $this->getProveedoritradeCalle();
                break;
            case 3:
                return $this->getProveedoritradeNumero();
                break;
            case 4:
                return $this->getProveedoritradeInterior();
                break;
            case 5:
                return $this->getProveedoritradeColonia();
                break;
            case 6:
                return $this->getProveedoritradeCiudad();
                break;
            case 7:
                return $this->getProveedoritradeEstado();
                break;
            case 8:
                return $this->getProveedoritradePais();
                break;
            case 9:
                return $this->getProveedoritradeTelefono();
                break;
            case 10:
                return $this->getProveedoritradeEmail();
                break;
            case 11:
                return $this->getProveedoritradeRfc();
                break;
            case 12:
                return $this->getProveedoritradeComprobantedomicilio();
                break;
            case 13:
                return $this->getProveedoritradeClabe();
                break;
            case 14:
                return $this->getProveedoritradeComprobantedatosbancarios();
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
        if (isset($alreadyDumpedObjects['Proveedoritrade'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Proveedoritrade'][$this->getPrimaryKey()] = true;
        $keys = ProveedoritradePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdproveedoritrade(),
            $keys[1] => $this->getProveedoritradeNombre(),
            $keys[2] => $this->getProveedoritradeCalle(),
            $keys[3] => $this->getProveedoritradeNumero(),
            $keys[4] => $this->getProveedoritradeInterior(),
            $keys[5] => $this->getProveedoritradeColonia(),
            $keys[6] => $this->getProveedoritradeCiudad(),
            $keys[7] => $this->getProveedoritradeEstado(),
            $keys[8] => $this->getProveedoritradePais(),
            $keys[9] => $this->getProveedoritradeTelefono(),
            $keys[10] => $this->getProveedoritradeEmail(),
            $keys[11] => $this->getProveedoritradeRfc(),
            $keys[12] => $this->getProveedoritradeComprobantedomicilio(),
            $keys[13] => $this->getProveedoritradeClabe(),
            $keys[14] => $this->getProveedoritradeComprobantedatosbancarios(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collExpedientegastos) {
                $result['Expedientegastos'] = $this->collExpedientegastos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProveedoritradeservicios) {
                $result['Proveedoritradeservicios'] = $this->collProveedoritradeservicios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProveedoritradePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdproveedoritrade($value);
                break;
            case 1:
                $this->setProveedoritradeNombre($value);
                break;
            case 2:
                $this->setProveedoritradeCalle($value);
                break;
            case 3:
                $this->setProveedoritradeNumero($value);
                break;
            case 4:
                $this->setProveedoritradeInterior($value);
                break;
            case 5:
                $this->setProveedoritradeColonia($value);
                break;
            case 6:
                $this->setProveedoritradeCiudad($value);
                break;
            case 7:
                $this->setProveedoritradeEstado($value);
                break;
            case 8:
                $this->setProveedoritradePais($value);
                break;
            case 9:
                $this->setProveedoritradeTelefono($value);
                break;
            case 10:
                $this->setProveedoritradeEmail($value);
                break;
            case 11:
                $this->setProveedoritradeRfc($value);
                break;
            case 12:
                $this->setProveedoritradeComprobantedomicilio($value);
                break;
            case 13:
                $this->setProveedoritradeClabe($value);
                break;
            case 14:
                $this->setProveedoritradeComprobantedatosbancarios($value);
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
        $keys = ProveedoritradePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdproveedoritrade($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setProveedoritradeNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setProveedoritradeCalle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProveedoritradeNumero($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProveedoritradeInterior($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setProveedoritradeColonia($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setProveedoritradeCiudad($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProveedoritradeEstado($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProveedoritradePais($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProveedoritradeTelefono($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setProveedoritradeEmail($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setProveedoritradeRfc($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setProveedoritradeComprobantedomicilio($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setProveedoritradeClabe($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setProveedoritradeComprobantedatosbancarios($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProveedoritradePeer::DATABASE_NAME);

        if ($this->isColumnModified(ProveedoritradePeer::IDPROVEEDORITRADE)) $criteria->add(ProveedoritradePeer::IDPROVEEDORITRADE, $this->idproveedoritrade);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_NOMBRE)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_NOMBRE, $this->proveedoritrade_nombre);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_CALLE)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_CALLE, $this->proveedoritrade_calle);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_NUMERO)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_NUMERO, $this->proveedoritrade_numero);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_INTERIOR)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_INTERIOR, $this->proveedoritrade_interior);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_COLONIA)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_COLONIA, $this->proveedoritrade_colonia);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_CIUDAD)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_CIUDAD, $this->proveedoritrade_ciudad);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_ESTADO)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_ESTADO, $this->proveedoritrade_estado);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_PAIS)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_PAIS, $this->proveedoritrade_pais);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_TELEFONO)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_TELEFONO, $this->proveedoritrade_telefono);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_EMAIL)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_EMAIL, $this->proveedoritrade_email);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_RFC)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_RFC, $this->proveedoritrade_rfc);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_COMPROBANTEDOMICILIO)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_COMPROBANTEDOMICILIO, $this->proveedoritrade_comprobantedomicilio);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_CLABE)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_CLABE, $this->proveedoritrade_clabe);
        if ($this->isColumnModified(ProveedoritradePeer::PROVEEDORITRADE_COMPROBANTEDATOSBANCARIOS)) $criteria->add(ProveedoritradePeer::PROVEEDORITRADE_COMPROBANTEDATOSBANCARIOS, $this->proveedoritrade_comprobantedatosbancarios);

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
        $criteria = new Criteria(ProveedoritradePeer::DATABASE_NAME);
        $criteria->add(ProveedoritradePeer::IDPROVEEDORITRADE, $this->idproveedoritrade);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdproveedoritrade();
    }

    /**
     * Generic method to set the primary key (idproveedoritrade column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdproveedoritrade($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdproveedoritrade();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Proveedoritrade (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProveedoritradeNombre($this->getProveedoritradeNombre());
        $copyObj->setProveedoritradeCalle($this->getProveedoritradeCalle());
        $copyObj->setProveedoritradeNumero($this->getProveedoritradeNumero());
        $copyObj->setProveedoritradeInterior($this->getProveedoritradeInterior());
        $copyObj->setProveedoritradeColonia($this->getProveedoritradeColonia());
        $copyObj->setProveedoritradeCiudad($this->getProveedoritradeCiudad());
        $copyObj->setProveedoritradeEstado($this->getProveedoritradeEstado());
        $copyObj->setProveedoritradePais($this->getProveedoritradePais());
        $copyObj->setProveedoritradeTelefono($this->getProveedoritradeTelefono());
        $copyObj->setProveedoritradeEmail($this->getProveedoritradeEmail());
        $copyObj->setProveedoritradeRfc($this->getProveedoritradeRfc());
        $copyObj->setProveedoritradeComprobantedomicilio($this->getProveedoritradeComprobantedomicilio());
        $copyObj->setProveedoritradeClabe($this->getProveedoritradeClabe());
        $copyObj->setProveedoritradeComprobantedatosbancarios($this->getProveedoritradeComprobantedatosbancarios());

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

            foreach ($this->getProveedoritradeservicios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProveedoritradeservicio($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdproveedoritrade(NULL); // this is a auto-increment column, so set to default value
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
     * @return Proveedoritrade Clone of current object.
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
     * @return ProveedoritradePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProveedoritradePeer();
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
        if ('Proveedoritradeservicio' == $relationName) {
            $this->initProveedoritradeservicios();
        }
    }

    /**
     * Clears out the collExpedientegastos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Proveedoritrade The current object (for fluent API support)
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
     * If this Proveedoritrade is new, it will return
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
                    ->filterByProveedoritrade($this)
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
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setExpedientegastos(PropelCollection $expedientegastos, PropelPDO $con = null)
    {
        $expedientegastosToDelete = $this->getExpedientegastos(new Criteria(), $con)->diff($expedientegastos);


        $this->expedientegastosScheduledForDeletion = $expedientegastosToDelete;

        foreach ($expedientegastosToDelete as $expedientegastoRemoved) {
            $expedientegastoRemoved->setProveedoritrade(null);
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
                ->filterByProveedoritrade($this)
                ->count($con);
        }

        return count($this->collExpedientegastos);
    }

    /**
     * Method called to associate a Expedientegasto object to this object
     * through the Expedientegasto foreign key attribute.
     *
     * @param    Expedientegasto $l Expedientegasto
     * @return Proveedoritrade The current object (for fluent API support)
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
        $expedientegasto->setProveedoritrade($this);
    }

    /**
     * @param	Expedientegasto $expedientegasto The expedientegasto object to remove.
     * @return Proveedoritrade The current object (for fluent API support)
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
            $expedientegasto->setProveedoritrade(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedoritrade is new, it will return
     * an empty collection; or if this Proveedoritrade has previously
     * been saved, it will retrieve related Expedientegastos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedoritrade.
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
     * Otherwise if this Proveedoritrade is new, it will return
     * an empty collection; or if this Proveedoritrade has previously
     * been saved, it will retrieve related Expedientegastos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedoritrade.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedientegasto[] List of Expedientegasto objects
     */
    public function getExpedientegastosJoinGastofacturacion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedientegastoQuery::create(null, $criteria);
        $query->joinWith('Gastofacturacion', $join_behavior);

        return $this->getExpedientegastos($query, $con);
    }

    /**
     * Clears out the collProveedoritradeservicios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Proveedoritrade The current object (for fluent API support)
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
     * If this Proveedoritrade is new, it will return
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
                    ->filterByProveedoritrade($this)
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
     * @return Proveedoritrade The current object (for fluent API support)
     */
    public function setProveedoritradeservicios(PropelCollection $proveedoritradeservicios, PropelPDO $con = null)
    {
        $proveedoritradeserviciosToDelete = $this->getProveedoritradeservicios(new Criteria(), $con)->diff($proveedoritradeservicios);


        $this->proveedoritradeserviciosScheduledForDeletion = $proveedoritradeserviciosToDelete;

        foreach ($proveedoritradeserviciosToDelete as $proveedoritradeservicioRemoved) {
            $proveedoritradeservicioRemoved->setProveedoritrade(null);
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
                ->filterByProveedoritrade($this)
                ->count($con);
        }

        return count($this->collProveedoritradeservicios);
    }

    /**
     * Method called to associate a Proveedoritradeservicio object to this object
     * through the Proveedoritradeservicio foreign key attribute.
     *
     * @param    Proveedoritradeservicio $l Proveedoritradeservicio
     * @return Proveedoritrade The current object (for fluent API support)
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
        $proveedoritradeservicio->setProveedoritrade($this);
    }

    /**
     * @param	Proveedoritradeservicio $proveedoritradeservicio The proveedoritradeservicio object to remove.
     * @return Proveedoritrade The current object (for fluent API support)
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
            $proveedoritradeservicio->setProveedoritrade(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedoritrade is new, it will return
     * an empty collection; or if this Proveedoritrade has previously
     * been saved, it will retrieve related Proveedoritradeservicios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedoritrade.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Proveedoritradeservicio[] List of Proveedoritradeservicio objects
     */
    public function getProveedoritradeserviciosJoinServicio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProveedoritradeservicioQuery::create(null, $criteria);
        $query->joinWith('Servicio', $join_behavior);

        return $this->getProveedoritradeservicios($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproveedoritrade = null;
        $this->proveedoritrade_nombre = null;
        $this->proveedoritrade_calle = null;
        $this->proveedoritrade_numero = null;
        $this->proveedoritrade_interior = null;
        $this->proveedoritrade_colonia = null;
        $this->proveedoritrade_ciudad = null;
        $this->proveedoritrade_estado = null;
        $this->proveedoritrade_pais = null;
        $this->proveedoritrade_telefono = null;
        $this->proveedoritrade_email = null;
        $this->proveedoritrade_rfc = null;
        $this->proveedoritrade_comprobantedomicilio = null;
        $this->proveedoritrade_clabe = null;
        $this->proveedoritrade_comprobantedatosbancarios = null;
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
            if ($this->collProveedoritradeservicios) {
                foreach ($this->collProveedoritradeservicios as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collExpedientegastos instanceof PropelCollection) {
            $this->collExpedientegastos->clearIterator();
        }
        $this->collExpedientegastos = null;
        if ($this->collProveedoritradeservicios instanceof PropelCollection) {
            $this->collProveedoritradeservicios->clearIterator();
        }
        $this->collProveedoritradeservicios = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProveedoritradePeer::DEFAULT_STRING_FORMAT);
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
