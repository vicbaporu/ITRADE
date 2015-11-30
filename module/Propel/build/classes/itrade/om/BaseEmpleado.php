<?php


/**
 * Base class that represents a row from the 'empleado' table.
 *
 *
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseEmpleado extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EmpleadoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EmpleadoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the empleado_nombre field.
     * @var        string
     */
    protected $empleado_nombre;

    /**
     * The value for the empleado_apellidopaterno field.
     * @var        string
     */
    protected $empleado_apellidopaterno;

    /**
     * The value for the empleado_apallidomaterno field.
     * @var        string
     */
    protected $empleado_apallidomaterno;

    /**
     * The value for the empleado_email field.
     * @var        string
     */
    protected $empleado_email;

    /**
     * The value for the empleado_password field.
     * @var        string
     */
    protected $empleado_password;

    /**
     * The value for the empleado_celular field.
     * @var        string
     */
    protected $empleado_celular;

    /**
     * The value for the empleado_telefono field.
     * @var        string
     */
    protected $empleado_telefono;

    /**
     * The value for the empleado_calle field.
     * @var        string
     */
    protected $empleado_calle;

    /**
     * The value for the empleado_numero field.
     * @var        string
     */
    protected $empleado_numero;

    /**
     * The value for the empleado_interior field.
     * @var        string
     */
    protected $empleado_interior;

    /**
     * The value for the empleado_colonia field.
     * @var        string
     */
    protected $empleado_colonia;

    /**
     * The value for the empleado_codigopostal field.
     * @var        string
     */
    protected $empleado_codigopostal;

    /**
     * The value for the empleado_ciudad field.
     * @var        string
     */
    protected $empleado_ciudad;

    /**
     * The value for the empleado_estado field.
     * @var        string
     */
    protected $empleado_estado;

    /**
     * The value for the empleado_nss field.
     * @var        string
     */
    protected $empleado_nss;

    /**
     * The value for the empleado_rfc field.
     * @var        string
     */
    protected $empleado_rfc;

    /**
     * The value for the empleado_iniciocontrato field.
     * @var        string
     */
    protected $empleado_iniciocontrato;

    /**
     * The value for the empleado_nombrecontacto field.
     * @var        string
     */
    protected $empleado_nombrecontacto;

    /**
     * The value for the empleado_telefonocontacto field.
     * @var        string
     */
    protected $empleado_telefonocontacto;

    /**
     * The value for the empleado_estatus field.
     * @var        string
     */
    protected $empleado_estatus;

    /**
     * The value for the empleado_rol field.
     * @var        string
     */
    protected $empleado_rol;

    /**
     * @var        PropelObjectCollection|Cliente[] Collection to store aggregation of Cliente objects.
     */
    protected $collClientesRelatedByIdempleadocomercial;
    protected $collClientesRelatedByIdempleadocomercialPartial;

    /**
     * @var        PropelObjectCollection|Cliente[] Collection to store aggregation of Cliente objects.
     */
    protected $collClientesRelatedByIdempleadooperaciones;
    protected $collClientesRelatedByIdempleadooperacionesPartial;

    /**
     * @var        PropelObjectCollection|Expedientearchivo[] Collection to store aggregation of Expedientearchivo objects.
     */
    protected $collExpedientearchivos;
    protected $collExpedientearchivosPartial;

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
    protected $clientesRelatedByIdempleadocomercialScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $clientesRelatedByIdempleadooperacionesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $expedientearchivosScheduledForDeletion = null;

    /**
     * Get the [idempleado] column value.
     *
     * @return int
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

    /**
     * Get the [empleado_nombre] column value.
     *
     * @return string
     */
    public function getEmpleadoNombre()
    {

        return $this->empleado_nombre;
    }

    /**
     * Get the [empleado_apellidopaterno] column value.
     *
     * @return string
     */
    public function getEmpleadoApellidopaterno()
    {

        return $this->empleado_apellidopaterno;
    }

    /**
     * Get the [empleado_apallidomaterno] column value.
     *
     * @return string
     */
    public function getEmpleadoApallidomaterno()
    {

        return $this->empleado_apallidomaterno;
    }

    /**
     * Get the [empleado_email] column value.
     *
     * @return string
     */
    public function getEmpleadoEmail()
    {

        return $this->empleado_email;
    }

    /**
     * Get the [empleado_password] column value.
     *
     * @return string
     */
    public function getEmpleadoPassword()
    {

        return $this->empleado_password;
    }

    /**
     * Get the [empleado_celular] column value.
     *
     * @return string
     */
    public function getEmpleadoCelular()
    {

        return $this->empleado_celular;
    }

    /**
     * Get the [empleado_telefono] column value.
     *
     * @return string
     */
    public function getEmpleadoTelefono()
    {

        return $this->empleado_telefono;
    }

    /**
     * Get the [empleado_calle] column value.
     *
     * @return string
     */
    public function getEmpleadoCalle()
    {

        return $this->empleado_calle;
    }

    /**
     * Get the [empleado_numero] column value.
     *
     * @return string
     */
    public function getEmpleadoNumero()
    {

        return $this->empleado_numero;
    }

    /**
     * Get the [empleado_interior] column value.
     *
     * @return string
     */
    public function getEmpleadoInterior()
    {

        return $this->empleado_interior;
    }

    /**
     * Get the [empleado_colonia] column value.
     *
     * @return string
     */
    public function getEmpleadoColonia()
    {

        return $this->empleado_colonia;
    }

    /**
     * Get the [empleado_codigopostal] column value.
     *
     * @return string
     */
    public function getEmpleadoCodigopostal()
    {

        return $this->empleado_codigopostal;
    }

    /**
     * Get the [empleado_ciudad] column value.
     *
     * @return string
     */
    public function getEmpleadoCiudad()
    {

        return $this->empleado_ciudad;
    }

    /**
     * Get the [empleado_estado] column value.
     *
     * @return string
     */
    public function getEmpleadoEstado()
    {

        return $this->empleado_estado;
    }

    /**
     * Get the [empleado_nss] column value.
     *
     * @return string
     */
    public function getEmpleadoNss()
    {

        return $this->empleado_nss;
    }

    /**
     * Get the [empleado_rfc] column value.
     *
     * @return string
     */
    public function getEmpleadoRfc()
    {

        return $this->empleado_rfc;
    }

    /**
     * Get the [optionally formatted] temporal [empleado_iniciocontrato] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEmpleadoIniciocontrato($format = '%x')
    {
        if ($this->empleado_iniciocontrato === null) {
            return null;
        }

        if ($this->empleado_iniciocontrato === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->empleado_iniciocontrato);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->empleado_iniciocontrato, true), $x);
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
     * Get the [empleado_nombrecontacto] column value.
     *
     * @return string
     */
    public function getEmpleadoNombrecontacto()
    {

        return $this->empleado_nombrecontacto;
    }

    /**
     * Get the [empleado_telefonocontacto] column value.
     *
     * @return string
     */
    public function getEmpleadoTelefonocontacto()
    {

        return $this->empleado_telefonocontacto;
    }

    /**
     * Get the [empleado_estatus] column value.
     *
     * @return string
     */
    public function getEmpleadoEstatus()
    {

        return $this->empleado_estatus;
    }

    /**
     * Get the [empleado_rol] column value.
     *
     * @return string
     */
    public function getEmpleadoRol()
    {

        return $this->empleado_rol;
    }

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = EmpleadoPeer::IDEMPLEADO;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [empleado_nombre] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_nombre !== $v) {
            $this->empleado_nombre = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NOMBRE;
        }


        return $this;
    } // setEmpleadoNombre()

    /**
     * Set the value of [empleado_apellidopaterno] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoApellidopaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_apellidopaterno !== $v) {
            $this->empleado_apellidopaterno = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_APELLIDOPATERNO;
        }


        return $this;
    } // setEmpleadoApellidopaterno()

    /**
     * Set the value of [empleado_apallidomaterno] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoApallidomaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_apallidomaterno !== $v) {
            $this->empleado_apallidomaterno = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_APALLIDOMATERNO;
        }


        return $this;
    } // setEmpleadoApallidomaterno()

    /**
     * Set the value of [empleado_email] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_email !== $v) {
            $this->empleado_email = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_EMAIL;
        }


        return $this;
    } // setEmpleadoEmail()

    /**
     * Set the value of [empleado_password] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_password !== $v) {
            $this->empleado_password = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_PASSWORD;
        }


        return $this;
    } // setEmpleadoPassword()

    /**
     * Set the value of [empleado_celular] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCelular($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_celular !== $v) {
            $this->empleado_celular = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CELULAR;
        }


        return $this;
    } // setEmpleadoCelular()

    /**
     * Set the value of [empleado_telefono] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_telefono !== $v) {
            $this->empleado_telefono = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_TELEFONO;
        }


        return $this;
    } // setEmpleadoTelefono()

    /**
     * Set the value of [empleado_calle] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_calle !== $v) {
            $this->empleado_calle = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CALLE;
        }


        return $this;
    } // setEmpleadoCalle()

    /**
     * Set the value of [empleado_numero] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_numero !== $v) {
            $this->empleado_numero = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NUMERO;
        }


        return $this;
    } // setEmpleadoNumero()

    /**
     * Set the value of [empleado_interior] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoInterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_interior !== $v) {
            $this->empleado_interior = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_INTERIOR;
        }


        return $this;
    } // setEmpleadoInterior()

    /**
     * Set the value of [empleado_colonia] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_colonia !== $v) {
            $this->empleado_colonia = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_COLONIA;
        }


        return $this;
    } // setEmpleadoColonia()

    /**
     * Set the value of [empleado_codigopostal] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_codigopostal !== $v) {
            $this->empleado_codigopostal = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CODIGOPOSTAL;
        }


        return $this;
    } // setEmpleadoCodigopostal()

    /**
     * Set the value of [empleado_ciudad] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_ciudad !== $v) {
            $this->empleado_ciudad = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CIUDAD;
        }


        return $this;
    } // setEmpleadoCiudad()

    /**
     * Set the value of [empleado_estado] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_estado !== $v) {
            $this->empleado_estado = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_ESTADO;
        }


        return $this;
    } // setEmpleadoEstado()

    /**
     * Set the value of [empleado_nss] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNss($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_nss !== $v) {
            $this->empleado_nss = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NSS;
        }


        return $this;
    } // setEmpleadoNss()

    /**
     * Set the value of [empleado_rfc] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_rfc !== $v) {
            $this->empleado_rfc = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_RFC;
        }


        return $this;
    } // setEmpleadoRfc()

    /**
     * Sets the value of [empleado_iniciocontrato] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoIniciocontrato($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->empleado_iniciocontrato !== null || $dt !== null) {
            $currentDateAsString = ($this->empleado_iniciocontrato !== null && $tmpDt = new DateTime($this->empleado_iniciocontrato)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->empleado_iniciocontrato = $newDateAsString;
                $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_INICIOCONTRATO;
            }
        } // if either are not null


        return $this;
    } // setEmpleadoIniciocontrato()

    /**
     * Set the value of [empleado_nombrecontacto] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNombrecontacto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_nombrecontacto !== $v) {
            $this->empleado_nombrecontacto = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NOMBRECONTACTO;
        }


        return $this;
    } // setEmpleadoNombrecontacto()

    /**
     * Set the value of [empleado_telefonocontacto] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoTelefonocontacto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_telefonocontacto !== $v) {
            $this->empleado_telefonocontacto = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_TELEFONOCONTACTO;
        }


        return $this;
    } // setEmpleadoTelefonocontacto()

    /**
     * Set the value of [empleado_estatus] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_estatus !== $v) {
            $this->empleado_estatus = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_ESTATUS;
        }


        return $this;
    } // setEmpleadoEstatus()

    /**
     * Set the value of [empleado_rol] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoRol($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_rol !== $v) {
            $this->empleado_rol = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_ROL;
        }


        return $this;
    } // setEmpleadoRol()

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

            $this->idempleado = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->empleado_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->empleado_apellidopaterno = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->empleado_apallidomaterno = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->empleado_email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->empleado_password = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->empleado_celular = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->empleado_telefono = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->empleado_calle = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->empleado_numero = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->empleado_interior = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->empleado_colonia = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->empleado_codigopostal = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->empleado_ciudad = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->empleado_estado = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->empleado_nss = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->empleado_rfc = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->empleado_iniciocontrato = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->empleado_nombrecontacto = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->empleado_telefonocontacto = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->empleado_estatus = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->empleado_rol = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = EmpleadoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Empleado object", $e);
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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EmpleadoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collClientesRelatedByIdempleadocomercial = null;

            $this->collClientesRelatedByIdempleadooperaciones = null;

            $this->collExpedientearchivos = null;

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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EmpleadoQuery::create()
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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EmpleadoPeer::addInstanceToPool($this);
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

            if ($this->clientesRelatedByIdempleadocomercialScheduledForDeletion !== null) {
                if (!$this->clientesRelatedByIdempleadocomercialScheduledForDeletion->isEmpty()) {
                    foreach ($this->clientesRelatedByIdempleadocomercialScheduledForDeletion as $clienteRelatedByIdempleadocomercial) {
                        // need to save related object because we set the relation to null
                        $clienteRelatedByIdempleadocomercial->save($con);
                    }
                    $this->clientesRelatedByIdempleadocomercialScheduledForDeletion = null;
                }
            }

            if ($this->collClientesRelatedByIdempleadocomercial !== null) {
                foreach ($this->collClientesRelatedByIdempleadocomercial as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->clientesRelatedByIdempleadooperacionesScheduledForDeletion !== null) {
                if (!$this->clientesRelatedByIdempleadooperacionesScheduledForDeletion->isEmpty()) {
                    ClienteQuery::create()
                        ->filterByPrimaryKeys($this->clientesRelatedByIdempleadooperacionesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->clientesRelatedByIdempleadooperacionesScheduledForDeletion = null;
                }
            }

            if ($this->collClientesRelatedByIdempleadooperaciones !== null) {
                foreach ($this->collClientesRelatedByIdempleadooperaciones as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->expedientearchivosScheduledForDeletion !== null) {
                if (!$this->expedientearchivosScheduledForDeletion->isEmpty()) {
                    ExpedientearchivoQuery::create()
                        ->filterByPrimaryKeys($this->expedientearchivosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->expedientearchivosScheduledForDeletion = null;
                }
            }

            if ($this->collExpedientearchivos !== null) {
                foreach ($this->collExpedientearchivos as $referrerFK) {
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

        $this->modifiedColumns[] = EmpleadoPeer::IDEMPLEADO;
        if (null !== $this->idempleado) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EmpleadoPeer::IDEMPLEADO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EmpleadoPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_nombre`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_APELLIDOPATERNO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_apellidopaterno`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_APALLIDOMATERNO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_apallidomaterno`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_email`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_password`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CELULAR)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_celular`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_telefono`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_calle`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_numero`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_INTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_interior`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_colonia`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_codigopostal`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_ciudad`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_estado`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NSS)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_nss`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_rfc`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_INICIOCONTRATO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_iniciocontrato`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBRECONTACTO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_nombrecontacto`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TELEFONOCONTACTO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_telefonocontacto`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_estatus`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_ROL)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_rol`';
        }

        $sql = sprintf(
            'INSERT INTO `empleado` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`empleado_nombre`':
                        $stmt->bindValue($identifier, $this->empleado_nombre, PDO::PARAM_STR);
                        break;
                    case '`empleado_apellidopaterno`':
                        $stmt->bindValue($identifier, $this->empleado_apellidopaterno, PDO::PARAM_STR);
                        break;
                    case '`empleado_apallidomaterno`':
                        $stmt->bindValue($identifier, $this->empleado_apallidomaterno, PDO::PARAM_STR);
                        break;
                    case '`empleado_email`':
                        $stmt->bindValue($identifier, $this->empleado_email, PDO::PARAM_STR);
                        break;
                    case '`empleado_password`':
                        $stmt->bindValue($identifier, $this->empleado_password, PDO::PARAM_STR);
                        break;
                    case '`empleado_celular`':
                        $stmt->bindValue($identifier, $this->empleado_celular, PDO::PARAM_STR);
                        break;
                    case '`empleado_telefono`':
                        $stmt->bindValue($identifier, $this->empleado_telefono, PDO::PARAM_STR);
                        break;
                    case '`empleado_calle`':
                        $stmt->bindValue($identifier, $this->empleado_calle, PDO::PARAM_STR);
                        break;
                    case '`empleado_numero`':
                        $stmt->bindValue($identifier, $this->empleado_numero, PDO::PARAM_STR);
                        break;
                    case '`empleado_interior`':
                        $stmt->bindValue($identifier, $this->empleado_interior, PDO::PARAM_STR);
                        break;
                    case '`empleado_colonia`':
                        $stmt->bindValue($identifier, $this->empleado_colonia, PDO::PARAM_STR);
                        break;
                    case '`empleado_codigopostal`':
                        $stmt->bindValue($identifier, $this->empleado_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`empleado_ciudad`':
                        $stmt->bindValue($identifier, $this->empleado_ciudad, PDO::PARAM_STR);
                        break;
                    case '`empleado_estado`':
                        $stmt->bindValue($identifier, $this->empleado_estado, PDO::PARAM_STR);
                        break;
                    case '`empleado_nss`':
                        $stmt->bindValue($identifier, $this->empleado_nss, PDO::PARAM_STR);
                        break;
                    case '`empleado_rfc`':
                        $stmt->bindValue($identifier, $this->empleado_rfc, PDO::PARAM_STR);
                        break;
                    case '`empleado_iniciocontrato`':
                        $stmt->bindValue($identifier, $this->empleado_iniciocontrato, PDO::PARAM_STR);
                        break;
                    case '`empleado_nombrecontacto`':
                        $stmt->bindValue($identifier, $this->empleado_nombrecontacto, PDO::PARAM_STR);
                        break;
                    case '`empleado_telefonocontacto`':
                        $stmt->bindValue($identifier, $this->empleado_telefonocontacto, PDO::PARAM_STR);
                        break;
                    case '`empleado_estatus`':
                        $stmt->bindValue($identifier, $this->empleado_estatus, PDO::PARAM_STR);
                        break;
                    case '`empleado_rol`':
                        $stmt->bindValue($identifier, $this->empleado_rol, PDO::PARAM_STR);
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
        $this->setIdempleado($pk);

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


            if (($retval = EmpleadoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collClientesRelatedByIdempleadocomercial !== null) {
                    foreach ($this->collClientesRelatedByIdempleadocomercial as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collClientesRelatedByIdempleadooperaciones !== null) {
                    foreach ($this->collClientesRelatedByIdempleadooperaciones as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExpedientearchivos !== null) {
                    foreach ($this->collExpedientearchivos as $referrerFK) {
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
        $pos = EmpleadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdempleado();
                break;
            case 1:
                return $this->getEmpleadoNombre();
                break;
            case 2:
                return $this->getEmpleadoApellidopaterno();
                break;
            case 3:
                return $this->getEmpleadoApallidomaterno();
                break;
            case 4:
                return $this->getEmpleadoEmail();
                break;
            case 5:
                return $this->getEmpleadoPassword();
                break;
            case 6:
                return $this->getEmpleadoCelular();
                break;
            case 7:
                return $this->getEmpleadoTelefono();
                break;
            case 8:
                return $this->getEmpleadoCalle();
                break;
            case 9:
                return $this->getEmpleadoNumero();
                break;
            case 10:
                return $this->getEmpleadoInterior();
                break;
            case 11:
                return $this->getEmpleadoColonia();
                break;
            case 12:
                return $this->getEmpleadoCodigopostal();
                break;
            case 13:
                return $this->getEmpleadoCiudad();
                break;
            case 14:
                return $this->getEmpleadoEstado();
                break;
            case 15:
                return $this->getEmpleadoNss();
                break;
            case 16:
                return $this->getEmpleadoRfc();
                break;
            case 17:
                return $this->getEmpleadoIniciocontrato();
                break;
            case 18:
                return $this->getEmpleadoNombrecontacto();
                break;
            case 19:
                return $this->getEmpleadoTelefonocontacto();
                break;
            case 20:
                return $this->getEmpleadoEstatus();
                break;
            case 21:
                return $this->getEmpleadoRol();
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
        if (isset($alreadyDumpedObjects['Empleado'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Empleado'][$this->getPrimaryKey()] = true;
        $keys = EmpleadoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdempleado(),
            $keys[1] => $this->getEmpleadoNombre(),
            $keys[2] => $this->getEmpleadoApellidopaterno(),
            $keys[3] => $this->getEmpleadoApallidomaterno(),
            $keys[4] => $this->getEmpleadoEmail(),
            $keys[5] => $this->getEmpleadoPassword(),
            $keys[6] => $this->getEmpleadoCelular(),
            $keys[7] => $this->getEmpleadoTelefono(),
            $keys[8] => $this->getEmpleadoCalle(),
            $keys[9] => $this->getEmpleadoNumero(),
            $keys[10] => $this->getEmpleadoInterior(),
            $keys[11] => $this->getEmpleadoColonia(),
            $keys[12] => $this->getEmpleadoCodigopostal(),
            $keys[13] => $this->getEmpleadoCiudad(),
            $keys[14] => $this->getEmpleadoEstado(),
            $keys[15] => $this->getEmpleadoNss(),
            $keys[16] => $this->getEmpleadoRfc(),
            $keys[17] => $this->getEmpleadoIniciocontrato(),
            $keys[18] => $this->getEmpleadoNombrecontacto(),
            $keys[19] => $this->getEmpleadoTelefonocontacto(),
            $keys[20] => $this->getEmpleadoEstatus(),
            $keys[21] => $this->getEmpleadoRol(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collClientesRelatedByIdempleadocomercial) {
                $result['ClientesRelatedByIdempleadocomercial'] = $this->collClientesRelatedByIdempleadocomercial->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collClientesRelatedByIdempleadooperaciones) {
                $result['ClientesRelatedByIdempleadooperaciones'] = $this->collClientesRelatedByIdempleadooperaciones->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExpedientearchivos) {
                $result['Expedientearchivos'] = $this->collExpedientearchivos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = EmpleadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdempleado($value);
                break;
            case 1:
                $this->setEmpleadoNombre($value);
                break;
            case 2:
                $this->setEmpleadoApellidopaterno($value);
                break;
            case 3:
                $this->setEmpleadoApallidomaterno($value);
                break;
            case 4:
                $this->setEmpleadoEmail($value);
                break;
            case 5:
                $this->setEmpleadoPassword($value);
                break;
            case 6:
                $this->setEmpleadoCelular($value);
                break;
            case 7:
                $this->setEmpleadoTelefono($value);
                break;
            case 8:
                $this->setEmpleadoCalle($value);
                break;
            case 9:
                $this->setEmpleadoNumero($value);
                break;
            case 10:
                $this->setEmpleadoInterior($value);
                break;
            case 11:
                $this->setEmpleadoColonia($value);
                break;
            case 12:
                $this->setEmpleadoCodigopostal($value);
                break;
            case 13:
                $this->setEmpleadoCiudad($value);
                break;
            case 14:
                $this->setEmpleadoEstado($value);
                break;
            case 15:
                $this->setEmpleadoNss($value);
                break;
            case 16:
                $this->setEmpleadoRfc($value);
                break;
            case 17:
                $this->setEmpleadoIniciocontrato($value);
                break;
            case 18:
                $this->setEmpleadoNombrecontacto($value);
                break;
            case 19:
                $this->setEmpleadoTelefonocontacto($value);
                break;
            case 20:
                $this->setEmpleadoEstatus($value);
                break;
            case 21:
                $this->setEmpleadoRol($value);
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
        $keys = EmpleadoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdempleado($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEmpleadoNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmpleadoApellidopaterno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmpleadoApallidomaterno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmpleadoEmail($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmpleadoPassword($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEmpleadoCelular($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEmpleadoTelefono($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEmpleadoCalle($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEmpleadoNumero($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEmpleadoInterior($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmpleadoColonia($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEmpleadoCodigopostal($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEmpleadoCiudad($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEmpleadoEstado($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEmpleadoNss($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEmpleadoRfc($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setEmpleadoIniciocontrato($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEmpleadoNombrecontacto($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEmpleadoTelefonocontacto($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEmpleadoEstatus($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setEmpleadoRol($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);

        if ($this->isColumnModified(EmpleadoPeer::IDEMPLEADO)) $criteria->add(EmpleadoPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBRE)) $criteria->add(EmpleadoPeer::EMPLEADO_NOMBRE, $this->empleado_nombre);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_APELLIDOPATERNO)) $criteria->add(EmpleadoPeer::EMPLEADO_APELLIDOPATERNO, $this->empleado_apellidopaterno);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_APALLIDOMATERNO)) $criteria->add(EmpleadoPeer::EMPLEADO_APALLIDOMATERNO, $this->empleado_apallidomaterno);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_EMAIL)) $criteria->add(EmpleadoPeer::EMPLEADO_EMAIL, $this->empleado_email);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_PASSWORD)) $criteria->add(EmpleadoPeer::EMPLEADO_PASSWORD, $this->empleado_password);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CELULAR)) $criteria->add(EmpleadoPeer::EMPLEADO_CELULAR, $this->empleado_celular);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TELEFONO)) $criteria->add(EmpleadoPeer::EMPLEADO_TELEFONO, $this->empleado_telefono);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CALLE)) $criteria->add(EmpleadoPeer::EMPLEADO_CALLE, $this->empleado_calle);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NUMERO)) $criteria->add(EmpleadoPeer::EMPLEADO_NUMERO, $this->empleado_numero);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_INTERIOR)) $criteria->add(EmpleadoPeer::EMPLEADO_INTERIOR, $this->empleado_interior);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COLONIA)) $criteria->add(EmpleadoPeer::EMPLEADO_COLONIA, $this->empleado_colonia);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL)) $criteria->add(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL, $this->empleado_codigopostal);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CIUDAD)) $criteria->add(EmpleadoPeer::EMPLEADO_CIUDAD, $this->empleado_ciudad);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_ESTADO)) $criteria->add(EmpleadoPeer::EMPLEADO_ESTADO, $this->empleado_estado);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NSS)) $criteria->add(EmpleadoPeer::EMPLEADO_NSS, $this->empleado_nss);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_RFC)) $criteria->add(EmpleadoPeer::EMPLEADO_RFC, $this->empleado_rfc);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_INICIOCONTRATO)) $criteria->add(EmpleadoPeer::EMPLEADO_INICIOCONTRATO, $this->empleado_iniciocontrato);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBRECONTACTO)) $criteria->add(EmpleadoPeer::EMPLEADO_NOMBRECONTACTO, $this->empleado_nombrecontacto);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TELEFONOCONTACTO)) $criteria->add(EmpleadoPeer::EMPLEADO_TELEFONOCONTACTO, $this->empleado_telefonocontacto);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_ESTATUS)) $criteria->add(EmpleadoPeer::EMPLEADO_ESTATUS, $this->empleado_estatus);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_ROL)) $criteria->add(EmpleadoPeer::EMPLEADO_ROL, $this->empleado_rol);

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
        $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);
        $criteria->add(EmpleadoPeer::IDEMPLEADO, $this->idempleado);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdempleado();
    }

    /**
     * Generic method to set the primary key (idempleado column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdempleado($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdempleado();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Empleado (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEmpleadoNombre($this->getEmpleadoNombre());
        $copyObj->setEmpleadoApellidopaterno($this->getEmpleadoApellidopaterno());
        $copyObj->setEmpleadoApallidomaterno($this->getEmpleadoApallidomaterno());
        $copyObj->setEmpleadoEmail($this->getEmpleadoEmail());
        $copyObj->setEmpleadoPassword($this->getEmpleadoPassword());
        $copyObj->setEmpleadoCelular($this->getEmpleadoCelular());
        $copyObj->setEmpleadoTelefono($this->getEmpleadoTelefono());
        $copyObj->setEmpleadoCalle($this->getEmpleadoCalle());
        $copyObj->setEmpleadoNumero($this->getEmpleadoNumero());
        $copyObj->setEmpleadoInterior($this->getEmpleadoInterior());
        $copyObj->setEmpleadoColonia($this->getEmpleadoColonia());
        $copyObj->setEmpleadoCodigopostal($this->getEmpleadoCodigopostal());
        $copyObj->setEmpleadoCiudad($this->getEmpleadoCiudad());
        $copyObj->setEmpleadoEstado($this->getEmpleadoEstado());
        $copyObj->setEmpleadoNss($this->getEmpleadoNss());
        $copyObj->setEmpleadoRfc($this->getEmpleadoRfc());
        $copyObj->setEmpleadoIniciocontrato($this->getEmpleadoIniciocontrato());
        $copyObj->setEmpleadoNombrecontacto($this->getEmpleadoNombrecontacto());
        $copyObj->setEmpleadoTelefonocontacto($this->getEmpleadoTelefonocontacto());
        $copyObj->setEmpleadoEstatus($this->getEmpleadoEstatus());
        $copyObj->setEmpleadoRol($this->getEmpleadoRol());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getClientesRelatedByIdempleadocomercial() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClienteRelatedByIdempleadocomercial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getClientesRelatedByIdempleadooperaciones() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClienteRelatedByIdempleadooperaciones($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExpedientearchivos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpedientearchivo($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdempleado(NULL); // this is a auto-increment column, so set to default value
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
     * @return Empleado Clone of current object.
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
     * @return EmpleadoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EmpleadoPeer();
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
        if ('ClienteRelatedByIdempleadocomercial' == $relationName) {
            $this->initClientesRelatedByIdempleadocomercial();
        }
        if ('ClienteRelatedByIdempleadooperaciones' == $relationName) {
            $this->initClientesRelatedByIdempleadooperaciones();
        }
        if ('Expedientearchivo' == $relationName) {
            $this->initExpedientearchivos();
        }
    }

    /**
     * Clears out the collClientesRelatedByIdempleadocomercial collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addClientesRelatedByIdempleadocomercial()
     */
    public function clearClientesRelatedByIdempleadocomercial()
    {
        $this->collClientesRelatedByIdempleadocomercial = null; // important to set this to null since that means it is uninitialized
        $this->collClientesRelatedByIdempleadocomercialPartial = null;

        return $this;
    }

    /**
     * reset is the collClientesRelatedByIdempleadocomercial collection loaded partially
     *
     * @return void
     */
    public function resetPartialClientesRelatedByIdempleadocomercial($v = true)
    {
        $this->collClientesRelatedByIdempleadocomercialPartial = $v;
    }

    /**
     * Initializes the collClientesRelatedByIdempleadocomercial collection.
     *
     * By default this just sets the collClientesRelatedByIdempleadocomercial collection to an empty array (like clearcollClientesRelatedByIdempleadocomercial());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClientesRelatedByIdempleadocomercial($overrideExisting = true)
    {
        if (null !== $this->collClientesRelatedByIdempleadocomercial && !$overrideExisting) {
            return;
        }
        $this->collClientesRelatedByIdempleadocomercial = new PropelObjectCollection();
        $this->collClientesRelatedByIdempleadocomercial->setModel('Cliente');
    }

    /**
     * Gets an array of Cliente objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cliente[] List of Cliente objects
     * @throws PropelException
     */
    public function getClientesRelatedByIdempleadocomercial($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClientesRelatedByIdempleadocomercialPartial && !$this->isNew();
        if (null === $this->collClientesRelatedByIdempleadocomercial || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClientesRelatedByIdempleadocomercial) {
                // return empty collection
                $this->initClientesRelatedByIdempleadocomercial();
            } else {
                $collClientesRelatedByIdempleadocomercial = ClienteQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadocomercial($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClientesRelatedByIdempleadocomercialPartial && count($collClientesRelatedByIdempleadocomercial)) {
                      $this->initClientesRelatedByIdempleadocomercial(false);

                      foreach ($collClientesRelatedByIdempleadocomercial as $obj) {
                        if (false == $this->collClientesRelatedByIdempleadocomercial->contains($obj)) {
                          $this->collClientesRelatedByIdempleadocomercial->append($obj);
                        }
                      }

                      $this->collClientesRelatedByIdempleadocomercialPartial = true;
                    }

                    $collClientesRelatedByIdempleadocomercial->getInternalIterator()->rewind();

                    return $collClientesRelatedByIdempleadocomercial;
                }

                if ($partial && $this->collClientesRelatedByIdempleadocomercial) {
                    foreach ($this->collClientesRelatedByIdempleadocomercial as $obj) {
                        if ($obj->isNew()) {
                            $collClientesRelatedByIdempleadocomercial[] = $obj;
                        }
                    }
                }

                $this->collClientesRelatedByIdempleadocomercial = $collClientesRelatedByIdempleadocomercial;
                $this->collClientesRelatedByIdempleadocomercialPartial = false;
            }
        }

        return $this->collClientesRelatedByIdempleadocomercial;
    }

    /**
     * Sets a collection of ClienteRelatedByIdempleadocomercial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clientesRelatedByIdempleadocomercial A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setClientesRelatedByIdempleadocomercial(PropelCollection $clientesRelatedByIdempleadocomercial, PropelPDO $con = null)
    {
        $clientesRelatedByIdempleadocomercialToDelete = $this->getClientesRelatedByIdempleadocomercial(new Criteria(), $con)->diff($clientesRelatedByIdempleadocomercial);


        $this->clientesRelatedByIdempleadocomercialScheduledForDeletion = $clientesRelatedByIdempleadocomercialToDelete;

        foreach ($clientesRelatedByIdempleadocomercialToDelete as $clienteRelatedByIdempleadocomercialRemoved) {
            $clienteRelatedByIdempleadocomercialRemoved->setEmpleadoRelatedByIdempleadocomercial(null);
        }

        $this->collClientesRelatedByIdempleadocomercial = null;
        foreach ($clientesRelatedByIdempleadocomercial as $clienteRelatedByIdempleadocomercial) {
            $this->addClienteRelatedByIdempleadocomercial($clienteRelatedByIdempleadocomercial);
        }

        $this->collClientesRelatedByIdempleadocomercial = $clientesRelatedByIdempleadocomercial;
        $this->collClientesRelatedByIdempleadocomercialPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cliente objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cliente objects.
     * @throws PropelException
     */
    public function countClientesRelatedByIdempleadocomercial(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClientesRelatedByIdempleadocomercialPartial && !$this->isNew();
        if (null === $this->collClientesRelatedByIdempleadocomercial || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClientesRelatedByIdempleadocomercial) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClientesRelatedByIdempleadocomercial());
            }
            $query = ClienteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadocomercial($this)
                ->count($con);
        }

        return count($this->collClientesRelatedByIdempleadocomercial);
    }

    /**
     * Method called to associate a Cliente object to this object
     * through the Cliente foreign key attribute.
     *
     * @param    Cliente $l Cliente
     * @return Empleado The current object (for fluent API support)
     */
    public function addClienteRelatedByIdempleadocomercial(Cliente $l)
    {
        if ($this->collClientesRelatedByIdempleadocomercial === null) {
            $this->initClientesRelatedByIdempleadocomercial();
            $this->collClientesRelatedByIdempleadocomercialPartial = true;
        }

        if (!in_array($l, $this->collClientesRelatedByIdempleadocomercial->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClienteRelatedByIdempleadocomercial($l);

            if ($this->clientesRelatedByIdempleadocomercialScheduledForDeletion and $this->clientesRelatedByIdempleadocomercialScheduledForDeletion->contains($l)) {
                $this->clientesRelatedByIdempleadocomercialScheduledForDeletion->remove($this->clientesRelatedByIdempleadocomercialScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ClienteRelatedByIdempleadocomercial $clienteRelatedByIdempleadocomercial The clienteRelatedByIdempleadocomercial object to add.
     */
    protected function doAddClienteRelatedByIdempleadocomercial($clienteRelatedByIdempleadocomercial)
    {
        $this->collClientesRelatedByIdempleadocomercial[]= $clienteRelatedByIdempleadocomercial;
        $clienteRelatedByIdempleadocomercial->setEmpleadoRelatedByIdempleadocomercial($this);
    }

    /**
     * @param	ClienteRelatedByIdempleadocomercial $clienteRelatedByIdempleadocomercial The clienteRelatedByIdempleadocomercial object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeClienteRelatedByIdempleadocomercial($clienteRelatedByIdempleadocomercial)
    {
        if ($this->getClientesRelatedByIdempleadocomercial()->contains($clienteRelatedByIdempleadocomercial)) {
            $this->collClientesRelatedByIdempleadocomercial->remove($this->collClientesRelatedByIdempleadocomercial->search($clienteRelatedByIdempleadocomercial));
            if (null === $this->clientesRelatedByIdempleadocomercialScheduledForDeletion) {
                $this->clientesRelatedByIdempleadocomercialScheduledForDeletion = clone $this->collClientesRelatedByIdempleadocomercial;
                $this->clientesRelatedByIdempleadocomercialScheduledForDeletion->clear();
            }
            $this->clientesRelatedByIdempleadocomercialScheduledForDeletion[]= $clienteRelatedByIdempleadocomercial;
            $clienteRelatedByIdempleadocomercial->setEmpleadoRelatedByIdempleadocomercial(null);
        }

        return $this;
    }

    /**
     * Clears out the collClientesRelatedByIdempleadooperaciones collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addClientesRelatedByIdempleadooperaciones()
     */
    public function clearClientesRelatedByIdempleadooperaciones()
    {
        $this->collClientesRelatedByIdempleadooperaciones = null; // important to set this to null since that means it is uninitialized
        $this->collClientesRelatedByIdempleadooperacionesPartial = null;

        return $this;
    }

    /**
     * reset is the collClientesRelatedByIdempleadooperaciones collection loaded partially
     *
     * @return void
     */
    public function resetPartialClientesRelatedByIdempleadooperaciones($v = true)
    {
        $this->collClientesRelatedByIdempleadooperacionesPartial = $v;
    }

    /**
     * Initializes the collClientesRelatedByIdempleadooperaciones collection.
     *
     * By default this just sets the collClientesRelatedByIdempleadooperaciones collection to an empty array (like clearcollClientesRelatedByIdempleadooperaciones());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClientesRelatedByIdempleadooperaciones($overrideExisting = true)
    {
        if (null !== $this->collClientesRelatedByIdempleadooperaciones && !$overrideExisting) {
            return;
        }
        $this->collClientesRelatedByIdempleadooperaciones = new PropelObjectCollection();
        $this->collClientesRelatedByIdempleadooperaciones->setModel('Cliente');
    }

    /**
     * Gets an array of Cliente objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cliente[] List of Cliente objects
     * @throws PropelException
     */
    public function getClientesRelatedByIdempleadooperaciones($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClientesRelatedByIdempleadooperacionesPartial && !$this->isNew();
        if (null === $this->collClientesRelatedByIdempleadooperaciones || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClientesRelatedByIdempleadooperaciones) {
                // return empty collection
                $this->initClientesRelatedByIdempleadooperaciones();
            } else {
                $collClientesRelatedByIdempleadooperaciones = ClienteQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadooperaciones($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClientesRelatedByIdempleadooperacionesPartial && count($collClientesRelatedByIdempleadooperaciones)) {
                      $this->initClientesRelatedByIdempleadooperaciones(false);

                      foreach ($collClientesRelatedByIdempleadooperaciones as $obj) {
                        if (false == $this->collClientesRelatedByIdempleadooperaciones->contains($obj)) {
                          $this->collClientesRelatedByIdempleadooperaciones->append($obj);
                        }
                      }

                      $this->collClientesRelatedByIdempleadooperacionesPartial = true;
                    }

                    $collClientesRelatedByIdempleadooperaciones->getInternalIterator()->rewind();

                    return $collClientesRelatedByIdempleadooperaciones;
                }

                if ($partial && $this->collClientesRelatedByIdempleadooperaciones) {
                    foreach ($this->collClientesRelatedByIdempleadooperaciones as $obj) {
                        if ($obj->isNew()) {
                            $collClientesRelatedByIdempleadooperaciones[] = $obj;
                        }
                    }
                }

                $this->collClientesRelatedByIdempleadooperaciones = $collClientesRelatedByIdempleadooperaciones;
                $this->collClientesRelatedByIdempleadooperacionesPartial = false;
            }
        }

        return $this->collClientesRelatedByIdempleadooperaciones;
    }

    /**
     * Sets a collection of ClienteRelatedByIdempleadooperaciones objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clientesRelatedByIdempleadooperaciones A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setClientesRelatedByIdempleadooperaciones(PropelCollection $clientesRelatedByIdempleadooperaciones, PropelPDO $con = null)
    {
        $clientesRelatedByIdempleadooperacionesToDelete = $this->getClientesRelatedByIdempleadooperaciones(new Criteria(), $con)->diff($clientesRelatedByIdempleadooperaciones);


        $this->clientesRelatedByIdempleadooperacionesScheduledForDeletion = $clientesRelatedByIdempleadooperacionesToDelete;

        foreach ($clientesRelatedByIdempleadooperacionesToDelete as $clienteRelatedByIdempleadooperacionesRemoved) {
            $clienteRelatedByIdempleadooperacionesRemoved->setEmpleadoRelatedByIdempleadooperaciones(null);
        }

        $this->collClientesRelatedByIdempleadooperaciones = null;
        foreach ($clientesRelatedByIdempleadooperaciones as $clienteRelatedByIdempleadooperaciones) {
            $this->addClienteRelatedByIdempleadooperaciones($clienteRelatedByIdempleadooperaciones);
        }

        $this->collClientesRelatedByIdempleadooperaciones = $clientesRelatedByIdempleadooperaciones;
        $this->collClientesRelatedByIdempleadooperacionesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cliente objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cliente objects.
     * @throws PropelException
     */
    public function countClientesRelatedByIdempleadooperaciones(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClientesRelatedByIdempleadooperacionesPartial && !$this->isNew();
        if (null === $this->collClientesRelatedByIdempleadooperaciones || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClientesRelatedByIdempleadooperaciones) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClientesRelatedByIdempleadooperaciones());
            }
            $query = ClienteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadooperaciones($this)
                ->count($con);
        }

        return count($this->collClientesRelatedByIdempleadooperaciones);
    }

    /**
     * Method called to associate a Cliente object to this object
     * through the Cliente foreign key attribute.
     *
     * @param    Cliente $l Cliente
     * @return Empleado The current object (for fluent API support)
     */
    public function addClienteRelatedByIdempleadooperaciones(Cliente $l)
    {
        if ($this->collClientesRelatedByIdempleadooperaciones === null) {
            $this->initClientesRelatedByIdempleadooperaciones();
            $this->collClientesRelatedByIdempleadooperacionesPartial = true;
        }

        if (!in_array($l, $this->collClientesRelatedByIdempleadooperaciones->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClienteRelatedByIdempleadooperaciones($l);

            if ($this->clientesRelatedByIdempleadooperacionesScheduledForDeletion and $this->clientesRelatedByIdempleadooperacionesScheduledForDeletion->contains($l)) {
                $this->clientesRelatedByIdempleadooperacionesScheduledForDeletion->remove($this->clientesRelatedByIdempleadooperacionesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ClienteRelatedByIdempleadooperaciones $clienteRelatedByIdempleadooperaciones The clienteRelatedByIdempleadooperaciones object to add.
     */
    protected function doAddClienteRelatedByIdempleadooperaciones($clienteRelatedByIdempleadooperaciones)
    {
        $this->collClientesRelatedByIdempleadooperaciones[]= $clienteRelatedByIdempleadooperaciones;
        $clienteRelatedByIdempleadooperaciones->setEmpleadoRelatedByIdempleadooperaciones($this);
    }

    /**
     * @param	ClienteRelatedByIdempleadooperaciones $clienteRelatedByIdempleadooperaciones The clienteRelatedByIdempleadooperaciones object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeClienteRelatedByIdempleadooperaciones($clienteRelatedByIdempleadooperaciones)
    {
        if ($this->getClientesRelatedByIdempleadooperaciones()->contains($clienteRelatedByIdempleadooperaciones)) {
            $this->collClientesRelatedByIdempleadooperaciones->remove($this->collClientesRelatedByIdempleadooperaciones->search($clienteRelatedByIdempleadooperaciones));
            if (null === $this->clientesRelatedByIdempleadooperacionesScheduledForDeletion) {
                $this->clientesRelatedByIdempleadooperacionesScheduledForDeletion = clone $this->collClientesRelatedByIdempleadooperaciones;
                $this->clientesRelatedByIdempleadooperacionesScheduledForDeletion->clear();
            }
            $this->clientesRelatedByIdempleadooperacionesScheduledForDeletion[]= $clienteRelatedByIdempleadooperaciones;
            $clienteRelatedByIdempleadooperaciones->setEmpleadoRelatedByIdempleadooperaciones(null);
        }

        return $this;
    }

    /**
     * Clears out the collExpedientearchivos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addExpedientearchivos()
     */
    public function clearExpedientearchivos()
    {
        $this->collExpedientearchivos = null; // important to set this to null since that means it is uninitialized
        $this->collExpedientearchivosPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedientearchivos collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedientearchivos($v = true)
    {
        $this->collExpedientearchivosPartial = $v;
    }

    /**
     * Initializes the collExpedientearchivos collection.
     *
     * By default this just sets the collExpedientearchivos collection to an empty array (like clearcollExpedientearchivos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedientearchivos($overrideExisting = true)
    {
        if (null !== $this->collExpedientearchivos && !$overrideExisting) {
            return;
        }
        $this->collExpedientearchivos = new PropelObjectCollection();
        $this->collExpedientearchivos->setModel('Expedientearchivo');
    }

    /**
     * Gets an array of Expedientearchivo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Expedientearchivo[] List of Expedientearchivo objects
     * @throws PropelException
     */
    public function getExpedientearchivos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedientearchivosPartial && !$this->isNew();
        if (null === $this->collExpedientearchivos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedientearchivos) {
                // return empty collection
                $this->initExpedientearchivos();
            } else {
                $collExpedientearchivos = ExpedientearchivoQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedientearchivosPartial && count($collExpedientearchivos)) {
                      $this->initExpedientearchivos(false);

                      foreach ($collExpedientearchivos as $obj) {
                        if (false == $this->collExpedientearchivos->contains($obj)) {
                          $this->collExpedientearchivos->append($obj);
                        }
                      }

                      $this->collExpedientearchivosPartial = true;
                    }

                    $collExpedientearchivos->getInternalIterator()->rewind();

                    return $collExpedientearchivos;
                }

                if ($partial && $this->collExpedientearchivos) {
                    foreach ($this->collExpedientearchivos as $obj) {
                        if ($obj->isNew()) {
                            $collExpedientearchivos[] = $obj;
                        }
                    }
                }

                $this->collExpedientearchivos = $collExpedientearchivos;
                $this->collExpedientearchivosPartial = false;
            }
        }

        return $this->collExpedientearchivos;
    }

    /**
     * Sets a collection of Expedientearchivo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedientearchivos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setExpedientearchivos(PropelCollection $expedientearchivos, PropelPDO $con = null)
    {
        $expedientearchivosToDelete = $this->getExpedientearchivos(new Criteria(), $con)->diff($expedientearchivos);


        $this->expedientearchivosScheduledForDeletion = $expedientearchivosToDelete;

        foreach ($expedientearchivosToDelete as $expedientearchivoRemoved) {
            $expedientearchivoRemoved->setEmpleado(null);
        }

        $this->collExpedientearchivos = null;
        foreach ($expedientearchivos as $expedientearchivo) {
            $this->addExpedientearchivo($expedientearchivo);
        }

        $this->collExpedientearchivos = $expedientearchivos;
        $this->collExpedientearchivosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Expedientearchivo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Expedientearchivo objects.
     * @throws PropelException
     */
    public function countExpedientearchivos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedientearchivosPartial && !$this->isNew();
        if (null === $this->collExpedientearchivos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedientearchivos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExpedientearchivos());
            }
            $query = ExpedientearchivoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collExpedientearchivos);
    }

    /**
     * Method called to associate a Expedientearchivo object to this object
     * through the Expedientearchivo foreign key attribute.
     *
     * @param    Expedientearchivo $l Expedientearchivo
     * @return Empleado The current object (for fluent API support)
     */
    public function addExpedientearchivo(Expedientearchivo $l)
    {
        if ($this->collExpedientearchivos === null) {
            $this->initExpedientearchivos();
            $this->collExpedientearchivosPartial = true;
        }

        if (!in_array($l, $this->collExpedientearchivos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpedientearchivo($l);

            if ($this->expedientearchivosScheduledForDeletion and $this->expedientearchivosScheduledForDeletion->contains($l)) {
                $this->expedientearchivosScheduledForDeletion->remove($this->expedientearchivosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Expedientearchivo $expedientearchivo The expedientearchivo object to add.
     */
    protected function doAddExpedientearchivo($expedientearchivo)
    {
        $this->collExpedientearchivos[]= $expedientearchivo;
        $expedientearchivo->setEmpleado($this);
    }

    /**
     * @param	Expedientearchivo $expedientearchivo The expedientearchivo object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeExpedientearchivo($expedientearchivo)
    {
        if ($this->getExpedientearchivos()->contains($expedientearchivo)) {
            $this->collExpedientearchivos->remove($this->collExpedientearchivos->search($expedientearchivo));
            if (null === $this->expedientearchivosScheduledForDeletion) {
                $this->expedientearchivosScheduledForDeletion = clone $this->collExpedientearchivos;
                $this->expedientearchivosScheduledForDeletion->clear();
            }
            $this->expedientearchivosScheduledForDeletion[]= $expedientearchivo;
            $expedientearchivo->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Expedientearchivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedientearchivo[] List of Expedientearchivo objects
     */
    public function getExpedientearchivosJoinExpediente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedientearchivoQuery::create(null, $criteria);
        $query->joinWith('Expediente', $join_behavior);

        return $this->getExpedientearchivos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idempleado = null;
        $this->empleado_nombre = null;
        $this->empleado_apellidopaterno = null;
        $this->empleado_apallidomaterno = null;
        $this->empleado_email = null;
        $this->empleado_password = null;
        $this->empleado_celular = null;
        $this->empleado_telefono = null;
        $this->empleado_calle = null;
        $this->empleado_numero = null;
        $this->empleado_interior = null;
        $this->empleado_colonia = null;
        $this->empleado_codigopostal = null;
        $this->empleado_ciudad = null;
        $this->empleado_estado = null;
        $this->empleado_nss = null;
        $this->empleado_rfc = null;
        $this->empleado_iniciocontrato = null;
        $this->empleado_nombrecontacto = null;
        $this->empleado_telefonocontacto = null;
        $this->empleado_estatus = null;
        $this->empleado_rol = null;
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
            if ($this->collClientesRelatedByIdempleadocomercial) {
                foreach ($this->collClientesRelatedByIdempleadocomercial as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collClientesRelatedByIdempleadooperaciones) {
                foreach ($this->collClientesRelatedByIdempleadooperaciones as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExpedientearchivos) {
                foreach ($this->collExpedientearchivos as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collClientesRelatedByIdempleadocomercial instanceof PropelCollection) {
            $this->collClientesRelatedByIdempleadocomercial->clearIterator();
        }
        $this->collClientesRelatedByIdempleadocomercial = null;
        if ($this->collClientesRelatedByIdempleadooperaciones instanceof PropelCollection) {
            $this->collClientesRelatedByIdempleadooperaciones->clearIterator();
        }
        $this->collClientesRelatedByIdempleadooperaciones = null;
        if ($this->collExpedientearchivos instanceof PropelCollection) {
            $this->collExpedientearchivos->clearIterator();
        }
        $this->collExpedientearchivos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EmpleadoPeer::DEFAULT_STRING_FORMAT);
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
