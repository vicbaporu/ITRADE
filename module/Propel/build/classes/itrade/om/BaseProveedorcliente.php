<?php


/**
 * Base class that represents a row from the 'proveedorcliente' table.
 *
 *
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseProveedorcliente extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProveedorclientePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProveedorclientePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idproveedorcliente field.
     * @var        int
     */
    protected $idproveedorcliente;

    /**
     * The value for the idcliente field.
     * @var        int
     */
    protected $idcliente;

    /**
     * The value for the proveedorcliente_nombre field.
     * @var        string
     */
    protected $proveedorcliente_nombre;

    /**
     * The value for the proveedorcliente_taxid field.
     * @var        string
     */
    protected $proveedorcliente_taxid;

    /**
     * The value for the proveedorcliente_nombrecontacto field.
     * @var        string
     */
    protected $proveedorcliente_nombrecontacto;

    /**
     * The value for the proveedorcliente_telefonocontacto field.
     * @var        string
     */
    protected $proveedorcliente_telefonocontacto;

    /**
     * The value for the proveedorcliente_emailcontacto field.
     * @var        string
     */
    protected $proveedorcliente_emailcontacto;

    /**
     * The value for the proveedorcliente_calle field.
     * @var        string
     */
    protected $proveedorcliente_calle;

    /**
     * The value for the proveedorcliente_numero field.
     * @var        string
     */
    protected $proveedorcliente_numero;

    /**
     * The value for the proveedorcliente_interior field.
     * @var        string
     */
    protected $proveedorcliente_interior;

    /**
     * The value for the proveedorcliente_colonia field.
     * @var        string
     */
    protected $proveedorcliente_colonia;

    /**
     * The value for the proveedorcliente_ciudad field.
     * @var        string
     */
    protected $proveedorcliente_ciudad;

    /**
     * The value for the proveedorcliente_estado field.
     * @var        string
     */
    protected $proveedorcliente_estado;

    /**
     * The value for the proveedorcliente_pais field.
     * @var        string
     */
    protected $proveedorcliente_pais;

    /**
     * The value for the proveedorcliente_tipo field.
     * @var        string
     */
    protected $proveedorcliente_tipo;

    /**
     * @var        Cliente
     */
    protected $aCliente;

    /**
     * @var        PropelObjectCollection|Expediente[] Collection to store aggregation of Expediente objects.
     */
    protected $collExpedientes;
    protected $collExpedientesPartial;

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
    protected $expedientesScheduledForDeletion = null;

    /**
     * Get the [idproveedorcliente] column value.
     *
     * @return int
     */
    public function getIdproveedorcliente()
    {

        return $this->idproveedorcliente;
    }

    /**
     * Get the [idcliente] column value.
     *
     * @return int
     */
    public function getIdcliente()
    {

        return $this->idcliente;
    }

    /**
     * Get the [proveedorcliente_nombre] column value.
     *
     * @return string
     */
    public function getProveedorclienteNombre()
    {

        return $this->proveedorcliente_nombre;
    }

    /**
     * Get the [proveedorcliente_taxid] column value.
     *
     * @return string
     */
    public function getProveedorclienteTaxid()
    {

        return $this->proveedorcliente_taxid;
    }

    /**
     * Get the [proveedorcliente_nombrecontacto] column value.
     *
     * @return string
     */
    public function getProveedorclienteNombrecontacto()
    {

        return $this->proveedorcliente_nombrecontacto;
    }

    /**
     * Get the [proveedorcliente_telefonocontacto] column value.
     *
     * @return string
     */
    public function getProveedorclienteTelefonocontacto()
    {

        return $this->proveedorcliente_telefonocontacto;
    }

    /**
     * Get the [proveedorcliente_emailcontacto] column value.
     *
     * @return string
     */
    public function getProveedorclienteEmailcontacto()
    {

        return $this->proveedorcliente_emailcontacto;
    }

    /**
     * Get the [proveedorcliente_calle] column value.
     *
     * @return string
     */
    public function getProveedorclienteCalle()
    {

        return $this->proveedorcliente_calle;
    }

    /**
     * Get the [proveedorcliente_numero] column value.
     *
     * @return string
     */
    public function getProveedorclienteNumero()
    {

        return $this->proveedorcliente_numero;
    }

    /**
     * Get the [proveedorcliente_interior] column value.
     *
     * @return string
     */
    public function getProveedorclienteInterior()
    {

        return $this->proveedorcliente_interior;
    }

    /**
     * Get the [proveedorcliente_colonia] column value.
     *
     * @return string
     */
    public function getProveedorclienteColonia()
    {

        return $this->proveedorcliente_colonia;
    }

    /**
     * Get the [proveedorcliente_ciudad] column value.
     *
     * @return string
     */
    public function getProveedorclienteCiudad()
    {

        return $this->proveedorcliente_ciudad;
    }

    /**
     * Get the [proveedorcliente_estado] column value.
     *
     * @return string
     */
    public function getProveedorclienteEstado()
    {

        return $this->proveedorcliente_estado;
    }

    /**
     * Get the [proveedorcliente_pais] column value.
     *
     * @return string
     */
    public function getProveedorclientePais()
    {

        return $this->proveedorcliente_pais;
    }

    /**
     * Get the [proveedorcliente_tipo] column value.
     *
     * @return string
     */
    public function getProveedorclienteTipo()
    {

        return $this->proveedorcliente_tipo;
    }

    /**
     * Set the value of [idproveedorcliente] column.
     *
     * @param  int $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setIdproveedorcliente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedorcliente !== $v) {
            $this->idproveedorcliente = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::IDPROVEEDORCLIENTE;
        }


        return $this;
    } // setIdproveedorcliente()

    /**
     * Set the value of [idcliente] column.
     *
     * @param  int $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setIdcliente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcliente !== $v) {
            $this->idcliente = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::IDCLIENTE;
        }

        if ($this->aCliente !== null && $this->aCliente->getIdcliente() !== $v) {
            $this->aCliente = null;
        }


        return $this;
    } // setIdcliente()

    /**
     * Set the value of [proveedorcliente_nombre] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_nombre !== $v) {
            $this->proveedorcliente_nombre = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRE;
        }


        return $this;
    } // setProveedorclienteNombre()

    /**
     * Set the value of [proveedorcliente_taxid] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteTaxid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_taxid !== $v) {
            $this->proveedorcliente_taxid = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_TAXID;
        }


        return $this;
    } // setProveedorclienteTaxid()

    /**
     * Set the value of [proveedorcliente_nombrecontacto] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteNombrecontacto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_nombrecontacto !== $v) {
            $this->proveedorcliente_nombrecontacto = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRECONTACTO;
        }


        return $this;
    } // setProveedorclienteNombrecontacto()

    /**
     * Set the value of [proveedorcliente_telefonocontacto] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteTelefonocontacto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_telefonocontacto !== $v) {
            $this->proveedorcliente_telefonocontacto = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_TELEFONOCONTACTO;
        }


        return $this;
    } // setProveedorclienteTelefonocontacto()

    /**
     * Set the value of [proveedorcliente_emailcontacto] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteEmailcontacto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_emailcontacto !== $v) {
            $this->proveedorcliente_emailcontacto = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_EMAILCONTACTO;
        }


        return $this;
    } // setProveedorclienteEmailcontacto()

    /**
     * Set the value of [proveedorcliente_calle] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_calle !== $v) {
            $this->proveedorcliente_calle = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_CALLE;
        }


        return $this;
    } // setProveedorclienteCalle()

    /**
     * Set the value of [proveedorcliente_numero] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_numero !== $v) {
            $this->proveedorcliente_numero = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_NUMERO;
        }


        return $this;
    } // setProveedorclienteNumero()

    /**
     * Set the value of [proveedorcliente_interior] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteInterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_interior !== $v) {
            $this->proveedorcliente_interior = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_INTERIOR;
        }


        return $this;
    } // setProveedorclienteInterior()

    /**
     * Set the value of [proveedorcliente_colonia] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_colonia !== $v) {
            $this->proveedorcliente_colonia = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_COLONIA;
        }


        return $this;
    } // setProveedorclienteColonia()

    /**
     * Set the value of [proveedorcliente_ciudad] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_ciudad !== $v) {
            $this->proveedorcliente_ciudad = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_CIUDAD;
        }


        return $this;
    } // setProveedorclienteCiudad()

    /**
     * Set the value of [proveedorcliente_estado] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_estado !== $v) {
            $this->proveedorcliente_estado = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_ESTADO;
        }


        return $this;
    } // setProveedorclienteEstado()

    /**
     * Set the value of [proveedorcliente_pais] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclientePais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_pais !== $v) {
            $this->proveedorcliente_pais = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_PAIS;
        }


        return $this;
    } // setProveedorclientePais()

    /**
     * Set the value of [proveedorcliente_tipo] column.
     *
     * @param  string $v new value
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setProveedorclienteTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedorcliente_tipo !== $v) {
            $this->proveedorcliente_tipo = $v;
            $this->modifiedColumns[] = ProveedorclientePeer::PROVEEDORCLIENTE_TIPO;
        }


        return $this;
    } // setProveedorclienteTipo()

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

            $this->idproveedorcliente = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idcliente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->proveedorcliente_nombre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->proveedorcliente_taxid = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->proveedorcliente_nombrecontacto = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->proveedorcliente_telefonocontacto = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->proveedorcliente_emailcontacto = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->proveedorcliente_calle = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->proveedorcliente_numero = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->proveedorcliente_interior = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->proveedorcliente_colonia = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->proveedorcliente_ciudad = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->proveedorcliente_estado = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->proveedorcliente_pais = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->proveedorcliente_tipo = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = ProveedorclientePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Proveedorcliente object", $e);
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

        if ($this->aCliente !== null && $this->idcliente !== $this->aCliente->getIdcliente()) {
            $this->aCliente = null;
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
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProveedorclientePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCliente = null;
            $this->collExpedientes = null;

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
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProveedorclienteQuery::create()
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
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProveedorclientePeer::addInstanceToPool($this);
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

            if ($this->aCliente !== null) {
                if ($this->aCliente->isModified() || $this->aCliente->isNew()) {
                    $affectedRows += $this->aCliente->save($con);
                }
                $this->setCliente($this->aCliente);
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

            if ($this->expedientesScheduledForDeletion !== null) {
                if (!$this->expedientesScheduledForDeletion->isEmpty()) {
                    ExpedienteQuery::create()
                        ->filterByPrimaryKeys($this->expedientesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->expedientesScheduledForDeletion = null;
                }
            }

            if ($this->collExpedientes !== null) {
                foreach ($this->collExpedientes as $referrerFK) {
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

        $this->modifiedColumns[] = ProveedorclientePeer::IDPROVEEDORCLIENTE;
        if (null !== $this->idproveedorcliente) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProveedorclientePeer::IDPROVEEDORCLIENTE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProveedorclientePeer::IDPROVEEDORCLIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedorcliente`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::IDCLIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idcliente`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_nombre`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_TAXID)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_taxid`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRECONTACTO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_nombrecontacto`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_TELEFONOCONTACTO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_telefonocontacto`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_EMAILCONTACTO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_emailcontacto`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_calle`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_numero`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_INTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_interior`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_colonia`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_ciudad`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_estado`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_pais`';
        }
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedorcliente_tipo`';
        }

        $sql = sprintf(
            'INSERT INTO `proveedorcliente` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idproveedorcliente`':
                        $stmt->bindValue($identifier, $this->idproveedorcliente, PDO::PARAM_INT);
                        break;
                    case '`idcliente`':
                        $stmt->bindValue($identifier, $this->idcliente, PDO::PARAM_INT);
                        break;
                    case '`proveedorcliente_nombre`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_nombre, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_taxid`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_taxid, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_nombrecontacto`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_nombrecontacto, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_telefonocontacto`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_telefonocontacto, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_emailcontacto`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_emailcontacto, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_calle`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_calle, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_numero`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_numero, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_interior`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_interior, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_colonia`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_colonia, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_ciudad`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_ciudad, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_estado`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_estado, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_pais`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_pais, PDO::PARAM_STR);
                        break;
                    case '`proveedorcliente_tipo`':
                        $stmt->bindValue($identifier, $this->proveedorcliente_tipo, PDO::PARAM_STR);
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
        $this->setIdproveedorcliente($pk);

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

            if ($this->aCliente !== null) {
                if (!$this->aCliente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCliente->getValidationFailures());
                }
            }


            if (($retval = ProveedorclientePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collExpedientes !== null) {
                    foreach ($this->collExpedientes as $referrerFK) {
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
        $pos = ProveedorclientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdproveedorcliente();
                break;
            case 1:
                return $this->getIdcliente();
                break;
            case 2:
                return $this->getProveedorclienteNombre();
                break;
            case 3:
                return $this->getProveedorclienteTaxid();
                break;
            case 4:
                return $this->getProveedorclienteNombrecontacto();
                break;
            case 5:
                return $this->getProveedorclienteTelefonocontacto();
                break;
            case 6:
                return $this->getProveedorclienteEmailcontacto();
                break;
            case 7:
                return $this->getProveedorclienteCalle();
                break;
            case 8:
                return $this->getProveedorclienteNumero();
                break;
            case 9:
                return $this->getProveedorclienteInterior();
                break;
            case 10:
                return $this->getProveedorclienteColonia();
                break;
            case 11:
                return $this->getProveedorclienteCiudad();
                break;
            case 12:
                return $this->getProveedorclienteEstado();
                break;
            case 13:
                return $this->getProveedorclientePais();
                break;
            case 14:
                return $this->getProveedorclienteTipo();
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
        if (isset($alreadyDumpedObjects['Proveedorcliente'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Proveedorcliente'][$this->getPrimaryKey()] = true;
        $keys = ProveedorclientePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdproveedorcliente(),
            $keys[1] => $this->getIdcliente(),
            $keys[2] => $this->getProveedorclienteNombre(),
            $keys[3] => $this->getProveedorclienteTaxid(),
            $keys[4] => $this->getProveedorclienteNombrecontacto(),
            $keys[5] => $this->getProveedorclienteTelefonocontacto(),
            $keys[6] => $this->getProveedorclienteEmailcontacto(),
            $keys[7] => $this->getProveedorclienteCalle(),
            $keys[8] => $this->getProveedorclienteNumero(),
            $keys[9] => $this->getProveedorclienteInterior(),
            $keys[10] => $this->getProveedorclienteColonia(),
            $keys[11] => $this->getProveedorclienteCiudad(),
            $keys[12] => $this->getProveedorclienteEstado(),
            $keys[13] => $this->getProveedorclientePais(),
            $keys[14] => $this->getProveedorclienteTipo(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCliente) {
                $result['Cliente'] = $this->aCliente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collExpedientes) {
                $result['Expedientes'] = $this->collExpedientes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProveedorclientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdproveedorcliente($value);
                break;
            case 1:
                $this->setIdcliente($value);
                break;
            case 2:
                $this->setProveedorclienteNombre($value);
                break;
            case 3:
                $this->setProveedorclienteTaxid($value);
                break;
            case 4:
                $this->setProveedorclienteNombrecontacto($value);
                break;
            case 5:
                $this->setProveedorclienteTelefonocontacto($value);
                break;
            case 6:
                $this->setProveedorclienteEmailcontacto($value);
                break;
            case 7:
                $this->setProveedorclienteCalle($value);
                break;
            case 8:
                $this->setProveedorclienteNumero($value);
                break;
            case 9:
                $this->setProveedorclienteInterior($value);
                break;
            case 10:
                $this->setProveedorclienteColonia($value);
                break;
            case 11:
                $this->setProveedorclienteCiudad($value);
                break;
            case 12:
                $this->setProveedorclienteEstado($value);
                break;
            case 13:
                $this->setProveedorclientePais($value);
                break;
            case 14:
                $this->setProveedorclienteTipo($value);
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
        $keys = ProveedorclientePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdproveedorcliente($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdcliente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setProveedorclienteNombre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProveedorclienteTaxid($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProveedorclienteNombrecontacto($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setProveedorclienteTelefonocontacto($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setProveedorclienteEmailcontacto($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProveedorclienteCalle($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProveedorclienteNumero($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProveedorclienteInterior($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setProveedorclienteColonia($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setProveedorclienteCiudad($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setProveedorclienteEstado($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setProveedorclientePais($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setProveedorclienteTipo($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProveedorclientePeer::DATABASE_NAME);

        if ($this->isColumnModified(ProveedorclientePeer::IDPROVEEDORCLIENTE)) $criteria->add(ProveedorclientePeer::IDPROVEEDORCLIENTE, $this->idproveedorcliente);
        if ($this->isColumnModified(ProveedorclientePeer::IDCLIENTE)) $criteria->add(ProveedorclientePeer::IDCLIENTE, $this->idcliente);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRE)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRE, $this->proveedorcliente_nombre);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_TAXID)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_TAXID, $this->proveedorcliente_taxid);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRECONTACTO)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRECONTACTO, $this->proveedorcliente_nombrecontacto);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_TELEFONOCONTACTO)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_TELEFONOCONTACTO, $this->proveedorcliente_telefonocontacto);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_EMAILCONTACTO)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_EMAILCONTACTO, $this->proveedorcliente_emailcontacto);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_CALLE)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_CALLE, $this->proveedorcliente_calle);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_NUMERO)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_NUMERO, $this->proveedorcliente_numero);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_INTERIOR)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_INTERIOR, $this->proveedorcliente_interior);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_COLONIA)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_COLONIA, $this->proveedorcliente_colonia);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_CIUDAD)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_CIUDAD, $this->proveedorcliente_ciudad);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_ESTADO)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_ESTADO, $this->proveedorcliente_estado);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_PAIS)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_PAIS, $this->proveedorcliente_pais);
        if ($this->isColumnModified(ProveedorclientePeer::PROVEEDORCLIENTE_TIPO)) $criteria->add(ProveedorclientePeer::PROVEEDORCLIENTE_TIPO, $this->proveedorcliente_tipo);

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
        $criteria = new Criteria(ProveedorclientePeer::DATABASE_NAME);
        $criteria->add(ProveedorclientePeer::IDPROVEEDORCLIENTE, $this->idproveedorcliente);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdproveedorcliente();
    }

    /**
     * Generic method to set the primary key (idproveedorcliente column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdproveedorcliente($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdproveedorcliente();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Proveedorcliente (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdcliente($this->getIdcliente());
        $copyObj->setProveedorclienteNombre($this->getProveedorclienteNombre());
        $copyObj->setProveedorclienteTaxid($this->getProveedorclienteTaxid());
        $copyObj->setProveedorclienteNombrecontacto($this->getProveedorclienteNombrecontacto());
        $copyObj->setProveedorclienteTelefonocontacto($this->getProveedorclienteTelefonocontacto());
        $copyObj->setProveedorclienteEmailcontacto($this->getProveedorclienteEmailcontacto());
        $copyObj->setProveedorclienteCalle($this->getProveedorclienteCalle());
        $copyObj->setProveedorclienteNumero($this->getProveedorclienteNumero());
        $copyObj->setProveedorclienteInterior($this->getProveedorclienteInterior());
        $copyObj->setProveedorclienteColonia($this->getProveedorclienteColonia());
        $copyObj->setProveedorclienteCiudad($this->getProveedorclienteCiudad());
        $copyObj->setProveedorclienteEstado($this->getProveedorclienteEstado());
        $copyObj->setProveedorclientePais($this->getProveedorclientePais());
        $copyObj->setProveedorclienteTipo($this->getProveedorclienteTipo());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getExpedientes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpediente($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdproveedorcliente(NULL); // this is a auto-increment column, so set to default value
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
     * @return Proveedorcliente Clone of current object.
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
     * @return ProveedorclientePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProveedorclientePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Cliente object.
     *
     * @param                  Cliente $v
     * @return Proveedorcliente The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCliente(Cliente $v = null)
    {
        if ($v === null) {
            $this->setIdcliente(NULL);
        } else {
            $this->setIdcliente($v->getIdcliente());
        }

        $this->aCliente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cliente object, it will not be re-added.
        if ($v !== null) {
            $v->addProveedorcliente($this);
        }


        return $this;
    }


    /**
     * Get the associated Cliente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Cliente The associated Cliente object.
     * @throws PropelException
     */
    public function getCliente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCliente === null && ($this->idcliente !== null) && $doQuery) {
            $this->aCliente = ClienteQuery::create()->findPk($this->idcliente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCliente->addProveedorclientes($this);
             */
        }

        return $this->aCliente;
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
        if ('Expediente' == $relationName) {
            $this->initExpedientes();
        }
    }

    /**
     * Clears out the collExpedientes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Proveedorcliente The current object (for fluent API support)
     * @see        addExpedientes()
     */
    public function clearExpedientes()
    {
        $this->collExpedientes = null; // important to set this to null since that means it is uninitialized
        $this->collExpedientesPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedientes collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedientes($v = true)
    {
        $this->collExpedientesPartial = $v;
    }

    /**
     * Initializes the collExpedientes collection.
     *
     * By default this just sets the collExpedientes collection to an empty array (like clearcollExpedientes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedientes($overrideExisting = true)
    {
        if (null !== $this->collExpedientes && !$overrideExisting) {
            return;
        }
        $this->collExpedientes = new PropelObjectCollection();
        $this->collExpedientes->setModel('Expediente');
    }

    /**
     * Gets an array of Expediente objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Proveedorcliente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Expediente[] List of Expediente objects
     * @throws PropelException
     */
    public function getExpedientes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedientesPartial && !$this->isNew();
        if (null === $this->collExpedientes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedientes) {
                // return empty collection
                $this->initExpedientes();
            } else {
                $collExpedientes = ExpedienteQuery::create(null, $criteria)
                    ->filterByProveedorcliente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedientesPartial && count($collExpedientes)) {
                      $this->initExpedientes(false);

                      foreach ($collExpedientes as $obj) {
                        if (false == $this->collExpedientes->contains($obj)) {
                          $this->collExpedientes->append($obj);
                        }
                      }

                      $this->collExpedientesPartial = true;
                    }

                    $collExpedientes->getInternalIterator()->rewind();

                    return $collExpedientes;
                }

                if ($partial && $this->collExpedientes) {
                    foreach ($this->collExpedientes as $obj) {
                        if ($obj->isNew()) {
                            $collExpedientes[] = $obj;
                        }
                    }
                }

                $this->collExpedientes = $collExpedientes;
                $this->collExpedientesPartial = false;
            }
        }

        return $this->collExpedientes;
    }

    /**
     * Sets a collection of Expediente objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedientes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function setExpedientes(PropelCollection $expedientes, PropelPDO $con = null)
    {
        $expedientesToDelete = $this->getExpedientes(new Criteria(), $con)->diff($expedientes);


        $this->expedientesScheduledForDeletion = $expedientesToDelete;

        foreach ($expedientesToDelete as $expedienteRemoved) {
            $expedienteRemoved->setProveedorcliente(null);
        }

        $this->collExpedientes = null;
        foreach ($expedientes as $expediente) {
            $this->addExpediente($expediente);
        }

        $this->collExpedientes = $expedientes;
        $this->collExpedientesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Expediente objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Expediente objects.
     * @throws PropelException
     */
    public function countExpedientes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedientesPartial && !$this->isNew();
        if (null === $this->collExpedientes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedientes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExpedientes());
            }
            $query = ExpedienteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProveedorcliente($this)
                ->count($con);
        }

        return count($this->collExpedientes);
    }

    /**
     * Method called to associate a Expediente object to this object
     * through the Expediente foreign key attribute.
     *
     * @param    Expediente $l Expediente
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function addExpediente(Expediente $l)
    {
        if ($this->collExpedientes === null) {
            $this->initExpedientes();
            $this->collExpedientesPartial = true;
        }

        if (!in_array($l, $this->collExpedientes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpediente($l);

            if ($this->expedientesScheduledForDeletion and $this->expedientesScheduledForDeletion->contains($l)) {
                $this->expedientesScheduledForDeletion->remove($this->expedientesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Expediente $expediente The expediente object to add.
     */
    protected function doAddExpediente($expediente)
    {
        $this->collExpedientes[]= $expediente;
        $expediente->setProveedorcliente($this);
    }

    /**
     * @param	Expediente $expediente The expediente object to remove.
     * @return Proveedorcliente The current object (for fluent API support)
     */
    public function removeExpediente($expediente)
    {
        if ($this->getExpedientes()->contains($expediente)) {
            $this->collExpedientes->remove($this->collExpedientes->search($expediente));
            if (null === $this->expedientesScheduledForDeletion) {
                $this->expedientesScheduledForDeletion = clone $this->collExpedientes;
                $this->expedientesScheduledForDeletion->clear();
            }
            $this->expedientesScheduledForDeletion[]= clone $expediente;
            $expediente->setProveedorcliente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedorcliente is new, it will return
     * an empty collection; or if this Proveedorcliente has previously
     * been saved, it will retrieve related Expedientes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedorcliente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expediente[] List of Expediente objects
     */
    public function getExpedientesJoinCliente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedienteQuery::create(null, $criteria);
        $query->joinWith('Cliente', $join_behavior);

        return $this->getExpedientes($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproveedorcliente = null;
        $this->idcliente = null;
        $this->proveedorcliente_nombre = null;
        $this->proveedorcliente_taxid = null;
        $this->proveedorcliente_nombrecontacto = null;
        $this->proveedorcliente_telefonocontacto = null;
        $this->proveedorcliente_emailcontacto = null;
        $this->proveedorcliente_calle = null;
        $this->proveedorcliente_numero = null;
        $this->proveedorcliente_interior = null;
        $this->proveedorcliente_colonia = null;
        $this->proveedorcliente_ciudad = null;
        $this->proveedorcliente_estado = null;
        $this->proveedorcliente_pais = null;
        $this->proveedorcliente_tipo = null;
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
            if ($this->collExpedientes) {
                foreach ($this->collExpedientes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCliente instanceof Persistent) {
              $this->aCliente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collExpedientes instanceof PropelCollection) {
            $this->collExpedientes->clearIterator();
        }
        $this->collExpedientes = null;
        $this->aCliente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProveedorclientePeer::DEFAULT_STRING_FORMAT);
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
